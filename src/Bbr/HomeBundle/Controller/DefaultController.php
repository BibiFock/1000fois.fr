<?php

namespace Bbr\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{

    /**
 	 * @Route("/{page}", defaults={"page" = "home"}, requirements={"page" = "^home|connect|price|contact|about$"})
     * @Template()
     */
    public function indexAction($page)
	{
        return array( 'page' => $page);
    }
	
    /**
     * @Route("/register")
	 * @Template()
     */
    public function registerAction()
    {
        //$form = $this->get('form.factory')->create(new ContactType());

        //$request = $this->get('request');
        //if ('POST' == $request->getMethod()) {
            //$form->bindRequest($request);
            //if ($form->isValid()) {
                //$mailer = $this->get('mailer');
                //// .. setup a message and send it
                //// http://symfony.com/doc/current/cookbook/email.html

                //$this->get('session')->setFlash('notice', 'Message sent!');

                //return new RedirectResponse($this->generateUrl('_demo'));
            //}
        //}

        return array('form' => $form->createView());
		//return $this->render('BbrHomeBundle:Default:register.html.twig', array( 'page' => 'bite'));
		return array('page' => 'register');
    }
}
