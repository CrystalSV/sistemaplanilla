<?php

namespace Crystal\planillaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Crystal\planillaBundle\Entity\ctrCalculo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crystal\planillaBundle\Entity\ctrCalculoRepository")
 */
class ctrCalculo
{
    /**
    * @ORM\ManyToOne(targetEntity="catEmpleado", inversedBy="ctrCalculo")
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
     * @var float $calculoIsss
     *
     * @ORM\Column(name="calculoIsss", type="decimal")
     */
    private $calculoIsss;

    /**
     * @var float $calculoAfp
     *
     * @ORM\Column(name="calculoAfp", type="decimal")
     */
    private $calculoAfp;

    /**
     * @var float $calculoRenta
     *
     * @ORM\Column(name="calculoRenta", type="decimal")
     */
    private $calculoRenta;


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
     * Set calculoIsss
     *
     * @param float $calculoIsss
     * @return ctrCalculo
     */
    public function setCalculoIsss($calculoIsss)
    {
        $this->calculoIsss = $calculoIsss;
    
        return $this;
    }

    /**
     * Get calculoIsss
     *
     * @return float 
     */
    public function getCalculoIsss()
    {
        return $this->calculoIsss;
    }

    /**
     * Set calculoAfp
     *
     * @param float $calculoAfp
     * @return ctrCalculo
     */
    public function setCalculoAfp($calculoAfp)
    {
        $this->calculoAfp = $calculoAfp;
    
        return $this;
    }

    /**
     * Get calculoAfp
     *
     * @return float 
     */
    public function getCalculoAfp()
    {
        return $this->calculoAfp;
    }

    /**
     * Set calculoRenta
     *
     * @param float $calculoRenta
     * @return ctrCalculo
     */
    public function setCalculoRenta($calculoRenta)
    {
        $this->calculoRenta = $calculoRenta;
    
        return $this;
    }

    /**
     * Get calculoRenta
     *
     * @return float 
     */
    public function getCalculoRenta()
    {
        return $this->calculoRenta;
    }
}
