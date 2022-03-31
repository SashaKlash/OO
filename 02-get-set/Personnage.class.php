<?php

class Personnages
{
    // Attributs ou propriétés
    private $_id;
    private $_nom;
    private $_forcePerso;
    private $_degat;
    private $_niveau;
    private $_experience;
    private $_vie;

    // Constantes
    const VIE_DE_BASE = 100;

    // Mhéthodes

    // Getters : permettent d'afficher des attributs private ou protected de l'instance crée.
    public function getId()
    {
        return $this->_id;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function getForcePerso()
    {
        return $this->_forcePerso;
    }

    public function getDegat()
    {
        return $this->_degat;
    }

    public function getNiveau()
    {
        return $this->_niveau;
    }

    public function getExperience()
    {
        return $this->_experience;
    }

    public function getVie()
    {
        return $this->_vie;
    }

    // Setters (ou mutators) : permettent de mofifier dans la classe les attributs private ou protected de l'instance créée.

    public function setNom(string $nom)
    {
        if (is_string($nom) && strlen($nom) > 4 && strlen($nom) < 100) {
            $this->_nom = $nom;
        } else {
            trigger_error("Nom non conforme", E_USER_NOTICE);
        }
    }

    public function setForcePerso($forcePerso)
    {
        if (is_int($forcePerso) && $forcePerso <= 100) {
            $this->_forcePerso = $forcePerso;
        }
    }

    public function setDegat(float $degat)
    {
        $this->_degat = $degat;
    }

    public function setNiveau(int $niveau)
    {
        $this->_niveau = $niveau;
    }

    public function setExperience(int $experience)
    {
        $this->_experience = $experience;
    }

    public function setVie(int $vie)
    {
        $this->_vie = $vie;
    }
}
