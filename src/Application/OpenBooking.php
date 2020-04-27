<?php

namespace App\Application;

class OpenBooking
{
    /** @var string */
    private $trainId;

    public function __construct(string $trainId)
    {
        $this->trainId = $trainId;
    }

    public function getTrainId(): string
    {
        return $this->trainId;
    }
}
