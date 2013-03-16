<?php

namespace Bbr\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\RedirectResponse;

use Bbr\HomeBundle\Form\LoginType;
use Bbr\HomeBundle\Form\UserCreationType;

use Bbr\HomeBundle\Entity\User;

class DefaultController extends Controller
{

    /**
 	 * @Route("/{page}", defaults={"page" = "home"}, requirements={"page" = "^home|connect|price|contact|about$"}, name="bbr_home")
     * @Template()
     */
    public function indexAction($page)
	{
        return array( 'page' => $page);
    }
	
    /**
     * @Route("/register", name="bbr_register")
	 * @Template()
     */
    public function registerAction()
    {

		$request = $this->get('request');
		if ('POST' == $request->getMethod()) {
			$form->bindRequest($request);
			if ($form->isValid()) {
				//$mailer = $this->get('mailer');
				// .. setup a message and send it
				// http://symfony.com/doc/current/cookbook/email.html

				//$this->get('session')->setFlash('notice', 'Message sent!');

				return new RedirectResponse($this->generateUrl('bbr_user'));
			}
		}

		$formLogin = $this->get('form.factory')->create(new LoginType());
		$formUserCreation = $this->get('form.factory')->create(new UserCreationType(), new User());
        //return array('form' => $form->createView());
		//return $this->render('BbrHomeBundle:Default:register.html.twig', array( 'page' => 'bite'));
		return array(
			'formLogin' => $formLogin->createView(), 
			'formUserCreation' => $formUserCreation->createView(), 
			'page' => 'register'
		);
    }
}
