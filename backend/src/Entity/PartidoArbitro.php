<?php

namespace App\Entity;

use App\Repository\PartidoArbitroRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PartidoArbitroRepository::class)]
#[ORM\Table(name: 'partido_arbitro')]
#[ORM\UniqueConstraint(
    name: 'unique_partido_arbitro',
    columns: ['pab_partido', 'pab_arbitro']
)]
class PartidoArbitro
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $pab_id = null;

    #[ORM\Column(length: 35)]
    private ?string $pab_usuario_crea = null;

    #[ORM\Column]
    private ?\DateTime $pab_fecha_crea = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(name: 'pab_partido', referencedColumnName: 'par_id', nullable: false)]
    private ?Partido $partido = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(name: 'pab_arbitro', referencedColumnName: 'arb_id', nullable: false)]
    private ?Arbitro $arbitro = null;

    public function getPabId(): ?int
    {
        return $this->pab_id;
    }

    public function getPabUsuarioCrea(): ?string
    {
        return $this->pab_usuario_crea;
    }

    public function setPabUsuarioCrea(string $pab_usuario_crea): static
    {
        $this->pab_usuario_crea = $pab_usuario_crea;

        return $this;
    }

    public function getPabFechaCrea(): ?\DateTime
    {
        return $this->pab_fecha_crea;
    }

    public function setPabFechaCrea(\DateTime $pab_fecha_crea): static
    {
        $this->pab_fecha_crea = $pab_fecha_crea;

        return $this;
    }

    public function getPartido(): ?Partido
    {
        return $this->partido;
    }

    public function setPartido(Partido $partido): static
    {
        $this->partido = $partido;

        return $this;
    }

    public function getArbitro(): ?Arbitro
    {
        return $this->arbitro;
    }

    public function setArbitro(Arbitro $arbitro): static
    {
        $this->arbitro = $arbitro;

        return $this;
    }
}
