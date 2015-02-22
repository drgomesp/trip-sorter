<?php

namespace TripSorter\Transportation;

use TripSorter\Destination\DestinationInterface;

class BoardingCard implements BoardingCardInterface
{
    /**
     * @var \TripSorter\Destination\DestinationInterface
     */
    protected $from;

    /**
     * @var \TripSorter\Destination\DestinationInterface
     */
    protected $to;

    /**
     * @param \TripSorter\Destination\DestinationInterface $from
     * @param \TripSorter\Destination\DestinationInterface $to
     */
    public function __construct(DestinationInterface $from, DestinationInterface $to)
    {
        $this->from = $from;
        $this->to   = $to;
    }
}
