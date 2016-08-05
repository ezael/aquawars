<?php

/* base.html.twig */
class __TwigTemplate_e75da52ecef2de7f1c65c91f53eeafc26bfafb5dc5f2c5b253526dbe41501f1a extends Twig_Template
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
        $__internal_317cc77fd8118f91fa2b9fc17ffd1a263e1db7431714e203b05ad598c4f64a0c = $this->env->getExtension("native_profiler");
        $__internal_317cc77fd8118f91fa2b9fc17ffd1a263e1db7431714e203b05ad598c4f64a0c->enter($__internal_317cc77fd8118f91fa2b9fc17ffd1a263e1db7431714e203b05ad598c4f64a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_317cc77fd8118f91fa2b9fc17ffd1a263e1db7431714e203b05ad598c4f64a0c->leave($__internal_317cc77fd8118f91fa2b9fc17ffd1a263e1db7431714e203b05ad598c4f64a0c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0685eb855934345735168233cc5120a9579cd0395213c103d32bd60a9bb8582a = $this->env->getExtension("native_profiler");
        $__internal_0685eb855934345735168233cc5120a9579cd0395213c103d32bd60a9bb8582a->enter($__internal_0685eb855934345735168233cc5120a9579cd0395213c103d32bd60a9bb8582a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0685eb855934345735168233cc5120a9579cd0395213c103d32bd60a9bb8582a->leave($__internal_0685eb855934345735168233cc5120a9579cd0395213c103d32bd60a9bb8582a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_887ba7a8c2253e0b66494e35c221d30aeec1ef9e0aa9cd0166c94c3a23694f4a = $this->env->getExtension("native_profiler");
        $__internal_887ba7a8c2253e0b66494e35c221d30aeec1ef9e0aa9cd0166c94c3a23694f4a->enter($__internal_887ba7a8c2253e0b66494e35c221d30aeec1ef9e0aa9cd0166c94c3a23694f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_887ba7a8c2253e0b66494e35c221d30aeec1ef9e0aa9cd0166c94c3a23694f4a->leave($__internal_887ba7a8c2253e0b66494e35c221d30aeec1ef9e0aa9cd0166c94c3a23694f4a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_591c5a03b2291f10190f01ba7af0e7a9bda30c5cbf627c523d7493d52d8ea0d9 = $this->env->getExtension("native_profiler");
        $__internal_591c5a03b2291f10190f01ba7af0e7a9bda30c5cbf627c523d7493d52d8ea0d9->enter($__internal_591c5a03b2291f10190f01ba7af0e7a9bda30c5cbf627c523d7493d52d8ea0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_591c5a03b2291f10190f01ba7af0e7a9bda30c5cbf627c523d7493d52d8ea0d9->leave($__internal_591c5a03b2291f10190f01ba7af0e7a9bda30c5cbf627c523d7493d52d8ea0d9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_05f81dbebe97995029f447946c607607b80d1a03daaccbbc5ad72fbb45b1e773 = $this->env->getExtension("native_profiler");
        $__internal_05f81dbebe97995029f447946c607607b80d1a03daaccbbc5ad72fbb45b1e773->enter($__internal_05f81dbebe97995029f447946c607607b80d1a03daaccbbc5ad72fbb45b1e773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_05f81dbebe97995029f447946c607607b80d1a03daaccbbc5ad72fbb45b1e773->leave($__internal_05f81dbebe97995029f447946c607607b80d1a03daaccbbc5ad72fbb45b1e773_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
