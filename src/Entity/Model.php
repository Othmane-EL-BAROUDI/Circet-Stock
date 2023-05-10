<?php

namespace App\Entity;

use App\Entity\Marque;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ModelRepository;

/**
 * @ORM\Entity(repositoryClass=ModelRepository::class)
 */
class Model
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
    private $model_name;

      /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;
    /**
     * @ORM\ManyToOne(targetEntity=Marque::class, inversedBy="model")
     * @ORM\JoinColumn(nullable=false)
     */
    private $marque;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Machine", mappedBy="model")
     */
    private $machines;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModelName(): ?string
    {
        return $this->model_name;
    }

    public function setModelName(string $model_name): self
    {
        $this->model_name = $model_name;

        return $this;
    }
    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
   
    public function getMarque(): ?Marque
    {
        return $this->marque;
    }

    public function setMarque(?Marque $marque): self
    {
        $this->marque = $marque;

        return $this;
    }
}
