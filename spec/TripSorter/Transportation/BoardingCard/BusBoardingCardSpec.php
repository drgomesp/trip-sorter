<?php

namespace spec\TripSorter\Transportation\BoardingCard;

use PhpSpec\ObjectBehavior;
use TripSorter\Destination\DestinationInterface;

class BusBoardingCardSpec extends ObjectBehavior
{
    public function let(DestinationInterface $from, DestinationInterface $to)
    {
        $this->beConstructedWith($from, $to);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType("TripSorter\\Transportation\\BoardingCard\\BusBoardingCard");
        $this->shouldHaveType("TripSorter\\Transportation\\AbstractBoardingCard");
        $this->shouldImplement("TripSorter\\Transportation\\BoardingCardInterface");
        $this->shouldImplement("TripSorter\\Transportation\\BusBoardingCardInterface");
    }

    public function it_should_be_printable_in_human_readable_form(
        DestinationInterface $from,
        DestinationInterface $to
    ) {
        $from->__toString()->willReturn("Barcelona");
        $to->__toString()->willReturn("Gerona Airport");

        $this->__toString()->shouldBe("Take a bus from Barcelona to Gerona Airport. No seat assignment.");
    }
}
