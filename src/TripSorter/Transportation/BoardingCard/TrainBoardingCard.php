<?php

namespace TripSorter\Transportation\BoardingCard;

use TripSorter\Destination\DestinationInterface;
use TripSorter\Transportation\AbstractBoardingCard;
use TripSorter\Transportation\TrainBoardingCardInterface;

class TrainBoardingCard extends AbstractBoardingCard implements TrainBoardingCardInterface
{
    /**
     * @var string
     */
    protected $train;

    /**
     * @var string
     */
    protected $seat;

    /**
     * {@inheritdoc}
     */
    public function __construct(
        DestinationInterface $from,
        DestinationInterface $to,
        $train,
        $seat
    ) {
        $this->train = $train;
        $this->seat  = $seat;

        parent::__construct($from, $to);
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return sprintf(
            "Take train %s (seat %s) from %s to %s.",
            $this->train,
            $this->seat,
            $this->from,
            $this->to
        );
    }
}
