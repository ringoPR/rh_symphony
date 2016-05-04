<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1b0a0eafd9fb97f5829ab72f4f5435e7993dc6f19b8325514011684a58cbc538 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4de8efa1a87731833556e46d9ba7b2c7646def2daffe81a2376ac83abc712ec5 = $this->env->getExtension("native_profiler");
        $__internal_4de8efa1a87731833556e46d9ba7b2c7646def2daffe81a2376ac83abc712ec5->enter($__internal_4de8efa1a87731833556e46d9ba7b2c7646def2daffe81a2376ac83abc712ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4de8efa1a87731833556e46d9ba7b2c7646def2daffe81a2376ac83abc712ec5->leave($__internal_4de8efa1a87731833556e46d9ba7b2c7646def2daffe81a2376ac83abc712ec5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_84d1fd2a7014a8e5cceea1c022908b405e535e1fecbddae65df038c11ef38b6b = $this->env->getExtension("native_profiler");
        $__internal_84d1fd2a7014a8e5cceea1c022908b405e535e1fecbddae65df038c11ef38b6b->enter($__internal_84d1fd2a7014a8e5cceea1c022908b405e535e1fecbddae65df038c11ef38b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_84d1fd2a7014a8e5cceea1c022908b405e535e1fecbddae65df038c11ef38b6b->leave($__internal_84d1fd2a7014a8e5cceea1c022908b405e535e1fecbddae65df038c11ef38b6b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9c98f289f6110d0c4c5a410ce46c698dcba5e6f9a92104861ac7852121da192c = $this->env->getExtension("native_profiler");
        $__internal_9c98f289f6110d0c4c5a410ce46c698dcba5e6f9a92104861ac7852121da192c->enter($__internal_9c98f289f6110d0c4c5a410ce46c698dcba5e6f9a92104861ac7852121da192c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9c98f289f6110d0c4c5a410ce46c698dcba5e6f9a92104861ac7852121da192c->leave($__internal_9c98f289f6110d0c4c5a410ce46c698dcba5e6f9a92104861ac7852121da192c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dd70962fd9ab52f74b23e233b107f94b3eb0bb65172f04b1f87f6475a5388423 = $this->env->getExtension("native_profiler");
        $__internal_dd70962fd9ab52f74b23e233b107f94b3eb0bb65172f04b1f87f6475a5388423->enter($__internal_dd70962fd9ab52f74b23e233b107f94b3eb0bb65172f04b1f87f6475a5388423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dd70962fd9ab52f74b23e233b107f94b3eb0bb65172f04b1f87f6475a5388423->leave($__internal_dd70962fd9ab52f74b23e233b107f94b3eb0bb65172f04b1f87f6475a5388423_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
