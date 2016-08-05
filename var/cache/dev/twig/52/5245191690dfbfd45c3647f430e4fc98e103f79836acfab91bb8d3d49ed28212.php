<?php

/* default/index.html.twig */
class __TwigTemplate_56c80d2e45da26d631a99d681a4182ef52ba587da1b25acc65cbf6874096d517 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27c5d7bab0aacb8b99d5169c254067cebd5b7b5f91214732d73550c749658228 = $this->env->getExtension("native_profiler");
        $__internal_27c5d7bab0aacb8b99d5169c254067cebd5b7b5f91214732d73550c749658228->enter($__internal_27c5d7bab0aacb8b99d5169c254067cebd5b7b5f91214732d73550c749658228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27c5d7bab0aacb8b99d5169c254067cebd5b7b5f91214732d73550c749658228->leave($__internal_27c5d7bab0aacb8b99d5169c254067cebd5b7b5f91214732d73550c749658228_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b63e65ef262d070e950be8415d0c4a871d48952f7ad6506233fb04aed846a9c2 = $this->env->getExtension("native_profiler");
        $__internal_b63e65ef262d070e950be8415d0c4a871d48952f7ad6506233fb04aed846a9c2->enter($__internal_b63e65ef262d070e950be8415d0c4a871d48952f7ad6506233fb04aed846a9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('dump')->dump($this->env, $context);
        echo "
";
        
        $__internal_b63e65ef262d070e950be8415d0c4a871d48952f7ad6506233fb04aed846a9c2->leave($__internal_b63e65ef262d070e950be8415d0c4a871d48952f7ad6506233fb04aed846a9c2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a00d963be18d9378f0a1a1a79bf0c44ad540d31eca45fa6189de5f29b41d37f1 = $this->env->getExtension("native_profiler");
        $__internal_a00d963be18d9378f0a1a1a79bf0c44ad540d31eca45fa6189de5f29b41d37f1->enter($__internal_a00d963be18d9378f0a1a1a79bf0c44ad540d31eca45fa6189de5f29b41d37f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
";
        
        $__internal_a00d963be18d9378f0a1a1a79bf0c44ad540d31eca45fa6189de5f29b41d37f1->leave($__internal_a00d963be18d9378f0a1a1a79bf0c44ad540d31eca45fa6189de5f29b41d37f1_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ dump() }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* {% endblock %}*/
/* */
