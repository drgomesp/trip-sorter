<?php

namespace TripSorter\Transportation\BoardingCard;

use TripSorter\Transportation\AbstractBoardingCard;
use TripSorter\Transportation\BusBoardingCardInterface;

class BusBoardingCard extends AbstractBoardingCard implements BusBoardingCardInterface
{
    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return sprintf(
            "Take a bus from %s to %s. No seat assignment.",
            $this->from,
            $this->to
        );
    }
}
