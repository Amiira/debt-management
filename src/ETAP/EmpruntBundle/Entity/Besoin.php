<?php

namespace ETAP\EmpruntBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Besoin
 */
class Besoin
{
    /**
     * @var \DateTime
     */
    private $datebesoin;

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
    private $valeur;

    /**
     * @var integer
     */
    private $codebesoin;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $codeconcession;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codeconcession = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set datebesoin
     *
     * @param \DateTime $datebesoin
     * @return Besoin
     */
    public function setDatebesoin($datebesoin)
    {
        $this->datebesoin = $datebesoin;

        return $this;
    }

    /**
     * Get datebesoin
     *
     * @return \DateTime 
     */
    public function getDatebesoin()
    {
        return $this->datebesoin;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Besoin
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
     * @return Besoin
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
     * Set valeur
     *
     * @param integer $valeur
     * @return Besoin
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return integer 
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Get codebesoin
     *
     * @return integer 
     */
    public function getCodebesoin()
    {
        return $this->codebesoin;
    }

    /**
     * Add codeconcession
     *
     * @param \ETAP\EmpruntBundle\Entity\Concession $codeconcession
     * @return Besoin
     */
    public function addCodeconcession(\ETAP\EmpruntBundle\Entity\Concession $codeconcession)
    {
        $this->codeconcession[] = $codeconcession;

        return $this;
    }

    /**
     * Remove codeconcession
     *
     * @param \ETAP\EmpruntBundle\Entity\Concession $codeconcession
     */
    public function removeCodeconcession(\ETAP\EmpruntBundle\Entity\Concession $codeconcession)
    {
        $this->codeconcession->removeElement($codeconcession);
    }

    /**
     * Get codeconcession
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCodeconcession()
    {
        return $this->codeconcession;
    }
}
