<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class PhpController extends AbstractController
{
    public function testPhpRoute(): JsonResponse
    {
        return new JsonResponse(['route' => 'php']);
    }
}
