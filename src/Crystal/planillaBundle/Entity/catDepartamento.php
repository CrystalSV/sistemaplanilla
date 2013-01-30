<?php

namespace Crystal\planillaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Crystal\planillaBundle\Entity\catDepartamento
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crystal\planillaBundle\Entity\catDepartamentoRepository")
 */
class catDepartamento
{
    /**
    * @ORM\OneToMany(targetEntity="catEmpleado", mappedBy="idDepartamento")
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
     * @return catDepartamento
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
}
