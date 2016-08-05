<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_807093f4aeea7aa719d9ed7b629b5a52101bf27e1240722a252f07e71b03b54c extends Twig_Template
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
        $__internal_aee3b9e62472f032ebe3329018dfff169e5c41489baf70f74d99c506dbac0033 = $this->env->getExtension("native_profiler");
        $__internal_aee3b9e62472f032ebe3329018dfff169e5c41489baf70f74d99c506dbac0033->enter($__internal_aee3b9e62472f032ebe3329018dfff169e5c41489baf70f74d99c506dbac0033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aee3b9e62472f032ebe3329018dfff169e5c41489baf70f74d99c506dbac0033->leave($__internal_aee3b9e62472f032ebe3329018dfff169e5c41489baf70f74d99c506dbac0033_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3ba6bdd221b47b3e9a1549f1861b938c5735cdc913b9c8666732e679ee4dd5bf = $this->env->getExtension("native_profiler");
        $__internal_3ba6bdd221b47b3e9a1549f1861b938c5735cdc913b9c8666732e679ee4dd5bf->enter($__internal_3ba6bdd221b47b3e9a1549f1861b938c5735cdc913b9c8666732e679ee4dd5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3ba6bdd221b47b3e9a1549f1861b938c5735cdc913b9c8666732e679ee4dd5bf->leave($__internal_3ba6bdd221b47b3e9a1549f1861b938c5735cdc913b9c8666732e679ee4dd5bf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_14cc02169588a2092a7a778bd056ea92c82ff48ea4c4975cae32b1fb1f91c649 = $this->env->getExtension("native_profiler");
        $__internal_14cc02169588a2092a7a778bd056ea92c82ff48ea4c4975cae32b1fb1f91c649->enter($__internal_14cc02169588a2092a7a778bd056ea92c82ff48ea4c4975cae32b1fb1f91c649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_14cc02169588a2092a7a778bd056ea92c82ff48ea4c4975cae32b1fb1f91c649->leave($__internal_14cc02169588a2092a7a778bd056ea92c82ff48ea4c4975cae32b1fb1f91c649_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_127c251a163fd19c2afb39f2c8730a8f910a17043f60d9ad4b7135bbf3a8b0eb = $this->env->getExtension("native_profiler");
        $__internal_127c251a163fd19c2afb39f2c8730a8f910a17043f60d9ad4b7135bbf3a8b0eb->enter($__internal_127c251a163fd19c2afb39f2c8730a8f910a17043f60d9ad4b7135bbf3a8b0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_127c251a163fd19c2afb39f2c8730a8f910a17043f60d9ad4b7135bbf3a8b0eb->leave($__internal_127c251a163fd19c2afb39f2c8730a8f910a17043f60d9ad4b7135bbf3a8b0eb_prof);

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
