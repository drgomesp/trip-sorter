<?php

namespace TripSorter\Transportation\BoardingCard;

use TripSorter\Destination\DestinationInterface;
use TripSorter\Transportation\AbstractBoardingCard;
use TripSorter\Transportation\BoardingCard;
use TripSorter\Transportation\FlightBoardingCardInterface;

class FlightBoardingCard extends AbstractBoardingCard implements FlightBoardingCardInterface
{
    /**
     * @var string
     */
    protected $flight;

    /**
     * @var string
     */
    protected $gate;

    /**
     * @var string
     */
    protected $seat;

    /**
     * @var string
     */
    protected $luggageInformation;

    /**
     * {@inheritdoc}
     */
    public function __construct(
        DestinationInterface $from,
        DestinationInterface $to,
        $flight,
        $gate,
        $seat,
        $luggageInformation
    ) {
        $this->flight             = $flight;
        $this->gate               = $gate;
        $this->seat               = $seat;
        $this->luggageInformation = $luggageInformation;

        parent::__construct($from, $to);
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return sprintf(
            "From %s, take flight %s to %s (Gate %s, seat %s). %s",
            $this->from,
            $this->flight,
            $this->to,
            $this->gate,
            $this->seat,
            $this->luggageInformation
        );
    }
}
