<?php

namespace App\Entity;

use App\Repository\StatisticsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StatisticsRepository::class)
 */
class Statistics
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $products;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $profit;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $salesperwk;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $salespermth;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProducts(): ?string
    {
        return $this->products;
    }

    public function setProducts(?string $products): self
    {
        $this->products = $products;

        return $this;
    }

    public function getProfit(): ?float
    {
        return $this->profit;
    }

    public function setProfit(?float $profit): self
    {
        $this->profit = $profit;

        return $this;
    }

    public function getSalesperwk(): ?int
    {
        return $this->salesperwk;
    }

    public function setSalesperwk(?int $salesperwk): self
    {
        $this->salesperwk = $salesperwk;

        return $this;
    }

    public function getSalespermth(): ?int
    {
        return $this->salespermth;
    }

    public function setSalespermth(?int $salespermth): self
    {
        $this->salespermth = $salespermth;

        return $this;
    }
}
