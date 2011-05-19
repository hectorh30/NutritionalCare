<?php

use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_home' => true,
       '_demo_login' => true,
       '_security_check' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
       '_meal_index' => true,
       '_meal_delete' => true,
       '_meal_show' => true,
       '_meal_edit' => true,
       '_meal_measuring' => true,
       '_meal_new' => true,
       '_item_show' => true,
       '_item_index' => true,
       '_item_new' => true,
       '_measuring_list' => true,
       '_measuring_new' => true,
       '_chart_meal_query' => true,
       '_chart_item_query' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, array $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new \InvalidArgumentException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Hector\\FoodServiceBundle\\Controller\\MealController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function get_demo_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login',  ),));
    }

    private function get_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login_check',  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/logout',  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        return array(array (), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]*?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]*?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello/admin',  ),));
    }

    private function get_demoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/',  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]*?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/hello',  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/contact',  ),));
    }

    private function get_meal_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Hector\\FoodServiceBundle\\Controller\\MealController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/meal/',  ),));
    }

    private function get_meal_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Hector\\FoodServiceBundle\\Controller\\MealController::deleteAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]*?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/meal/delete',  ),));
    }

    private function get_meal_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Hector\\FoodServiceBundle\\Controller\\MealController::showAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]*?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/meal/show',  ),));
    }

    private function get_meal_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Hector\\FoodServiceBundle\\Controller\\MealController::editAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]*?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/meal/edit',  ),));
    }

    private function get_meal_measuringRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Hector\\FoodServiceBundle\\Controller\\MealController::measuringAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]*?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/meal/measuring',  ),));
    }

    private function get_meal_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Hector\\FoodServiceBundle\\Controller\\MealController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/meal/new',  ),));
    }

    private function get_item_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Hector\\FoodServiceBundle\\Controller\\ItemController::showAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]*?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/item/show',  ),));
    }

    private function get_item_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Hector\\FoodServiceBundle\\Controller\\ItemController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/item/',  ),));
    }

    private function get_item_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Hector\\FoodServiceBundle\\Controller\\ItemController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/item/new',  ),));
    }

    private function get_measuring_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Hector\\FoodServiceBundle\\Controller\\MeasuringController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/measuring/',  ),));
    }

    private function get_measuring_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Hector\\FoodServiceBundle\\Controller\\MeasuringController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/measuring/new',  ),));
    }

    private function get_chart_meal_queryRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Hector\\FoodServiceBundle\\Controller\\ChartController::mealQueryAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/chart/meal',  ),));
    }

    private function get_chart_item_queryRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Hector\\FoodServiceBundle\\Controller\\ChartController::itemQueryAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/chart/item',  ),));
    }
}
