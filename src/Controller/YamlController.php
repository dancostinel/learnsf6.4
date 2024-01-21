<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class YamlController extends AbstractController
{
    public function testYamlRoute(): JsonResponse
    {
        return new JsonResponse(['route' => 'yaml']);
    }
}
