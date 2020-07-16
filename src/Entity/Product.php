<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * @ORM\Column(type="boolean")
     */
    private $availability = false;

    /**
     * @ORM\OneToMany(targetEntity=ProductIngredient::class, mappedBy="product")
     */
    private $productIngredients;

    public function __construct()
    {
        $this->productIngredients = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getAvailability(): ?bool
    {
        return $this->availability;
    }

    public function setAvailability(bool $availability): self
    {
        $this->availability = $availability;

        return $this;
    }

    /**
     * @return Collection|ProductIngredient[]
     */
    public function getProductIngredients(): Collection
    {
        return $this->productIngredients;
    }

    public function addProductIngredient(ProductIngredient $productIngredient): self
    {
        if (!$this->productIngredients->contains($productIngredient)) {
            $this->productIngredients[] = $productIngredient;
            $productIngredient->setProduct($this);
        }

        return $this;
    }

    public function removeProductIngredient(ProductIngredient $productIngredient): self
    {
        if ($this->productIngredients->contains($productIngredient)) {
            $this->productIngredients->removeElement($productIngredient);
            // set the owning side to null (unless already changed)
            if ($productIngredient->getProduct() === $this) {
                $productIngredient->setProduct(null);
            }
        }

        return $this;
    }
}
