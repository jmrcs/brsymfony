<?php

/* MovieBundle:Default:listMovies.html.twig */
class __TwigTemplate_1267382bedba19ad896eefd0f671f9b14bd85a4333016050358fd46839448cf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MovieBundle:Default:listMovies.html.twig", 1);
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
        $__internal_69948258b1478f80b9e9439112f9bc1720b4e04188ada81b77279d11042f3b48 = $this->env->getExtension("native_profiler");
        $__internal_69948258b1478f80b9e9439112f9bc1720b4e04188ada81b77279d11042f3b48->enter($__internal_69948258b1478f80b9e9439112f9bc1720b4e04188ada81b77279d11042f3b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MovieBundle:Default:listMovies.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69948258b1478f80b9e9439112f9bc1720b4e04188ada81b77279d11042f3b48->leave($__internal_69948258b1478f80b9e9439112f9bc1720b4e04188ada81b77279d11042f3b48_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb9fbb7a8e01763eb0ef9cf360c374e2e0dc7336f0a88da11da3e6aea90e8706 = $this->env->getExtension("native_profiler");
        $__internal_bb9fbb7a8e01763eb0ef9cf360c374e2e0dc7336f0a88da11da3e6aea90e8706->enter($__internal_bb9fbb7a8e01763eb0ef9cf360c374e2e0dc7336f0a88da11da3e6aea90e8706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <ul>
        <li>
        </li>
    </ul>
    <table border=\"1\" style=\"padding: 5px;\">
        <tr>
            <td><b>ID</b></td>
            <td><b>Title</b></td>
            <td><b>Description</b></td>
            <td><b>IMDB Link</b></td>
            <td><b>Youtube Link</b></td>
            <td><b>RATING</b></td>
            <td><b>Director</b></td>
            <td><b>Producer</b></td>
            <td><b>Actors</b></td>
            <td colspan=\"2\" style=\"text-align: center;\"><b>Actions</b></td>
        </tr>
    ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allMovies"]) ? $context["allMovies"] : $this->getContext($context, "allMovies")));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 21
            echo "        <tr>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "title", array()), "html", null, true);
            echo "</td>
            <td style=\"width: 400px;\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "description", array()), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "imdbLink", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "imdbLink", array()), "html", null, true);
            echo "</a></td>
            <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "youtubeLink", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "youtubeLink", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "rating", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "director", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "producer", array()), "html", null, true);
            echo "</td>
            <td></td>
            <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie_edit", array("id" => $this->getAttribute($context["movie"], "id", array()))), "html", null, true);
            echo "\" target=\"_self\">Edit Movie</a></td>
            <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie_delete", array("id" => $this->getAttribute($context["movie"], "id", array()))), "html", null, true);
            echo "\" target=\"_self\">Delete Movie</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </table>
    <ul>
        <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("movie_create");
        echo "\" target=\"_self\">Create Movie</a></li>
        <li><a href=\"javascript:history.back();\" target=\"_self\">Back</a></li>
    </ul>
";
        
        $__internal_bb9fbb7a8e01763eb0ef9cf360c374e2e0dc7336f0a88da11da3e6aea90e8706->leave($__internal_bb9fbb7a8e01763eb0ef9cf360c374e2e0dc7336f0a88da11da3e6aea90e8706_prof);

    }

    public function getTemplateName()
    {
        return "MovieBundle:Default:listMovies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 37,  116 => 35,  107 => 32,  103 => 31,  98 => 29,  94 => 28,  90 => 27,  84 => 26,  78 => 25,  74 => 24,  70 => 23,  66 => 22,  63 => 21,  59 => 20,  40 => 3,  34 => 2,  11 => 1,);
    }
}
