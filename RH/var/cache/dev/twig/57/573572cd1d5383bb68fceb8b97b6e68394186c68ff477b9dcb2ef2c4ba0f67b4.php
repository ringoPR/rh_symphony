<?php

/* base.html.twig */
class __TwigTemplate_376dd095a048f713dabd37c7565986e5b822604eaef2531d22ebef2d94536183 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ecd3f6855539d2fd44eab0fca960fba385e1c75fdcdd48df92bd7d961fa55f9 = $this->env->getExtension("native_profiler");
        $__internal_7ecd3f6855539d2fd44eab0fca960fba385e1c75fdcdd48df92bd7d961fa55f9->enter($__internal_7ecd3f6855539d2fd44eab0fca960fba385e1c75fdcdd48df92bd7d961fa55f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
      \t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
      \t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\"/>
      \t<meta name=\"author\" content=\"belka\"/>
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    </head>
    <body>
        ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "    </body>
</html>
";
        
        $__internal_7ecd3f6855539d2fd44eab0fca960fba385e1c75fdcdd48df92bd7d961fa55f9->leave($__internal_7ecd3f6855539d2fd44eab0fca960fba385e1c75fdcdd48df92bd7d961fa55f9_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_97f6d2897de15bd16bf7d4a8cf5da7d01a39c8a285f1e6e8680950d7a80a4138 = $this->env->getExtension("native_profiler");
        $__internal_97f6d2897de15bd16bf7d4a8cf5da7d01a39c8a285f1e6e8680950d7a80a4138->enter($__internal_97f6d2897de15bd16bf7d4a8cf5da7d01a39c8a285f1e6e8680950d7a80a4138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "RH ADMIN";
        
        $__internal_97f6d2897de15bd16bf7d4a8cf5da7d01a39c8a285f1e6e8680950d7a80a4138->leave($__internal_97f6d2897de15bd16bf7d4a8cf5da7d01a39c8a285f1e6e8680950d7a80a4138_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e23233de7269faf36b4fa83a0540dce3438135df902455767bda397cc5b81098 = $this->env->getExtension("native_profiler");
        $__internal_e23233de7269faf36b4fa83a0540dce3438135df902455767bda397cc5b81098->enter($__internal_e23233de7269faf36b4fa83a0540dce3438135df902455767bda397cc5b81098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <!-- Font awesome -->
      \t<link rel=\"stylesheet\" href=\"bundles/bootstrap/css/font-awesome.min.css\">
      \t<!-- Sandstone Bootstrap CSS -->
      \t<link rel=\"stylesheet\" href=\"bundles/bootstrap/css/bootstrap.min.css\">
      \t<!-- Bootstrap Datatables -->
      \t<link rel=\"stylesheet\" href=\"bundles/bootstrap/css/dataTables.bootstrap.min.css\">
      \t<!-- Bootstrap social button library -->
      \t<link rel=\"stylesheet\" href=\"bundles/bootstrap/css/bootstrap-social.css\">
      \t<!-- Bootstrap select -->
      \t<link rel=\"stylesheet\" href=\"bundles/bootstrap/css/bootstrap-select.css\">
      \t<!-- Bootstrap file input -->
      \t<link rel=\"stylesheet\" href=\"bundles/bootstrap/css/fileinput.min.css\">
      \t<!-- Awesome Bootstrap checkbox -->
      \t<link rel=\"stylesheet\" href=\"bundles/bootstrap/css/awesome-bootstrap-checkbox.css\">
      \t<!-- Admin Stye -->
      \t<link rel=\"stylesheet\" href=\"bundles/bootstrap/css/style.css\">
        ";
        
        $__internal_e23233de7269faf36b4fa83a0540dce3438135df902455767bda397cc5b81098->leave($__internal_e23233de7269faf36b4fa83a0540dce3438135df902455767bda397cc5b81098_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a942c95708db7e2ba5e9ce2b22dd78762d41d00cc39a796b280494bc357edf6 = $this->env->getExtension("native_profiler");
        $__internal_2a942c95708db7e2ba5e9ce2b22dd78762d41d00cc39a796b280494bc357edf6->enter($__internal_2a942c95708db7e2ba5e9ce2b22dd78762d41d00cc39a796b280494bc357edf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2a942c95708db7e2ba5e9ce2b22dd78762d41d00cc39a796b280494bc357edf6->leave($__internal_2a942c95708db7e2ba5e9ce2b22dd78762d41d00cc39a796b280494bc357edf6_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_66b7b66d407ccf9afcaf0d9cf049f9443fb2161f7a1bf5ad038499283f72aaed = $this->env->getExtension("native_profiler");
        $__internal_66b7b66d407ccf9afcaf0d9cf049f9443fb2161f7a1bf5ad038499283f72aaed->enter($__internal_66b7b66d407ccf9afcaf0d9cf049f9443fb2161f7a1bf5ad038499283f72aaed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "        <script src=\"bundles/bootstrap/js/jquery.min.js\"></script>
      \t<script src=\"bundles/bootstrap/js/bootstrap-select.min.js\"></script>
      \t<script src=\"bundles/bootstrap/js/bootstrap.min.js\"></script>
      \t<script src=\"bundles/bootstrap/js/jquery.dataTables.min.js\"></script>
      \t<script src=\"bundles/bootstrap/js/dataTables.bootstrap.min.js\"></script>
      \t<script src=\"bundles/bootstrap/js/Chart.min.js\"></script>
      \t<script src=\"bundles/bootstrap/js/fileinput.js\"></script>
      \t<script src=\"bundles/bootstrap/js/chartData.js\"></script>
      \t<script src=\"bundles/bootstrap/js/main.js\"></script>
        ";
        
        $__internal_66b7b66d407ccf9afcaf0d9cf049f9443fb2161f7a1bf5ad038499283f72aaed->leave($__internal_66b7b66d407ccf9afcaf0d9cf049f9443fb2161f7a1bf5ad038499283f72aaed_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 34,  116 => 33,  105 => 32,  82 => 11,  76 => 10,  64 => 8,  55 => 44,  52 => 33,  50 => 32,  42 => 28,  40 => 10,  35 => 8,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*       	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>*/
/*       	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>*/
/*       	<meta name="author" content="belka"/>*/
/*         <title>{% block title %}RH ADMIN{% endblock %}</title>*/
/* */
/*         {% block stylesheets %}*/
/*         <!-- Font awesome -->*/
/*       	<link rel="stylesheet" href="bundles/bootstrap/css/font-awesome.min.css">*/
/*       	<!-- Sandstone Bootstrap CSS -->*/
/*       	<link rel="stylesheet" href="bundles/bootstrap/css/bootstrap.min.css">*/
/*       	<!-- Bootstrap Datatables -->*/
/*       	<link rel="stylesheet" href="bundles/bootstrap/css/dataTables.bootstrap.min.css">*/
/*       	<!-- Bootstrap social button library -->*/
/*       	<link rel="stylesheet" href="bundles/bootstrap/css/bootstrap-social.css">*/
/*       	<!-- Bootstrap select -->*/
/*       	<link rel="stylesheet" href="bundles/bootstrap/css/bootstrap-select.css">*/
/*       	<!-- Bootstrap file input -->*/
/*       	<link rel="stylesheet" href="bundles/bootstrap/css/fileinput.min.css">*/
/*       	<!-- Awesome Bootstrap checkbox -->*/
/*       	<link rel="stylesheet" href="bundles/bootstrap/css/awesome-bootstrap-checkbox.css">*/
/*       	<!-- Admin Stye -->*/
/*       	<link rel="stylesheet" href="bundles/bootstrap/css/style.css">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*         <script src="bundles/bootstrap/js/jquery.min.js"></script>*/
/*       	<script src="bundles/bootstrap/js/bootstrap-select.min.js"></script>*/
/*       	<script src="bundles/bootstrap/js/bootstrap.min.js"></script>*/
/*       	<script src="bundles/bootstrap/js/jquery.dataTables.min.js"></script>*/
/*       	<script src="bundles/bootstrap/js/dataTables.bootstrap.min.js"></script>*/
/*       	<script src="bundles/bootstrap/js/Chart.min.js"></script>*/
/*       	<script src="bundles/bootstrap/js/fileinput.js"></script>*/
/*       	<script src="bundles/bootstrap/js/chartData.js"></script>*/
/*       	<script src="bundles/bootstrap/js/main.js"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
