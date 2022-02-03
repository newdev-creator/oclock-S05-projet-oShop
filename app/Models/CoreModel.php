<?php
namespace oShop\Models;

/**
 * Classe dont tout les models héritent
 */

class CoreModel {
    
    /**
     * Auto Increment
     *
     * @var int
     */
    protected $id;
    
    /**
     * Le nom du type
     *
     * @var string
     */
    protected $name;

    /**
     * La date de création de la catégorie
     *
     * @var string
     */
    protected $created_at;

    /**
     * La date de la dernière mise à jour de la catégorie
     *
     * @var string
     */
    protected $updated_at;

    /**
     * Get auto Increment
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /** JE NE VEUX PAS MODIFIER ID 
     * CAR C'EST LA BDD QUI S'EN OCCUPE
     * Set auto Increment
     *
     * @param  int  $id  Auto Increment
     *
     * @return  self
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }
    */ 

    /**
     * Get le nom du type
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set le nom du type
     *
     * @param  string  $name  Le nom du type
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get la date de création de la catégorie
     *
     * @return  string
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set la date de création de la catégorie
     *
     * @param  string  $created_at  La date de création de la catégorie
     *
     * @return  self
     */ 
    public function setCreated_at(string $created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get la date de la dernière mise à jour de la catégorie
     *
     * @return  string
     */ 
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * Set la date de la dernière mise à jour de la catégorie
     *
     * @param  string  $updated_at  La date de la dernière mise à jour de la catégorie
     *
     * @return  self
     */ 
    public function setUpdated_at(string $updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}