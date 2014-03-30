<?php

namespace ETAP\EmpruntBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 */
class Pays
{
    /**
     * @var integer
     */
    private $codepays;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var integer
     */
    private $id;

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
     * Set codepays
     *
     * @param integer $codepays
     * @return Pays
     */
    public function setCodepays($codepays)
    {
        $this->codepays = $codepays;

        return $this;
    }

    /**
     * Get codepays
     *
     * @return integer 
     */
    public function getCodepays()
    {
        return $this->codepays;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Pays
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add codejf
     *
     * @param \ETAP\EmpruntBundle\Entity\Joursferies $codejf
     * @return Pays
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
