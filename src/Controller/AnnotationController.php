<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class AnnotationController extends AbstractController
{
    /**
     * @Route("/annotation", name="route_annotation", methods={"GET"})
     */
    public function testAnnotationRoute(): JsonResponse
    {
        return new JsonResponse(['route' => 'attribute']);
    }
}
