<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SeekerPlus\\PagesBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contactenos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SeekerPlus\\PagesBundle\\Controller\\DefaultController::contactenosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contactenos/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'servicios' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SeekerPlus\\PagesBundle\\Controller\\DefaultController::serviciosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/servicios/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'politicasDePrivacidad' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SeekerPlus\\PagesBundle\\Controller\\DefaultController::politicasDePrivacidadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/politicasDePrivacidad/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'condicionesDeUso' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SeekerPlus\\PagesBundle\\Controller\\DefaultController::condicionesDeUsoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/condicionesDeUso/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
