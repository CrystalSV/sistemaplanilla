<?php
namespace Crystal\rutasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Crystal\planillaBundle\Entity\ctrAcceso;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBagInterface;

class accesoController extends Controller
{
	public function listaAccesoAction()
    {
        $Session = new Session();
        $id = $Session->get('id');
        if(isset($id))
        {
          $EM = $this->getDoctrine()->getEntityManager();
      		$acceso =  $EM->getRepository('CrystalplanillaBundle:ctrAcceso')->findAll();
      		
          return $this->render('CrystalrutasBundle:Default:listaAcceso.html.twig', array('acceso' => $acceso, 'session' => ''));
        }
        else
        {
          return $this->redirect($this->generateURL('login'));
        }
    }

    public function loginAction()
    {
      $Session = new Session();      
      $request = $this->getRequest();

      $em = $this->getDoctrine()->getEntityManager();
      if($request->getMethod() == 'POST')
      {
        $_POST = $request->request;
        $dql = "SELECT a FROM CrystalplanillaBundle:ctrAcceso a where a.user=:user and a.password =:password";
        $query = $em->createQuery($dql);
        $query->setParameter('user', $_POST->get('txtUser'));
        $query->setParameter('password', $_POST->get('txtPass'));
        $usuario = $query->getResult();
        $Session->start();
        $Session->set('id', $usuario[0]->getId());
        return $this->render('CrystalrutasBundle:Default:index.html.twig', array('session' => $Session->get('id')));
      }
      else
      {
        $Session->remove('id');
        return $this->render('CrystalrutasBundle:Default:login.html.twig', array('' => ''));
      }      
    }

    public function AgregarAccesoAction()
    {
      $Session = new Session();
      $id = $Session->get('id');
      if(isset($id))
      {
          	$request = $this->getRequest();
           	$acceso = new ctrAcceso();
           	$em = $this->getDoctrine()->getEntityManager();

           	if($request->getMethod() == 'POST')
      		  {
      			 $_POST = $request->request;
                   

                   $acceso->setuser($_POST->get('txtUser'));
                   $acceso->setpassword($_POST->get('txtPass'));
      			 

      			       $em->persist($acceso);
                   $em->flush();

                   return $this->redirect($this->generateURL('listaAcceso'));
      		
      		}
      		else
      		{
      			return $this->render('CrystalrutasBundle:Default:agregarAcceso.html.twig' , array('acceso' => $acceso, 'session' => ''));
      		
      		}
          return $this->render('CrystalrutasBundle:Default:listaAcceso.html.twig', array('acceso' => $acceso, 'session' => ''));
      }
      else
      {
        return $this->redirect($this->generateURL('login'));
      }

    }
     public function eliminarAccesoAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $acceso = $em->getRepository('CrystalplanillaBundle:ctrAcceso')->find($id);

        $em->remove($acceso);
        $em->flush();
        return $this->redirect($this->generateURL('listaAcceso'));
    }

    public function modificarAccesoAction($id)
    {

        $Session = new Session();
        $id = $Session-> get('id');
        if(isset($id))
        { 
            $request = $this->getRequest();
            $em = $this->getDoctrine()->getEntityManager();
            $acceso = $em->getRepository('CrystalplanillaBundle:ctrAcceso')->find($id);

            if($request->getMethod() == 'POST')
            {
                $_POST = $request->request;

                $acceso->setuser($_POST->get('txtUser'));
                $acceso->setpassword($_POST->get('txtPass'));

                $em->persist($acceso);
                $em->flush();

                return $this->redirect($this->generateURL('listaAcceso'));
            }
          
            else
            {
              return $this->render('CrystalrutasBundle:Default:modificarAcceso.html.twig', array('acceso' => $acceso, 'session' => ''));
            }
        }
        else
        {
          return $this->redirect($this->generateURL('login'));
        }
    }
}
