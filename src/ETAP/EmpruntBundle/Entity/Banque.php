<?php

namespace ETAP\EmpruntBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Banque
 */
class Banque
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var integer
     */
    private $refbanque;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $refdemande;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->refdemande = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Banque
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
     * Get refbanque
     *
     * @return integer 
     */
    public function getRefbanque()
    {
        return $this->refbanque;
    }

    /**
     * Add refdemande
     *
     * @param \ETAP\EmpruntBundle\Entity\Demande $refdemande
     * @return Banque
     */
    public function addRefdemande(\ETAP\EmpruntBundle\Entity\Demande $refdemande)
    {
        $this->refdemande[] = $refdemande;

        return $this;
    }

    /**
     * Remove refdemande
     *
     * @param \ETAP\EmpruntBundle\Entity\Demande $refdemande
     */
    public function removeRefdemande(\ETAP\EmpruntBundle\Entity\Demande $refdemande)
    {
        $this->refdemande->removeElement($refdemande);
    }

    /**
     * Get refdemande
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRefdemande()
    {
        return $this->refdemande;
    }
}
