<?php

namespace Crystal\planillaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Crystal\planillaBundle\Entity\ctrFaltas
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crystal\planillaBundle\Entity\ctrFaltasRepository")
 */
class ctrFaltas
{
    /**
    * @ORM\ManyToOne(targetEntity="catEmpleado", inversedBy="ctrFaltas")
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
     * @var integer $remunerada
     *
     * @ORM\Column(name="remunerada", type="integer")
     */
    private $remunerada;

    /**
     * @var integer $septimo
     *
     * @ORM\Column(name="septimo", type="integer")
     */
    private $septimo;

    /**
     * @var string $descripcion
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;


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
     * Set remunerada
     *
     * @param integer $remunerada
     * @return ctrFaltas
     */
    public function setRemunerada($remunerada)
    {
        $this->remunerada = $remunerada;
    
        return $this;
    }

    /**
     * Get remunerada
     *
     * @return integer 
     */
    public function getRemunerada()
    {
        return $this->remunerada;
    }

    /**
     * Set septimo
     *
     * @param integer $septimo
     * @return ctrFaltas
     */
    public function setSeptimo($septimo)
    {
        $this->septimo = $septimo;
    
        return $this;
    }

    /**
     * Get septimo
     *
     * @return integer 
     */
    public function getSeptimo()
    {
        return $this->septimo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return ctrFaltas
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
}
