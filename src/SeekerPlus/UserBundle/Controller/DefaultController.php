<?php

namespace SeekerPlus\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PagesBundle:Default:index.html.twig');
    }
	/**
	 * This method is only here to check the permissions for the firewall
	 * Don't delete - it's supposed to be empty
	 */
	public function loginCheckAction()
	{
		
	}
	
    /**
     * This method is only here to check the permissions for the facebook firewall
     * Don't delete - it's supposed to be empty
     */
    public function fbLoginCheckAction()
    {
        
    }
}
