<?php

namespace spec\TripSorter\Transportation;

use PhpSpec\ObjectBehavior;
use TripSorter\Destination\DestinationInterface;

class BoardingCardSpec extends ObjectBehavior
{
    public function let(DestinationInterface $from, DestinationInterface $to)
    {
        $this->beConstructedWith($from, $to);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType("TripSorter\\Transportation\\BoardingCard");
        $this->shouldImplement("TripSorter\\Transportation\\BoardingCardInterface");
    }
}
