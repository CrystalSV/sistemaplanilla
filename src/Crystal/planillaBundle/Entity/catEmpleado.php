<?php

namespace Crystal\planillaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Crystal\planillaBundle\Entity\catEmpleado
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crystal\planillaBundle\Entity\catEmpleadoRepository")
 */
class catEmpleado
{
    /**
    * @ORM\ManyToOne(targetEntity="catDepartamento", inversedBy="catEmpleado")
    * @ORM\JoinColumn(name="idDepartamento", referencedColumnName="id")
    * @return integer
    */
    private $idDepartamento ;
    public function setidDepartamento(\Crystal\planillaBundle\Entity\catDepartamento $idDepartamento)
    {
        $this->idDepartamento = $idDepartamento;
    }
    public function getidDepartamento()
    {
        return $this->idDepartamento;
    }
    /**
    * @ORM\ManyToOne(targetEntity="catAfp", inversedBy="catEmpleado")
    * @ORM\JoinColumn(name="idAfp", referencedColumnName="id")
    * @return integer
    */
    private $idAfp;
    public function setidAfp(\Crystal\planillaBundle\Entity\catAfp $idAfp)
    {
        $this->idAfp = $idAfp;
    }
    public function getidAfp()
    {
        return $this->idAfp;
    }

     /**
    * @ORM\ManyToOne(targetEntity="catBancos", inversedBy="catEmpleado")
    * @ORM\JoinColumn(name="idBancos", referencedColumnName="id")
    * @return integer
    */
    private $idBanco ;
    public function setidBanco(\Crystal\planillaBundle\Entity\catBancos $idBanco)
    {
        $this->idBanco = $idBanco;
    }
    public function getidBanco()
    {
        return $this->idBanco;
    }




    public function __CONSTRUCT()
    {
        $this->calculos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dependencia = new \Doctrine\Common\Collections\ArrayCollection();
        $this->descuentosFijos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->faltas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fechaEmpleado = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ingresosFijos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->perceDed = new \Doctrine\Common\Collections\ArrayCollection();
        $this->telefono = new \Doctrine\Common\Collections\ArrayCollection();
    }
    /**
    * @ORM\OneToMany(targetEntity="catEmpleado", mappedBy="idCalculo")
    */

    public function addCalculos(\Crystal\planillaBundle\Entity\catEmpleado $calculos)
    {
        $this->calculos[] = $calculos; 
    }

    public function getEmpleados()
    {
        return $this->empleados;
    }
     /**
    * @ORM\OneToMany(targetEntity="catEmpleado", mappedBy="idDependencia")
    */
    private $dependencia;
    public function addDependencia(\Crystal\planillaBundle\Entity\catDependencia $dependencia)
    {
        $this->dependencia[] = $dependencia; 
    }

    public function getDependencia()
    {
        return $this->dependencia;
    }

    /**
    * @ORM\OneToMany(targetEntity="catEmpleado", mappedBy="idDescuentosFijos")
    */
    private $descuentosFijos;
    public function addDescuentosFijos(\Crystal\planillaBundle\Entity\ctrDescuentosFijos $descuentosFijos)
    {
        $this->descuentosFijos[] = $descuentosFijos; 
    }

    public function getDescuentosFijos()
    {
        return $this->descuentosFijos;
    }
    /**
    * @ORM\OneToMany(targetEntity="catEmpleado", mappedBy="idFaltas")
    */
    private $faltas;
    public function addFaltas(\Crystal\planillaBundle\Entity\ctrFaltas $faltas)
    {
        $this->fatas[] = $faltas; 
    }

    public function getFaltas()
    {
        return $this->faltas;
    }
    /**
    * @ORM\OneToMany(targetEntity="catEmpleado", mappedBy="idFechaEmpleado")
    */
    private $fechaEmpleado;
    public function addFechaEmpleado(\Crystal\planillaBundle\Entity\ctrFechaEmpleado $fechaEmpleado)
    {
        $this->fechaEmpleado[] = $fechaEmpleado; 
    }

    public function getFechaEmpleado()
    {
        return $this->fechaEmpleado;
    }
     /**
    * @ORM\OneToMany(targetEntity="catEmpleado", mappedBy="idIngresosFijos")
    */
    private $ingresosFijos;
    public function addIngresosFijos(\Crystal\planillaBundle\Entity\ctrIngresosFijos $ingresosFijos)
    {
        $this->ingresosFijos[] = $ingresosFijos; 
    }

    public function getIngresosFijos()
    {
        return $this->ingresosFijos;
    }
     /**
    * @ORM\OneToMany(targetEntity="catEmpleado", mappedBy="idPerceDed")
    */
    private $perceDed;
    public function addPerceDed(\Crystal\planillaBundle\Entity\ctrPerceDed $perceDed)
    {
        $this->perceDed[] = $perceDed; 
    }

    public function getPerceDed()
    {
        return $this->perceDed;
    }
     /**
    * @ORM\OneToMany(targetEntity="catEmpleado", mappedBy="idTelefono")
    */
    private $telefono;
    public function addTelefono(\Crystal\planillaBundle\Entity\ctrTelefono $telefono)
    {
        $this->telefono[] = $telefono; 
    }

    public function getTelefono()
    {
        return $this->telefono;
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
     * @var string $apellido
     *
     * @ORM\Column(name="apellido", type="string", length=255)
     */
    private $apellido;

    /**
     * @var string $nombreSeguro
     *
     * @ORM\Column(name="nombreSeguro", type="string", length=255)
     */
    private $nombreSeguro;

    /**
     * @var string $nombreNit
     *
     * @ORM\Column(name="nombreNit", type="string", length=255)
     */
    private $nombreNit;

    /**
     * @var string $dui
     *
     * @ORM\Column(name="dui", type="string", length=255)
     */
    private $dui;

    /**
     * @var \string $fechaExpedicion
     *
     * @ORM\Column(name="fechaExpedicion", type="string", length=255)
     */
    private $fechaExpedicion;

    /**
     * @var string $lugarExpedicion
     *
     * @ORM\Column(name="lugarExpedicion", type="string", length=255)
     */
    private $lugarExpedicion;

    /**
     * @var string $nit
     *
     * @ORM\Column(name="nit", type="string", length=255)
     */
    private $nit;

    /**
     * @var string $isss
     *
     * @ORM\Column(name="isss", type="string", length=255)
     */
    private $isss;

    /**
     * @var \string$fechaAlta
     *
     * @ORM\Column(name="fechaAlta", type="string", length=255)
     */
    private $fechaAlta;

    /**
     * @var \string $fechaBaja
     *
     * @ORM\Column(name="fechaBaja", type="string", length=255)
     */
    private $fechaBaja;

    /**
     * @var string $causaBaja
     *
     * @ORM\Column(name="causaBaja", type="string", length=255)
     */
    private $causaBaja;

    /**
     * @var string $formaPago
     *
     * @ORM\Column(name="formaPago", type="string", length=255)
     */
    private $formaPago;

    /**
     * @var float $salario
     *
     * @ORM\Column(name="salario", type="decimal")
     */
    private $salario;

    /**
     * @var float $salarioDiario
     *
     * @ORM\Column(name="salarioDiario", type="decimal")
     */
    private $salarioDiario;

    /**
     * @var string $direccion
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var string $depto
     *
     * @ORM\Column(name="depto", type="string", length=255)
     */
    private $depto;

    /**
     * @var string $municipio
     *
     * @ORM\Column(name="municipio", type="string", length=255)
     */
    private $municipio;

    /**
     * @var string $cuentaBanco
     *
     * @ORM\Column(name="cuentaBanco", type="string", length=255)
     */
    private $cuentaBanco;

    /**
     * @var \string $fechaNacimiento
     *
     * @ORM\Column(name="fechaNacimiento", type="string", length=255)
     */
    private $fechaNacimiento;

    /**
     * @var string $lugarNacimiento
     *
     * @ORM\Column(name="lugarNacimiento", type="string", length=255)
     */
    private $lugarNacimiento;

    /**
     * @var string $nacionalidad
     *
     * @ORM\Column(name="nacionalidad", type="string", length=255)
     */
    private $nacionalidad;

    /**
     * @var string $tipoEmpleado
     *
     * @ORM\Column(name="tipoEmpleado", type="string", length=255)
     */
    private $tipoEmpleado;

    /**
     * @var string $nombrePadre
     *
     * @ORM\Column(name="nombrePadre", type="string", length=255)
     */
    private $nombrePadre;

    /**
     * @var string $nombreMadre
     *
     * @ORM\Column(name="nombreMadre", type="string", length=255)
     */
    private $nombreMadre;

    /**
     * @var string $puesto
     *
     * @ORM\Column(name="puesto", type="string", length=255)
     */
    private $puesto;

    /**
     * @var string $sexo
     *
     * @ORM\Column(name="sexo", type="string", length=255)
     */
    private $sexo;

    /**
     * @var string $numAfp
     *
     * @ORM\Column(name="numAfp", type="string", length=255)
     */
    private $numAfp;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string $foto
     *
     * @ORM\Column(name="foto", type="string", length=255)
     */
    private $foto;

    /**
     * @var string $observaciones
     *
     * @ORM\Column(name="observaciones", type="string", length=255)
     */
    private $observaciones;

    /**
     * @var string $numContrato
     *
     * @ORM\Column(name="numContrato", type="string", length=255)
     */
    private $numContrato;

    /**
     * @var string $bajoContrato
     *
     * @ORM\Column(name="bajoContrato", type="string", length=255)
     */
    private $bajoContrato;

    /**
     * @var string $estado
     *
     * @ORM\Column(name="estado", type="string", length=255)
     */
    private $estado;

    /**
     * @var string $estadoCivil
     *
     * @ORM\Column(name="estadoCivil", type="string", length=255)
     */
    private $estadoCivil;

    /**
     * @var string $turno
     *
     * @ORM\Column(name="turno", type="string", length=255)
     */
    private $turno;


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
     * @return catEmpleado
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
     * @return catEmpleado
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
     * Set apellido
     *
     * @param string $apellido
     * @return catEmpleado
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    
        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set nombreSeguro
     *
     * @param string $nombreSeguro
     * @return catEmpleado
     */
    public function setNombreSeguro($nombreSeguro)
    {
        $this->nombreSeguro = $nombreSeguro;
    
        return $this;
    }

    /**
     * Get nombreSeguro
     *
     * @return string 
     */
    public function getNombreSeguro()
    {
        return $this->nombreSeguro;
    }

    /**
     * Set nombreNit
     *
     * @param string $nombreNit
     * @return catEmpleado
     */
    public function setNombreNit($nombreNit)
    {
        $this->nombreNit = $nombreNit;
    
        return $this;
    }

    /**
     * Get nombreNit
     *
     * @return string 
     */
    public function getNombreNit()
    {
        return $this->nombreNit;
    }

    /**
     * Set dui
     *
     * @param string $dui
     * @return catEmpleado
     */
    public function setDui($dui)
    {
        $this->dui = $dui;
    
        return $this;
    }

    /**
     * Get dui
     *
     * @return string 
     */
    public function getDui()
    {
        return $this->dui;
    }

    /**
     * Set fechaExpedicion
     *
     * @param \string $fechaExpedicion
     * @return catEmpleado
     */
    public function setFechaExpedicion($fechaExpedicion)
    {
        $this->fechaExpedicion = $fechaExpedicion;
    
        return $this;
    }

    /**
     * Get fechaExpedicion
     *
     * @return \string 
     */
    public function getFechaExpedicion()
    {
        return $this->fechaExpedicion;
    }

    /**
     * Set lugarExpedicion
     *
     * @param string $lugarExpedicion
     * @return catEmpleado
     */
    public function setLugarExpedicion($lugarExpedicion)
    {
        $this->lugarExpedicion = $lugarExpedicion;
    
        return $this;
    }

    /**
     * Get lugarExpedicion
     *
     * @return string 
     */
    public function getLugarExpedicion()
    {
        return $this->lugarExpedicion;
    }

    /**
     * Set nit
     *
     * @param string $nit
     * @return catEmpleado
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
     * Set isss
     *
     * @param string $isss
     * @return catEmpleado
     */
    public function setIsss($isss)
    {
        $this->isss = $isss;
    
        return $this;
    }

    /**
     * Get isss
     *
     * @return string 
     */
    public function getIsss()
    {
        return $this->isss;
    }

    /**
     * Set fechaAlta
     *
     * @param string $fechaAlta
     * @return catEmpleado
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;
    
        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return string
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set fechaBaja
     *
     * @param string $fechaBaja
     * @return catEmpleado
     */
    public function setFechaBaja($fechaBaja)
    {
        $this->fechaBaja = $fechaBaja;
    
        return $this;
    }

    /**
     * Get fechaBaja
     *
     * @return string 
     */
    public function getFechaBaja()
    {
        return $this->fechaBaja;
    }

    /**
     * Set causaBaja
     *
     * @param string $causaBaja
     * @return catEmpleado
     */
    public function setCausaBaja($causaBaja)
    {
        $this->causaBaja = $causaBaja;
    
        return $this;
    }

    /**
     * Get causaBaja
     *
     * @return string 
     */
    public function getCausaBaja()
    {
        return $this->causaBaja;
    }

    /**
     * Set formaPago
     *
     * @param string $formaPago
     * @return catEmpleado
     */
    public function setFormaPago($formaPago)
    {
        $this->formaPago = $formaPago;
    
        return $this;
    }

    /**
     * Get formaPago
     *
     * @return string 
     */
    public function getFormaPago()
    {
        return $this->formaPago;
    }

    /**
     * Set salario
     *
     * @param float $salario
     * @return catEmpleado
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;
    
        return $this;
    }

    /**
     * Get salario
     *
     * @return float 
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set salarioDiario
     *
     * @param float $salarioDiario
     * @return catEmpleado
     */
    public function setSalarioDiario($salarioDiario)
    {
        $this->salarioDiario = $salarioDiario;
    
        return $this;
    }

    /**
     * Get salarioDiario
     *
     * @return float 
     */
    public function getSalarioDiario()
    {
        return $this->salarioDiario;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return catEmpleado
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
     * Set depto
     *
     * @param string $depto
     * @return catEmpleado
     */
    public function setDepto($depto)
    {
        $this->depto = $depto;
    
        return $this;
    }

    /**
     * Get depto
     *
     * @return string 
     */
    public function getDepto()
    {
        return $this->depto;
    }

    /**
     * Set municipio
     *
     * @param string $municipio
     * @return catEmpleado
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;
    
        return $this;
    }

    /**
     * Get municipio
     *
     * @return string 
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set banco
     *
     * @param string $banco
     * @return catEmpleado
     */
    public function setBanco($banco)
    {
        $this->banco = $banco;
    
        return $this;
    }

    /**
     * Get banco
     *
     * @return string 
     */
    public function getBanco()
    {
        return $this->banco;
    }

    /**
     * Set cuentaBanco
     *
     * @param string $cuentaBanco
     * @return catEmpleado
     */
    public function setCuentaBanco($cuentaBanco)
    {
        $this->cuentaBanco = $cuentaBanco;
    
        return $this;
    }

    /**
     * Get cuentaBanco
     *
     * @return string 
     */
    public function getCuentaBanco()
    {
        return $this->cuentaBanco;
    }

    /**
     * Set fechaNacimiento
     *
     * @param string $fechaNacimiento
     * @return catEmpleado
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    
        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return string 
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set lugarNacimiento
     *
     * @param string $lugarNacimiento
     * @return catEmpleado
     */
    public function setLugarNacimiento($lugarNacimiento)
    {
        $this->lugarNacimiento = $lugarNacimiento;
    
        return $this;
    }

    /**
     * Get lugarNacimiento
     *
     * @return string 
     */
    public function getLugarNacimiento()
    {
        return $this->lugarNacimiento;
    }

    /**
     * Set nacionalidad
     *
     * @param string $nacionalidad
     * @return catEmpleado
     */
    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;
    
        return $this;
    }

    /**
     * Get nacionalidad
     *
     * @return string 
     */
    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }

    /**
     * Set tipoEmpleado
     *
     * @param string $tipoEmpleado
     * @return catEmpleado
     */
    public function setTipoEmpleado($tipoEmpleado)
    {
        $this->tipoEmpleado = $tipoEmpleado;
    
        return $this;
    }

    /**
     * Get tipoEmpleado
     *
     * @return string 
     */
    public function getTipoEmpleado()
    {
        return $this->tipoEmpleado;
    }

    /**
     * Set nombrePadre
     *
     * @param string $nombrePadre
     * @return catEmpleado
     */
    public function setNombrePadre($nombrePadre)
    {
        $this->nombrePadre = $nombrePadre;
    
        return $this;
    }

    /**
     * Get nombrePadre
     *
     * @return string 
     */
    public function getNombrePadre()
    {
        return $this->nombrePadre;
    }

    /**
     * Set nombreMadre
     *
     * @param string $nombreMadre
     * @return catEmpleado
     */
    public function setNombreMadre($nombreMadre)
    {
        $this->nombreMadre = $nombreMadre;
    
        return $this;
    }

    /**
     * Get nombreMadre
     *
     * @return string 
     */
    public function getNombreMadre()
    {
        return $this->nombreMadre;
    }

    /**
     * Set puesto
     *
     * @param string $puesto
     * @return catEmpleado
     */
    public function setPuesto($puesto)
    {
        $this->puesto = $puesto;
    
        return $this;
    }

    /**
     * Get puesto
     *
     * @return string 
     */
    public function getPuesto()
    {
        return $this->puesto;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     * @return catEmpleado
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    
        return $this;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set afp
     *
     * @param string $afp
     * @return catEmpleado
     */
    public function setAfp($afp)
    {
        $this->afp = $afp;
    
        return $this;
    }

    /**
     * Get afp
     *
     * @return string 
     */
    public function getAfp()
    {
        return $this->afp;
    }

    /**
     * Set numAfp
     *
     * @param string $numAfp
     * @return catEmpleado
     */
    public function setNumAfp($numAfp)
    {
        $this->numAfp = $numAfp;
    
        return $this;
    }

    /**
     * Get numAfp
     *
     * @return string 
     */
    public function getNumAfp()
    {
        return $this->numAfp;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return catEmpleado
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return catEmpleado
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
    
        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return catEmpleado
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    
        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set numContrato
     *
     * @param string $numContrato
     * @return catEmpleado
     */
    public function setNumContrato($numContrato)
    {
        $this->numContrato = $numContrato;
    
        return $this;
    }

    /**
     * Get numContrato
     *
     * @return string 
     */
    public function getNumContrato()
    {
        return $this->numContrato;
    }

    /**
     * Set bajoContrato
     *
     * @param string $bajoContrato
     * @return catEmpleado
     */
    public function setBajoContrato($bajoContrato)
    {
        $this->bajoContrato = $bajoContrato;
    
        return $this;
    }

    /**
     * Get bajoContrato
     *
     * @return string 
     */
    public function getBajoContrato()
    {
        return $this->bajoContrato;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return catEmpleado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set estadoCivil
     *
     * @param string $estadoCivil
     * @return catEmpleado
     */
    public function setEstadoCivil($estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;
    
        return $this;
    }

    /**
     * Get estadoCivil
     *
     * @return string 
     */
    public function getEstadoCivil()
    {
        return $this->estadoCivil;
    }

    /**
     * Set turno
     *
     * @param string $turno
     * @return catEmpleado
     */
    public function setTurno($turno)
    {
        $this->turno = $turno;
    
        return $this;
    }

    /**
     * Get turno
     *
     * @return string 
     */
    public function getTurno()
    {
        return $this->turno;
    }
}
