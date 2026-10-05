<?php

namespace App\Entity;

use App\Repository\PartidoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PartidoRepository::class)]
class Partido
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $par_id = null;

    #[ORM\Column]
    private ?int $par_visitante = null;

    #[ORM\Column]
    private ?int $par_local = null;

    #[ORM\Column]
    private ?\DateTime $par_fecha = null;

    #[ORM\Column(length: 255)]
    private ?string $par_estadio = null;

    #[ORM\Column(length: 1)]
    private ?string $par_estado = null;

    #[ORM\Column(length: 35)]
    private ?string $par_usuario_crea = null;

    #[ORM\Column]
    private ?\DateTime $par_fecha_crea = null;

    public function getParId(): ?int
    {
        return $this->par_id;
    }

    public function getParVisitante(): ?int
    {
        return $this->par_visitante;
    }

    public function setParVisitante(int $par_visitante): static
    {
        $this->par_visitante = $par_visitante;

        return $this;
    }

    public function getParLocal(): ?int
    {
        return $this->par_local;
    }

    public function setParLocal(int $par_local): static
    {
        $this->par_local = $par_local;

        return $this;
    }

    public function getParFecha(): ?\DateTime
    {
        return $this->par_fecha;
    }

    public function setParFecha(\DateTime $par_fecha): static
    {
        $this->par_fecha = $par_fecha;

        return $this;
    }

    public function getParEstadio(): ?string
    {
        return $this->par_estadio;
    }

    public function setParEstadio(string $par_estadio): static
    {
        $this->par_estadio = $par_estadio;

        return $this;
    }

    public function getParEstado(): ?string
    {
        return $this->par_estado;
    }

    public function setParEstado(string $par_estado): static
    {
        $this->par_estado = $par_estado;

        return $this;
    }

    public function getParUsuarioCrea(): ?string
    {
        return $this->par_usuario_crea;
    }

    public function setParUsuarioCrea(string $par_usuario_crea): static
    {
        $this->par_usuario_crea = $par_usuario_crea;

        return $this;
    }

    public function getParFechaCrea(): ?\DateTime
    {
        return $this->par_fecha_crea;
    }

    public function setParFechaCrea(\DateTime $par_fecha_crea): static
    {
        $this->par_fecha_crea = $par_fecha_crea;

        return $this;
    }
}
