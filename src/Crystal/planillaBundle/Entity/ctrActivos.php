<?php

namespace Crystal\planillaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Crystal\planillaBundle\Entity\ctrActivos
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crystal\planillaBundle\Entity\ctrActivosRepository")
 */
class ctrActivos
{
     /**
    * @ORM\ManyToOne(targetEntity="catEmpresa", inversedBy="ctrActivos")
    * @ORM\JoinColumn(name="idEmpresa", referencedColumnName="id")
    * @return integer
    */
    private $idEmpresa ;
    public function setidEmpresa(\Crystal\planillaBundle\Entity\catEmpresa $idEmpresa)
    {
        $this->idEmpresa = $idEmpresa;
    }
    public function getidEmpresa()
    {
        return $this->idEmpresa;
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
     * @var integer $codigo
     *
     * @ORM\Column(name="codigo", type="integer")
     */
    private $codigo;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string $descripcion
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var string $tipo
     *
     * @ORM\Column(name="tipo", type="string", length=255)
     */
    private $tipo;

    /**
     * @var string $depreciacion
     *
     * @ORM\Column(name="depreciacion", type="string", length=255)
     */
    private $depreciacion;

    /**
     * @var string $tiempoEstimado
     *
     * @ORM\Column(name="tiempoEstimado", type="string", length=255)
     */
    private $tiempoEstimado;


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
     * Set codigo
     *
     * @param integer $codigo
     * @return ctrActivos
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    
        return $this;
    }

    /**
     * Get codigo
     *
     * @return integer 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return ctrActivos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return ctrActivos
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
     * Set tipo
     *
     * @param string $tipo
     * @return ctrActivos
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set depreciacion
     *
     * @param string $depreciacion
     * @return ctrActivos
     */
    public function setDepreciacion($depreciacion)
    {
        $this->depreciacion = $depreciacion;
    
        return $this;
    }

    /**
     * Get depreciacion
     *
     * @return string 
     */
    public function getDepreciacion()
    {
        return $this->depreciacion;
    }

    /**
     * Set tiempoEstimado
     *
     * @param string $tiempoEstimado
     * @return ctrActivos
     */
    public function setTiempoEstimado($tiempoEstimado)
    {
        $this->tiempoEstimado = $tiempoEstimado;
    
        return $this;
    }

    /**
     * Get tiempoEstimado
     *
     * @return string 
     */
    public function getTiempoEstimado()
    {
        return $this->tiempoEstimado;
    }
}
