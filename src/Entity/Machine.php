<?php

namespace App\Entity;

use App\Repository\MachineRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MachineRepository::class)
 */
class Machine
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
    private $serial_num;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $state;

    /**
     * @ORM\Column(type="boolean")
     */
    private $available;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mac_ethernet;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mac_wifi;

    /**
     * @ORM\OneToMany(targetEntity=Affectation::class, mappedBy="machine_affectation")
     */
    private $machine_id;

     /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Model", inversedBy="machines")
     * @ORM\JoinColumn(nullable=false)
     */
    private $model;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img_src;

    public function __construct()
    {
        $this->machine_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModel(): ?object
    {
        return   $this->model ;  
    }

    public function setModel(?Model $model): self
    {
        $this->model = $model;

        return $this;
    }

   

    public function getSerialNum(): ?string
    {
        return $this->serial_num;
    }

    public function setSerialNum(string $serial_num): self
    {
        $this->serial_num = $serial_num;

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
    public function getImgSrc(): ?string
    {
        return $this->img_src;
    }

    public function setImgSrc(string $img_src): self
    {
        $this->img_src = $img_src;

        return $this;
    }
    public function getAvailable(): ?bool
    {
        return $this->available;
    }

    public function setAvailable(bool $available): self
    {
        $this->available = $available;

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

    public function getMacEthernet(): ?string
    {
        return $this->mac_ethernet;
    }

    public function setMacEthernet(string $mac_ethernet): self
    {
        $this->mac_ethernet = $mac_ethernet;

        return $this;
    }

    public function getMacWifi(): ?string
    {
        return $this->mac_wifi;
    }

    public function setMacWifi(string $mac_wifi): self
    {
        $this->mac_wifi = $mac_wifi;

        return $this;
    }

    /**
     * @return Collection|Affectation[]
     */
    public function getMachineId(): Collection
    {
        return $this->machine_id;
    }

    public function addMachineId(Affectation $machineId): self
    {
        if (!$this->machine_id->contains($machineId)) {
            $this->machine_id[] = $machineId;
            $machineId->setMachineAffectation($this);
        }

        return $this;
    }

    public function removeMachineId(Affectation $machineId): self
    {
        if ($this->machine_id->removeElement($machineId)) {
            // set the owning side to null (unless already changed)
            if ($machineId->getMachineAffectation() === $this) {
                $machineId->setMachineAffectation(null);
            }
        }

        return $this;
    }
}
