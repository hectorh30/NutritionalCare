<?php

/* ::base.html.twig */
class __TwigTemplate_228294775d32150605bb470f51675854 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>Servicio de alimentación</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("css/reset.css"), "html");
        echo "\" /> 
\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("css/common.css"), "html");
        echo "\"/>
\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("css/form.css"), "html");
        echo "\" /> 
\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("css/standard.css"), "html");
        echo "\" /> 
\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("css/960.gs.fluid.css"), "html");
        echo "\" /> 
\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("css/simple-lists.css"), "html");
        echo "\" /> 
\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("css/block-lists.css"), "html");
        echo "\" /> 
\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("css/planning.css"), "html");
        echo "\" /> 
\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("css/table.css"), "html");
        echo "\" /> 
\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("css/calendars.css"), "html");
        echo "\" /> 
\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("css/wizard.css"), "html");
        echo "\" /> 
\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("css/gallery.css"), "html");
        echo "\" /> 
\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("css/special-pages.css"), "html");
        echo "\" /> 
\t<script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("js/html5.js"), "html");
        echo "\"></script> 
\t<script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("js/jquery-1.4.2.min.js"), "html");
        echo "\"></script> 
\t<script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("js/old-browsers.js"), "html");
        echo "\"></script> 
\t<script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("js/jquery.accessibleList.js"), "html");
        echo "\"></script> 
\t<script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("js/searchField.js"), "html");
        echo "\"></script> 
\t<script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("js/common.js"), "html");
        echo "\"></script> 
\t<script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("js/standard.js"), "html");
        echo "\"></script> 
\t<script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("js/jquery.tip.js"), "html");
        echo "\"></script> 
\t<script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("js/jquery.hashchange.js"), "html");
        echo "\"></script> 
\t<script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("js/jquery.contextMenu.js"), "html");
        echo "\"></script> 
\t<script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("js/list.js"), "html");
        echo "\"></script> 
    </head>
    <body>
      <header>
\t<div class=\"container 12\">
\t  <p id=\"skin-name\"><strong>NutritionalCare</strong></p>
\t  <div class=\"server-info\">v. BETA 1</div>
\t</div>
      </header>

      ";
        // line 40
        $this->displayBlock('menu', $context, $blocks);
        // line 90
        echo "
      <div id=\"sub-nav\">
\t<div class=\"container_12\">
\t  
\t</div>
      </div>

      <div id=\"status-bar\"><div class=\"container_12\"></div></div>      
      <div id=\"header-shadow\"></div>
      <div id=\"control-bar\" class=\"gre-bg clearfix\" style=\"opacity: 1;\"><div class=\"container_12\"></div></div>

        ";
        // line 101
        $this->displayBlock('body', $context, $blocks);
        // line 102
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 103
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 40
    public function block_menu($context, array $blocks = array())
    {
        // line 41
        echo "      <nav id=\"main-nav\">
\t<ul class=\"container_12\">
\t  <li class=\"home";
        // line 43
        if (($this->getContext($context, 'menu') == "home")) {
            echo " current";
        }
        echo "\" title=\"Inicio\" title>
\t    <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_home"), "html");
        echo "\">Inicio</a>
\t    <ul>
\t      <li class=\"with-menu";
        // line 46
        if (($this->getContext($context, 'section') == "meal")) {
            echo " current";
        }
        echo "\">
\t        <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_meal_index"), "html");
        echo "\">Tiempo de comida</a>
\t\t<div class=\"menu\">
\t\t  <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("images/menu-open-arrow.png"), "html");
        echo "\" width=\"16\" height=\"16\"/>
\t\t  <ul style=\"opacity: 1; \">
\t\t    <li>
\t\t      <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_meal_new"), "html");
        echo "\">Nuevo</a>
\t\t    </li>
\t\t    <li>
\t\t      <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_meal_index"), "html");
        echo "\">Lista</a>
\t\t    </li>
\t\t  </ul>\t\t    
\t\t</div>
\t      </li>
\t      <li class=\"with-menu";
        // line 60
        if (($this->getContext($context, 'section') == "item")) {
            echo " current";
        }
        echo "\">
\t        <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_item_index"), "html");
        echo "\">Alimento</a>
\t\t<div class=\"menu\">
\t\t  <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("images/menu-open-arrow.png"), "html");
        echo "\" width=\"16\" height=\"16\"/>
\t\t  <ul style=\"opacity: 1; \">
\t\t    <li>
\t\t      <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_item_new"), "html");
        echo "\">Nuevo</a>
\t\t    </li>
\t\t    <li>
\t\t      <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_item_index"), "html");
        echo "\">Lista</a>
\t\t    </li>
\t\t  </ul>\t\t    
\t\t</div>
\t      </li>
\t    </ul>
\t  </li>
\t  <li class=\"stats";
        // line 76
        if (($this->getContext($context, 'menu') == "charts")) {
            echo " current";
        }
        echo "\" title=\"Estadísticas\">
\t    <a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_chart_meal_query"), "html");
        echo "\" title>Estadísticas</a>
\t    <ul>
\t      <li class=\"";
        // line 79
        if (($this->getContext($context, 'section') == "meal")) {
            echo " current";
        }
        echo "\">
\t        <a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_chart_meal_query"), "html");
        echo "\">Tiempo de comida</a>
\t      </li>
\t      <li class=\"";
        // line 82
        if (($this->getContext($context, 'section') == "item")) {
            echo " current";
        }
        echo "\">
\t        <a href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_chart_item_query"), "html");
        echo "\">Alimento</a>
\t      </li>
\t    </ul>
\t  </li>
\t</ul>
      </nav>
      ";
    }

    // line 101
    public function block_body($context, array $blocks = array())
    {
    }

    // line 102
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
