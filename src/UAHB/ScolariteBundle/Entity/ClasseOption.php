<?php

namespace UAHB\ScolariteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClasseOption
 *
 * @ORM\Table(name="classe_option")
 * @ORM\Entity(repositoryClass="UAHB\ScolariteBundle\Repository\ClasseOptionRepository")
 */
class ClasseOption
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @ORM\ManyToOne(targetEntity="UAHB\ScolariteBundle\Entity\ClasseOption", inversedBy="classeOptions")
     * @ORM\JoinColumn(nullable=false)
    */
    private $classe;

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return ClasseOption
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
     * Set classe
     *
     * @param \UAHB\ScolariteBundle\Entity\ClasseOption $classe
     *
     * @return ClasseOption
     */
    public function setClasse(\UAHB\ScolariteBundle\Entity\ClasseOption $classe)
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get classe
     *
     * @return \UAHB\ScolariteBundle\Entity\ClasseOption
     */
    public function getClasse()
    {
        return $this->classe;
    }
}
