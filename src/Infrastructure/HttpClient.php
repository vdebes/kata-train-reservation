<?php

namespace App\Infrastructure;

use Symfony\Component\HttpFoundation\Response;

class HttpClient
{
    public function generateBooking(): Response
    {
        return new Response('123');
    }
}
