<?php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\NotificationRepository;
use DateTime;
use PhpParser\Node\Scalar\String_;
use Symfony\Component\Validator\Constraints\Date;

/**
 * @ORM\Entity(repositoryClass=NotificationRepository::class)
 */
class Notification
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
    private $description;
    /**
     * @ORM\Column(type="datetime", nullable=true )
     */
    private $DateNotifications;

    /**
     * @ORM\Column(type="integer")
     */
    private $userId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $srcImg;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getSrcImg(): ?string
    {
        return $this->srcImg;
    }

    public function setSrcImg(string $srcImg): self
    {
        $this->srcImg = $srcImg;

        return $this;
    }
    public function getDateNotifications(): ?string
    {
        // $now = new DateTime(date('d-m-Y H:i:s'));
        // $interval = $this->DateNotifications->diff($now);
        return $this->DateNotifications->format('d/m/Y H:i');
    }
    
    public function setDateNotifications(\DateTimeInterface $DateNotifications): self
    {
        $this->DateNotifications = $DateNotifications;
    
        return $this;
    }
}
