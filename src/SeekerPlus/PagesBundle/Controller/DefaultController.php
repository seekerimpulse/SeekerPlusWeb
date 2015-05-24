<?php

namespace SeekerPlus\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PagesBundle:Default:index.html.twig');
    }
    public function contactenosAction()
    {
    	return $this->render('PagesBundle:Default:contactenos.html.twig');
    }
    public function serviciosAction()
    {
    	return $this->render('PagesBundle:Default:servicios.html.twig');
    }
    public function politicasDePrivacidadAction()
    {
    	return $this->render('PagesBundle:Default:politicasDePrivacidad.html.twig');
    }
    public function condicionesDeUsoAction()
    {
    	return $this->render('PagesBundle:Default:condicionesDeUso.html.twig');
    }
}
