<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_0cdacc47ee4cd4f262693363ce9a901190e1a69a364111ebf22474ffec5310ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4f510f22b8a536dc5debf7bade9e28c3aa7051d3241f3a52c3f536aa62c14b8 = $this->env->getExtension("native_profiler");
        $__internal_a4f510f22b8a536dc5debf7bade9e28c3aa7051d3241f3a52c3f536aa62c14b8->enter($__internal_a4f510f22b8a536dc5debf7bade9e28c3aa7051d3241f3a52c3f536aa62c14b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4f510f22b8a536dc5debf7bade9e28c3aa7051d3241f3a52c3f536aa62c14b8->leave($__internal_a4f510f22b8a536dc5debf7bade9e28c3aa7051d3241f3a52c3f536aa62c14b8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_98878928e11e95e5552fb81e2829695cb312235d0240308df1e70408ead610c4 = $this->env->getExtension("native_profiler");
        $__internal_98878928e11e95e5552fb81e2829695cb312235d0240308df1e70408ead610c4->enter($__internal_98878928e11e95e5552fb81e2829695cb312235d0240308df1e70408ead610c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_98878928e11e95e5552fb81e2829695cb312235d0240308df1e70408ead610c4->leave($__internal_98878928e11e95e5552fb81e2829695cb312235d0240308df1e70408ead610c4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_37deb63535b0cf297130a52f0d349ca8953c24ccf17f1effb438473008e217b6 = $this->env->getExtension("native_profiler");
        $__internal_37deb63535b0cf297130a52f0d349ca8953c24ccf17f1effb438473008e217b6->enter($__internal_37deb63535b0cf297130a52f0d349ca8953c24ccf17f1effb438473008e217b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_37deb63535b0cf297130a52f0d349ca8953c24ccf17f1effb438473008e217b6->leave($__internal_37deb63535b0cf297130a52f0d349ca8953c24ccf17f1effb438473008e217b6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce27b73cd605e6fe5d73aeb6df261b060d4db955ec672fed798e3845ed87c462 = $this->env->getExtension("native_profiler");
        $__internal_ce27b73cd605e6fe5d73aeb6df261b060d4db955ec672fed798e3845ed87c462->enter($__internal_ce27b73cd605e6fe5d73aeb6df261b060d4db955ec672fed798e3845ed87c462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ce27b73cd605e6fe5d73aeb6df261b060d4db955ec672fed798e3845ed87c462->leave($__internal_ce27b73cd605e6fe5d73aeb6df261b060d4db955ec672fed798e3845ed87c462_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
