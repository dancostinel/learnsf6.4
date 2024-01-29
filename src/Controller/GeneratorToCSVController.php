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
        $start = microtime(true);
        $result = 'INSERT INTO test (field1, field2, field3, field4, field5, field6, field7, field8, field9, field10) VALUES ';
        foreach ($this->generate() as $item) {
            $field9 = (new \DateTimeImmutable())->format('Y-m-d H:i:s');
            $field2 = 'field2_'.$item;
            $field5 = 255;
            $field6 = $item;
            $field7 = 99.33;
            $field10 = 123.45;
            if ($item % 100 === 0) {
                $field2 = null;
                $field5 = null;
                $field6 = null;
                $field7 = null;
                $field10 = null;
            }
            $result .= '(
                "field1_'.$item.'",
                "'.$field2.'",
                3,
                '.$item.',
                '.$field5.',
                '.$field6.',
                '.$field7.',
                \'{"test": "'.$item.'"}\',
                "'.$field9.'",
                '.$field10.
            '),';
        }
        $result .= '("field1_0","field2_0",3,0,0,0,0.0,\'{"test": "0"}\',"'.(new \DateTimeImmutable())->format('Y-m-d H:i:s').'",0.00);';
        file_put_contents('data.csv', $result);
        $end = microtime(true);

        return new JsonResponse(['test' => __METHOD__, 'tool' => sprintf('%2f', $end-$start)]);
    }

    public function generate(): \Generator
    {
        for ($i = 1; $i <= 1000; $i++) {
            yield $i;
        }
    }
}
