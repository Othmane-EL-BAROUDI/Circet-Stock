<?php

namespace App\Entity;

use App\Repository\AffectationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AffectationRepository::class)
 */
class Affectation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $date_affectation;

    /**
     * @ORM\Column(type="boolean")
     */
    private $autocad;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $state;

    /**
     * @ORM\ManyToOne(targetEntity=user::class, inversedBy="user_id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=machine::class, inversedBy="machine_id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $machine;

    /**
     * @ORM\OneToMany(targetEntity=Restitution::class, mappedBy="affectation")
     */
    private $affectation_id;

    public function __construct()
    {
        $this->affectation_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateAffectation(): ?string
    {
        return $this->date_affectation;
    }

    public function setDateAffectation(string $date_affectation): self
    {
        $this->date_affectation = $date_affectation;

        return $this;
    }

    public function getAutocad(): ?bool
    {
        return $this->autocad;
    }

    public function setAutocad(bool $autocad): self
    {
        $this->autocad = $autocad;

        return $this;
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

    public function getUserAffectation(): ?user
    {
        return $this->user;
    }

    public function setUserAffectation(?user $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getMachineAffectation(): ?machine
    {
        return $this->machine;
    }

    public function setMachineAffectation(?machine $machine): self
    {
        $this->machine = $machine;

        return $this;
    }

    /**
     * @return Collection|Restitution[]
     */
    public function getAffectationId(): Collection
    {
        return $this->affectation_id;
    }

    public function addAffectationId(Restitution $affectationId): self
    {
        if (!$this->affectation_id->contains($affectationId)) {
            $this->affectation_id[] = $affectationId;
            $affectationId->setAffectation($this);
        }

        return $this;
    }

    public function removeAffectationId(Restitution $affectationId): self
    {
        if ($this->affectation_id->removeElement($affectationId)) {
            // set the owning side to null (unless already changed)
            if ($affectationId->getAffectation() === $this) {
                $affectationId->setAffectation(null);
            }
        }

        return $this;
    }
}
