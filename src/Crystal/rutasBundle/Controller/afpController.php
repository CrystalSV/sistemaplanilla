<?php
namespace Crystal\rutasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBagInterface;
use Crystal\planillaBundle\Entity\catAfp;

class afpController extends Controller
{
	public function listaAfpAction()
    {
        $Session = new Session();
        $id = $Session->get('id');
        if(isset($id))
        {
            $EM = $this->getDoctrine()->getEntityManager();
    		$afp =  $EM->getRepository('CrystalplanillaBundle:catAfp')->findAll();
    		return $this->render('CrystalrutasBundle:Default:listaAfp.html.twig', array('afp' => $afp, 'session' => '', 'Error' => ''));
        }
        else
        {
            return $this->redirect($this->generateURL('login'));
        }

    }

    public function AgregarAfpAction()
    {
        $Session = new Session();
        $id = $Session ->get('id');
        if(isset($id))
        {
        	$request = $this->getRequest();
         	$afp = new catAfp();
         	$em = $this->getDoctrine()->getEntityManager();

         	if($request->getMethod() == 'POST')
    		{
    			 $_POST = $request->request;
                 $_FILES = $request->files;

                 $afp->setnombre($_POST->get('txtName'));
                 $afp->setporcentajeEmpleado($_POST->get('txtEmploye'));
    			 $afp->setporcentajePatrono($_POST->get('txtPatrono'));

    			 $em->persist($afp);
                 $em->flush();

                 return $this->redirect($this->generateURL('listaAfp'));
    		
    		}
    		else
    		{
    			return $this->render('CrystalrutasBundle:Default:agregarAfp.html.twig', array('afp' => $afp, 'session' => ''));
    		
    		}
        }
        else
        {
            return $this->redirect($this->generateURL('login'));
        }

    }
    public function eliminarAfpAction($id)
    {
        $Session = new Session();
        $idSes = $Session->get('id');
        if(isset($idSes))
        {
        	$em = $this->getDoctrine()->getEntityManager();
        	$afp = $em->getRepository('CrystalplanillaBundle:catAfp')->find($id);
            $af = $em->getRepository('CrystalplanillaBundle:catEmpleado')->findByidAfp($id);

            $dependency = false;
            for($i = 0; $i < count($af); $i++)
            {
                $dependency = true;
            }
            if($dependency)
            {
                $afp =  $em->getRepository('CrystalplanillaBundle:catAfp')->findAll();   
                $error = 'No se puede eliminar está afiliación ya que hay empleados asociados a este.';
                return $this->render('CrystalrutasBundle:Default:listaAfp.html.twig', array('afp' => $afp, 'Error' => $error,'session' => ''));
            }
            else
            {
                $em->remove($afp);
                $em->flush();
                return $this->redirect($this->generateURL('listaAfp'));
            }
        }
        else
        {
            return $this->redirect($this->generateURL('login'));
        }
    }

    public function modificarAfpAction($id)
    {
        $Session = new Session();
        $idSes = $Session->get('id');
        if(isset($idSes))
        {
            $request = $this->getRequest();
            $em = $this->getDoctrine()->getEntityManager();
            $afp = $em->getRepository('CrystalplanillaBundle:catAfp')->find($id);

            if($request->getMethod() == 'POST')
            {
                $_POST = $request->request;

                $afp->setnombre($_POST->get('txtName'));
                $afp->setporcentajeEmpleado($_POST->get('txtEmploye'));
                $afp->setporcentajePatrono($_POST->get('txtPatrono'));

                $em->persist($afp);
                $em->flush();

                return $this->redirect($this->generateURL('listaAfp'));
            }
        
            else
            {
             return $this->render('CrystalrutasBundle:Default:modificarAfp.html.twig', array('afp' => $afp, 'session' => ''));
            }
        }
        else
        {
            return $this->redirect($this->generateURL('login'));
        }
    }

    
}


?>