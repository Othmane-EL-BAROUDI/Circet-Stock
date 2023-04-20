<?php

namespace App\Entity;

use App\Repository\ModelRepository;
use Doctrine\ORM\Mapping as ORM;

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
    private $img_src;

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

    public function getImgSrc(): ?string
    {
        return $this->img_src;
    }

    public function setImgSrc(string $img_src): self
    {
        $this->img_src = $img_src;

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
