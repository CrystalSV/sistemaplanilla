<?php

namespace Crystal\rutasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBagInterface;
use Crystal\planillaBundle\Entity\ctrActivos;

class activosController extends Controller
{
    public function listaActivosAction()
    {
        $Session = new Session();
        $id = $Session->get('id');
        if(isset($id))
        {
            $EM = $this->getDoctrine()->getEntityManager();
    		$activos =  $EM->getRepository('CrystalplanillaBundle:ctrActivos')->findAll();
    		return $this->render('CrystalrutasBundle:Default:listaActivos.html.twig', array('activos' => $activos, 'session' => ''));
        }
        else
        {
            return $this->redirect($this->generateURL('login'));
        }

    }

    
}

?>