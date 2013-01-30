<?php

namespace Crystal\planillaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Crystal\planillaBundle\Entity\catEmpresa
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crystal\planillaBundle\Entity\catEmpresaRepository")
 */
class catEmpresa
{
    /**
    * @ORM\OneToMany(targetEntity="ctrActivos", mappedBy="idActivos")
    */
    private $activos;
    public function __CONSTRUCT()
    {
        $this->activos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function addActivos(\CrystalCard\BaseBundle\Entity\ctrActivos $activos)
    {
        $this->activos[] = $activos; 
    }

    public function getActivos()
    {
        return $this->activos;
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
     * @var string $direccion
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var string $telefono
     *
     * @ORM\Column(name="telefono", type="string", length=255)
     */
    private $telefono;

    /**
     * @var string $nit
     *
     * @ORM\Column(name="nit", type="string", length=255)
     */
    private $nit;

    /**
     * @var string $patronoIsss
     *
     * @ORM\Column(name="patronoIsss", type="string", length=255)
     */
    private $patronoIsss;

    /**
     * @var string $cuentaBancaria
     *
     * @ORM\Column(name="cuentaBancaria", type="string", length=255)
     */
    private $cuentaBancaria;

    /**
     * @var string $cuentaIsss
     *
     * @ORM\Column(name="cuentaIsss", type="string", length=255)
     */
    private $cuentaIsss;

    /**
     * @var string $cuentaAfp
     *
     * @ORM\Column(name="cuentaAfp", type="string", length=255)
     */
    private $cuentaAfp;

    /**
     * @var string $cuentaRenta
     *
     * @ORM\Column(name="cuentaRenta", type="string", length=255)
     */
    private $cuentaRenta;


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
     * @return catEmpresa
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
     * Set direccion
     *
     * @param string $direccion
     * @return catEmpresa
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return catEmpresa
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set nit
     *
     * @param string $nit
     * @return catEmpresa
     */
    public function setNit($nit)
    {
        $this->nit = $nit;
    
        return $this;
    }

    /**
     * Get nit
     *
     * @return string 
     */
    public function getNit()
    {
        return $this->nit;
    }

    /**
     * Set patronoIsss
     *
     * @param string $patronoIsss
     * @return catEmpresa
     */
    public function setPatronoIsss($patronoIsss)
    {
        $this->patronoIsss = $patronoIsss;
    
        return $this;
    }

    /**
     * Get patronoIsss
     *
     * @return string 
     */
    public function getPatronoIsss()
    {
        return $this->patronoIsss;
    }

    /**
     * Set cuentaBancaria
     *
     * @param string $cuentaBancaria
     * @return catEmpresa
     */
    public function setCuentaBancaria($cuentaBancaria)
    {
        $this->cuentaBancaria = $cuentaBancaria;
    
        return $this;
    }

    /**
     * Get cuentaBancaria
     *
     * @return string 
     */
    public function getCuentaBancaria()
    {
        return $this->cuentaBancaria;
    }

    /**
     * Set cuentaIsss
     *
     * @param string $cuentaIsss
     * @return catEmpresa
     */
    public function setCuentaIsss($cuentaIsss)
    {
        $this->cuentaIsss = $cuentaIsss;
    
        return $this;
    }

    /**
     * Get cuentaIsss
     *
     * @return string 
     */
    public function getCuentaIsss()
    {
        return $this->cuentaIsss;
    }

    /**
     * Set cuentaAfp
     *
     * @param string $cuentaAfp
     * @return catEmpresa
     */
    public function setCuentaAfp($cuentaAfp)
    {
        $this->cuentaAfp = $cuentaAfp;
    
        return $this;
    }

    /**
     * Get cuentaAfp
     *
     * @return string 
     */
    public function getCuentaAfp()
    {
        return $this->cuentaAfp;
    }

    /**
     * Set cuentaRenta
     *
     * @param string $cuentaRenta
     * @return catEmpresa
     */
    public function setCuentaRenta($cuentaRenta)
    {
        $this->cuentaRenta = $cuentaRenta;
    
        return $this;
    }

    /**
     * Get cuentaRenta
     *
     * @return string 
     */
    public function getCuentaRenta()
    {
        return $this->cuentaRenta;
    }
}
