<?php

namespace My\schoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coefficient
 *
 * @ORM\Table(name="coefficient")
 * @ORM\Entity(repositoryClass="My\schoolBundle\Repository\CoefficientRepository")
 */
class Coefficient
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="coef", type="integer")
     */
    private $coef;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Matiere")
     */
    private $matiers;
    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Classe")
     */
    private $classe;
    function getMatiers() {
        return $this->matiers;
    }

    function getClasse() {
        return $this->classe;
    }

    function setMatiers($matiers) {
        $this->matiers = $matiers;
    }

    function setClasse($classe) {
        $this->classe = $classe;
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
     * Set coef
     *
     * @param integer $coef
     * @return Coefficient
     */
    public function setCoef($coef)
    {
        $this->coef = $coef;

        return $this;
    }

    /**
     * Get coef
     *
     * @return integer 
     */
    public function getCoef()
    {
        return $this->coef;
    }
}
