<?php

namespace Crystal\planillaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Crystal\planillaBundle\Entity\ctrFechaEmpleado
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crystal\planillaBundle\Entity\ctrFechaEmpleadoRepository")
 */
class ctrFechaEmpleado
{
    /**
    * @ORM\ManyToOne(targetEntity="catEmpleado", inversedBy="ctrFechaEmpleado")
    * @ORM\JoinColumn(name="idEmpleado", referencedColumnName="id")
    * @return integer
    */
    private $idEmpleado ;
    public function setidEmpleado(\Crystal\planillaBundle\Entity\catEmpleado $idEmpleado)
    {
        $this->idEmpleado = $idEmpleado;
    }
    public function getidEmpleado()
    {
        return $this->idEmpleado;
    }
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime $fechaVacacion
     *
     * @ORM\Column(name="fechaVacacion", type="date")
     */
    private $fechaVacacion;

    /**
     * @var \DateTime $fechaAguinaldo
     *
     * @ORM\Column(name="fechaAguinaldo", type="date")
     */
    private $fechaAguinaldo;

    /**
     * @var \DateTime $fechaIndemnizacion
     *
     * @ORM\Column(name="fechaIndemnizacion", type="date")
     */
    private $fechaIndemnizacion;


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
     * Set fechaVacacion
     *
     * @param \DateTime $fechaVacacion
     * @return ctrFechaEmpleado
     */
    public function setFechaVacacion($fechaVacacion)
    {
        $this->fechaVacacion = $fechaVacacion;
    
        return $this;
    }

    /**
     * Get fechaVacacion
     *
     * @return \DateTime 
     */
    public function getFechaVacacion()
    {
        return $this->fechaVacacion;
    }

    /**
     * Set fechaAguinaldo
     *
     * @param \DateTime $fechaAguinaldo
     * @return ctrFechaEmpleado
     */
    public function setFechaAguinaldo($fechaAguinaldo)
    {
        $this->fechaAguinaldo = $fechaAguinaldo;
    
        return $this;
    }

    /**
     * Get fechaAguinaldo
     *
     * @return \DateTime 
     */
    public function getFechaAguinaldo()
    {
        return $this->fechaAguinaldo;
    }

    /**
     * Set fechaIndemnizacion
     *
     * @param \DateTime $fechaIndemnizacion
     * @return ctrFechaEmpleado
     */
    public function setFechaIndemnizacion($fechaIndemnizacion)
    {
        $this->fechaIndemnizacion = $fechaIndemnizacion;
    
        return $this;
    }

    /**
     * Get fechaIndemnizacion
     *
     * @return \DateTime 
     */
    public function getFechaIndemnizacion()
    {
        return $this->fechaIndemnizacion;
    }
}
