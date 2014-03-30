<?php

namespace ETAP\EmpruntBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 */
class Offre
{
    /**
     * @var integer
     */
    private $codeoffre;

    /**
     * @var \DateTime
     */
    private $dateoffre;

    /**
     * @var string
     */
    private $devise;

    /**
     * @var string
     */
    private $libelle;

    /**
     * @var string
     */
    private $marge;

    /**
     * @var integer
     */
    private $montantpropose;

    /**
     * @var string
     */
    private $tauxdirecteur;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \ETAP\EmpruntBundle\Entity\Banque
     */
    private $refbanque;


    /**
     * Set codeoffre
     *
     * @param integer $codeoffre
     * @return Offre
     */
    public function setCodeoffre($codeoffre)
    {
        $this->codeoffre = $codeoffre;

        return $this;
    }

    /**
     * Get codeoffre
     *
     * @return integer 
     */
    public function getCodeoffre()
    {
        return $this->codeoffre;
    }

    /**
     * Set dateoffre
     *
     * @param \DateTime $dateoffre
     * @return Offre
     */
    public function setDateoffre($dateoffre)
    {
        $this->dateoffre = $dateoffre;

        return $this;
    }

    /**
     * Get dateoffre
     *
     * @return \DateTime 
     */
    public function getDateoffre()
    {
        return $this->dateoffre;
    }

    /**
     * Set devise
     *
     * @param string $devise
     * @return Offre
     */
    public function setDevise($devise)
    {
        $this->devise = $devise;

        return $this;
    }

    /**
     * Get devise
     *
     * @return string 
     */
    public function getDevise()
    {
        return $this->devise;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Offre
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
     * Set marge
     *
     * @param string $marge
     * @return Offre
     */
    public function setMarge($marge)
    {
        $this->marge = $marge;

        return $this;
    }

    /**
     * Get marge
     *
     * @return string 
     */
    public function getMarge()
    {
        return $this->marge;
    }

    /**
     * Set montantpropose
     *
     * @param integer $montantpropose
     * @return Offre
     */
    public function setMontantpropose($montantpropose)
    {
        $this->montantpropose = $montantpropose;

        return $this;
    }

    /**
     * Get montantpropose
     *
     * @return integer 
     */
    public function getMontantpropose()
    {
        return $this->montantpropose;
    }

    /**
     * Set tauxdirecteur
     *
     * @param string $tauxdirecteur
     * @return Offre
     */
    public function setTauxdirecteur($tauxdirecteur)
    {
        $this->tauxdirecteur = $tauxdirecteur;

        return $this;
    }

    /**
     * Get tauxdirecteur
     *
     * @return string 
     */
    public function getTauxdirecteur()
    {
        return $this->tauxdirecteur;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set refbanque
     *
     * @param \ETAP\EmpruntBundle\Entity\Banque $refbanque
     * @return Offre
     */
    public function setRefbanque(\ETAP\EmpruntBundle\Entity\Banque $refbanque = null)
    {
        $this->refbanque = $refbanque;

        return $this;
    }

    /**
     * Get refbanque
     *
     * @return \ETAP\EmpruntBundle\Entity\Banque 
     */
    public function getRefbanque()
    {
        return $this->refbanque;
    }
}
