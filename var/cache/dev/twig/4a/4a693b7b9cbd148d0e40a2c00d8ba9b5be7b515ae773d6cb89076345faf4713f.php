<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_74dac7a84e59e11a9c064375e7aaeec3220775872b2674d490e1ac30313e49f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_406599049b02e103272a8687c40dd78169d7ab475a5888efae5ab7dda92af70c = $this->env->getExtension("native_profiler");
        $__internal_406599049b02e103272a8687c40dd78169d7ab475a5888efae5ab7dda92af70c->enter($__internal_406599049b02e103272a8687c40dd78169d7ab475a5888efae5ab7dda92af70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_406599049b02e103272a8687c40dd78169d7ab475a5888efae5ab7dda92af70c->leave($__internal_406599049b02e103272a8687c40dd78169d7ab475a5888efae5ab7dda92af70c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cb3bd605e494f0e3c26414ee559e482b7abaa12518316cce9ff7451cc9f066e0 = $this->env->getExtension("native_profiler");
        $__internal_cb3bd605e494f0e3c26414ee559e482b7abaa12518316cce9ff7451cc9f066e0->enter($__internal_cb3bd605e494f0e3c26414ee559e482b7abaa12518316cce9ff7451cc9f066e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cb3bd605e494f0e3c26414ee559e482b7abaa12518316cce9ff7451cc9f066e0->leave($__internal_cb3bd605e494f0e3c26414ee559e482b7abaa12518316cce9ff7451cc9f066e0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a0daddd2bbc5752a0066817429e6eae03654608228283f15cd3727b534c222fe = $this->env->getExtension("native_profiler");
        $__internal_a0daddd2bbc5752a0066817429e6eae03654608228283f15cd3727b534c222fe->enter($__internal_a0daddd2bbc5752a0066817429e6eae03654608228283f15cd3727b534c222fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a0daddd2bbc5752a0066817429e6eae03654608228283f15cd3727b534c222fe->leave($__internal_a0daddd2bbc5752a0066817429e6eae03654608228283f15cd3727b534c222fe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b56e3ba0f03c28c0bd266aa8b24193151889579a52922f2aa779a6fd912a26d = $this->env->getExtension("native_profiler");
        $__internal_4b56e3ba0f03c28c0bd266aa8b24193151889579a52922f2aa779a6fd912a26d->enter($__internal_4b56e3ba0f03c28c0bd266aa8b24193151889579a52922f2aa779a6fd912a26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4b56e3ba0f03c28c0bd266aa8b24193151889579a52922f2aa779a6fd912a26d->leave($__internal_4b56e3ba0f03c28c0bd266aa8b24193151889579a52922f2aa779a6fd912a26d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
