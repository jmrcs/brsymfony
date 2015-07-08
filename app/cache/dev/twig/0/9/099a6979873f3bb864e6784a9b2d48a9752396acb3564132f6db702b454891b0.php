<?php

/* ::base.html.twig */
class __TwigTemplate_099a6979873f3bb864e6784a9b2d48a9752396acb3564132f6db702b454891b0 extends Twig_Template
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
        $__internal_c26f2cc358582920f49a6c61b9cc35972de9c9eb11f1a0ccdcc9c7d948d7f08d = $this->env->getExtension("native_profiler");
        $__internal_c26f2cc358582920f49a6c61b9cc35972de9c9eb11f1a0ccdcc9c7d948d7f08d->enter($__internal_c26f2cc358582920f49a6c61b9cc35972de9c9eb11f1a0ccdcc9c7d948d7f08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c26f2cc358582920f49a6c61b9cc35972de9c9eb11f1a0ccdcc9c7d948d7f08d->leave($__internal_c26f2cc358582920f49a6c61b9cc35972de9c9eb11f1a0ccdcc9c7d948d7f08d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_60a83e64d9061eccac39acc073c57ea5863779e8a372361dff1816b2d26a7369 = $this->env->getExtension("native_profiler");
        $__internal_60a83e64d9061eccac39acc073c57ea5863779e8a372361dff1816b2d26a7369->enter($__internal_60a83e64d9061eccac39acc073c57ea5863779e8a372361dff1816b2d26a7369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BRSYMFONY PROJECTS from scratch by @jmrcs!";
        
        $__internal_60a83e64d9061eccac39acc073c57ea5863779e8a372361dff1816b2d26a7369->leave($__internal_60a83e64d9061eccac39acc073c57ea5863779e8a372361dff1816b2d26a7369_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a8a62ba5cbf28be575b80b1c19e8f28c4e08bf0b84c36a9235584d3462258d65 = $this->env->getExtension("native_profiler");
        $__internal_a8a62ba5cbf28be575b80b1c19e8f28c4e08bf0b84c36a9235584d3462258d65->enter($__internal_a8a62ba5cbf28be575b80b1c19e8f28c4e08bf0b84c36a9235584d3462258d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a8a62ba5cbf28be575b80b1c19e8f28c4e08bf0b84c36a9235584d3462258d65->leave($__internal_a8a62ba5cbf28be575b80b1c19e8f28c4e08bf0b84c36a9235584d3462258d65_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_529b1a31454e613387be2cab6f4432f734acd9a5ebdf62e4a901d84c403d6e4e = $this->env->getExtension("native_profiler");
        $__internal_529b1a31454e613387be2cab6f4432f734acd9a5ebdf62e4a901d84c403d6e4e->enter($__internal_529b1a31454e613387be2cab6f4432f734acd9a5ebdf62e4a901d84c403d6e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_529b1a31454e613387be2cab6f4432f734acd9a5ebdf62e4a901d84c403d6e4e->leave($__internal_529b1a31454e613387be2cab6f4432f734acd9a5ebdf62e4a901d84c403d6e4e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb55cfce6ccd78fac8e94a6f0823f5f29bca48bc43714ca9fa030f0dacd2e2f3 = $this->env->getExtension("native_profiler");
        $__internal_eb55cfce6ccd78fac8e94a6f0823f5f29bca48bc43714ca9fa030f0dacd2e2f3->enter($__internal_eb55cfce6ccd78fac8e94a6f0823f5f29bca48bc43714ca9fa030f0dacd2e2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eb55cfce6ccd78fac8e94a6f0823f5f29bca48bc43714ca9fa030f0dacd2e2f3->leave($__internal_eb55cfce6ccd78fac8e94a6f0823f5f29bca48bc43714ca9fa030f0dacd2e2f3_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
