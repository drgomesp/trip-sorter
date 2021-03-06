<?php

namespace TripSorter;

use TripSorter\Transportation\BoardingCardInterface;

class TripSorter
{
    public function sort(array $boardingCards)
    {
        $sorted = [array_pop($boardingCards)];

        while (count($boardingCards) > 0) {
            foreach ($boardingCards as $key => $card) {
                if ( ! $card instanceof BoardingCardInterface) {
                    unset($boardingCards[$key]);
                    continue;
                }

                if (end($sorted)->getTo()->__toString() === $card->getFrom()->__toString()) {
                    array_push($sorted, $card);
                     unset($boardingCards[$key]);

                } elseif (reset($sorted)->getFrom()->__toString() === $card->getTo()->__toString()) {
                    array_unshift($sorted, $card);
                    unset($boardingCards[$key]);
                }
            }
        }

        return $sorted;
    }
}
