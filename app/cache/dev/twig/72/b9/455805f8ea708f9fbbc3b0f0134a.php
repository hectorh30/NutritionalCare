<?php

/* HectorFoodServiceBundle:Meal:index.html.twig */
class __TwigTemplate_72b9455805f8ea708f9fbbc3b0f0134a extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 3
        $context['menu'] = "home";
        // line 4
        $context['section'] = "meal";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<section class=\"grid_12\">
<div class=\"float-right\">
<div class=\"block-border\">

<form class=\"block-content form\" action=\"#\" method=\"post\" name=\"meal_list_form\">
  <h1>Listado Tiempos de comida</h1>
  <div class=\"block-controls\">
  </div>

  ";
        // line 17
        if ($this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "hasFlash", array("notice", ), "method", false)) {
            // line 18
            echo "  <p class=\"message success no-margin\">
    ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "flash", array("notice", ), "method", false), "html");
            echo "
    <span class=\"close-bt\"></span>
  </p>
  ";
        }
        // line 23
        echo "
  <div class=\"no-margin\">
    <table class=\"table\" cellspacing=\"0\">
      <thead>
\t<tr>
\t  <th scope=\"col\">Nombre</th>
\t  <th scope=\"col\">Última medición</th>
\t  <th scope=\"col\">Acciones</th>
\t</tr>
      </thead>
      <tbody>
\t";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'meals'));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context['_key'] => $context['meal']) {
            // line 35
            echo "\t<tr>
\t  <td>
\t    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_meal_show", array("id" => $this->getAttribute($this->getContext($context, 'meal'), "id", array(), "any", false))), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'meal'), "name", array(), "any", false), "html");
            echo "</a>
\t  </td>
\t  <td>No habilitado</td>
\t  <td>
\t    <a class=\"with-tip\" title=\"Medir\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_meal_measuring", array("id" => $this->getAttribute($this->getContext($context, 'meal'), "id", array(), "any", false))), "html");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("images/icons/fugue/magnifier.png"), "html");
            echo "\"/></a>
\t    <a class=\"with-tip\" title=\"Editar\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_meal_edit", array("id" => $this->getAttribute($this->getContext($context, 'meal'), "id", array(), "any", false))), "html");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("images/icons/fugue/pencil.png"), "html");
            echo "\"/></a>
\t    <a class=\"with-tip\" title=\"Eliminar\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_meal_delete", array("id" => $this->getAttribute($this->getContext($context, 'meal'), "id", array(), "any", false))), "html");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("images/icons/fugue/cross-circle.png"), "html");
            echo "\"/></a>
\t  </td>
\t</tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "\t<tr><td>No se encontraron tiempos de comida</td><td></td><td></td></tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meal'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 48
        echo "\t
      </tbody>
    </table>
  </div>
  <ul class=\"message no-margin\">
    <li>
      ";
        // line 54
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getContext($context, 'meals')), "html");
        echo " tiempos de comida encontrados.
    </li>
  </ul>
  <div class=\"block-footer\">
    <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("images/icons/fugue/arrow-curve-000-left.png"), "html");
        echo "\" width=\"16\" height=\"16\" class=\"picto\"/>
      <a class=\"button\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_meal_new"), "html");
        echo "\">Nuevo tiempo de comida</a> <a class=\"button\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_item_new"), "html");
        echo "\">Nuevo alimento</a><br/>
  </div>
</form>

</div>
</section>

";
    }

    public function getTemplateName()
    {
        return "HectorFoodServiceBundle:Meal:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
