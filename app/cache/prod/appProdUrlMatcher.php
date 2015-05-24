<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'SeekerPlus\\PagesBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
        }

        // contactenos
        if (rtrim($pathinfo, '/') === '/contactenos') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'contactenos');
            }

            return array (  '_controller' => 'SeekerPlus\\PagesBundle\\Controller\\DefaultController::contactenosAction',  '_route' => 'contactenos',);
        }

        // servicios
        if (rtrim($pathinfo, '/') === '/servicios') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'servicios');
            }

            return array (  '_controller' => 'SeekerPlus\\PagesBundle\\Controller\\DefaultController::serviciosAction',  '_route' => 'servicios',);
        }

        // politicasDePrivacidad
        if (rtrim($pathinfo, '/') === '/politicasDePrivacidad') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'politicasDePrivacidad');
            }

            return array (  '_controller' => 'SeekerPlus\\PagesBundle\\Controller\\DefaultController::politicasDePrivacidadAction',  '_route' => 'politicasDePrivacidad',);
        }

        // condicionesDeUso
        if (rtrim($pathinfo, '/') === '/condicionesDeUso') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'condicionesDeUso');
            }

            return array (  '_controller' => 'SeekerPlus\\PagesBundle\\Controller\\DefaultController::condicionesDeUsoAction',  '_route' => 'condicionesDeUso',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
