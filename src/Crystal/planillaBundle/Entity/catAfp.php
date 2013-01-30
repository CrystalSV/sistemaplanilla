<?php

namespace Crystal\planillaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Crystal\planillaBundle\Entity\catAfp
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crystal\planillaBundle\Entity\catAfpRepository")
 */
class catAfp
{
    /**
    * @ORM\OneToMany(targetEntity="catEmpleado", mappedBy="idAfp")
    */
    private $empleados;
    public function __CONSTRUCT()
    {
        $this->empleados = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function addEmpleados(\Crystal\planillaBundle\Entity\catEmpleado $empleados)
    {
        $this->empleados[] = $empleados; 
    }

    public function getEmpleados()
    {
        return $this->empleados;
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
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string $porcentajeEmpleado
     *
     * @ORM\Column(name="porcentajeEmpleado", type="string", length=255)
     */
    private $porcentajeEmpleado;

    /**
     * @var string $porcentajePatrono
     *
     * @ORM\Column(name="porcentajePatrono", type="string", length=255)
     */
    private $porcentajePatrono;


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
     * Set nombre
     *
     * @param string $nombre
     * @return catAfp
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
     * Set porcentajeEmpleado
     *
     * @param string $porcentajeEmpleado
     * @return catAfp
     */
    public function setPorcentajeEmpleado($porcentajeEmpleado)
    {
        $this->porcentajeEmpleado = $porcentajeEmpleado;
    
        return $this;
    }

    /**
     * Get porcentajeEmpleado
     *
     * @return string 
     */
    public function getPorcentajeEmpleado()
    {
        return $this->porcentajeEmpleado;
    }

    /**
     * Set porcentajePatrono
     *
     * @param string $porcentajePatrono
     * @return catAfp
     */
    public function setPorcentajePatrono($porcentajePatrono)
    {
        $this->porcentajePatrono = $porcentajePatrono;
    
        return $this;
    }

    /**
     * Get porcentajePatrono
     *
     * @return string 
     */
    public function getPorcentajePatrono()
    {
        return $this->porcentajePatrono;
    }
}
