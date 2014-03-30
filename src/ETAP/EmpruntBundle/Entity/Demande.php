<?php

namespace ETAP\EmpruntBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demande
 */
class Demande
{
    /**
     * @var \DateTime
     */
    private $datedemande;

    /**
     * @var integer
     */
    private $montantemprunt;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var integer
     */
    private $refdemande;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $refbanque;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->refbanque = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set datedemande
     *
     * @param \DateTime $datedemande
     * @return Demande
     */
    public function setDatedemande($datedemande)
    {
        $this->datedemande = $datedemande;

        return $this;
    }

    /**
     * Get datedemande
     *
     * @return \DateTime 
     */
    public function getDatedemande()
    {
        return $this->datedemande;
    }

    /**
     * Set montantemprunt
     *
     * @param integer $montantemprunt
     * @return Demande
     */
    public function setMontantemprunt($montantemprunt)
    {
        $this->montantemprunt = $montantemprunt;

        return $this;
    }

    /**
     * Get montantemprunt
     *
     * @return integer 
     */
    public function getMontantemprunt()
    {
        return $this->montantemprunt;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Demande
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
     * Get refdemande
     *
     * @return integer 
     */
    public function getRefdemande()
    {
        return $this->refdemande;
    }

    /**
     * Add refbanque
     *
     * @param \ETAP\EmpruntBundle\Entity\Banque $refbanque
     * @return Demande
     */
    public function addRefbanque(\ETAP\EmpruntBundle\Entity\Banque $refbanque)
    {
        $this->refbanque[] = $refbanque;

        return $this;
    }

    /**
     * Remove refbanque
     *
     * @param \ETAP\EmpruntBundle\Entity\Banque $refbanque
     */
    public function removeRefbanque(\ETAP\EmpruntBundle\Entity\Banque $refbanque)
    {
        $this->refbanque->removeElement($refbanque);
    }

    /**
     * Get refbanque
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRefbanque()
    {
        return $this->refbanque;
    }
}
