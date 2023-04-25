<?php
// src/Entity/User.php

namespace App\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

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

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    public function getMatricule(): ?string
    {
        return $this->matricule;
    }
    public function getManager(): ?string
    {
        return $this->matricule;
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
}