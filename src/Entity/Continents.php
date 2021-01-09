<?php

namespace App\Entity;

use App\Repository\ContinentsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContinentsRepository::class)
 */
class Continents
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    public $continent_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContinentId(): ?int
    {
        return $this->continent_id;
    }

    public function setContinentId(int $continent_id): self
    {
        $this->continent_id = $continent_id;

        return $this;
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
}
