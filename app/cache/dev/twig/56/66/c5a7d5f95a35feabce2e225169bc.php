<?php

/* HectorFoodServiceBundle:Chart:itemQuery.html.twig */
class __TwigTemplate_5666c5a7d5f95a35feabce2e225169bc extends Twig_Template
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
        $context['menu'] = "charts";
        // line 4
        $context['section'] = "item";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<section class=\"grid_4\">
  <div class=\"block-border\">
    <form class=\"block-content form\" id=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getContext($context, 'formName'), "html");
        echo "\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_chart_item_query"), "html");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo ">
      <h1>Gráfica por alimento</h1>
      ";
        // line 12
        if ($this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "hasFlash", array("error", ), "method", false)) {
            // line 13
            echo "      <p class=\"message error no-margin\">
\t";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "flash", array("error", ), "method", false), "html");
            echo "
\t<span class=\"close-bt\"></span>
      </p>
      ";
        }
        // line 18
        echo "      <fieldset class=\"grey-bg required\">
\t";
        // line 19
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form'), "item", array(), "any", false), "Alimento");
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "item", array(), "any", false));
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "item", array(), "any", false));
        echo "
      </fieldset>

      <!-- Kind of special fieldsets -->
      <fieldset class=\"";
        // line 23
        if ((!$this->getContext($context, 'expandDate'))) {
            echo "collapsed";
        }
        echo "\">
\t<legend><a href=\"#\">Definir fechas</a></legend>
\t";
        // line 25
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form'), "fromDate", array(), "any", false), "Fecha de inicio:");
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "fromDate", array(), "any", false));
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "fromDate", array(), "any", false));
        echo "
\t";
        // line 26
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form'), "toDate", array(), "any", false), "Fecha de fin:");
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "toDate", array(), "any", false));
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "toDate", array(), "any", false));
        echo "
      </fieldset>

      <fieldset class=\"";
        // line 29
        if ((!$this->getContext($context, 'expandTime'))) {
            echo "collapsed";
        }
        echo "\">
\t<legend><a href=\"#\">Definir horas</a></legend>
\t";
        // line 31
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form'), "fromTime", array(), "any", false), "Hora de inicio:");
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "fromTime", array(), "any", false));
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "fromTime", array(), "any", false));
        echo "
\t";
        // line 32
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form'), "toTime", array(), "any", false), "Hora de fin:");
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "toTime", array(), "any", false));
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "toTime", array(), "any", false));
        echo "
      </fieldset>
      ";
        // line 34
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, 'form'));
        echo "

      <fieldset class=\"grey-bg no-margin\">
\t<div class=\"float-right\"><button type=\"submit\" class=\"medium\" onclick=\"submitForm(this.";
        // line 37
        echo twig_escape_filter($this->env, $this->getContext($context, 'formName'), "html");
        echo "\">Generar</button></div>
      </fieldset>
      
    </form>    
  </div>
</section>

";
        // line 44
        if ($this->getContext($context, 'hasChart')) {
            // line 45
            echo "<section class=\"grid_8\">
  <div class=\"block-border\">
    <div class=\"block-content\">

      ";
            // line 50
            echo "      ";
            // line 62
            echo "
      <!-- amcharts script-->
      <!-- swf object (version 2.2) is used to detect if flash is installed and include swf in the page -->
      <script type=\"text/javascript\" src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("amcharts/flash/swfobject.js"), "html");
            echo "\"></script>

      <!-- following scripts required for JavaScript version. The order is important! -->
      <script type=\"text/javascript\" src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("amcharts/javascript/amcharts.js"), "html");
            echo "\"></script>
      <script type=\"text/javascript\" src=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("amcharts/javascript/amfallback.js"), "html");
            echo "\"></script>
      <script type=\"text/javascript\" src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("amcharts/javascript/raphael.js"), "html");
            echo "\"></script>


      <!-- chart is placed in this div. if you have more than one chart on a page, give unique id for each div -->
      <div id=\"chartdiv\" style=\"width:600px; height:400px; background-color:#FFFFFF\"></div>

      <script type=\"text/javascript\">
\t
            var params = {
                bgcolor:\"#FFFFFF\"
                };

\t\t    var flashVars = {
\t\t        path: \"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("amcharts/flash/"), "html");
            echo "\",

\t\t\t\t/* in most cases settings and data are loaded from files, but, as this require
\t\t\t\t all the files to be upladed to web server, we use inline data and settings here.*/
chart_data:\"";
            // line 87
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'values'));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context['_key'] => $context['row']) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'row'), "time", array(), "any", false), "format", array("Y-m-d H:s", ), "method", false), "html");
                echo ";";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'row'), "data", array(), "any", false));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context['_key'] => $context['item']) {
                    if ((!twig_test_empty($this->getContext($context, 'item')))) {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "temperature", array(), "any", false), "html");
                    }
                    if ((!$this->getAttribute($this->getContext($context, 'loop'), "last", array(), "any", false))) {
                        echo ";";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                if ((!$this->getAttribute($this->getContext($context, 'loop'), "last", array(), "any", false))) {
                    echo "\\n";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo "\",
chart_settings: \"";
            // line 88
            ob_start();
            // line 89
            echo "<settings>
  <hide_bullets_count>18</hide_bullets_count>
  <data_type>csv</data_type>
  <plot_area><color>E31033</color><alpha>30</alpha><margins><left>50</left><right>40</right><top>55</top><bottom>30</bottom></margins></plot_area>
  <grid>
    <x>
      <alpha>10</alpha>
    </x>
    <y_left>
      <alpha>10</alpha>
    </y_left>
  </grid>
  <axes><x><width>1</width><color>0D8ECF</color></x><y_left><width>1</width><color>0D8ECF</color></y_left></axes>
  <indicator><color>0D8ECF</color><x_balloon_text_color>FFFFFF</x_balloon_text_color> <line_alpha>50</line_alpha><selection_color>0D8ECF</selection_color><selection_alpha>20</selection_alpha></indicator>
  <zoom_out_button><text_color_hover>FF0F00</text_color_hover></zoom_out_button>
  <help><button><color>FCD202</color><text_color>000000</text_color><text_color_hover>FF0F00</text_color_hover></button><balloon><color>FCD202</color><text_color>000000</text_color></balloon></help>
  <graphs>
  ";
            // line 106
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'values'), 0, array(), "array", false), "data", array(), "any", false)) - 1)));
            foreach ($context['_seq'] as $context['_key'] => $context['i']) {
                // line 107
                echo "    <graph gid='";
                echo twig_escape_filter($this->env, $this->getContext($context, 'i'), "html");
                echo "'>
      <title>";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "name", array(), "any", false), "html");
                echo "</title>
      <color>153F75</color>
      <color_hover>FF0F00</color_hover>
      <line_width>2</line_width>
      <bullet>round</bullet>
      <bullet_size>5</bullet_size>
    </graph>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 116
            echo "  </graphs>
  <guides>
    <guide>
      <start_value>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "maxTemp", array(), "any", false), "html");
            echo "</start_value>
      <end_value>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "minTemp", array(), "any", false), "html");
            echo "</end_value>
      <color>3CE85C</color>
      <fill_color>3CE85C</fill_color>
      <fill_alpha>60</fill_alpha>
    </guide>
  </guides>
  <labels><label lid='0'><text><![CDATA[<b>Gráfica para: ";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "name", array(), "any", false), "html");
            echo "</b>]]></text><y>15</y><text_size>13</text_size><align>center</align></label></labels></settings>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 127
            echo "\"
\t\t\t};

\t\t\t// change 8 to 80 to test javascript version
            if (swfobject.hasFlashPlayerVersion(\"8\")){
\t    \t\tswfobject.embedSWF(\"";
            // line 132
            echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("amcharts/flash/amline.swf"), "html");
            echo "\", \"chartdiv\", \"600\", \"400\", \"8.0.0\", \"";
            echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("amcharts/flash/expressInstall.swf"), "html");
            echo "\", flashVars, params);
\t    \t}
\t\t\telse{
\t\t\t\tvar amFallback = new AmCharts.AmFallback();
\t\t\t\tamFallback.chartSettings = flashVars.chart_settings;
\t\t\t\tamFallback.pathToImages = \"";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("amcharts/javascript/images/"), "html");
            echo "\";
\t\t\t\tamFallback.chartData = flashVars.chart_data;
\t\t\t\tamFallback.type = \"line\";
\t\t\t\tamFallback.write(\"chartdiv\");
\t\t\t}

\t\t</script>
\t\t<!-- end of amcharts script -->
    </div>
  </div>
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "HectorFoodServiceBundle:Chart:itemQuery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
