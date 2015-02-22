<?php

namespace spec\TripSorter\Transportation\BoardingCard;

use PhpSpec\ObjectBehavior;
use TripSorter\Destination\DestinationInterface;

class FlightBoardingCardSpec extends ObjectBehavior
{
    public function let(DestinationInterface $from, DestinationInterface $to)
    {
        $this->beConstructedWith($from, $to, "SK22", "22", "7B", "Baggage will we automatically transferred from your last leg.");
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType("TripSorter\\Transportation\\BoardingCard\\FlightBoardingCard");
        $this->shouldHaveType("TripSorter\\Transportation\\AbstractBoardingCard");
        $this->shouldImplement("TripSorter\\Transportation\\BoardingCardInterface");
        $this->shouldImplement("TripSorter\\Transportation\\FlightBoardingCardInterface");
    }

    public function it_should_be_printable_in_human_readable_form(
        DestinationInterface $from,
        DestinationInterface $to
    ) {
        $from->__toString()->willReturn("Stockholm");
        $to->__toString()->willReturn("New York JFK");

        $this->__toString()->shouldBe("From Stockholm, take flight SK22 to New York JFK (Gate 22, seat 7B). Baggage will we automatically transferred from your last leg.");
    }
}
