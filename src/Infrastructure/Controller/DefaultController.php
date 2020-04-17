<?php

namespace App\Infrastructure\Controller;

use App\Domain\BookingRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class DefaultController
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

        return new JsonResponse($booking->__toArray());
    }
}
