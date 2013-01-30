<?php

namespace Crystal\rutasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBagInterface;
use Crystal\planillaBundle\Entity\catEmpleado;

class planillaController extends Controller
{
    public function listaPlanillaAction()
    {
        $Session = new Session();
        $id = $Session->get('id');
        if(isset($id))
        {
		    $EM = $this->getDoctrine()->getEntityManager();
		    $Empleados = $EM->getRepository('CrystalplanillaBundle:catEmpleado')->findAll();
		    $Departamentos =  $EM->getRepository('CrystalplanillaBundle:catDepartamento')->findAll();
		    $Afp =  $EM->getRepository('CrystalplanillaBundle:catAfp')->findAll();
			
			return $this->render('CrystalrutasBundle:Default:listaPlanilla.html.twig', array('Empleados' => $Empleados, 'Departamentos' => $Departamentos, 'Afp' => $Afp, 'session' => ''));
       }
       else
       {
       	return $this->redirect($this->generateURL('login'));
       }

    }
    


    
}

?>