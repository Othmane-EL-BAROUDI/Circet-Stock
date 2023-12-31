<?php

namespace App\Entity;

use App\Repository\RestitutionRepository;
use App\Entity\Affectation;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RestitutionRepository::class)
 */
class Restitution
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=affectation::class, inversedBy="affectation_id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $affectation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type_restitution;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;
    /**
     * @ORM\Column(type="boolean")
     */
    private $Accept;
    /**
     * @ORM\Column(type="boolean")
     */
    private $Visibility;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAffectation(): ?affectation
    {
        return $this->affectation;
    }

    public function setAffectation(?affectation $affectation): self
    {
        $this->affectation = $affectation;

        return $this;
    }

    public function getTypeRestitution(): ?string
    {
        return $this->type_restitution;
    }

    public function setTypeRestitution(string $type_restitution): self
    {
        $this->type_restitution = $type_restitution;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }
     public function getAccept(): ?bool
    {
        return $this->Accept;
    }

    public function setAccept(bool $Accept): self
    {
        $this->Accept = $Accept;

        return $this;
    }
    public function getVisibility(): ?bool
    {
        return $this->Visibility;
    }

    public function setVisibility(bool $Visibility): self
    {
        $this->Visibility = $Visibility;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
