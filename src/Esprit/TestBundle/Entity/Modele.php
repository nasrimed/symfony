<?php
/**
 * Created by PhpStorm.
 * User: Mohamed Nasri
 * Date: 15/01/2019
 * Time: 09:24
 */

namespace Esprit\TestBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @Assert\NotBlank
     */
    private $libelle ;
    /**
     * @ORM\Column(type="string",length=25)
     */
    private $pays ;
    /**
     * @ORM\Column(type="string",length=25)
     */
    private $agent ;
    /**
     * @Assert\DateTime()
     */
    private $publishedAt;

    /**
     * @return \DateTime
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * @param \DateTime $publishedAt
     */
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;
    }
    /**
     * @ORM\Column(type="string",length=25)
     * @Assert\Email(
     *     message="le champ email  '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     */
    private $emailagent ;
    /**
     * @ORM\Column(type="string",length=25)
     */
    private $description ;


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

    /**
     * @return mixed
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * @param mixed $agent
     */
    public function setAgent($agent)
    {
        $this->agent = $agent;
    }

    /**
     * @return mixed
     */
    public function getEmailagent()
    {
        return $this->emailagent;
    }

    /**
     * @param mixed $emailagent
     */
    public function setEmailagent($emailagent)
    {
        $this->emailagent = $emailagent;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }



}