<?php

namespace UAHB\ScolariteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classe
 *
 * @ORM\Table(name="classe")
 * @ORM\Entity(repositoryClass="UAHB\ScolariteBundle\Repository\ClasseRepository")
 */
class Classe
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=30)
     */
    private $libelle;

    /**
     * @ORM\ManyToOne(targetEntity="UAHB\ScolariteBundle\Entity\Filiere", inversedBy="classes")
     * @ORM\JoinColumn(nullable=false)
    */
    private $filiere;

    /**
     * @ORM\OneToMany(targetEntity="UAHB\ScolariteBundle\Entity\ClasseOption", mappedBy="classe")
     */
    private $classeOptions;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Classe
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->classeOptions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set filiere
     *
     * @param \UAHB\ScolariteBundle\Entity\Filiere $filiere
     *
     * @return Classe
     */
    public function setFiliere(\UAHB\ScolariteBundle\Entity\Filiere $filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * Get filiere
     *
     * @return \UAHB\ScolariteBundle\Entity\Filiere
     */
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Add classeOption
     *
     * @param \UAHB\ScolariteBundle\Entity\ClasseOption $classeOption
     *
     * @return Classe
     */
    public function addClasseOption(\UAHB\ScolariteBundle\Entity\ClasseOption $classeOption)
    {
        $this->classeOptions[] = $classeOption;

        return $this;
    }

    /**
     * Remove classeOption
     *
     * @param \UAHB\ScolariteBundle\Entity\ClasseOption $classeOption
     */
    public function removeClasseOption(\UAHB\ScolariteBundle\Entity\ClasseOption $classeOption)
    {
        $this->classeOptions->removeElement($classeOption);
    }

    /**
     * Get classeOptions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClasseOptions()
    {
        return $this->classeOptions;
    }
}
