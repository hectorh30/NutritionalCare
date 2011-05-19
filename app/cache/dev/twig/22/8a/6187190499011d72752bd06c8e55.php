<?php

/* HectorFoodServiceBundle:Item:new.html.twig */
class __TwigTemplate_228a6187190499011d72752bd06c8e55 extends Twig_Template
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
        $context['section'] = "item";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_item_new"), "html");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo ">
      <h1>New item</h1>

      <div class=\"columns\">
\t<div class=\"colx2-left\">
\t<fieldset class=\"grey-bg required\">
\t  ";
        // line 16
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form'), "meal", array(), "any", false), "Tiempo de comida");
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "meal", array(), "any", false));
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "meal", array(), "any", false));
        echo "
\t  ";
        // line 17
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form'), "name", array(), "any", false), "Nombre");
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "name", array(), "any", false));
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "name", array(), "any", false));
        echo "
\t</fieldset>
\t</div>
\t<div class=\"colx2-right\">
\t<fieldset>
\t  ";
        // line 22
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form'), "minTemp", array(), "any", false), "Temp. min.");
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "minTemp", array(), "any", false));
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "minTemp", array(), "any", false));
        echo "
\t  ";
        // line 23
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form'), "maxTemp", array(), "any", false), "Temp. max.");
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "maxTemp", array(), "any", false));
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "maxTemp", array(), "any", false));
        echo "
\t</fieldset>
\t</div>
      </div>
      ";
        // line 27
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, 'form'));
        echo "

      <fieldset class=\"grey-bg no-margin\">
\t<div class=\"float-right\"><button type=\"submit\" class=\"medium\" onclick=\"submitForm(this.";
        // line 30
        echo twig_escape_filter($this->env, $this->getContext($context, 'formName'), "html");
        echo "\">Guardar</button></div>
\t<a class=\"button\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_item_index"), "html");
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
        return "HectorFoodServiceBundle:Item:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
