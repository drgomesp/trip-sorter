<?php

namespace spec\TripSorter;

use PhpSpec\ObjectBehavior;
use TripSorter\Destination\DestinationInterface;
use TripSorter\Transportation\BoardingCardCollection;
use TripSorter\Transportation\BoardingCardInterface;

class TripSorterSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType("TripSorter\\TripSorter");
    }

    public function it_should_sort_boarding_card_collection_correctly(
        BoardingCardInterface $card1,
        BoardingCardInterface $card2,
        BoardingCardInterface $card3,
        BoardingCardInterface $card4,
        DestinationInterface $from1,
        DestinationInterface $from2,
        DestinationInterface $from3,
        DestinationInterface $from4,
        DestinationInterface $to1,
        DestinationInterface $to2,
        DestinationInterface $to3,
        DestinationInterface $to4
    )
    {
        $card1->getFrom()->willReturn($from1);
        $from1->__toString()->willReturn("Madrid");
        $card1->getTo()->willReturn($to1);
        $to1->__toString()->willReturn("Barcelona");

        $card2->getFrom()->willReturn($from2);
        $from2->__toString()->willReturn("Barcelona");
        $card2->getTo()->willReturn($to2);
        $to2->__toString()->willReturn("Gerona Airport");

        $card3->getFrom()->willReturn($from3);
        $from3->__toString()->willReturn("Gerona Airport");
        $card3->getTo()->willReturn($to3);
        $to3->__toString()->willReturn("Stockholm");

        $card4->getFrom()->willReturn($from4);
        $from4->__toString()->willReturn("Stockholm");
        $card4->getTo()->willReturn($to4);
        $to4->__toString()->willReturn("New York JFK");

        // let's strip the invalid cards from the sorted array as well as sorting it
        $this->sort([$card4, $card3, $card2, "foo", $card1])->shouldBe([$card1, $card2, $card3, $card4]);
        $this->sort([$card3, $card1, $card4, "foo", $card2])->shouldBe([$card1, $card2, $card3, $card4]);
    }
}
