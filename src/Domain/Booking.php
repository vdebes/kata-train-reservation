<?php

namespace App\Domain;

class Booking
{

    private $trainId;

    public function __construct($trainId)
    {
        $this->trainId = $trainId;
    }

    public function getTrainId(): string
    {
        return $this->trainId;
    }
}
