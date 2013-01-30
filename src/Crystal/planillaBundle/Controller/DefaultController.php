<?php

namespace Crystal\planillaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBagInterface;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
    	$Session = new Session();
    	$id = $Session->get('id');
    	if(isset($id))
    	{
        	return $this->render('CrystalplanillaBundle:Default:index.html.twig', array('name' => $name, 'session' => ''));
        }
        else
        {
        	return $this->redirect($this->generateURL('login'));
        }
    }

}
