<?php
	namespace Crystal\rutasBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\HttpFoundation\Session\Session;
    use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBagInterface;
	use Crystal\planillaBundle\Entity\catBancos;

	class bancosController extends Controller
	{
		public function listaBancosAction()
	    {
	    	$Session = new Session();
	    	$id = $Session->get('id');
	    	if(isset($id))
	    	{
		        $EM = $this->getDoctrine()->getEntityManager();
				$bancos =  $EM->getRepository('CrystalplanillaBundle:catBancos')->findAll();
				return $this->render('CrystalrutasBundle:Default:listaBancos.html.twig', array('bancos' => $bancos, 'Error' => '','session' => ''));
		    }
		    else
		    {
		    	return $this->redirect($this->generateURL('login'));
		    }
	    }

	      public function agregarBancosAction()
	    {
	    	$Session = new Session();
	    	$id = $Session->get('id');
	    	if(isset($id))
	    	{
		     	$request = $this->getRequest();
		     	$banco = new catBancos();
		     	$em = $this->getDoctrine()->getEntityManager();

		     	if($request->getMethod() == 'POST')
				{
					 $_POST = $request->request;
		             $_FILES = $request->files;

		             $banco->setnombre($_POST->get('txtName'));

		             $em->persist($banco);
		             $em->flush();

		             return $this->redirect($this->generateURL('listaBancos'));
				}
				else
				{
					return $this->render('CrystalrutasBundle:Default:agregarBancos.html.twig', array('banco' => $banco, 'session' => '' ));				
				}
			}
			else
			{
				return $this->redirect($this->generateURL('login'));
			}
		}
		     public function eliminarBancosAction($id)
	    {
	    	$Session = new Session();
	    	$idSes = $Session->get('id');
	    	if(isset($idSes))
	    	{
		    	$em = $this->getDoctrine()->getEntityManager();
	  	    	$banco = $em->getRepository('CrystalplanillaBundle:catBancos')->find($id);
		    	$Ban = $em->getRepository('CrystalplanillaBundle:catEmpleado')->findByidBanco($id);
                 
		    	$dependency = false;
		    	for($i = 0; $i < count($Ban); $i++)
		    	{
		    		$dependency = true;
		    	}
		    	if($dependency)
		    	{
		    		$banco =  $em->getRepository('CrystalplanillaBundle:catBancos')->findAll();	
	        	    $error = 'No se puede eliminar este banco ya que hay empleados asociados a este.';
		    		return $this->render('CrystalrutasBundle:Default:listaBancos.html.twig', array('bancos' => $banco, 'Error' => $error, 'session' => ''));	
			    }
			    else
			    {
			    	$em->remove($banco);
			        $em->flush();
			        return $this->redirect($this->generateURL('listaBancos'));
			    }
			}
			else
			{
				return $this->redirect($this->generateURL('login'));
			}
	    }

		     public function modificarBancosAction($id)
	    {
	    	$Session = new Session();
	    	$idSes = $Session->get('id');
	    	if(isset($idSes))
		   	{
		        $request = $this->getRequest();
		        $em = $this->getDoctrine()->getEntityManager();
		        $bancos = $em->getRepository('CrystalplanillaBundle:catBancos')->find($id);

		        if($request->getMethod() == 'POST')
		        {
		            $_POST = $request->request;

		            $bancos->setnombre($_POST->get('txtName'));

		            $em->persist($bancos);
		            $em->flush();

		            return $this->redirect($this->generateURL('listaBancos'));
		        }
		    
		        else
		        {
		         return $this->render('CrystalrutasBundle:Default:modificarBancos.html.twig', array('bancos' => $bancos, 'session' => ''));
		        }
		    }
		    else
		    {
		    	return $this->redirect($this->generateURL('login'));
		    }
	    }
	}


?>
