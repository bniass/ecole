<?php

namespace UAHB\ScolariteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table(name="etudiant")
 * @ORM\Entity(repositoryClass="UAHB\ScolariteBundle\Repository\EtudiantRepository")
 */
class Etudiant
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
     * @ORM\Column(name="prenom", type="string", length=50)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=10)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="situationMaritale", type="string", length=25)
     */
    private $situationMaritale;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=50, nullable=true)
     */
    private $region;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="date")
     */
    private $dateNaissance;

    /**
     * @ORM\OneToMany(targetEntity="UAHB\ScolariteBundle\Entity\Telephone", mappedBy="etudiant")
     */
    private $telephones;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @ORM\OneToOne(targetEntity="UAHB\ScolariteBundle\Entity\Personne", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $pere;
    
    
    /**
     * @ORM\OneToOne(targetEntity="UAHB\ScolariteBundle\Entity\Personne", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $mere;


    /**
     * @ORM\OneToOne(targetEntity="UAHB\ScolariteBundle\Entity\Personne", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $tuteur;

    /**
     * @ORM\OneToOne(targetEntity="UAHB\ScolariteBundle\Entity\Personne", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $personneAcontacter;
    
    /**
     * @var int
     *
     * @ORM\Column(name="nbenfant", type="integer", length=20, nullable=true)
     */
    private $nbenfant;

    
    /**
     * @ORM\OneToOne(targetEntity="UAHB\ScolariteBundle\Entity\Image", cascade={"persist"})
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="langue1", type="string", length=30, nullable=true)
     */
    private $langue1;

    /**
     * @var string
     *
     * @ORM\Column(name="niveauLangue1", type="string", length=20, nullable=true)
     */
    private $niveauLangue1;

    /**
     * @var string
     *
     * @ORM\Column(name="langue2", type="string", length=30, nullable=true)
     */
    private $langue2;

    /**
     * @var string
     *
     * @ORM\Column(name="niveauLangue2", type="string", length=20, nullable=true)
     */
    private $niveauLangue2;

    /**
     * @var string
     *
     * @ORM\Column(name="langue3", type="string", length=30, nullable=true)
     */
    private $langue3;

    /**
     * @var string
     *
     * @ORM\Column(name="niveauLangue3", type="string", length=20, nullable=true)
     */
    private $niveauLangue3;

    /**
     * @ORM\OneToOne(targetEntity="UAHB\ScolariteBundle\Entity\Pays")
     * @ORM\JoinColumn(nullable=false)
     */
    private $paysOrigine;

    /**
     * @ORM\OneToOne(targetEntity="UAHB\ScolariteBundle\Entity\Pays")
     * @ORM\JoinColumn(nullable=false)
     */
    private $nationalite;

    /**
     * @ORM\OneToOne(targetEntity="UAHB\ScolariteBundle\Entity\Diplome", cascade={"persist"})
     */
    private $diplome;

    /**
     * @var string
     *
     * @ORM\Column(name="etablissementDorigine", type="string", length=100, nullable=true)
     */
    private $etablissementDorigine;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseEtablissementDorigine", type="string", length=100, nullable=true)
     */
    private $adresseEtablissementDorigine;

    /**
     * @var string
     *
     * @ORM\Column(name="filiereAnterieur", type="string", length=100, nullable=true)
     */
    private $filiereAnterieur;

    /**
     * @var string
     *
     * @ORM\Column(name="classeAnterieur", type="string", length=100, nullable=true)
     */
    private $classeAnterieur;

    /**
     * @var string
     *
     * @ORM\Column(name="niveauDentreeUahb", type="string", length=100, nullable=true)
     */
    private $niveauDentreeUahb;

    /**
     * @var string
     *
     * @ORM\Column(name="commentConnaisTuUahb", type="string", length=100, nullable=true)
     */
    private $commentConnaisTuUahb;


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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Etudiant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Etudiant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Etudiant
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set situationMaritale
     *
     * @param string $situationMaritale
     *
     * @return Etudiant
     */
    public function setSituationMaritale($situationMaritale)
    {
        $this->situationMaritale = $situationMaritale;

        return $this;
    }

    /**
     * Get situationMaritale
     *
     * @return string
     */
    public function getSituationMaritale()
    {
        return $this->situationMaritale;
    }

    /**
     * Set region
     *
     * @param string $region
     *
     * @return Etudiant
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return Etudiant
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set telFixe
     *
     * @param string $telFixe
     *
     * @return Etudiant
     */
    public function setTelFixe($telFixe)
    {
        $this->telFixe = $telFixe;

        return $this;
    }

    /**
     * Get telFixe
     *
     * @return string
     */
    public function getTelFixe()
    {
        return $this->telFixe;
    }

    /**
     * Set telPortable1
     *
     * @param string $telPortable1
     *
     * @return Etudiant
     */
    public function setTelPortable1($telPortable1)
    {
        $this->telPortable1 = $telPortable1;

        return $this;
    }

    /**
     * Get telPortable1
     *
     * @return string
     */
    public function getTelPortable1()
    {
        return $this->telPortable1;
    }

    /**
     * Set telPostable2
     *
     * @param string $telPostable2
     *
     * @return Etudiant
     */
    public function setTelPostable2($telPostable2)
    {
        $this->telPostable2 = $telPostable2;

        return $this;
    }

    /**
     * Get telPostable2
     *
     * @return string
     */
    public function getTelPostable2()
    {
        return $this->telPostable2;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Etudiant
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Etudiant
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set nomPere
     *
     * @param string $nomPere
     *
     * @return Etudiant
     */
    public function setNomPere($nomPere)
    {
        $this->nomPere = $nomPere;

        return $this;
    }

    /**
     * Get nomPere
     *
     * @return string
     */
    public function getNomPere()
    {
        return $this->nomPere;
    }

    /**
     * Set professionPere
     *
     * @param string $professionPere
     *
     * @return Etudiant
     */
    public function setProfessionPere($professionPere)
    {
        $this->professionPere = $professionPere;

        return $this;
    }

    /**
     * Get professionPere
     *
     * @return string
     */
    public function getProfessionPere()
    {
        return $this->professionPere;
    }

    /**
     * Set adressePere
     *
     * @param string $adressePere
     *
     * @return Etudiant
     */
    public function setAdressePere($adressePere)
    {
        $this->adressePere = $adressePere;

        return $this;
    }

    /**
     * Get adressePere
     *
     * @return string
     */
    public function getAdressePere()
    {
        return $this->adressePere;
    }

    /**
     * Set telPere
     *
     * @param string $telPere
     *
     * @return Etudiant
     */
    public function setTelPere($telPere)
    {
        $this->telPere = $telPere;

        return $this;
    }

    /**
     * Get telPere
     *
     * @return string
     */
    public function getTelPere()
    {
        return $this->telPere;
    }

    /**
     * Set nomMere
     *
     * @param string $nomMere
     *
     * @return Etudiant
     */
    public function setNomMere($nomMere)
    {
        $this->nomMere = $nomMere;

        return $this;
    }

    /**
     * Get nomMere
     *
     * @return string
     */
    public function getNomMere()
    {
        return $this->nomMere;
    }

    /**
     * Set prenomMere
     *
     * @param string $prenomMere
     *
     * @return Etudiant
     */
    public function setPrenomMere($prenomMere)
    {
        $this->prenomMere = $prenomMere;

        return $this;
    }

    /**
     * Get prenomMere
     *
     * @return string
     */
    public function getPrenomMere()
    {
        return $this->prenomMere;
    }

    /**
     * Set professionMere
     *
     * @param string $professionMere
     *
     * @return Etudiant
     */
    public function setProfessionMere($professionMere)
    {
        $this->professionMere = $professionMere;

        return $this;
    }

    /**
     * Get professionMere
     *
     * @return string
     */
    public function getProfessionMere()
    {
        return $this->professionMere;
    }

    /**
     * Set adresseMere
     *
     * @param string $adresseMere
     *
     * @return Etudiant
     */
    public function setAdresseMere($adresseMere)
    {
        $this->adresseMere = $adresseMere;

        return $this;
    }

    /**
     * Get adresseMere
     *
     * @return string
     */
    public function getAdresseMere()
    {
        return $this->adresseMere;
    }

    /**
     * Set telMere
     *
     * @param string $telMere
     *
     * @return Etudiant
     */
    public function setTelMere($telMere)
    {
        $this->telMere = $telMere;

        return $this;
    }

    /**
     * Get telMere
     *
     * @return string
     */
    public function getTelMere()
    {
        return $this->telMere;
    }

    /**
     * Set langue1
     *
     * @param string $langue1
     *
     * @return Etudiant
     */
    public function setLangue1($langue1)
    {
        $this->langue1 = $langue1;

        return $this;
    }

    /**
     * Get langue1
     *
     * @return string
     */
    public function getLangue1()
    {
        return $this->langue1;
    }

    /**
     * Set niveauLangue1
     *
     * @param string $niveauLangue1
     *
     * @return Etudiant
     */
    public function setNiveauLangue1($niveauLangue1)
    {
        $this->niveauLangue1 = $niveauLangue1;

        return $this;
    }

    /**
     * Get niveauLangue1
     *
     * @return string
     */
    public function getNiveauLangue1()
    {
        return $this->niveauLangue1;
    }

    /**
     * Set langue2
     *
     * @param string $langue2
     *
     * @return Etudiant
     */
    public function setLangue2($langue2)
    {
        $this->langue2 = $langue2;

        return $this;
    }

    /**
     * Get langue2
     *
     * @return string
     */
    public function getLangue2()
    {
        return $this->langue2;
    }

    /**
     * Set niveauLangue2
     *
     * @param string $niveauLangue2
     *
     * @return Etudiant
     */
    public function setNiveauLangue2($niveauLangue2)
    {
        $this->niveauLangue2 = $niveauLangue2;

        return $this;
    }

    /**
     * Get niveauLangue2
     *
     * @return string
     */
    public function getNiveauLangue2()
    {
        return $this->niveauLangue2;
    }

    /**
     * Set langue3
     *
     * @param string $langue3
     *
     * @return Etudiant
     */
    public function setLangue3($langue3)
    {
        $this->langue3 = $langue3;

        return $this;
    }

    /**
     * Get langue3
     *
     * @return string
     */
    public function getLangue3()
    {
        return $this->langue3;
    }

    /**
     * Set niveauLangue3
     *
     * @param string $niveauLangue3
     *
     * @return Etudiant
     */
    public function setNiveauLangue3($niveauLangue3)
    {
        $this->niveauLangue3 = $niveauLangue3;

        return $this;
    }

    /**
     * Get niveauLangue3
     *
     * @return string
     */
    public function getNiveauLangue3()
    {
        return $this->niveauLangue3;
    }

    /**
     * Set nomTuteur
     *
     * @param string $nomTuteur
     *
     * @return Etudiant
     */
    public function setNomTuteur($nomTuteur)
    {
        $this->nomTuteur = $nomTuteur;

        return $this;
    }

    /**
     * Get nomTuteur
     *
     * @return string
     */
    public function getNomTuteur()
    {
        return $this->nomTuteur;
    }

    /**
     * Set prenomTuteur
     *
     * @param string $prenomTuteur
     *
     * @return Etudiant
     */
    public function setPrenomTuteur($prenomTuteur)
    {
        $this->prenomTuteur = $prenomTuteur;

        return $this;
    }

    /**
     * Get prenomTuteur
     *
     * @return string
     */
    public function getPrenomTuteur()
    {
        return $this->prenomTuteur;
    }

    /**
     * Set professionTuteur
     *
     * @param string $professionTuteur
     *
     * @return Etudiant
     */
    public function setProfessionTuteur($professionTuteur)
    {
        $this->professionTuteur = $professionTuteur;

        return $this;
    }

    /**
     * Get professionTuteur
     *
     * @return string
     */
    public function getProfessionTuteur()
    {
        return $this->professionTuteur;
    }

    /**
     * Set adresseTuteur
     *
     * @param string $adresseTuteur
     *
     * @return Etudiant
     */
    public function setAdresseTuteur($adresseTuteur)
    {
        $this->adresseTuteur = $adresseTuteur;

        return $this;
    }

    /**
     * Get adresseTuteur
     *
     * @return string
     */
    public function getAdresseTuteur()
    {
        return $this->adresseTuteur;
    }

    /**
     * Set telTuteur
     *
     * @param string $telTuteur
     *
     * @return Etudiant
     */
    public function setTelTuteur($telTuteur)
    {
        $this->telTuteur = $telTuteur;

        return $this;
    }

    /**
     * Get telTuteur
     *
     * @return string
     */
    public function getTelTuteur()
    {
        return $this->telTuteur;
    }

    /**
     * Set paysOrigine
     *
     * @param \UAHB\ScolariteBundle\Entity\Pays $paysOrigine
     *
     * @return Etudiant
     */
    public function setPaysOrigine(\UAHB\ScolariteBundle\Entity\Pays $paysOrigine)
    {
        $this->paysOrigine = $paysOrigine;

        return $this;
    }

    /**
     * Get paysOrigine
     *
     * @return \UAHB\ScolariteBundle\Entity\Pays
     */
    public function getPaysOrigine()
    {
        return $this->paysOrigine;
    }

    /**
     * Set nationalite
     *
     * @param \UAHB\ScolariteBundle\Entity\Pays $nationalite
     *
     * @return Etudiant
     */
    public function setNationalite(\UAHB\ScolariteBundle\Entity\Pays $nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite
     *
     * @return \UAHB\ScolariteBundle\Entity\Pays
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set diplome
     *
     * @param \UAHB\ScolariteBundle\Entity\Diplome $diplome
     *
     * @return Etudiant
     */
    public function setDiplome(\UAHB\ScolariteBundle\Entity\Diplome $diplome = null)
    {
        $this->diplome = $diplome;

        return $this;
    }

    /**
     * Get diplome
     *
     * @return \UAHB\ScolariteBundle\Entity\Diplome
     */
    public function getDiplome()
    {
        return $this->diplome;
    }

    /**
     * Set etablissementDorigine
     *
     * @param string $etablissementDorigine
     *
     * @return Etudiant
     */
    public function setEtablissementDorigine($etablissementDorigine)
    {
        $this->etablissementDorigine = $etablissementDorigine;

        return $this;
    }

    /**
     * Get etablissementDorigine
     *
     * @return string
     */
    public function getEtablissementDorigine()
    {
        return $this->etablissementDorigine;
    }

    /**
     * Set adresseEtablissementDorigine
     *
     * @param string $adresseEtablissementDorigine
     *
     * @return Etudiant
     */
    public function setAdresseEtablissementDorigine($adresseEtablissementDorigine)
    {
        $this->adresseEtablissementDorigine = $adresseEtablissementDorigine;

        return $this;
    }

    /**
     * Get adresseEtablissementDorigine
     *
     * @return string
     */
    public function getAdresseEtablissementDorigine()
    {
        return $this->adresseEtablissementDorigine;
    }

    /**
     * Set filiereAnterieur
     *
     * @param string $filiereAnterieur
     *
     * @return Etudiant
     */
    public function setFiliereAnterieur($filiereAnterieur)
    {
        $this->filiereAnterieur = $filiereAnterieur;

        return $this;
    }

    /**
     * Get filiereAnterieur
     *
     * @return string
     */
    public function getFiliereAnterieur()
    {
        return $this->filiereAnterieur;
    }

    /**
     * Set classeAnterieur
     *
     * @param string $classeAnterieur
     *
     * @return Etudiant
     */
    public function setClasseAnterieur($classeAnterieur)
    {
        $this->classeAnterieur = $classeAnterieur;

        return $this;
    }

    /**
     * Get classeAnterieur
     *
     * @return string
     */
    public function getClasseAnterieur()
    {
        return $this->classeAnterieur;
    }

    /**
     * Set niveauDentreeUahb
     *
     * @param string $niveauDentreeUahb
     *
     * @return Etudiant
     */
    public function setNiveauDentreeUahb($niveauDentreeUahb)
    {
        $this->niveauDentreeUahb = $niveauDentreeUahb;

        return $this;
    }

    /**
     * Get niveauDentreeUahb
     *
     * @return string
     */
    public function getNiveauDentreeUahb()
    {
        return $this->niveauDentreeUahb;
    }

    /**
     * Set commentConnaisTuUahb
     *
     * @param string $commentConnaisTuUahb
     *
     * @return Etudiant
     */
    public function setCommentConnaisTuUahb($commentConnaisTuUahb)
    {
        $this->commentConnaisTuUahb = $commentConnaisTuUahb;

        return $this;
    }

    /**
     * Get commentConnaisTuUahb
     *
     * @return string
     */
    public function getCommentConnaisTuUahb()
    {
        return $this->commentConnaisTuUahb;
    }

    /**
     * Set sexeTuteur
     *
     * @param string $sexeTuteur
     *
     * @return Etudiant
     */
    public function setSexeTuteur($sexeTuteur)
    {
        $this->sexeTuteur = $sexeTuteur;

        return $this;
    }

    /**
     * Get sexeTuteur
     *
     * @return string
     */
    public function getSexeTuteur()
    {
        return $this->sexeTuteur;
    }

    /**
     * Set emailTuteur
     *
     * @param string $emailTuteur
     *
     * @return Etudiant
     */
    public function setEmailTuteur($emailTuteur)
    {
        $this->emailTuteur = $emailTuteur;

        return $this;
    }

    /**
     * Get emailTuteur
     *
     * @return string
     */
    public function getEmailTuteur()
    {
        return $this->emailTuteur;
    }

    /**
     * Set nbenfant
     *
     * @param integer $nbenfant
     *
     * @return Etudiant
     */
    public function setNbenfant($nbenfant)
    {
        $this->nbenfant = $nbenfant;

        return $this;
    }

    /**
     * Get nbenfant
     *
     * @return integer
     */
    public function getNbenfant()
    {
        return $this->nbenfant;
    }

    /**
     * Set image
     *
     * @param \UAHB\ScolariteBundle\Entity\Image $image
     *
     * @return Etudiant
     */
    public function setImage(\UAHB\ScolariteBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \UAHB\ScolariteBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->telephones = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nomAcontacter
     *
     * @param string $nomAcontacter
     *
     * @return Etudiant
     */
    public function setNomAcontacter($nomAcontacter)
    {
        $this->nomAcontacter = $nomAcontacter;

        return $this;
    }

    /**
     * Get nomAcontacter
     *
     * @return string
     */
    public function getNomAcontacter()
    {
        return $this->nomAcontacter;
    }

    /**
     * Set prenomAcontacter
     *
     * @param string $prenomAcontacter
     *
     * @return Etudiant
     */
    public function setPrenomAcontacter($prenomAcontacter)
    {
        $this->prenomAcontacter = $prenomAcontacter;

        return $this;
    }

    /**
     * Get prenomAcontacter
     *
     * @return string
     */
    public function getPrenomAcontacter()
    {
        return $this->prenomAcontacter;
    }

    /**
     * Set professionAcontacter
     *
     * @param string $professionAcontacter
     *
     * @return Etudiant
     */
    public function setProfessionAcontacter($professionAcontacter)
    {
        $this->professionAcontacter = $professionAcontacter;

        return $this;
    }

    /**
     * Get professionAcontacter
     *
     * @return string
     */
    public function getProfessionAcontacter()
    {
        return $this->professionAcontacter;
    }

    /**
     * Set adresseAcontacter
     *
     * @param string $adresseAcontacter
     *
     * @return Etudiant
     */
    public function setAdresseAcontacter($adresseAcontacter)
    {
        $this->adresseAcontacter = $adresseAcontacter;

        return $this;
    }

    /**
     * Get adresseAcontacter
     *
     * @return string
     */
    public function getAdresseAcontacter()
    {
        return $this->adresseAcontacter;
    }

    /**
     * Set telAcontacter
     *
     * @param string $telAcontacter
     *
     * @return Etudiant
     */
    public function setTelAcontacter($telAcontacter)
    {
        $this->telAcontacter = $telAcontacter;

        return $this;
    }

    /**
     * Get telAcontacter
     *
     * @return string
     */
    public function getTelAcontacter()
    {
        return $this->telAcontacter;
    }

    /**
     * Set sexeAcontacter
     *
     * @param string $sexeAcontacter
     *
     * @return Etudiant
     */
    public function setSexeAcontacter($sexeAcontacter)
    {
        $this->sexeAcontacter = $sexeAcontacter;

        return $this;
    }

    /**
     * Get sexeAcontacter
     *
     * @return string
     */
    public function getSexeAcontacter()
    {
        return $this->sexeAcontacter;
    }

    /**
     * Set emailAcontacter
     *
     * @param string $emailAcontacter
     *
     * @return Etudiant
     */
    public function setEmailAcontacter($emailAcontacter)
    {
        $this->emailAcontacter = $emailAcontacter;

        return $this;
    }

    /**
     * Get emailAcontacter
     *
     * @return string
     */
    public function getEmailAcontacter()
    {
        return $this->emailAcontacter;
    }

    /**
     * Add telephone
     *
     * @param \UAHB\ScolariteBundle\Entity\Telephone $telephone
     *
     * @return Etudiant
     */
    public function addTelephone(\UAHB\ScolariteBundle\Entity\Telephone $telephone)
    {
        $this->telephones[] = $telephone;

        return $this;
    }

    /**
     * Remove telephone
     *
     * @param \UAHB\ScolariteBundle\Entity\Telephone $telephone
     */
    public function removeTelephone(\UAHB\ScolariteBundle\Entity\Telephone $telephone)
    {
        $this->telephones->removeElement($telephone);
    }

    /**
     * Get telephones
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTelephones()
    {
        return $this->telephones;
    }

    /**
     * Set pere
     *
     * @param \UAHB\ScolariteBundle\Entity\Personne $pere
     *
     * @return Etudiant
     */
    public function setPere(\UAHB\ScolariteBundle\Entity\Personne $pere = null)
    {
        $this->pere = $pere;

        return $this;
    }

    /**
     * Get pere
     *
     * @return \UAHB\ScolariteBundle\Entity\Personne
     */
    public function getPere()
    {
        return $this->pere;
    }

    /**
     * Set mere
     *
     * @param \UAHB\ScolariteBundle\Entity\Personne $mere
     *
     * @return Etudiant
     */
    public function setMere(\UAHB\ScolariteBundle\Entity\Personne $mere = null)
    {
        $this->mere = $mere;

        return $this;
    }

    /**
     * Get mere
     *
     * @return \UAHB\ScolariteBundle\Entity\Personne
     */
    public function getMere()
    {
        return $this->mere;
    }

    /**
     * Set tuteur
     *
     * @param \UAHB\ScolariteBundle\Entity\Personne $tuteur
     *
     * @return Etudiant
     */
    public function setTuteur(\UAHB\ScolariteBundle\Entity\Personne $tuteur = null)
    {
        $this->tuteur = $tuteur;

        return $this;
    }

    /**
     * Get tuteur
     *
     * @return \UAHB\ScolariteBundle\Entity\Personne
     */
    public function getTuteur()
    {
        return $this->tuteur;
    }

    /**
     * Set personneAcontacter
     *
     * @param \UAHB\ScolariteBundle\Entity\Personne $personneAcontacter
     *
     * @return Etudiant
     */
    public function setPersonneAcontacter(\UAHB\ScolariteBundle\Entity\Personne $personneAcontacter = null)
    {
        $this->personneAcontacter = $personneAcontacter;

        return $this;
    }

    /**
     * Get personneAcontacter
     *
     * @return \UAHB\ScolariteBundle\Entity\Personne
     */
    public function getPersonneAcontacter()
    {
        return $this->personneAcontacter;
    }
}
