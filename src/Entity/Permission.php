<?php

namespace App\Entity;

use App\Repository\PermissionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PermissionRepository::class)
 */
class Permission
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
    private $permission_name;

    /**
     * @ORM\ManyToMany(targetEntity=user::class, inversedBy="permissions")
     */
    private $user_permission;

    public function __construct()
    {
        $this->user_permission = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPermissionName(): ?string
    {
        return $this->permission_name;
    }

    public function setPermissionName(string $permission_name): self
    {
        $this->permission_name = $permission_name;

        return $this;
    }

    /**
     * @return Collection|user[]
     */
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
