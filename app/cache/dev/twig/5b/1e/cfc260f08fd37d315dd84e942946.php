<?php

/* AcmeNeogeoBundle::layout.html.twig */
class __TwigTemplate_5b1ecfc260f08fd37d315dd84e942946 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
    
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 14
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('content_header', $context, $blocks);
        // line 20
        echo "
    <div class=\"block\">
        ";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "    </div>

    ";
        // line 25
        if (array_key_exists("code", $context)) {
            // line 26
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 28
            echo $this->getContext($context, "code");
            echo "</div>
        </div>
    ";
        }
    }

    // line 18
    public function block_content_header($context, array $blocks = array())
    {
        // line 19
        echo "    ";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeNeogeoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 22,  105 => 19,  102 => 18,  94 => 28,  88 => 25,  82 => 22,  78 => 20,  76 => 18,  73 => 17,  61 => 13,  56 => 12,  53 => 11,  47 => 9,  40 => 5,  35 => 4,  32 => 3,  125 => 48,  116 => 46,  112 => 45,  98 => 33,  90 => 26,  84 => 23,  74 => 24,  70 => 23,  67 => 22,  64 => 14,  52 => 11,  49 => 10,  43 => 8,  37 => 5,  34 => 4,  31 => 3,);
    }
}
