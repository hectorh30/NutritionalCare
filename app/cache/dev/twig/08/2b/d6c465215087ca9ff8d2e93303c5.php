<?php

/* HectorFoodServiceBundle:Meal:edit.html.twig */
class __TwigTemplate_082bd6c465215087ca9ff8d2e93303c5 extends Twig_Template
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
        echo "<section class=\"grid_12\">
  <div class=\"block-border\">
    <form class=\"block-content form\" id=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getContext($context, 'formName'), "html");
        echo "\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_meal_edit", array("id" => $this->getAttribute($this->getContext($context, 'meal'), "id", array(), "any", false))), "html");
        echo "\" method=\"post\">
      <h1>Editando: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'meal'), "name", array(), "any", false), "html");
        echo "</h1>

      ";
        // line 12
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, 'form'), "name", array(), "any", false));
        echo "
      <br/>
      ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'form'), "items", array(), "any", false));
        foreach ($context['_seq'] as $context['_key'] => $context['item']) {
            // line 15
            echo "      <fieldset class=\"grey-bg required\">
\t<legend>Alimento</legend>
\t";
            // line 17
            echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'item'));
            echo "
      </fieldset>      
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "
      ";
        // line 21
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, 'form'));
        echo "
      <fieldset class=\"grey-bg no-margin\">
\t<div class=\"float-right\"><button type=\"submit\" class=\"medium\" onclick=\"submitForm(this.";
        // line 23
        echo twig_escape_filter($this->env, $this->getContext($context, 'formName'), "html");
        echo "\">Guardar</button></div>
\t<a class=\"button\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_meal_index"), "html");
        echo "\">Volver</a>
      </fieldset>
    </form>    
  </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "HectorFoodServiceBundle:Meal:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
