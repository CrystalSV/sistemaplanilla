<?php

namespace Crystal\rutasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBagInterface;
use Crystal\planillaBundle\Entity\ctrFaltas;


class FaltasController extends Controller
{
    public function listaFaltasAction()
    {
        $Session = new Session();
        $id = $Session->get('id');
        if(isset($id))
        {
            $EM = $this->getDoctrine()->getEntityManager();
    		$faltas =  $EM->getRepository('CrystalplanillaBundle:ctrFaltas')->findAll();
    		return $this->render('CrystalrutasBundle:Default:listaFaltas.html.twig', array('faltas' => $faltas, 'Error' => '', 'session' => ''));
        }
        else
        {
            return $this->redirect($this->generateURL('login'));
        } 
    }
    public function agregarFaltasAction()
    {
        $Session = new Session();
        $id = $Session->get('id');
        if(isset($id))
        {
            $request = $this->getRequest();
            $Fal = new ctrFaltas();
            $em = $this->getDoctrine()->getEntityManager();

            if($request->getMethod() == 'POST')
            {
                 $_POST = $request->request;

                 $Fal->setdescripcion($_POST->get('txtDesc'));
                 $Fal->setremunerada($_POST->get('rem'));
                 $Fal->setseptimo($_POST->get('septimo'));
                 
                 var_dump($_POST);

                 $em->persist($Fal);
                 $em->flush();

                 return $this->redirect($this->generateURL('listaFaltas'));
            }
            else
            {
                return $this->render('CrystalrutasBundle:Default:agregarFaltas.html.twig', array('faltas' => $Fal, 'session' => '' ));
            
            }
        }
        else
        {
            return $this->redirect($this->generateURL('login'));
        }
    }

    public function eliminarFaltasAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $Fal = $em->getRepository('CrystalplanillaBundle:ctrFaltas')->find($id);

        $em->remove($Fal);
        $em->flush();
        return $this->redirect($this->generateURL('listaFaltas'));
    }

    public function modificarFaltasAction($id)
    {
        $Session = new Session();
        $idSes = $Session->get('id');
        if(isset($idSes))
        {
            $request = $this->getRequest();
            $em = $this->getDoctrine()->getEntityManager();
            $Fal = $em->getRepository('CrystalplanillaBundle:ctrFaltas')->find($id);

            if($request->getMethod() == 'POST')
            {
                $_POST = $request->request;

                $Fal->setdescripcion($_POST->get('txtDesc'));
                $Fal->setseptimo($_POST->get('septimo'));
                $Fal->setremunerada($_POST->get('rem'));

                $em->persist($Fal);
                $em->flush();

                return $this->redirect($this->generateURL('listaFaltas'));
            }
        
            else
            {
             return $this->render('CrystalrutasBundle:Default:modificarFaltas.html.twig', array('faltas' => $Fal, 'session' => ''));
            }
        }
        else
        {
            return $this->redirect($this->generateURL('login'));
        }
    }
}

?>