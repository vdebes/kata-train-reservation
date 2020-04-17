<?php

namespace App\Infrastructure;

use App\Domain\Booking;
use App\Domain\BookingRepository;

class HttpBookingRepository implements BookingRepository
{
    /** @var HttpClient */
    private $client;

    public function __construct(HttpClient $client)
    {
        $this->client = $client;
    }

    public function generateBooking(): Booking
    {
        $data = $this->client->generateBooking();

        return new Booking($data->getContent());
    }
}
