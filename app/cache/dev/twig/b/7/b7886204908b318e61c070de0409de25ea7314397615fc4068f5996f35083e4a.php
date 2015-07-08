<?php

/* MovieBundle:Default:index.html.twig */
class __TwigTemplate_b7886204908b318e61c070de0409de25ea7314397615fc4068f5996f35083e4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MovieBundle:Default:index.html.twig", 1);
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
        $__internal_5271ddce3c9350b515cc7a867dc65ef450a965bb8ad6f8f78b2455fbbfb016eb = $this->env->getExtension("native_profiler");
        $__internal_5271ddce3c9350b515cc7a867dc65ef450a965bb8ad6f8f78b2455fbbfb016eb->enter($__internal_5271ddce3c9350b515cc7a867dc65ef450a965bb8ad6f8f78b2455fbbfb016eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MovieBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5271ddce3c9350b515cc7a867dc65ef450a965bb8ad6f8f78b2455fbbfb016eb->leave($__internal_5271ddce3c9350b515cc7a867dc65ef450a965bb8ad6f8f78b2455fbbfb016eb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_07e4b6fae36f625a16e325556031e61987aeaa0db8221e60618efa2bdd93958b = $this->env->getExtension("native_profiler");
        $__internal_07e4b6fae36f625a16e325556031e61987aeaa0db8221e60618efa2bdd93958b->enter($__internal_07e4b6fae36f625a16e325556031e61987aeaa0db8221e60618efa2bdd93958b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <ul>
        <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("movie_list");
        echo "\" target=\"_self\">List Movies</a></li>
        <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("person_list");
        echo "\" target=\"_self\">List Persons</a></li>
        <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("producer_list");
        echo "\" target=\"_self\">List Producers</a></li>
    </ul>
";
        
        $__internal_07e4b6fae36f625a16e325556031e61987aeaa0db8221e60618efa2bdd93958b->leave($__internal_07e4b6fae36f625a16e325556031e61987aeaa0db8221e60618efa2bdd93958b_prof);

    }

    public function getTemplateName()
    {
        return "MovieBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
