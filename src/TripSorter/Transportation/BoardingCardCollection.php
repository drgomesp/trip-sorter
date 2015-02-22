<?php

namespace TripSorter\Transportation;

class BoardingCardCollection implements \Countable, \IteratorAggregate
{
    /**
     * @var array
     */
    protected $elements;

    /**
     * @param array $elements
     */
    public function __construct(array $elements = [])
    {
        $this->elements = $elements;
    }

    public function add(BoardingCardInterface $boardingCard)
    {
        $this->elements[] =$boardingCard;
    }

    public function remove(BoardingCardInterface $boardingCard)
    {
        foreach ($this->elements as $key => $element) {
            if ($element === $boardingCard) {
                unset($this->elements[$key]);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->elements);
    }

    /**
     * {@inheritdoc}
     */
    public function count()
    {
        return count($this->elements);
    }
}
