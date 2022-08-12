<?php

namespace App\Entity;

use App\Repository\CriticiteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CriticiteRepository::class)
 */
class Criticite
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
    private $criticite;

    /**
     * @ORM\OneToMany(targetEntity=Panne::class, mappedBy="criticite", orphanRemoval=true)
     */
    private $pannes;

    public function __construct()
    {
        $this->pannes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCriticite(): ?string
    {
        return $this->criticite;
    }

    public function setCriticite(string $criticite): self
    {
        $this->criticite = $criticite;

        return $this;
    }

    /**
     * @return Collection<int, Panne>
     */
    public function getPannes(): Collection
    {
        return $this->pannes;
    }

    public function addPanne(Panne $panne): self
    {
        if (!$this->pannes->contains($panne)) {
            $this->pannes[] = $panne;
            $panne->setCriticite($this);
        }

        return $this;
    }

    public function removePanne(Panne $panne): self
    {
        if ($this->pannes->removeElement($panne)) {
            // set the owning side to null (unless already changed)
            if ($panne->getCriticite() === $this) {
                $panne->setCriticite(null);
            }
        }

        return $this;
    }
    public function __toString(){
		return $this -> criticite;
	}
}
