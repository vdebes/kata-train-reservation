<?php

declare(strict_types=1);

namespace App;

class Booking
{

    /**
     * @var string
     */
    private $uid;

    private $isConfirmed = false;

    public function __construct(string $uid)
    {
        $this->uid = $uid;
    }

    public function isConfirmed(): bool
    {
        return $this->isConfirmed;
    }
}
