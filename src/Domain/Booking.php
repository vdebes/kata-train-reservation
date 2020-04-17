<?php

declare(strict_types=1);

namespace App\Domain;

class Booking
{
    /** @var string */
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

    public function __toArray()
    {
        return [
            'uid' => $this->uid,
            'confirmed' => (int) $this->isConfirmed
        ];
    }
}
