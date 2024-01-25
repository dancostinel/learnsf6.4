<?php

namespace App\Entity;

use App\Repository\Test2Repository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Test2Repository::class)]
class Test2
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $field1 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $field2 = null;

    #[ORM\Column]
    private ?bool $field3 = null;

    #[ORM\Column]
    private ?int $field4 = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $field5 = null;

    #[ORM\Column(type: Types::BIGINT)]
    private ?string $field6 = null;

    #[ORM\Column]
    private ?float $field7 = null;

    #[ORM\ManyToOne(inversedBy: 'test2s')]
    private ?Test $field8 = null;

    #[ORM\Column]
    private array $field9 = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getField1(): ?string
    {
        return $this->field1;
    }

    public function setField1(string $field1): static
    {
        $this->field1 = $field1;

        return $this;
    }

    public function getField2(): ?string
    {
        return $this->field2;
    }

    public function setField2(string $field2): static
    {
        $this->field2 = $field2;

        return $this;
    }

    public function isField3(): ?bool
    {
        return $this->field3;
    }

    public function setField3(bool $field3): static
    {
        $this->field3 = $field3;

        return $this;
    }

    public function getField4(): ?int
    {
        return $this->field4;
    }

    public function setField4(int $field4): static
    {
        $this->field4 = $field4;

        return $this;
    }

    public function getField5(): ?int
    {
        return $this->field5;
    }

    public function setField5(int $field5): static
    {
        $this->field5 = $field5;

        return $this;
    }

    public function getField6(): ?string
    {
        return $this->field6;
    }

    public function setField6(string $field6): static
    {
        $this->field6 = $field6;

        return $this;
    }

    public function getField7(): ?float
    {
        return $this->field7;
    }

    public function setField7(float $field7): static
    {
        $this->field7 = $field7;

        return $this;
    }

    public function getField8(): ?Test
    {
        return $this->field8;
    }

    public function setField8(?Test $field8): static
    {
        $this->field8 = $field8;

        return $this;
    }

    public function getField9(): array
    {
        return $this->field9;
    }

    public function setField9(array $field9): static
    {
        $this->field9 = $field9;

        return $this;
    }
}
