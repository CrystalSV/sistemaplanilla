<?php

namespace Crystal\planillaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Crystal\planillaBundle\Entity\ctrDescuentosFijos
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crystal\planillaBundle\Entity\ctrDescuentosFijosRepository")
 */
class ctrDescuentosFijos
{
     /**
    * @ORM\ManyToOne(targetEntity="catEmpleado", inversedBy="ctrDescuentosFijos")
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
     * @var string $descripcion
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var \DateTime $fecha
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var float $monto
     *
     * @ORM\Column(name="monto", type="decimal")
     */
    private $monto;

    /**
     * @var float $saldo
     *
     * @ORM\Column(name="saldo", type="decimal")
     */
    private $saldo;


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
     * Set descripcion
     *
     * @param string $descripcion
     * @return ctrDescuentosFijos
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return ctrDescuentosFijos
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set monto
     *
     * @param float $monto
     * @return ctrDescuentosFijos
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;
    
        return $this;
    }

    /**
     * Get monto
     *
     * @return float 
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set saldo
     *
     * @param float $saldo
     * @return ctrDescuentosFijos
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    
        return $this;
    }

    /**
     * Get saldo
     *
     * @return float 
     */
    public function getSaldo()
    {
        return $this->saldo;
    }
}
