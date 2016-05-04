<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7671c40d26e53fc060788355e12d5f0c3e62be6597824fb063e3b741943a21e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ce05d9f4733fca0c2aa279b23df88f4da1473e95ecb92688c09303498e1e564 = $this->env->getExtension("native_profiler");
        $__internal_9ce05d9f4733fca0c2aa279b23df88f4da1473e95ecb92688c09303498e1e564->enter($__internal_9ce05d9f4733fca0c2aa279b23df88f4da1473e95ecb92688c09303498e1e564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ce05d9f4733fca0c2aa279b23df88f4da1473e95ecb92688c09303498e1e564->leave($__internal_9ce05d9f4733fca0c2aa279b23df88f4da1473e95ecb92688c09303498e1e564_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5e069f482e0b591ac961ad0d35e53830ccc6c208cb719a42d8e6049b0b48a4ac = $this->env->getExtension("native_profiler");
        $__internal_5e069f482e0b591ac961ad0d35e53830ccc6c208cb719a42d8e6049b0b48a4ac->enter($__internal_5e069f482e0b591ac961ad0d35e53830ccc6c208cb719a42d8e6049b0b48a4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5e069f482e0b591ac961ad0d35e53830ccc6c208cb719a42d8e6049b0b48a4ac->leave($__internal_5e069f482e0b591ac961ad0d35e53830ccc6c208cb719a42d8e6049b0b48a4ac_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b36355dd161a3968bd26729847a0f3cc5e4378c11e028579122dc51f37b467e = $this->env->getExtension("native_profiler");
        $__internal_3b36355dd161a3968bd26729847a0f3cc5e4378c11e028579122dc51f37b467e->enter($__internal_3b36355dd161a3968bd26729847a0f3cc5e4378c11e028579122dc51f37b467e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3b36355dd161a3968bd26729847a0f3cc5e4378c11e028579122dc51f37b467e->leave($__internal_3b36355dd161a3968bd26729847a0f3cc5e4378c11e028579122dc51f37b467e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_14495c806d581e2a52f59ed926b6bc313ed0442d067904ba1418f9ed0712d7ba = $this->env->getExtension("native_profiler");
        $__internal_14495c806d581e2a52f59ed926b6bc313ed0442d067904ba1418f9ed0712d7ba->enter($__internal_14495c806d581e2a52f59ed926b6bc313ed0442d067904ba1418f9ed0712d7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_14495c806d581e2a52f59ed926b6bc313ed0442d067904ba1418f9ed0712d7ba->leave($__internal_14495c806d581e2a52f59ed926b6bc313ed0442d067904ba1418f9ed0712d7ba_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
