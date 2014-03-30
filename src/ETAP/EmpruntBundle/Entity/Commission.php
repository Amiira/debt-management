<?php

namespace ETAP\EmpruntBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commission
 */
class Commission
{
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
    private $refcommission;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $refcontrat;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->refcontrat = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Commission
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
     * @return Commission
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
     * Get refcommission
     *
     * @return integer 
     */
    public function getRefcommission()
    {
        return $this->refcommission;
    }

    /**
     * Add refcontrat
     *
     * @param \ETAP\EmpruntBundle\Entity\Contrat $refcontrat
     * @return Commission
     */
    public function addRefcontrat(\ETAP\EmpruntBundle\Entity\Contrat $refcontrat)
    {
        $this->refcontrat[] = $refcontrat;

        return $this;
    }

    /**
     * Remove refcontrat
     *
     * @param \ETAP\EmpruntBundle\Entity\Contrat $refcontrat
     */
    public function removeRefcontrat(\ETAP\EmpruntBundle\Entity\Contrat $refcontrat)
    {
        $this->refcontrat->removeElement($refcontrat);
    }

    /**
     * Get refcontrat
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRefcontrat()
    {
        return $this->refcontrat;
    }
}
