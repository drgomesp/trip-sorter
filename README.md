<img align="right" width="400px" src="http://kosheronabudget.com/wp-content/uploads/2010/07/family-vacation.jpg" />

# TripSorter

## Table of Contents

1. [Introduction](#introduction)
  1. [Installation](#installation)
  2. [Running Specifications](#running-specifications)
2. [Architecture](#architecture)
  1. [Destinations](#destinations)
  2. [Boarding Cards](#boarding-cards)
  2. [Trip Sorter](#trip-sorter)

### Introduction

#### Installation

To install the TripSorter, simply run the composer install command from the root directory
of the project (make sure you have [Composer](http://getcomposer.org) installed):

```bash
php composer.phar install --prefer-dist
```

#### Running Specifications

To run the phpspec specifications, simply execute the following command from the root
directory of the project:

```bash
bin/phpspec run
```

### Architecture

#### Destinations

The basic interface of destinations is the following:

```php
interface DestinationInterface
{
    /**
     * Prints the destination in a human-readable form.
     *
     * @return string
     */
    public function __toString();
}
```

#### Boarding Cards

The basic interface of boarding cards is the following:

```php
interface BoardingCardInterface
{
    /**
     * @return \TripSorter\Destination\DestinationInterface
     */
    public function getFrom();

    /**
     * @return \TripSorter\Destination\DestinationInterface
     */
    public function getTo();
}
```

The architecture is also composed by special types of boarding cards:

- BusBoardingCardInterface
- FlightBoardingCardInterface
- TrainBoardingCardInterface

#### Trip Sorter

The class responsible for sorting an array of boarding cards is the `TripSorter`:

```php
class TripSorter
{
    public function sort(array $boardingCards)
    {
        $sorted = [array_pop($boardingCards)];

        while (count($boardingCards) > 0) {
            foreach ($boardingCards as $key => $card) {
                if ( ! $card instanceof BoardingCardInterface) {
                    unset($boardingCards[$key]);
                    continue;
                }

                if (end($sorted)->getTo()->__toString() === $card->getFrom()->__toString()) {
                    array_push($sorted, $card);
                } elseif (reset($sorted)->getFrom()->__toString() === $card->getTo()->__toString()) {
                    array_unshift($sorted, $card);
                }

                unset($boardingCards[$key]);
            }
        }

        return $sorted;
    }
}
```

by [Daniel Ribeiro](https://github.com/drgomesp).
