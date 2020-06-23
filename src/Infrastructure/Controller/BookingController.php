<?php

namespace App\Infrastructure\Controller;

use Symfony\Component\HttpFoundation\Response;

class BookingController
{
    public function __invoke(): Response
    {
        return new Response("book");
    }
}
