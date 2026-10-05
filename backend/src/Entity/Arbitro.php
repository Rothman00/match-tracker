<?php

namespace App\Entity;

use App\Repository\ArbitroRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArbitroRepository::class)]
class Arbitro
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $arb_id = null;

    #[ORM\Column(length: 255)]
    private ?string $arb_nombre = null;

    #[ORM\Column(length: 100)]
    private ?string $arb_categoria = null;

    #[ORM\Column(length: 100)]
    private ?string $arb_funcion = null;

    #[ORM\Column(length: 1)]
    private ?string $arb_estado = null;

    #[ORM\Column(length: 35)]
    private ?string $arb_usuario_crea = null;

    #[ORM\Column]
    private ?\DateTime $arb_fecha_crea = null;

    public function getArbId(): ?int
    {
        return $this->arb_id;
    }

    public function getArbNombre(): ?string
    {
        return $this->arb_nombre;
    }

    public function setArbNombre(string $arb_nombre): static
    {
        $this->arb_nombre = $arb_nombre;

        return $this;
    }

    public function getArbCategoria(): ?string
    {
        return $this->arb_categoria;
    }

    public function setArbCategoria(string $arb_categoria): static
    {
        $this->arb_categoria = $arb_categoria;

        return $this;
    }

    public function getArbFuncion(): ?string
    {
        return $this->arb_funcion;
    }

    public function setArbFuncion(string $arb_funcion): static
    {
        $this->arb_funcion = $arb_funcion;

        return $this;
    }

    public function getArbEstado(): ?string
    {
        return $this->arb_estado;
    }

    public function setArbEstado(string $arb_estado): static
    {
        $this->arb_estado = $arb_estado;

        return $this;
    }

    public function getArbUsuarioCrea(): ?string
    {
        return $this->arb_usuario_crea;
    }

    public function setArbUsuarioCrea(string $arb_usuario_crea): static
    {
        $this->arb_usuario_crea = $arb_usuario_crea;

        return $this;
    }

    public function getArbFechaCrea(): ?\DateTime
    {
        return $this->arb_fecha_crea;
    }

    public function setArbFechaCrea(\DateTime $arb_fecha_crea): static
    {
        $this->arb_fecha_crea = $arb_fecha_crea;

        return $this;
    }
}
