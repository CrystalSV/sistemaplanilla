<?php

namespace Crystal\rutasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBagInterface;
use Crystal\planillaBundle\Entity\catDepartamento;

class DepartamentoController extends Controller
{
    public function listaDepartamentoAction()
    {
        $Session = new Session();
        $id = $Session->get('id');
        if(isset($id))
        {
            $EM = $this->getDoctrine()->getEntityManager();
    		$Departamentos =  $EM->getRepository('CrystalplanillaBundle:catDepartamento')->findAll();
    		return $this->render('CrystalrutasBundle:Default:listaDepartamento.html.twig', array('Departamentos' => $Departamentos, 'Error' => '', 'session' => ''));
        }
        else
        {
            return $this->redirect($this->generateURL('login'));
        }

    }

    public function agregarDepartamentoAction()
    {
        $Session = new Session();
        $id = $Session->get('id');
        if(isset($id))
        {
         	$request = $this->getRequest();
         	$Dep = new CatDepartamento();
         	$em = $this->getDoctrine()->getEntityManager();

         	if($request->getMethod() == 'POST')
    		{
    			 $_POST = $request->request;
                 $_FILES = $request->files;

                 $Dep->setnombre($_POST->get('txtName'));

                 $em->persist($Dep);
                 $em->flush();

                 return $this->redirect($this->generateURL('listaDepartamento'));
    		}
    		else
    		{
    			return $this->render('CrystalrutasBundle:Default:agregarDepartamento.html.twig', array('Dep' => $Dep, 'session' => ''));
    		
    		}
        }
        else
        {
            return $this->redirect($this->generateURL('login'));
        }

    }

    public function eliminarDepartamentoAction($id)
    {
        $Session = new Session();
        $idSes = $Session->get('id');
        if(isset($idSes))
        {
        	$em = $this->getDoctrine()->getEntityManager();
        	$Dep = $em->getRepository('CrystalplanillaBundle:catDepartamento')->find($id);
            $Depto = $em->getRepository('CrystalplanillaBundle:catEmpleado')->findByidDepartamento($id);
            
            $dependency = false;
            for($i = 0; $i < count($Depto); $i++)
            {
            	$dependency = true;
            }

            if($dependency)
            {
            	$Departamentos =  $em->getRepository('CrystalplanillaBundle:catDepartamento')->findAll();	
            	$error = 'No se puede eliminar el departamento ya que hay empleados asociados a este.';
            	return $this->render('CrystalrutasBundle:Default:listaDepartamento.html.twig', array('Departamentos' => $Departamentos, 'Error' => $error,'session' => ''));
            }
            else
            {
            	$em->remove($Dep);
    	    	$em->flush();
    	    	return $this->redirect($this->generateURL('listaDepartamento'));	
            }
        }
        else
        {
            return $this->redirect($this->generateURL('login'));
        }  	
    }

    public function modificarDepartamentoAction($id)
    {
        $Session = new Session();
        $idSes = $Session->get('id');
        if(isset($idSes))
        {
            $request = $this->getRequest();
            $em = $this->getDoctrine()->getEntityManager();
            $Departamentos = $em->getRepository('CrystalplanillaBundle:catDepartamento')->find($id);

            if($request->getMethod() == 'POST')
            {
                $_POST = $request->request;

                $Departamentos->setnombre($_POST->get('txtName'));

                $em->persist($Departamentos);
                $em->flush();

                return $this->redirect($this->generateURL('listaDepartamento'));
            }
             else
            {
                return $this->render('CrystalrutasBundle:Default:modificarDepartamento.html.twig', array('Departamentos' => $Departamentos, 'session' => '' ));
            }
        }
        else
        {
            return $this->redirect($this->generateURL('login'));
        }
    }
}

?>