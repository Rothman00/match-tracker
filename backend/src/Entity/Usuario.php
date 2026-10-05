<?php

namespace App\Entity;

use App\Repository\UsuarioRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity(repositoryClass: UsuarioRepository::class)]
class Usuario implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $usu_id = null;

    #[ORM\Column(length: 35, unique: true)]
    private ?string $usu_usuario = null;

    #[ORM\Column(length: 255)]
    private ?string $usu_password = null;

    #[ORM\Column(length: 1)]
    private ?string $usu_estado = null;

    public function getUsuId(): ?int
    {
        return $this->usu_id;
    }

    public function getUsuUsuario(): ?string
    {
        return $this->usu_usuario;
    }

    public function setUsuUsuario(string $usu_usuario): static
    {
        $this->usu_usuario = $usu_usuario;

        return $this;
    }

    public function getUsuPassword(): ?string
    {
        return $this->usu_password;
    }

    public function setUsuPassword(string $usu_password): static
    {
        $this->usu_password = $usu_password;

        return $this;
    }

    public function getUsuEstado(): ?string
    {
        return $this->usu_estado;
    }

    public function setUsuEstado(string $usu_estado): static
    {
        $this->usu_estado = $usu_estado;

        return $this;
    }

    public function getUserIdentifier(): string
    {
        return $this->usu_usuario;
    }

    public function getPassword(): ?string
    {
        return $this->usu_password;
    }

    public function getRoles(): array
    {
        return ['ROLE_USER'];
    }

    public function eraseCredentials(): void
    {
    }
}