<?php

namespace App\Entity;

use App\Repository\MarqueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Model;

/**
 * @ORM\Entity(repositoryClass=MarqueRepository::class)
 */
class Marque
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
    private $marque_name;

    /**
     * @ORM\OneToMany(targetEntity=model::class, mappedBy="marque")
     */
    private $model;

    public function __construct()
    {
        $this->model = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarqueName(): ?string
    {
        return $this->marque_name;
    }

    public function setMarqueName(string $marque_name): self
    {
        $this->marque_name = $marque_name;

        return $this;
    }

    /**
     * @return Collection|model[]
     */
    public function getModel(): Collection
    {
        return $this->model;
    }

    public function addModel(model $model): self
    {
        if (!$this->model->contains($model)) {
            $this->model[] = $model;
            $model->setMarque($this);
        }

        return $this;
    }

    public function removeModel(model $model): self
    {
        if ($this->model->removeElement($model)) {
            // set the owning side to null (unless already changed)
            if ($model->getMarque() === $this) {
                $model->setMarque(null);
            }
        }

        return $this;
    }
}
