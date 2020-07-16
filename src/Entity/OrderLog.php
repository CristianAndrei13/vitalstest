<?php

namespace App\Entity;

use App\Repository\OrderLogRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrderLogRepository::class)
 */
class OrderLog
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Order::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $orderElement;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $message;

    /**
     * @ORM\Column(type="boolean")
     */
    private $alert;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrderElement(): ?Order
    {
        return $this->orderElement;
    }

    public function setOrderElement(?Order $orderElement): self
    {
        $this->orderElement = $orderElement;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function isAlert(): ?bool
    {
        return $this->alert;
    }

    public function setAlert(bool $alert): self
    {
        $this->alert = $alert;

        return $this;
    }
}
