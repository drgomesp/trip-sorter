<?php

namespace TripSorter\Transportation;

interface BoardingCardInterface
{
    /**
     * @return \TripSorter\Destination\DestinationInterface
     */
    public function getFrom();

    /**
     * @return \TripSorter\Destination\DestinationInterface
     */
    public function getTo();
}
