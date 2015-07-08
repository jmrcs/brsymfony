<?php

/* MovieBundle:Default:editMovies.html.twig */
class __TwigTemplate_6d1428ec5204c10300421da2d5ea5289b5262bb72c00247b155d7382cf82c3cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MovieBundle:Default:editMovies.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea76e319ed8b4869314f4948111d5997b0cbca50c300e7ed4202fab1a60b62d6 = $this->env->getExtension("native_profiler");
        $__internal_ea76e319ed8b4869314f4948111d5997b0cbca50c300e7ed4202fab1a60b62d6->enter($__internal_ea76e319ed8b4869314f4948111d5997b0cbca50c300e7ed4202fab1a60b62d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MovieBundle:Default:editMovies.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea76e319ed8b4869314f4948111d5997b0cbca50c300e7ed4202fab1a60b62d6->leave($__internal_ea76e319ed8b4869314f4948111d5997b0cbca50c300e7ed4202fab1a60b62d6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7eda65e4f5d0fa47941b09f015f543a9dcf2e7041f357915735b0dc512ebc36 = $this->env->getExtension("native_profiler");
        $__internal_c7eda65e4f5d0fa47941b09f015f543a9dcf2e7041f357915735b0dc512ebc36->enter($__internal_c7eda65e4f5d0fa47941b09f015f543a9dcf2e7041f357915735b0dc512ebc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "

    

    <ul>
        <li><a href=\"javascript:history.back();\" target=\"_self\">Back</a></li>
    </ul>
";
        
        $__internal_c7eda65e4f5d0fa47941b09f015f543a9dcf2e7041f357915735b0dc512ebc36->leave($__internal_c7eda65e4f5d0fa47941b09f015f543a9dcf2e7041f357915735b0dc512ebc36_prof);

    }

    public function getTemplateName()
    {
        return "MovieBundle:Default:editMovies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
