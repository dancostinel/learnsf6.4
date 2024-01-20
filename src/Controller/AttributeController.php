<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class AttributeController extends AbstractController
{
    #[Route('/attribute', name: 'route_attribute', methods: ['GET'])]
    public function test(): JsonResponse
    {
        return new JsonResponse(['route' => 'attribute']);
    }
}
