<?php

namespace TripSorter\Transportation;

use TripSorter\Destination\DestinationInterface;

interface TrainBoardingCardInterface
{
    /**
     * @param \TripSorter\Destination\DestinationInterface $from
     * @param \TripSorter\Destination\DestinationInterface $to
     * @param string $train
     * @param string $seat
     */
    public function __construct(
        DestinationInterface $from,
        DestinationInterface $to,
        $train,
        $seat
    );
}
