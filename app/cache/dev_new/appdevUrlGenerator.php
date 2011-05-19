<?php

use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
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

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]*?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]*?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]*?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]*?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebConfiguratorBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Symfony\\Bundle\\WebConfiguratorBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]*?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebConfiguratorBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
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
