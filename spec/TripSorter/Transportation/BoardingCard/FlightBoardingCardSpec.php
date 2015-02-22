<?php

namespace spec\TripSorter\Transportation\BoardingCard;

use PhpSpec\ObjectBehavior;
use TripSorter\Destination\DestinationInterface;

class FlightBoardingCardSpec extends ObjectBehavior
{
    public function let(DestinationInterface $from, DestinationInterface $to)
    {
        $this->beConstructedWith($from, $to, "25D", "Gate 22", "Baggage will we automatically transferred from your last leg.");
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType("TripSorter\\Transportation\\BoardingCard\\FlightBoardingCard");
        $this->shouldHaveType("TripSorter\\Transportation\\AbstractBoardingCard");
        $this->shouldImplement("TripSorter\\Transportation\\BoardingCardInterface");
        $this->shouldImplement("TripSorter\\Transportation\\FlightBoardingCardInterface");
    }
}
