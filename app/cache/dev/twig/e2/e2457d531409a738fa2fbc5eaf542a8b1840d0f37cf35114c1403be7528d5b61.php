<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_b3fc445ec3686bb13630cc6a35fb961938ca2dbc68d663e424f5ae7ba76fcd9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc6a6dc88ef7746d388f1a0749a725b1f52306a7f81015ac6c5b6069f0d1897b = $this->env->getExtension("native_profiler");
        $__internal_cc6a6dc88ef7746d388f1a0749a725b1f52306a7f81015ac6c5b6069f0d1897b->enter($__internal_cc6a6dc88ef7746d388f1a0749a725b1f52306a7f81015ac6c5b6069f0d1897b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_cc6a6dc88ef7746d388f1a0749a725b1f52306a7f81015ac6c5b6069f0d1897b->leave($__internal_cc6a6dc88ef7746d388f1a0749a725b1f52306a7f81015ac6c5b6069f0d1897b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
