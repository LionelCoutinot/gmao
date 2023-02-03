<?php

namespace App\Entity;

use App\Repository\TypeinterventionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeinterventionRepository::class)
 */
class Typeintervention
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
    private $typeintervention;

    /**
     * @ORM\OneToMany(targetEntity=Panne::class, mappedBy="typeintervention", orphanRemoval=true)
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

    public function getTypeintervention(): ?string
    {
        return $this->typeintervention;
    }

    public function setTypeintervention(string $typeintervention): self
    {
        $this->typeintervention = $typeintervention;

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
            $panne->setTypeintervention($this);
        }

        return $this;
    }

    public function removePanne(Panne $panne): self
    {
        if ($this->pannes->removeElement($panne)) {
            // set the owning side to null (unless already changed)
            if ($panne->getTypeintervention() === $this) {
                $panne->setTypeintervention(null);
            }
        }

        return $this;
    }
    public function __toString(){
		return $this -> typeintervention;
	}
}
