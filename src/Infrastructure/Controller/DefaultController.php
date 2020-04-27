<?php

namespace App\Infrastructure\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class DefaultController
{

    public function __construct()
    {
    }

    public function __invoke()
    {
        // 
        return new JsonResponse([]);
    }
}
