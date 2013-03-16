<?php

namespace Bbr\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class UserController extends Controller
{

    /**
 	 * @Route("/me",  name="bbr_user")
     * @Template()
     */
    public function indexAction()
	{
        return array( 'page' => 'register');
    }
	
}
