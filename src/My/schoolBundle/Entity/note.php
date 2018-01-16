<?php

namespace My\schoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * note
 *
 * @ORM\Table(name="note")
 * @ORM\Entity(repositoryClass="My\schoolBundle\Repository\noteRepository")
 */
class note
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
     * @var string
     *
     * @ORM\Column(name="semestre", type="string", length=255)
     */
    private $semestre;

    /**
     * @var float
     *
     * @ORM\Column(name="note_ds", type="float")
     */
    private $noteDs;

    /**
     * @var float
     *
     * @ORM\Column(name="note_exam", type="float")
     */
    private $noteExam;

    /**
     * @var float
     *
     * @ORM\Column(name="pourcentage_ds", type="float")
     */
    private $pourcentageDs;

    /**
     * @var float
     *
     * @ORM\Column(name="pourcentage_exam", type="float")
     */
    private $pourcentageExam;

    /**
     * @var float
     *
     * @ORM\Column(name="moyenne", type="float")
     */
    private $moyenne;

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
    private $Classe;
    function getClasse() {
        return $this->Classe;
    }

    function setClasse($Classe) {
        $this->Classe = $Classe;
    }

        
    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Student")
     */
    private $Student;
    function getMatiers() {
        return $this->matiers;
    }

    function getStudent() {
        return $this->Student;
    }

    function setMatiers($matiers) {
        $this->matiers = $matiers;
    }

    function setStudent($Student) {
        $this->Student = $Student;
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
     * Set semestre
     *
     * @param string $semestre
     * @return note
     */
    public function setSemestre($semestre)
    {
        $this->semestre = $semestre;

        return $this;
    }

    /**
     * Get semestre
     *
     * @return string 
     */
    public function getSemestre()
    {
        return $this->semestre;
    }

    /**
     * Set noteDs
     *
     * @param float $noteDs
     * @return note
     */
    public function setNoteDs($noteDs)
    {
        $this->noteDs = $noteDs;

        return $this;
    }

    /**
     * Get noteDs
     *
     * @return float 
     */
    public function getNoteDs()
    {
        return $this->noteDs;
    }

    /**
     * Set noteExam
     *
     * @param float $noteExam
     * @return note
     */
    public function setNoteExam($noteExam)
    {
        $this->noteExam = $noteExam;

        return $this;
    }

    /**
     * Get noteExam
     *
     * @return float 
     */
    public function getNoteExam()
    {
        return $this->noteExam;
    }

    /**
     * Set pourcentageDs
     *
     * @param float $pourcentageDs
     * @return note
     */
    public function setPourcentageDs($pourcentageDs)
    {
        $this->pourcentageDs = $pourcentageDs;

        return $this;
    }

    /**
     * Get pourcentageDs
     *
     * @return float 
     */
    public function getPourcentageDs()
    {
        return $this->pourcentageDs;
    }

    /**
     * Set pourcentageExam
     *
     * @param float $pourcentageExam
     * @return note
     */
    public function setPourcentageExam($pourcentageExam)
    {
        $this->pourcentageExam = $pourcentageExam;

        return $this;
    }

    /**
     * Get pourcentageExam
     *
     * @return float 
     */
    public function getPourcentageExam()
    {
        return $this->pourcentageExam;
    }

    /**
     * Set moyenne
     *
     * @param float $moyenne
     * @return note
     */
    public function setMoyenne($moyenne)
    {
        $this->moyenne = $moyenne;

        return $this;
    }

    /**
     * Get moyenne
     *
     * @return float 
     */
    public function getMoyenne()
    {
        return $this->moyenne;
    }
}
