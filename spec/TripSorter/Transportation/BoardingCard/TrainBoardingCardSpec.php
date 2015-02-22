<?php

namespace spec\TripSorter\Transportation\BoardingCard;

use PhpSpec\ObjectBehavior;
use TripSorter\Destination\DestinationInterface;

class TrainBoardingCardSpec extends ObjectBehavior
{
    public function let(DestinationInterface $from, DestinationInterface $to)
    {
        $this->beConstructedWith($from, $to, "78A", "45B");
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType("TripSorter\\Transportation\\BoardingCard\\TrainBoardingCard");
        $this->shouldHaveType("TripSorter\\Transportation\\AbstractBoardingCard");
        $this->shouldImplement("TripSorter\\Transportation\\BoardingCardInterface");
        $this->shouldImplement("TripSorter\\Transportation\\TrainBoardingCardInterface");
    }

    public function it_should_be_printable_in_human_readable_form(
        DestinationInterface $from,
        DestinationInterface $to
    ) {
        $from->__toString()->willReturn("Madrid");
        $to->__toString()->willReturn("Barcelona");

        $this->__toString()->shouldBe("Take train 78A (seat 45B) from Madrid to Barcelona.");
    }
}
