<?php
// src/Entity/User.php

namespace App\Entity;

use App\Entity\Permission;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
     /**
     * @ORM\Column(type="string", length=255)
     */
    protected $matricule;
     /**
     * @ORM\Column(type="string", length=255)
     */
    protected $job;
       /**
     * @ORM\Column(type="string", length=255)
     */
    protected $manager;
     /**
     * @ORM\ManyToMany(targetEntity=Permission::class, inversedBy="user")
     */
    private $user_permission;
    /**
     * @ORM\Column(type="boolean")
     */
    private $connected;

    public function __construct()
    {
        parent::__construct();
        $this->user_permission = new ArrayCollection();
        // your own logic
    }
    public function getMatricule(): ?string
    {
        return $this->matricule;
    }
    public function getManager(): ?string
    {
        return $this->manager;
    }
    public function getJob(): ?string
    {
        return $this->job;
    }

    public function setManager(string $manager): self
    {
        $this->manager = $manager;

        return $this;
    }
    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }
    public function setJob(string $job): self
    {
        $this->job = $job;

        
        return $this;
    }
    public function getConnected(): ?bool
    {
        return $this->connected;
    }

    public function setConnected(bool $connected): self
    {
        $this->connected = $connected;

        return $this;
    }
    public function getUserPermission(): Collection
    {
        return $this->user_permission;
    }

    public function addUserPermission(user $userPermission): self
    {
        if (!$this->user_permission->contains($userPermission)) {
            $this->user_permission[] = $userPermission;
        }

        return $this;
    }

    public function removeUserPermission(user $userPermission): self
    {
        $this->user_permission->removeElement($userPermission);

        return $this;
    }
}