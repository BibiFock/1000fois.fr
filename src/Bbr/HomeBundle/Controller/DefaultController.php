<?php

namespace Bbr\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{

    /**
 	 * @Route("/{page}", defaults={"page" = "home"}, requirements={"page" = "^home|connect|register|price|contact|about$"})
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
        return array();
    }
}
