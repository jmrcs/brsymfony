<?php

/* MovieBundle:Default:createMovies.html.twig */
class __TwigTemplate_29f7a1c419ce08b32c7fa3b49437a64c2cb389505beee4ffdb3df919f38819b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MovieBundle:Default:createMovies.html.twig", 1);
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
        $__internal_a9f70170a2f8126c1e1e7d0905618ba2be0a5743841c0eb3aaf4c05b6c33111b = $this->env->getExtension("native_profiler");
        $__internal_a9f70170a2f8126c1e1e7d0905618ba2be0a5743841c0eb3aaf4c05b6c33111b->enter($__internal_a9f70170a2f8126c1e1e7d0905618ba2be0a5743841c0eb3aaf4c05b6c33111b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MovieBundle:Default:createMovies.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9f70170a2f8126c1e1e7d0905618ba2be0a5743841c0eb3aaf4c05b6c33111b->leave($__internal_a9f70170a2f8126c1e1e7d0905618ba2be0a5743841c0eb3aaf4c05b6c33111b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_930ab369c1e30363b649271059d103eb50aaba1b7155bc9234a761467cd23ac3 = $this->env->getExtension("native_profiler");
        $__internal_930ab369c1e30363b649271059d103eb50aaba1b7155bc9234a761467cd23ac3->enter($__internal_930ab369c1e30363b649271059d103eb50aaba1b7155bc9234a761467cd23ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row');
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imdbLink", array()), 'row');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "youtubeLink", array()), 'row');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rating", array()), 'row');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "director", array()), 'row');
        echo "
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "producer", array()), 'row');
        echo "
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "actors", array()), 'row');
        echo "
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "send", array()), 'row');
        echo "
    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li><a href=\"javascript:history.back();\" target=\"_self\">Back</a></li>
    </ul>
";
        
        $__internal_930ab369c1e30363b649271059d103eb50aaba1b7155bc9234a761467cd23ac3->leave($__internal_930ab369c1e30363b649271059d103eb50aaba1b7155bc9234a761467cd23ac3_prof);

    }

    public function getTemplateName()
    {
        return "MovieBundle:Default:createMovies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 14,  81 => 13,  77 => 12,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  57 => 7,  53 => 6,  49 => 5,  45 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
