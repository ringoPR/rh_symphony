<?php

/* login.html.twig */
class __TwigTemplate_953d7ddb3227a6fc3a261902771d2a80411f6cbcd5a1e63db70423d6b11bf1fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12a27f0be298383574e2a48d6355bb36a3bbe4379730ec6cbc393ad23a73b388 = $this->env->getExtension("native_profiler");
        $__internal_12a27f0be298383574e2a48d6355bb36a3bbe4379730ec6cbc393ad23a73b388->enter($__internal_12a27f0be298383574e2a48d6355bb36a3bbe4379730ec6cbc393ad23a73b388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12a27f0be298383574e2a48d6355bb36a3bbe4379730ec6cbc393ad23a73b388->leave($__internal_12a27f0be298383574e2a48d6355bb36a3bbe4379730ec6cbc393ad23a73b388_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c75ecaaf76dcfeb92390153eacc6f93b5bb1c9a0bf23b1f9af0137f95d09fd3 = $this->env->getExtension("native_profiler");
        $__internal_2c75ecaaf76dcfeb92390153eacc6f93b5bb1c9a0bf23b1f9af0137f95d09fd3->enter($__internal_2c75ecaaf76dcfeb92390153eacc6f93b5bb1c9a0bf23b1f9af0137f95d09fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <div class=\"login-page bk-img\" style=\"background-image: url(bundles/bootstrap/img/login-bg.jpg);\">
    <div class=\"form-content\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-6 col-md-offset-3\">
            <h1 class=\"text-center text-bold text-light mt-4x\">Sign in</h1>
            <div class=\"well row pt-2x pb-3x bk-light\">
            <div class=\"col-md-8 col-md-offset-2\">
                <form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\" class=\"mt\">

                  <label for=\"\" class=\"text-uppercase text-sm\">Your Username </label>
                  <input type=\"text\" placeholder=\"Username\"  class=\"form-control mb\">

                  <label for=\"\" class=\"text-uppercase text-sm\">Password</label>
                    <input type=\"password\" placeholder=\"Password\" class=\"form-control mb\">

                    <div class=\"checkbox checkbox-circle checkbox-info\">
                      <input id=\"checkbox7\" type=\"checkbox\" checked>
                    <label for=\"checkbox7\">
                      Keep me signed in
                    </label>
                  </div>

                  <button class=\"btn btn-primary btn-block\" type=\"submit\">LOGIN</button>

              </form>
            </div>
          </div>
          <div class=\"text-center text-light\">
            <a href=\"#\" class=\"text-light\">Forgot password?</a>
          </div>
        </div>
          </div>
        </div>
    </div>
  </div>


";
        
        $__internal_2c75ecaaf76dcfeb92390153eacc6f93b5bb1c9a0bf23b1f9af0137f95d09fd3->leave($__internal_2c75ecaaf76dcfeb92390153eacc6f93b5bb1c9a0bf23b1f9af0137f95d09fd3_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*   <div class="login-page bk-img" style="background-image: url(bundles/bootstrap/img/login-bg.jpg);">*/
/*     <div class="form-content">*/
/*       <div class="container">*/
/*         <div class="row">*/
/*           <div class="col-md-6 col-md-offset-3">*/
/*             <h1 class="text-center text-bold text-light mt-4x">Sign in</h1>*/
/*             <div class="well row pt-2x pb-3x bk-light">*/
/*             <div class="col-md-8 col-md-offset-2">*/
/*                 <form action="{{ path('login') }}" method="post" class="mt">*/
/* */
/*                   <label for="" class="text-uppercase text-sm">Your Username </label>*/
/*                   <input type="text" placeholder="Username"  class="form-control mb">*/
/* */
/*                   <label for="" class="text-uppercase text-sm">Password</label>*/
/*                     <input type="password" placeholder="Password" class="form-control mb">*/
/* */
/*                     <div class="checkbox checkbox-circle checkbox-info">*/
/*                       <input id="checkbox7" type="checkbox" checked>*/
/*                     <label for="checkbox7">*/
/*                       Keep me signed in*/
/*                     </label>*/
/*                   </div>*/
/* */
/*                   <button class="btn btn-primary btn-block" type="submit">LOGIN</button>*/
/* */
/*               </form>*/
/*             </div>*/
/*           </div>*/
/*           <div class="text-center text-light">*/
/*             <a href="#" class="text-light">Forgot password?</a>*/
/*           </div>*/
/*         </div>*/
/*           </div>*/
/*         </div>*/
/*     </div>*/
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
