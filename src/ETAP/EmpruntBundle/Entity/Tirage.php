<?php

namespace ETAP\EmpruntBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tirage
 */
class Tirage
{
    /**
     * @var \DateTime
     */
    private $datevaleur;

    /**
     * @var string
     */
    private $montant;

    /**
     * @var integer
     */
    private $reftirage;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \ETAP\EmpruntBundle\Entity\Contrat
     */
    private $refcontrat;

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
     * Set datevaleur
     *
     * @param \DateTime $datevaleur
     * @return Tirage
     */
    public function setDatevaleur($datevaleur)
    {
        $this->datevaleur = $datevaleur;

        return $this;
    }

    /**
     * Get datevaleur
     *
     * @return \DateTime 
     */
    public function getDatevaleur()
    {
        return $this->datevaleur;
    }

    /**
     * Set montant
     *
     * @param string $montant
     * @return Tirage
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return string 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set reftirage
     *
     * @param integer $reftirage
     * @return Tirage
     */
    public function setReftirage($reftirage)
    {
        $this->reftirage = $reftirage;

        return $this;
    }

    /**
     * Get reftirage
     *
     * @return integer 
     */
    public function getReftirage()
    {
        return $this->reftirage;
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
     * Set refcontrat
     *
     * @param \ETAP\EmpruntBundle\Entity\Contrat $refcontrat
     * @return Tirage
     */
    public function setRefcontrat(\ETAP\EmpruntBundle\Entity\Contrat $refcontrat = null)
    {
        $this->refcontrat = $refcontrat;

        return $this;
    }

    /**
     * Get refcontrat
     *
     * @return \ETAP\EmpruntBundle\Entity\Contrat 
     */
    public function getRefcontrat()
    {
        return $this->refcontrat;
    }

    /**
     * Add codeconcession
     *
     * @param \ETAP\EmpruntBundle\Entity\Concession $codeconcession
     * @return Tirage
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
