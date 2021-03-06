<?php

namespace TripSorter\Transportation;

use TripSorter\Destination\DestinationInterface;

interface FlightBoardingCardInterface
{
    /**
     * @param \TripSorter\Destination\DestinationInterface $from
     * @param \TripSorter\Destination\DestinationInterface $to
     * @param string $flight
     * @param string $gate
     * @param string $seat
     * @param string $luggageInformation
     */
    public function __construct(
        DestinationInterface $from,
        DestinationInterface $to,
        $flight,
        $gate,
        $seat,
        $luggageInformation
    );
}
