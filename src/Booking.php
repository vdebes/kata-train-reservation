<?php

namespace App;

class Booking
{
    /** @var int */
    private $seatsCount;

    public function __construct(int $seatsCount)
    {
        $this->seatsCount = $seatsCount;
    }
}
