<?php

/* HectorFoodServiceBundle:Meal:measuring.html.twig */
class __TwigTemplate_f4dbe134e28c893045677bdd9e04a617 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_row' => array($this, 'block_field_row'),
            'title' => array($this, 'block_title'),
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
        echo $this->env->getExtension('form')->setTheme($this->getContext($context, 'form'), array($this, ));        // line 5
        $context['menu'] = "home";
        // line 6
        $context['section'] = "meal";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_field_row($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        echo "       ";
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, 'form'));
        echo " ";
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 16
    public function block_title($context, array $blocks = array())
    {
        echo "Measuring meal: ";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "<section class=\"grid_12\">
  <div class=\"block-border\">
    <form class=\"block-content form\" id=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, 'formName'), "html");
        echo "\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_meal_measuring", array("id" => $this->getAttribute($this->getContext($context, 'meal'), "id", array(), "any", false))), "html");
        echo "\" method=\"post\">
      <h1>Midiendo: ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'meal'), "name", array(), "any", false), "html");
        echo "</h1>

      ";
        // line 24
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, 'form'));
        echo "

      ";
        // line 26
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form'), "calibrated", array(), "any", false), "Calibrado");
        echo "
      ";
        // line 27
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "calibrated", array(), "any", false));
        echo "
      ";
        // line 28
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "calibrated", array(), "any", false));
        echo " <br/>
      ";
        // line 29
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form'), "responsible", array(), "any", false), "Responsable");
        echo "
      ";
        // line 30
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "responsible", array(), "any", false));
        echo "
      ";
        // line 31
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "responsible", array(), "any", false));
        echo " <br/>

      <br/>
      ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'meal'), "items", array(), "any", false));
        foreach ($context['_seq'] as $context['_key'] => $context['item']) {
            // line 35
            echo "      <fieldset class=\"grey-bg required\">
\t<legend>";
            // line 36
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "name", array(), "any", false)), "html");
            echo "</legend>
\t";
            // line 37
            echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), $this->getAttribute($this->getContext($context, 'item'), "id", array(), "any", false), array(), "array", false));
            echo "
\t";
            // line 38
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), $this->getAttribute($this->getContext($context, 'item'), "id", array(), "any", false), array(), "array", false));
            echo "
      </fieldset>      
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 41
        echo "
      ";
        // line 42
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, 'form'));
        echo "
      <fieldset class=\"grey-bg no-margin\">
\t<div class=\"float-right\"><button type=\"submit\" class=\"medium\" onclick=\"submitForm(this.";
        // line 44
        echo twig_escape_filter($this->env, $this->getContext($context, 'formName'), "html");
        echo "\">Guardar</button></div>
\t<a class=\"button\" href=\"";
        // line 45
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
        return "HectorFoodServiceBundle:Meal:measuring.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
