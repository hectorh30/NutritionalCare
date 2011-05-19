<?php

use Symfony\Component\Routing\Matcher\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Matcher\Exception\NotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_home');
            }
            return array (  '_controller' => 'Hector\\FoodServiceBundle\\Controller\\MealController::indexAction',  '_route' => '_home',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]*?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]*?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }
    
            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]*?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }
    
            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }
    
        }

        if (0 === strpos($pathinfo, '/meal')) {
            // _meal_index
            if (rtrim($pathinfo, '/') === '/meal') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_meal_index');
                }
                return array (  '_controller' => 'Hector\\FoodServiceBundle\\Controller\\MealController::indexAction',  '_route' => '_meal_index',);
            }
    
            // _meal_delete
            if (0 === strpos($pathinfo, '/meal/delete') && preg_match('#^/meal/delete/(?P<id>[^/]*?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Hector\\FoodServiceBundle\\Controller\\MealController::deleteAction',)), array('_route' => '_meal_delete'));
            }
    
            // _meal_show
            if (0 === strpos($pathinfo, '/meal/show') && preg_match('#^/meal/show/(?P<id>[^/]*?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Hector\\FoodServiceBundle\\Controller\\MealController::showAction',)), array('_route' => '_meal_show'));
            }
    
            // _meal_edit
            if (0 === strpos($pathinfo, '/meal/edit') && preg_match('#^/meal/edit/(?P<id>[^/]*?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Hector\\FoodServiceBundle\\Controller\\MealController::editAction',)), array('_route' => '_meal_edit'));
            }
    
            // _meal_measuring
            if (0 === strpos($pathinfo, '/meal/measuring') && preg_match('#^/meal/measuring/(?P<id>[^/]*?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Hector\\FoodServiceBundle\\Controller\\MealController::measuringAction',)), array('_route' => '_meal_measuring'));
            }
    
            // _meal_new
            if ($pathinfo === '/meal/new') {
                return array (  '_controller' => 'Hector\\FoodServiceBundle\\Controller\\MealController::newAction',  '_route' => '_meal_new',);
            }
    
        }

        if (0 === strpos($pathinfo, '/item')) {
            // _item_show
            if (0 === strpos($pathinfo, '/item/show') && preg_match('#^/item/show/(?P<id>[^/]*?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Hector\\FoodServiceBundle\\Controller\\ItemController::showAction',)), array('_route' => '_item_show'));
            }
    
            // _item_index
            if (rtrim($pathinfo, '/') === '/item') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_item_index');
                }
                return array (  '_controller' => 'Hector\\FoodServiceBundle\\Controller\\ItemController::indexAction',  '_route' => '_item_index',);
            }
    
            // _item_new
            if ($pathinfo === '/item/new') {
                return array (  '_controller' => 'Hector\\FoodServiceBundle\\Controller\\ItemController::newAction',  '_route' => '_item_new',);
            }
    
        }

        if (0 === strpos($pathinfo, '/measuring')) {
            // _measuring_list
            if (rtrim($pathinfo, '/') === '/measuring') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_measuring_list');
                }
                return array (  '_controller' => 'Hector\\FoodServiceBundle\\Controller\\MeasuringController::indexAction',  '_route' => '_measuring_list',);
            }
    
            // _measuring_new
            if ($pathinfo === '/measuring/new') {
                return array (  '_controller' => 'Hector\\FoodServiceBundle\\Controller\\MeasuringController::newAction',  '_route' => '_measuring_new',);
            }
    
        }

        if (0 === strpos($pathinfo, '/chart')) {
            // _chart_meal_query
            if ($pathinfo === '/chart/meal') {
                return array (  '_controller' => 'Hector\\FoodServiceBundle\\Controller\\ChartController::mealQueryAction',  '_route' => '_chart_meal_query',);
            }
    
            // _chart_item_query
            if ($pathinfo === '/chart/item') {
                return array (  '_controller' => 'Hector\\FoodServiceBundle\\Controller\\ChartController::itemQueryAction',  '_route' => '_chart_item_query',);
            }
    
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new NotFoundException();
    }
}
