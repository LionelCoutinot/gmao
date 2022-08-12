<?php

namespace App\Entity;

use App\Repository\TypepanneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypepanneRepository::class)
 */
class Typepanne
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
    private $typepanne;

    /**
     * @ORM\OneToMany(targetEntity=Panne::class, mappedBy="typepanne", orphanRemoval=true)
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

    public function getTypepanne(): ?string
    {
        return $this->typepanne;
    }

    public function setTypepanne(string $typepanne): self
    {
        $this->typepanne = $typepanne;

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
            $panne->setTypepanne($this);
        }

        return $this;
    }

    public function removePanne(Panne $panne): self
    {
        if ($this->pannes->removeElement($panne)) {
            // set the owning side to null (unless already changed)
            if ($panne->getTypepanne() === $this) {
                $panne->setTypepanne(null);
            }
        }

        return $this;
    }
    
    public function __toString(){
		return $this -> typepanne;
	}

}
