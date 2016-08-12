<?php

namespace Bolt\Extension\Twokings\UpdateFavs;

use Bolt\Extension\SimpleExtension;
use Silex\ControllerCollection;

/**
 * Update Favs extension class.
 *
 * @author Your Name <you@example.com>
 */
class UpdateFavsExtension extends SimpleExtension
{

    /**
     * {@inheritdoc}
     */
    protected function registerFrontendRoutes(ControllerCollection $collection)
    {
        $collection->match('/favorites', [$this, 'callbackFavorites']);
        $collection->match('/aggregate', [$this, 'callbackAggregate']);
    }

    public function callbackFavorites()
    {
        $app = $this->getContainer();

        $identifier = $app['request']->get('identifier');
        $favs = $app['request']->get('favs');

        dump($identifier);
        dump($favs);

        if (empty($favs) || empty($identifier)) {
            return "Nothing to process.";
        }

        // try to get an existing record for this item
        $record = $app['storage']->getContent(
            'favorites', [
                'identifier'       => $identifier,
                'returnsingle' => true,
            ]);

        if (!$record) {
            // New one.
            $record = $app['storage']->getContentObject('favorites');
            $new = true;
            // echo '<br> [NEW] ';
        } else {
            $new = false;
            // echo '<br> [UPD] ';
        }

        $values = [
            'identifier' => $identifier,
            'favorites'  => $favs
        ];

        $record->setValues($values);

        $id = $app['storage']->saveContent($record);

        // dump($values);

        return "OK";

    }

    public function callbackAggregate()
    {
        $app = $this->getContainer();

        $records = $app['storage']->getContent(
            'favorites', [
                'amount'       => 10000
            ]);

        $agg_favorites = [];

        foreach($records as $record) {
            $favs = split(',', $record->get('favorites'));
            foreach($favs as $fav) {
                $agg_favorites[ trim($fav) ]++;
            }
        }

        asort($agg_favorites);
        $agg_favorites = array_reverse($agg_favorites, true);

        // dump($agg_favorites);

        foreach($agg_favorites as $programmaID => $score) {
            $record = $app['storage']->getContent(
            'programmaonderdelen', [
                'id'       => $programmaID,
                'returnsingle' => true,
                'status' => '!'
            ]);

            if ($record == false) {
            // dump($record);
                dump($programmaID);
            } else {
                $record->setValue('favorites', $score);
                $app['storage']->saveContent($record);
            }

            printf("%s - %s<br>", $record->get('name'), $score);

        }


        return "<br>ok";

    }


}
