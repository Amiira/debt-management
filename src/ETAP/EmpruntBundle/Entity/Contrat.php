<?php

namespace ETAP\EmpruntBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 */
class Contrat
{
    /**
     * @var \DateTime
     */
    private $datesignature;

    /**
     * @var integer
     */
    private $dureeremboursement;

    /**
     * @var string
     */
    private $intervalleremboursement;

    /**
     * @var string
     */
    private $libelle;

    /**
     * @var string
     */
    private $marge;

    /**
     * @var string
     */
    private $monnaieconvention;

    /**
     * @var string
     */
    private $monnaiepayement;

    /**
     * @var integer
     */
    private $montant;

    /**
     * @var integer
     */
    private $nbrtirage;

    /**
     * @var string
     */
    private $tauxdirecteur;

    /**
     * @var integer
     */
    private $refcontrat;

    /**
     * @var \ETAP\EmpruntBundle\Entity\Banque
     */
    private $refbanque;

    /**
     * @var \ETAP\EmpruntBundle\Entity\Besoin
     */
    private $codebesoin;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $refcommission;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->refcommission = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set datesignature
     *
     * @param \DateTime $datesignature
     * @return Contrat
     */
    public function setDatesignature($datesignature)
    {
        $this->datesignature = $datesignature;

        return $this;
    }

    /**
     * Get datesignature
     *
     * @return \DateTime 
     */
    public function getDatesignature()
    {
        return $this->datesignature;
    }

    /**
     * Set dureeremboursement
     *
     * @param integer $dureeremboursement
     * @return Contrat
     */
    public function setDureeremboursement($dureeremboursement)
    {
        $this->dureeremboursement = $dureeremboursement;

        return $this;
    }

    /**
     * Get dureeremboursement
     *
     * @return integer 
     */
    public function getDureeremboursement()
    {
        return $this->dureeremboursement;
    }

    /**
     * Set intervalleremboursement
     *
     * @param string $intervalleremboursement
     * @return Contrat
     */
    public function setIntervalleremboursement($intervalleremboursement)
    {
        $this->intervalleremboursement = $intervalleremboursement;

        return $this;
    }

    /**
     * Get intervalleremboursement
     *
     * @return string 
     */
    public function getIntervalleremboursement()
    {
        return $this->intervalleremboursement;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Contrat
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
     * @return Contrat
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
     * Set monnaieconvention
     *
     * @param string $monnaieconvention
     * @return Contrat
     */
    public function setMonnaieconvention($monnaieconvention)
    {
        $this->monnaieconvention = $monnaieconvention;

        return $this;
    }

    /**
     * Get monnaieconvention
     *
     * @return string 
     */
    public function getMonnaieconvention()
    {
        return $this->monnaieconvention;
    }

    /**
     * Set monnaiepayement
     *
     * @param string $monnaiepayement
     * @return Contrat
     */
    public function setMonnaiepayement($monnaiepayement)
    {
        $this->monnaiepayement = $monnaiepayement;

        return $this;
    }

    /**
     * Get monnaiepayement
     *
     * @return string 
     */
    public function getMonnaiepayement()
    {
        return $this->monnaiepayement;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     * @return Contrat
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return integer 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set nbrtirage
     *
     * @param integer $nbrtirage
     * @return Contrat
     */
    public function setNbrtirage($nbrtirage)
    {
        $this->nbrtirage = $nbrtirage;

        return $this;
    }

    /**
     * Get nbrtirage
     *
     * @return integer 
     */
    public function getNbrtirage()
    {
        return $this->nbrtirage;
    }

    /**
     * Set tauxdirecteur
     *
     * @param string $tauxdirecteur
     * @return Contrat
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
     * Get refcontrat
     *
     * @return integer 
     */
    public function getRefcontrat()
    {
        return $this->refcontrat;
    }

    /**
     * Set refbanque
     *
     * @param \ETAP\EmpruntBundle\Entity\Banque $refbanque
     * @return Contrat
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

    /**
     * Set codebesoin
     *
     * @param \ETAP\EmpruntBundle\Entity\Besoin $codebesoin
     * @return Contrat
     */
    public function setCodebesoin(\ETAP\EmpruntBundle\Entity\Besoin $codebesoin = null)
    {
        $this->codebesoin = $codebesoin;

        return $this;
    }

    /**
     * Get codebesoin
     *
     * @return \ETAP\EmpruntBundle\Entity\Besoin 
     */
    public function getCodebesoin()
    {
        return $this->codebesoin;
    }

    /**
     * Add refcommission
     *
     * @param \ETAP\EmpruntBundle\Entity\Commission $refcommission
     * @return Contrat
     */
    public function addRefcommission(\ETAP\EmpruntBundle\Entity\Commission $refcommission)
    {
        $this->refcommission[] = $refcommission;

        return $this;
    }

    /**
     * Remove refcommission
     *
     * @param \ETAP\EmpruntBundle\Entity\Commission $refcommission
     */
    public function removeRefcommission(\ETAP\EmpruntBundle\Entity\Commission $refcommission)
    {
        $this->refcommission->removeElement($refcommission);
    }

    /**
     * Get refcommission
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRefcommission()
    {
        return $this->refcommission;
    }
}
