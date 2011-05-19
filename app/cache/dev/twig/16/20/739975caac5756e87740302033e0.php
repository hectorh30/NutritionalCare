<?php

/* HectorFoodServiceBundle:Meal:new.html.twig */
class __TwigTemplate_1620739975caac5756e87740302033e0 extends Twig_Template
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
  <div class=\"block-border\">
    <form class=\"block-content form\" id=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getContext($context, 'formName'), "html");
        echo "\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_meal_new"), "html");
        echo "\" method=\"post\">
      <h1>New meal</h1>
      <fieldset class=\"grey-bg required\">
\t";
        // line 13
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form'), "name", array(), "any", false), "Nombre");
        echo "
\t";
        // line 14
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "name", array(), "any", false));
        echo "
\t";
        // line 15
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "name", array(), "any", false));
        echo "
\t";
        // line 16
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, 'form'));
        echo "
      </fieldset>
      <fieldset class=\"grey-bg no-margin\">
\t<div class=\"float-right\"><button type=\"submit\" class=\"medium\" onclick=\"submitForm(this.";
        // line 19
        echo twig_escape_filter($this->env, $this->getContext($context, 'formName'), "html");
        echo "\">Guardar</button></div>
\t<a class=\"button\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_meal_index"), "html");
        echo "\">Volver a la lista</a>
\t<!--input type=\"Save\"/-->
      </fieldset>
    </form>    
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "HectorFoodServiceBundle:Meal:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
