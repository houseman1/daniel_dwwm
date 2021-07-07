<?php

class Agence
{
    private $nom_agence;
    private $adresse_agence;
    private $code_postal_agence;
    private $ville_agence;

    public function __construct($nom_agence, $adresse_agence, $code_postal_agence, $ville_agence)
    {
        $this->nom_agence = $nom_agence;
        $this->adresse_agence = $adresse_agence;
        $this->code_postal_agence = $code_postal_agence;
        $this->ville_agence = $ville_agence;
    }

    //__GET Magic Method - avoids creating a getter for each property
    //$property is defined in the __set() Magic Method
    public function __get($property)
    {
        //property_exists — Checks if the object or class has a property
        //property_exists(object|string $object_or_class, string $property): bool
        if (property_exists($this, $property))
        {
            return $this->$property;
        }
    }

    //__SET Magic Method - avoids creating a setter for each property
    public function __set($property, $value)
    {
        //property_exists — Checks if the object or class has a property
        //property_exists(object|string $object_or_class, string $property): bool
        if (property_exists($this, $property))
        {
            $this->$property = $value;
        }
        return $this;
    }
}


