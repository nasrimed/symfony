<?php
/**
 * Created by PhpStorm.
 * User: Mohamed Nasri
 * Date: 15/01/2019
 * Time: 09:24
 */

namespace Esprit\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Modele
 * @package Esprit\TestBundle\Entity
 */

/**
 * Class Modele
 * @ORM\Entity()
 */
class Modele
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id ;
    /**
     * @ORM\Column(type="string",length=25)
     */
    private $libelle ;
    /**
     * @ORM\Column(type="string",length=25)
     */
    private $pays ;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return mixed
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * @param mixed $pays
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    }



}