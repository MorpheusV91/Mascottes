<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandeRepository::class)
 */
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="float")
     */
    private $montant;

    /**
     * @ORM\Column(type="boolean")
     */
    private $est_Paye;

    /**
     * @ORM\Column(type="text")
     */
    private $adresse_Facturation;

    /**
     * @ORM\Column(type="text")
     */
    private $adresse_livraison;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function isEstPaye(): ?bool
    {
        return $this->est_Paye;
    }

    public function setEstPaye(bool $est_Paye): self
    {
        $this->est_Paye = $est_Paye;

        return $this;
    }

    public function getAdresseFacturation(): ?string
    {
        return $this->adresse_Facturation;
    }

    public function setAdresseFacturation(string $adresse_Facturation): self
    {
        $this->adresse_Facturation = $adresse_Facturation;

        return $this;
    }

    public function getAdresseLivraison(): ?string
    {
        return $this->adresse_livraison;
    }

    public function setAdresseLivraison(string $adresse_livraison): self
    {
        $this->adresse_livraison = $adresse_livraison;

        return $this;
    }
}
