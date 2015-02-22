<?php

namespace TripSorter\Transportation;

use TripSorter\Destination\DestinationInterface;

abstract class AbstractBoardingCard implements BoardingCardInterface
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

    /**
     * {@inheritdoc}
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * {@inheritdoc}
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Prints out the boarding card in a human-readable form.
     *
     * @return string
     */
    abstract public function __toString();
}
