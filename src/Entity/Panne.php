<?php

namespace App\Entity;

use App\Repository\PanneRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PanneRepository::class)
 */
class Panne
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
    private $machine_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $criticite_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $arret_id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $debutarret;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $finarret;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $demandeur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $intervenant;

    /**
     * @ORM\Column(type="integer")
     */
    private $typeintervention_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $typepanne_id;

    /**
     * @ORM\Column(type="time")
     */
    private $dureeintervention;

    /**
     * @ORM\Column(type="text")
     */
    private $travaux;

    /**
     * @ORM\ManyToOne(targetEntity=Machine::class, inversedBy="pannes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $machine;

    /**
     * @ORM\ManyToOne(targetEntity=Criticite::class, inversedBy="pannes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $criticite;

    /**
     * @ORM\ManyToOne(targetEntity=Arret::class, inversedBy="pannes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $arret;

    /**
     * @ORM\ManyToOne(targetEntity=Typeintervention::class, inversedBy="pannes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeintervention;

    /**
     * @ORM\ManyToOne(targetEntity=Typepanne::class, inversedBy="pannes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typepanne;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMachineId(): ?int
    {
        return $this->machine_id;
    }

    public function setMachineId(int $machine_id): self
    {
        $this->machine_id = $machine_id;

        return $this;
    }

    public function getCriticiteId(): ?int
    {
        return $this->criticite_id;
    }

    public function setCriticiteId(int $criticite_id): self
    {
        $this->criticite_id = $criticite_id;

        return $this;
    }

    public function getArretId(): ?int
    {
        return $this->arret_id;
    }

    public function setArretId(int $arret_id): self
    {
        $this->arret_id = $arret_id;

        return $this;
    }

    public function getDebutarret(): ?\DateTimeInterface
    {
        return $this->debutarret;
    }

    public function setDebutarret(?\DateTimeInterface $debutarret): self
    {
        $this->debutarret = $debutarret;

        return $this;
    }

    public function getFinarret(): ?\DateTimeInterface
    {
        return $this->finarret;
    }

    public function setFinarret(?\DateTimeInterface $finarret): self
    {
        $this->finarret = $finarret;

        return $this;
    }

    public function getDemandeur(): ?string
    {
        return $this->demandeur;
    }

    public function setDemandeur(string $demandeur): self
    {
        $this->demandeur = $demandeur;

        return $this;
    }

    public function getIntervenant(): ?string
    {
        return $this->intervenant;
    }

    public function setIntervenant(string $intervenant): self
    {
        $this->intervenant = $intervenant;

        return $this;
    }

    public function getTypeinterventionId(): ?int
    {
        return $this->typeintervention_id;
    }

    public function setTypeinterventionId(int $typeintervention_id): self
    {
        $this->typeintervention_id = $typeintervention_id;

        return $this;
    }

    public function getTypepanneId(): ?int
    {
        return $this->typepanne_id;
    }

    public function setTypepanneId(int $typepanne_id): self
    {
        $this->typepanne_id = $typepanne_id;

        return $this;
    }

    public function getDureeintervention(): ?\DateTimeInterface
    {
        return $this->dureeintervention;
    }

    public function setDureeintervention(\DateTimeInterface $dureeintervention): self
    {
        $this->dureeintervention = $dureeintervention;

        return $this;
    }

    public function getTravaux(): ?string
    {
        return $this->travaux;
    }

    public function setTravaux(string $travaux): self
    {
        $this->travaux = $travaux;

        return $this;
    }

    public function getMachine(): ?Machine
    {
        return $this->machine;
    }

    public function setMachine(?Machine $machine): self
    {
        $this->machine = $machine;

        return $this;
    }

    public function getCriticite(): ?Criticite
    {
        return $this->criticite;
    }

    public function setCriticite(?Criticite $criticite): self
    {
        $this->criticite = $criticite;

        return $this;
    }

    public function getArret(): ?Arret
    {
        return $this->arret;
    }

    public function setArret(?Arret $arret): self
    {
        $this->arret = $arret;

        return $this;
    }

    public function getTypeintervention(): ?Typeintervention
    {
        return $this->typeintervention;
    }

    public function setTypeintervention(?Typeintervention $typeintervention): self
    {
        $this->typeintervention = $typeintervention;

        return $this;
    }

    public function getTypepanne(): ?Typepanne
    {
        return $this->typepanne;
    }

    public function setTypepanne(?Typepanne $typepanne): self
    {
        $this->typepanne = $typepanne;

        return $this;
    }

    
        public function __toString(): string{
            return '';
        }
	
}
