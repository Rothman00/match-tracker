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
    private ?\DateTime $par_fecha = null;

    #[ORM\Column(length: 255)]
    private ?string $par_estadio = null;

    #[ORM\Column(length: 1)]
    private ?string $par_estado = null;

    #[ORM\Column(length: 35)]
    private ?string $par_usuario_crea = null;

    #[ORM\Column]
    private ?\DateTime $par_fecha_crea = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(name: 'par_local', referencedColumnName: 'equ_id', nullable: false)]
    private ?Equipo $equipoLocal = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(name: 'par_visitante', referencedColumnName: 'equ_id', nullable: false)]
    private ?Equipo $equipoVisitante = null;

    public function getParId(): ?int
    {
        return $this->par_id;
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

    public function getEquipoLocal(): ?Equipo
    {
        return $this->equipoLocal;
    }

    public function setEquipoLocal(Equipo $equipoLocal): static
    {
        $this->equipoLocal = $equipoLocal;

        return $this;
    }

    public function getEquipoVisitante(): ?Equipo
    {
        return $this->equipoVisitante;
    }

    public function setEquipoVisitante(Equipo $equipoVisitante): static
    {
        $this->equipoVisitante = $equipoVisitante;

        return $this;
    }
}
