<?php

namespace spec\TripSorter\Destination;

use PhpSpec\ObjectBehavior;

class DestinationSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith("destination-name");
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType("TripSorter\\Destination\\Destination");
        $this->shouldImplement("TripSorter\\Destination\\DestinationInterface");
    }
}
