<?php

namespace App\Entity;

use App\Repository\TestRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TestRepository::class)]
class Test
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $field1 = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $field2 = null;

    #[ORM\Column]
    private ?bool $field3 = null;

    #[ORM\Column]
    private ?int $field4 = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $field5 = null;

    #[ORM\Column(type: Types::BIGINT, nullable: true)]
    private ?string $field6 = null;

    #[ORM\Column(nullable: true)]
    private ?float $field7 = null;

    #[ORM\Column]
    private array $field8 = [];

    #[ORM\Column]
    private ?\DateTimeImmutable $field9 = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 2, nullable: true)]
    private ?string $field10 = null;

    #[ORM\OneToMany(mappedBy: 'field8', targetEntity: Test2::class)]
    private Collection $test2s;

    public function __construct()
    {
        $this->test2s = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getField1(): ?string
    {
        return $this->field1;
    }

    public function setField1(string $field1): self
    {
        $this->field1 = $field1;

        return $this;
    }

    public function getField2(): ?string
    {
        return $this->field2;
    }

    public function setField2(?string $field2): self
    {
        $this->field2 = $field2;

        return $this;
    }

    public function isField3(): ?bool
    {
        return $this->field3;
    }

    public function setField3(bool $field3): self
    {
        $this->field3 = $field3;

        return $this;
    }

    public function getField4(): ?int
    {
        return $this->field4;
    }

    public function setField4(int $field4): self
    {
        $this->field4 = $field4;

        return $this;
    }

    public function getField5(): ?int
    {
        return $this->field5;
    }

    public function setField5(?int $field5): self
    {
        $this->field5 = $field5;

        return $this;
    }

    public function getField6(): ?string
    {
        return $this->field6;
    }

    public function setField6(?string $field6): self
    {
        $this->field6 = $field6;

        return $this;
    }

    public function getField7(): ?float
    {
        return $this->field7;
    }

    public function setField7(?float $field7): self
    {
        $this->field7 = $field7;

        return $this;
    }

    public function getField8(): array
    {
        return $this->field8;
    }

    public function setField8(array $field8): self
    {
        $this->field8 = $field8;

        return $this;
    }

    public function getField9(): ?\DateTimeImmutable
    {
        return $this->field9;
    }

    public function setField9(\DateTimeImmutable $field9): self
    {
        $this->field9 = $field9;

        return $this;
    }

    public function getField10(): ?string
    {
        return $this->field10;
    }

    public function setField10(?string $field10): self
    {
        $this->field10 = $field10;

        return $this;
    }

    /**
     * @return Collection<int, Test2>
     */
    public function getTest2s(): Collection
    {
        return $this->test2s;
    }

    public function addTest2(Test2 $test2): self
    {
        if (!$this->test2s->contains($test2)) {
            $this->test2s->add($test2);
            $test2->setField8($this);
        }

        return $this;
    }

    public function removeTest2(Test2 $test2): self
    {
        if ($this->test2s->removeElement($test2)) {
            // set the owning side to null (unless already changed)
            if ($test2->getField8() === $this) {
                $test2->setField8(null);
            }
        }

        return $this;
    }
}
