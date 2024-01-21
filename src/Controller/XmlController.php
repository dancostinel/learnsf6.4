<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class XmlController extends AbstractController
{
    public function testXmlRoute(): JsonResponse
    {
        return new JsonResponse(['route' => 'xml']);
    }
}
