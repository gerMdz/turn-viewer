<?php

namespace App\Entity;

use App\Repository\TurnoRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

#[ORM\Entity(repositoryClass: TurnoRepository::class)]
class Turno
{
    #[ORM\Id]
    #[ORM\CustomIdGenerator]
    #[ORM\Column(type: 'uuid', unique: true)]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $state;

    public function getId(): ?Uuid
    {
        return $this->id;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }
}
