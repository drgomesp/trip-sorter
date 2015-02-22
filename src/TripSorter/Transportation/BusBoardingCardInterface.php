<?php

namespace TripSorter\Transportation;

use TripSorter\Destination\DestinationInterface;

interface BusBoardingCardInterface
{
    /**
     * @param \TripSorter\Destination\DestinationInterface $from
     * @param \TripSorter\Destination\DestinationInterface $to
     */
    public function __construct(DestinationInterface $from, DestinationInterface $to);
}
