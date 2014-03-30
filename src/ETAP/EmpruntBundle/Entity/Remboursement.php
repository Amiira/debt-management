<?php

namespace ETAP\EmpruntBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Remboursement
 */
class Remboursement
{
    /**
     * @var \DateTime
     */
    private $dateecheance;

    /**
     * @var string
     */
    private $libor;

    /**
     * @var string
     */
    private $montantinteret;

    /**
     * @var string
     */
    private $montantprincipal;

    /**
     * @var string
     */
    private $montantrestantdu;

    /**
     * @var string
     */
    private $montanttotal;

    /**
     * @var integer
     */
    private $nbrjours;

    /**
     * @var integer
     */
    private $numremboursement;

    /**
     * @var string
     */
    private $remboursementtotal;

    /**
     * @var string
     */
    private $tauxinteret;

    /**
     * @var string
     */
    private $totalinteret;

    /**
     * @var string
     */
    private $totalprincipal;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \ETAP\EmpruntBundle\Entity\Tirage
     */
    private $reftirage;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $codejf;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codejf = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set dateecheance
     *
     * @param \DateTime $dateecheance
     * @return Remboursement
     */
    public function setDateecheance($dateecheance)
    {
        $this->dateecheance = $dateecheance;

        return $this;
    }

    /**
     * Get dateecheance
     *
     * @return \DateTime 
     */
    public function getDateecheance()
    {
        return $this->dateecheance;
    }

    /**
     * Set libor
     *
     * @param string $libor
     * @return Remboursement
     */
    public function setLibor($libor)
    {
        $this->libor = $libor;

        return $this;
    }

    /**
     * Get libor
     *
     * @return string 
     */
    public function getLibor()
    {
        return $this->libor;
    }

    /**
     * Set montantinteret
     *
     * @param string $montantinteret
     * @return Remboursement
     */
    public function setMontantinteret($montantinteret)
    {
        $this->montantinteret = $montantinteret;

        return $this;
    }

    /**
     * Get montantinteret
     *
     * @return string 
     */
    public function getMontantinteret()
    {
        return $this->montantinteret;
    }

    /**
     * Set montantprincipal
     *
     * @param string $montantprincipal
     * @return Remboursement
     */
    public function setMontantprincipal($montantprincipal)
    {
        $this->montantprincipal = $montantprincipal;

        return $this;
    }

    /**
     * Get montantprincipal
     *
     * @return string 
     */
    public function getMontantprincipal()
    {
        return $this->montantprincipal;
    }

    /**
     * Set montantrestantdu
     *
     * @param string $montantrestantdu
     * @return Remboursement
     */
    public function setMontantrestantdu($montantrestantdu)
    {
        $this->montantrestantdu = $montantrestantdu;

        return $this;
    }

    /**
     * Get montantrestantdu
     *
     * @return string 
     */
    public function getMontantrestantdu()
    {
        return $this->montantrestantdu;
    }

    /**
     * Set montanttotal
     *
     * @param string $montanttotal
     * @return Remboursement
     */
    public function setMontanttotal($montanttotal)
    {
        $this->montanttotal = $montanttotal;

        return $this;
    }

    /**
     * Get montanttotal
     *
     * @return string 
     */
    public function getMontanttotal()
    {
        return $this->montanttotal;
    }

    /**
     * Set nbrjours
     *
     * @param integer $nbrjours
     * @return Remboursement
     */
    public function setNbrjours($nbrjours)
    {
        $this->nbrjours = $nbrjours;

        return $this;
    }

    /**
     * Get nbrjours
     *
     * @return integer 
     */
    public function getNbrjours()
    {
        return $this->nbrjours;
    }

    /**
     * Set numremboursement
     *
     * @param integer $numremboursement
     * @return Remboursement
     */
    public function setNumremboursement($numremboursement)
    {
        $this->numremboursement = $numremboursement;

        return $this;
    }

    /**
     * Get numremboursement
     *
     * @return integer 
     */
    public function getNumremboursement()
    {
        return $this->numremboursement;
    }

    /**
     * Set remboursementtotal
     *
     * @param string $remboursementtotal
     * @return Remboursement
     */
    public function setRemboursementtotal($remboursementtotal)
    {
        $this->remboursementtotal = $remboursementtotal;

        return $this;
    }

    /**
     * Get remboursementtotal
     *
     * @return string 
     */
    public function getRemboursementtotal()
    {
        return $this->remboursementtotal;
    }

    /**
     * Set tauxinteret
     *
     * @param string $tauxinteret
     * @return Remboursement
     */
    public function setTauxinteret($tauxinteret)
    {
        $this->tauxinteret = $tauxinteret;

        return $this;
    }

    /**
     * Get tauxinteret
     *
     * @return string 
     */
    public function getTauxinteret()
    {
        return $this->tauxinteret;
    }

    /**
     * Set totalinteret
     *
     * @param string $totalinteret
     * @return Remboursement
     */
    public function setTotalinteret($totalinteret)
    {
        $this->totalinteret = $totalinteret;

        return $this;
    }

    /**
     * Get totalinteret
     *
     * @return string 
     */
    public function getTotalinteret()
    {
        return $this->totalinteret;
    }

    /**
     * Set totalprincipal
     *
     * @param string $totalprincipal
     * @return Remboursement
     */
    public function setTotalprincipal($totalprincipal)
    {
        $this->totalprincipal = $totalprincipal;

        return $this;
    }

    /**
     * Get totalprincipal
     *
     * @return string 
     */
    public function getTotalprincipal()
    {
        return $this->totalprincipal;
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
     * Set reftirage
     *
     * @param \ETAP\EmpruntBundle\Entity\Tirage $reftirage
     * @return Remboursement
     */
    public function setReftirage(\ETAP\EmpruntBundle\Entity\Tirage $reftirage = null)
    {
        $this->reftirage = $reftirage;

        return $this;
    }

    /**
     * Get reftirage
     *
     * @return \ETAP\EmpruntBundle\Entity\Tirage 
     */
    public function getReftirage()
    {
        return $this->reftirage;
    }

    /**
     * Add codejf
     *
     * @param \ETAP\EmpruntBundle\Entity\Joursferies $codejf
     * @return Remboursement
     */
    public function addCodejf(\ETAP\EmpruntBundle\Entity\Joursferies $codejf)
    {
        $this->codejf[] = $codejf;

        return $this;
    }

    /**
     * Remove codejf
     *
     * @param \ETAP\EmpruntBundle\Entity\Joursferies $codejf
     */
    public function removeCodejf(\ETAP\EmpruntBundle\Entity\Joursferies $codejf)
    {
        $this->codejf->removeElement($codejf);
    }

    /**
     * Get codejf
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCodejf()
    {
        return $this->codejf;
    }
}
