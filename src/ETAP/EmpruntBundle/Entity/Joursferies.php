<?php

namespace ETAP\EmpruntBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Joursferies
 */
class Joursferies
{
    /**
     * @var \DateTime
     */
    private $datejf;

    /**
     * @var integer
     */
    private $codejf;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $codepays;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $numremboursement;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codepays = new \Doctrine\Common\Collections\ArrayCollection();
        $this->numremboursement = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set datejf
     *
     * @param \DateTime $datejf
     * @return Joursferies
     */
    public function setDatejf($datejf)
    {
        $this->datejf = $datejf;

        return $this;
    }

    /**
     * Get datejf
     *
     * @return \DateTime 
     */
    public function getDatejf()
    {
        return $this->datejf;
    }

    /**
     * Get codejf
     *
     * @return integer 
     */
    public function getCodejf()
    {
        return $this->codejf;
    }

    /**
     * Add codepays
     *
     * @param \ETAP\EmpruntBundle\Entity\Pays $codepays
     * @return Joursferies
     */
    public function addCodepay(\ETAP\EmpruntBundle\Entity\Pays $codepays)
    {
        $this->codepays[] = $codepays;

        return $this;
    }

    /**
     * Remove codepays
     *
     * @param \ETAP\EmpruntBundle\Entity\Pays $codepays
     */
    public function removeCodepay(\ETAP\EmpruntBundle\Entity\Pays $codepays)
    {
        $this->codepays->removeElement($codepays);
    }

    /**
     * Get codepays
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCodepays()
    {
        return $this->codepays;
    }

    /**
     * Add numremboursement
     *
     * @param \ETAP\EmpruntBundle\Entity\Remboursement $numremboursement
     * @return Joursferies
     */
    public function addNumremboursement(\ETAP\EmpruntBundle\Entity\Remboursement $numremboursement)
    {
        $this->numremboursement[] = $numremboursement;

        return $this;
    }

    /**
     * Remove numremboursement
     *
     * @param \ETAP\EmpruntBundle\Entity\Remboursement $numremboursement
     */
    public function removeNumremboursement(\ETAP\EmpruntBundle\Entity\Remboursement $numremboursement)
    {
        $this->numremboursement->removeElement($numremboursement);
    }

    /**
     * Get numremboursement
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNumremboursement()
    {
        return $this->numremboursement;
    }
}
