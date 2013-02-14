<?php

namespace Bbr\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Route("/index")
     * @Route("/price")
     * @Route("/contact")
     * @Route("/about")
     * @Template()
     */
    public function indexAction()
    {
        return array();
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
