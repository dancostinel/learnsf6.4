<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class PhpInvokableRouteController extends AbstractController
{
    public function __invoke(): JsonResponse
    {
        return new JsonResponse(['route' => 'php __invoke() route']);
    }
}
