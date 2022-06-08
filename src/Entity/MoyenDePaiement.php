<?php

namespace App\Entity;

use App\Repository\MoyenDePaiementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MoyenDePaiementRepository::class)
 */
class MoyenDePaiement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $nom;

    /**
     * @ORM\Column(type="date")
     */
    private $date_Ajout;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDateAjout(): ?\DateTimeInterface
    {
        return $this->date_Ajout;
    }

    public function setDateAjout(\DateTimeInterface $date_Ajout): self
    {
        $this->date_Ajout = $date_Ajout;

        return $this;
    }

}
