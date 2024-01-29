<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

class GeneratorToCSVController extends AbstractController
{
    #[Route('/generator-to-csv')]
    public function index(SerializerInterface $serializer): JsonResponse
    {
/*
INSERT INTO test (field1, field2, field3, field4, field5, field6, field7, field8, field9, field10) VALUES
(),
(),
()
;
 */
        $result = 'INSERT INTO test (field1, field2, field3, field4, field5, field6, field7, field8, field9, field10) VALUES ';
        foreach (range(1, 10) as $item) {
            $result .= '('.$item.','.$item.','.$item.','.$item.','.$item.','.$item.','.$item.','.$item.','.$item.','.$item.'),';
        }
        $result .= '(11,11,11,11,11,11,11,11,11,11);';

        return new JsonResponse(['test' => __METHOD__, 'result' => $result]);
    }
}
