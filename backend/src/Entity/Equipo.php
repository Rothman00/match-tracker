<?php

namespace App\Entity;

use App\Repository\EquipoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipoRepository::class)]
class Equipo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $equ_id = null;

    #[ORM\Column(length: 255)]
    private ?string $equ_nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $equ_ciudad = null;

    #[ORM\Column(length: 1)]
    private ?string $equ_estado = null;

    #[ORM\Column(length: 35)]
    private ?string $equ_usuario_crea = null;

    #[ORM\Column]
    private ?\DateTime $equ_fecha_crea = null;

    public function getEquId(): ?int
    {
        return $this->equ_id;
    }

    public function getEquNombre(): ?string
    {
        return $this->equ_nombre;
    }

    public function setEquNombre(string $equ_nombre): static
    {
        $this->equ_nombre = $equ_nombre;

        return $this;
    }

    public function getEquCiudad(): ?string
    {
        return $this->equ_ciudad;
    }

    public function setEquCiudad(string $equ_ciudad): static
    {
        $this->equ_ciudad = $equ_ciudad;

        return $this;
    }

    public function getEquEstado(): ?string
    {
        return $this->equ_estado;
    }

    public function setEquEstado(string $equ_estado): static
    {
        $this->equ_estado = $equ_estado;

        return $this;
    }

    public function getEquUsuarioCrea(): ?string
    {
        return $this->equ_usuario_crea;
    }

    public function setEquUsuarioCrea(string $equ_usuario_crea): static
    {
        $this->equ_usuario_crea = $equ_usuario_crea;

        return $this;
    }

    public function getEquFechaCrea(): ?\DateTime
    {
        return $this->equ_fecha_crea;
    }

    public function setEquFechaCrea(\DateTime $equ_fecha_crea): static
    {
        $this->equ_fecha_crea = $equ_fecha_crea;

        return $this;
    }
}
