<?php

namespace Crystal\rutasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBagInterface;
use Crystal\planillaBundle\Entity\catEmpleado;
use Crystal\planillaBundle\Entity\ctrTelefono;
use Crystal\planillaBundle\Entity\ctrDependencia;
use Crystal\planillaBundle\Entity\catDepartamento;
use Crystal\planillaBundle\Entity\catBancos;
use Crystal\planillaBundle\Entity\catAfp;
use Crystal\rutasBundle\Form\catEmpleadoType;
use Crystal\rutasBundle\Resources\classes\Image;
use MakerLabs\PagerBundle\Pager;
use MakerLabs\PagerBundle\Adapter\DoctrineOrmAdapter;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $Session = new Session();
        $id = $Session->get('id');   
        if(isset($id))
        {
            return $this->render('CrystalrutasBundle:Default:index.html.twig', array('name' => '', 'session' => ''));
        }
        else
        {
            return $this->redirect($this->generateURL('login'));
        }        
    }

    public function listaAction($page)
    {
        $Session = new Session();
        $id = $Session->get('id');
        if(isset($id))
        {
            $EM = $this->getDoctrine()->getEntityManager();
            $qb = $EM->getRepository('CrystalplanillaBundle:catEmpleado')->createQueryBuilder('m');
            $adapter = new DoctrineOrmAdapter($qb);
            $pager = new Pager($adapter, array('page' => $page, 'limit' => 2));
            $Empleados = $EM->getRepository('CrystalplanillaBundle:catEmpleado')->findAll();
            $Departamentos =  $EM->getRepository('CrystalplanillaBundle:catDepartamento')->findAll();

            return $this->render('CrystalrutasBundle:Default:listaEmpleados.html.twig', array('Empleados' => $Empleados, 'Departamentos' => $Departamentos, 'session' => '', 'pager' => $pager));
        }
    	else
        {
            return $this->redirect($this->generateURL('login')); 
        }
    }

    public function agregarEmpleadoAction()
    {
        $Session = new Session();
        $id = $Session->get('id');
        if(isset($id))
        {
            $EM = $this->getDoctrine()->getEntityManager();
            $qb = $EM->getRepository('CrystalplanillaBundle:catEmpleado')->createQueryBuilder('m');
            $adapter = new DoctrineOrmAdapter($qb);
        		$request = $this->getRequest();
        		$Emp = new catEmpleado();
                $Depto = new catDepartamento();
                $Img = new Image();
                $Bancos = new catBancos();
                $Afp = new catAfp();
                $em = $this->getDoctrine()->getEntityManager();

            	if($request->getMethod() == 'POST')
        		{
                    $_POST = $request->request;
                    $_FILES = $request->files;
                    $Depto = $em->getRepository('CrystalplanillaBundle:catDepartamento')->find($_POST->get('txtDeptLab'));
                    $Bancos = $em->getRepository('CrystalplanillaBundle:catBancos')->find($_POST->get('txtBanco'));
                    $afp = $em->getRepository('CrystalplanillaBundle:catAfp')->find($_POST->get('txtAfp'));
                    
                    $Emp->setcodigo($_POST->get('txtCode'));
                    $Emp->setnombre ($_POST->get('txtName'));
                    $Emp->setapellido ($_POST->get('txtApe'));
                    $Emp->setEstado($_POST->get('txtEst'));
                    $Emp->setnombreSeguro ($_POST->get('txtNameSeg'));
                    $Emp->setNombreNit($_POST->get('txtNameNit'));
                    $Emp->setDUI($_POST->get('txtDUI'));
                    $Emp->setlugarExpedicion ($_POST->get('txtLugarDui'));
                    $Emp->setfechaExpedicion ($_POST->get('txtFechaDui'));
                    $Emp->setnit ($_POST->get('txtNIT'));
                    $Emp->setisss ($_POST->get('txtISSS'));
                    $Emp->setidDepartamento($Depto);
                    $Emp->setfechaAlta (date('d/M/Y'));
                    $Emp->setformaPago ($_POST->get('txtPago'));
                    $Emp->setsalario ($_POST->get('txtSalario'));
                    $Emp->setsalarioDiario($_POST->get('txtSalario')  / 26 );
                    $Emp->setdireccion  ($_POST->get('txtDir'));
                    $Emp->setdepto ($_POST->get('txtDepto'));
                    $Emp->setmunicipio ($_POST->get('txtMuni'));
                    $Emp->setidBanco($Bancos);
                    $Emp->setCuentaBanco ($_POST->get('txtCuetaBan'));
                    $Emp->setfechaNacimiento ($_POST->get('txtFechaN'));
                    $Emp->setlugarNacimiento ($_POST->get('txtLugarN'));
                    $Emp->setnacionalidad ($_POST->get('txtNacionalidad'));
                    $Emp->settipoEmpleado ($_POST->get('txtTipo'));
                    $Emp->setnombrePadre ($_POST->get('txtPadre'));
                    $Emp->setnombreMadre ($_POST->get('txtMadre'));
                    $Emp->setpuesto ($_POST->get('txtPuesto'));
                    $Emp->setsexo ($_POST->get('txtSexo'));
                    $Emp->setidAfp($afp);
                    $Emp->setnumAfp ($_POST->get('txtNumAfp'));
                    $Emp->setemail ($_POST->get('txtMail'));
                    $Emp->setobservaciones ($_POST->get('txtObser'));
                    $Emp->setnumContrato ($_POST->get('txtContrato'));
                    $Emp->setbajoContrato ($_POST->get('txtBajoContrato'));
                    $Emp->setestadoCivil ($_POST->get('txtEstadoCivil'));
                    $Img->img = $_FILES->get('txtFoto');
                    if($Img->checkErrors() == 'NoError')
                    {
                        $Emp->setfoto($Img->upload());
                    }
                    $Emp->setturno ($_POST->get('txtTurno'));

                    $em->persist($Emp);
                    $em->flush();


                    for($i = 0; $i < $_POST->get('numPhones'); $i++)
                    {
                        $Tel = new ctrTelefono();
                        $Tel->settelefono($_POST->get('txtTel' . $i));
                        $Tel->setidEmpleado($Emp);
                        $em->persist($Tel);
                        $em->flush();
                    }

                    for($i = 0; $i < $_POST->get('numDep'); $i++)
                    {
                        $Dep = new ctrDependencia();
                        $Dep->setidEmpleado($Emp);
                        $Dep->setdependiente($_POST->get('txtDep' . $i));
                        $Dep->settipo($_POST->get('txtTypeDep' . $i));
                        $em->persist($Dep);
                        $em->flush();
                    }

            		return $this->redirect($this->generateURL('listaEmpleados'));
        		}
        		else
        		{
                    $Dep = $em->getRepository('CrystalplanillaBundle:catDepartamento')->findAll();
                    $Bancos = $em->getRepository('CrystalplanillaBundle:catBancos')->findAll();
                    $Afp = $em->getRepository('CrystalplanillaBundle:catAfp')->findAll();
        			return $this->render('CrystalrutasBundle:Default:agregarEmpleados.html.twig', array('Dep' => $Dep, 'Bancos' => $Bancos, 'Afp' => $Afp, 'session' => ''));
        		}
                    return $this->render('CrystalrutasBundle:Default:listaEmpleados.html.twig', array('Empleados' => $Empleados, 'Departamentos' => $Departamentos, 'session' => '','afp' => $afp, 'Bancos' => $Bancos));
        }
        else
        {
            return $this->redirect($this->generateURL('login'));   
        }
    }

    public function modificarEmpleadoAction($id)
    {

                $Session = new Session();
                $idSes = $Session->get('id');
                if(isset($idSes))
                {
                    $request = $this->getRequest();
                    $em = $this->getDoctrine()->getEntityManager();
                    $Emp = $em->getRepository('CrystalplanillaBundle:catEmpleado')->find($id);
                    $Deptos = $em->getRepository('CrystalplanillaBundle:catDepartamento')->findAll();
                    $afp = $em->getRepository('CrystalplanillaBundle:catAfp')->findAll();
                    $bancos = $em->getRepository('CrystalplanillaBundle:catBancos')->findAll();
                                        

                    if($request->getMethod() == 'POST')
                    {
                        $_POST = $request->request;
                        
                        $Emp->setcodigo($_POST->get('txtCode'));
                        $Emp->setnombre($_POST->get('txtName'));
                        $Emp->setapellido ($_POST->get('txtApe'));
                        $Emp->setEstado($_POST->get('txtEst'));
                        $Emp->setnombreSeguro ($_POST->get('txtNameSeg'));
                        $Emp->setNombreNit($_POST->get('txtNameNit'));
                        $Emp->setDUI($_POST->get('txtDUI'));
                        $Emp->setlugarExpedicion ($_POST->get('txtLugarDui'));
                        $Emp->setfechaExpedicion (date_create($_POST->get('txtFechaDui')));
                        $Emp->setnit ($_POST->get('txtNIT'));
                        $Emp->setisss ($_POST->get('txtISSS'));
                        $Emp->setidDepartamento($Deptos);
                        $Emp->setfechaAlta (date_create('now'));
                        $Emp->setformaPago ($_POST->get('txtPago'));
                        $Emp->setsalario ($_POST->get('txtSalario'));
                        $Emp->setsalarioDiario($_POST->get('txtSalario')  / 26 );
                        $Emp->setdireccion  ($_POST->get('txtDir'));
                        $Emp->setdepto ($_POST->get('txtDepto'));
                        $Emp->setmunicipio ($_POST->get('txtMuni'));
                        $Emp->setidBanco($bancos);
                        $Emp->setCuentaBanco ($_POST->get('txtCuetaBan'));
                        $Emp->setfechaNacimiento (date_create($_POST->get('txtFechaN')));
                        $Emp->setlugarNacimiento ($_POST->get('txtLugarN'));
                        $Emp->setnacionalidad ($_POST->get('txtNacionalidad'));
                        $Emp->settipoEmpleado ($_POST->get('txtTipo'));
                        $Emp->setnombrePadre ($_POST->get('txtPadre'));
                        $Emp->setnombreMadre ($_POST->get('txtMadre'));
                        $Emp->setpuesto ($_POST->get('txtPuesto'));
                        $Emp->setsexo ($_POST->get('txtSexo'));
                        $Emp->setidAfp($Afp);
                        $Emp->setnumAfp ($_POST->get('txtNumAfp'));
                        $Emp->setemail ($_POST->get('txtMail'));
                        $Emp->setobservaciones ($_POST->get('txtObser'));
                        $Emp->setnumContrato ($_POST->get('txtContrato'));
                        $Emp->setbajoContrato ($_POST->get('txtBajoContrato'));
                        $Emp->setestado ($_POST->get('txtEstado'));
                        $Emp->setestadoCivil ($_POST->get('txtEstadoCivil'));
                        $Emp->setidTelefono($_POST->get('txtTel'));
                        $Emp->setturno ($_POST->get('txtTurno'));
                        $em->persist($Emp);
                        $em->flush();



                        return $this->redirect($this->generateURL('listaEmpleados'));
                    }
                    else
                    {
                        return $this->render('CrystalrutasBundle:Default:modificarEmpleado.html.twig', array('Emp' => $Emp, 'session' => '', 'Deptos' => $Deptos, 'afps' => $afp, 'bancos' => $bancos));
                    }
                }
                else
                {
                    return $this->redirect($this->generateURL('login'));
                }
    }

    public function eliminarEmpleadoAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $Emp = $em->getRepository('CrystalplanillaBundle:catEmpleado')->find($id);        
        $Tel = $em->getRepository('CrystalplanillaBundle:ctrTelefono')->findByidEmpleado($id);
        $Dep = $em->getRepository('CrystalplanillaBundle:ctrDependencia')->findByidEmpleado($id);

        for($i = 0; $i < count($Tel); $i++)
        {
            $em->remove($Tel[$i]);
        }

        for($i = 0; $i < count($Dep); $i++)
        {
            $em->remove($Dep[$i]);
        }       
        
        $em->remove($Emp);
        $em->flush();
        return $this->redirect($this->generateURL('listaEmpleados'));
    }

    public function empleadoAction($id)
    {
        $Session = new Session();
        $idSes = $Session->get('id');
        if(isset($idSes))
        {

        	$EM = $this->getDoctrine()->getEntityManager();
    		$Empleado = $EM->getRepository('CrystalplanillaBundle:catEmpleado')->find($id);
            $Tel = $EM->getRepository('CrystalplanillaBundle:ctrTelefono')->findByidEmpleado($id);
    		$Depto =  $EM->getRepository('CrystalplanillaBundle:catDepartamento')->findAll();
            $bancos = $EM->getRepository('CrystalplanillaBundle:catBancos')->findAll();
            $afp = $EM->getRepository('CrystalplanillaBundle:catAfp')->findAll();

            return $this->render('CrystalrutasBundle:Default:Empleado.html.twig', array(
	    	'Empleado' => $Empleado,
	        'Depto' => $Depto,
            'Telefonos' => $Tel, 
            'Bancos' => $bancos,
            'afp' => $afp,
            'session' => ''
         ));
       }
       else
        {
            return $this->redirect($this->generateURL('login'));
        }  
    }

}
