<?php

namespace spec\TripSorter\Transportation;

use PhpSpec\ObjectBehavior;
use TripSorter\Transportation\BoardingCardInterface;

class BoardingCardCollectionSpec extends ObjectBehavior
{
    public function let()
    {
        $elements = [];

        $this->beConstructedWith($elements);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType("TripSorter\\Transportation\\BoardingCardCollection");
        $this->shouldImplement("\\Countable");
        $this->shouldImplement("\\IteratorAggregate");
    }

    public function it_adds_boarding_cards_to_the_collection(BoardingCardInterface $boardingCard)
    {
        $this->add($boardingCard);

        $this->count()->shouldBe(1);
    }
}
