<?php

namespace Crystal\planillaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Crystal\planillaBundle\Entity\ctrDependencia
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crystal\planillaBundle\Entity\ctrDependenciaRepository")
 */
class ctrDependencia
{
     /**
    * @ORM\ManyToOne(targetEntity="catEmpleado", inversedBy="ctrDependencia")
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
     * @var string $dependiente
     *
     * @ORM\Column(name="dependiente", type="string", length=255)
     */
    private $dependiente;

    /**
     * @var string $tipo
     *
     * @ORM\Column(name="tipo", type="string", length=255)
     */
    private $tipo;


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
     * Set dependiente
     *
     * @param string $dependiente
     * @return ctrDependencia
     */
    public function setDependiente($dependiente)
    {
        $this->dependiente = $dependiente;
    
        return $this;
    }

    /**
     * Get dependiente
     *
     * @return string 
     */
    public function getDependiente()
    {
        return $this->dependiente;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return ctrDependencia
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
}
