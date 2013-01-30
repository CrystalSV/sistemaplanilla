<?php

namespace Crystal\planillaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Crystal\planillaBundle\Entity\ctrTelefono
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crystal\planillaBundle\Entity\ctrTelefonoRepository")
 */
class ctrTelefono
{
     /**
    * @ORM\ManyToOne(targetEntity="catEmpleado", inversedBy="ctrTelefono")
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
     * @var string $telefono
     *
     * @ORM\Column(name="telefono", type="string", length=255)
     */
    private $telefono;


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
     * Set telefono
     *
     * @param string $telefono
     * @return ctrTelefono
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
}
