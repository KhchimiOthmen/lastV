<?php

namespace App\Entity;

use App\Repository\RolesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RolesRepository::class)
 */
class Roles
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=User::class, inversedBy="role")
     * @ORM\JoinColumn(nullable=true)
     */
    private $cin;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $role;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCin(): ?User
    {
        return $this->cin;
    }

    public function setCin(?User $cin): self
    {
        $this->cin = $cin;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function __toString()
    {
        return $this->role;
    }


}
