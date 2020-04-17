<?php

namespace App\Infrastructure\Controller;

use App\Domain\BookingRepository;
use Symfony\Component\HttpFoundation\Response;

class BookingController
{
    /** @var BookingRepository */
    private $repository;

    public function __construct(BookingRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke()
    {
        $booking = $this->repository->generateBooking();

        return new Response("ok");
    }
}
