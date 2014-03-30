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
     * @var integer
     */
    private $id;

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
     * Set refbanque
     *
     * @param integer $refbanque
     * @return Banque
     */
    public function setRefbanque($refbanque)
    {
        $this->refbanque = $refbanque;

        return $this;
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
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
