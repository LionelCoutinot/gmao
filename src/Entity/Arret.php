<?php

namespace App\Entity;

use App\Repository\ArretRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArretRepository::class)
 */
class Arret
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
    private $arret;

    /**
     * @ORM\OneToMany(targetEntity=Panne::class, mappedBy="arret", orphanRemoval=true)
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

    public function getArret(): ?string
    {
        return $this->arret;
    }

    public function setArret(string $arret): self
    {
        $this->arret = $arret;

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
            $panne->setArret($this);
        }

        return $this;
    }

    public function removePanne(Panne $panne): self
    {
        if ($this->pannes->removeElement($panne)) {
            // set the owning side to null (unless already changed)
            if ($panne->getArret() === $this) {
                $panne->setArret(null);
            }
        }

        return $this;
    }
    public function __toString(){
		return $this -> arret;
	}
}
