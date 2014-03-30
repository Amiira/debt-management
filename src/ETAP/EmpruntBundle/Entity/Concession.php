<?php

namespace ETAP\EmpruntBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Concession
 */
class Concession
{
    /**
     * @var \DateTime
     */
    private $datecreation;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var integer
     */
    private $valeurrealisation;

    /**
     * @var integer
     */
    private $codeconcession;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reftirage;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $codebesoin;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reftirage = new \Doctrine\Common\Collections\ArrayCollection();
        $this->codebesoin = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     * @return Concession
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime 
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Concession
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Concession
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
     * Set valeurrealisation
     *
     * @param integer $valeurrealisation
     * @return Concession
     */
    public function setValeurrealisation($valeurrealisation)
    {
        $this->valeurrealisation = $valeurrealisation;

        return $this;
    }

    /**
     * Get valeurrealisation
     *
     * @return integer 
     */
    public function getValeurrealisation()
    {
        return $this->valeurrealisation;
    }

    /**
     * Get codeconcession
     *
     * @return integer 
     */
    public function getCodeconcession()
    {
        return $this->codeconcession;
    }

    /**
     * Add reftirage
     *
     * @param \ETAP\EmpruntBundle\Entity\Tirage $reftirage
     * @return Concession
     */
    public function addReftirage(\ETAP\EmpruntBundle\Entity\Tirage $reftirage)
    {
        $this->reftirage[] = $reftirage;

        return $this;
    }

    /**
     * Remove reftirage
     *
     * @param \ETAP\EmpruntBundle\Entity\Tirage $reftirage
     */
    public function removeReftirage(\ETAP\EmpruntBundle\Entity\Tirage $reftirage)
    {
        $this->reftirage->removeElement($reftirage);
    }

    /**
     * Get reftirage
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReftirage()
    {
        return $this->reftirage;
    }

    /**
     * Add codebesoin
     *
     * @param \ETAP\EmpruntBundle\Entity\Besoin $codebesoin
     * @return Concession
     */
    public function addCodebesoin(\ETAP\EmpruntBundle\Entity\Besoin $codebesoin)
    {
        $this->codebesoin[] = $codebesoin;

        return $this;
    }

    /**
     * Remove codebesoin
     *
     * @param \ETAP\EmpruntBundle\Entity\Besoin $codebesoin
     */
    public function removeCodebesoin(\ETAP\EmpruntBundle\Entity\Besoin $codebesoin)
    {
        $this->codebesoin->removeElement($codebesoin);
    }

    /**
     * Get codebesoin
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCodebesoin()
    {
        return $this->codebesoin;
    }
}
