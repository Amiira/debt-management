<?php

namespace ETAP\EmpruntBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profil
 */
class Profil
{
    /**
     * @var string
     */
    private $libelle;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Profil
     */
    public function __toString()
    {
     return $this->libelle;
    }
    
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
     * Get codeprofil
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
