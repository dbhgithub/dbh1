<?php

/* AcmeNeogeoBundle:Default:index.html.twig */
class __TwigTemplate_e2f3df5ba12d833ab8cfbdf66f682ff3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeNeogeoBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'other' => array($this, 'block_other'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeNeogeoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <script type=\"text/javascript\" src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/data.css"), "html", null, true);
        echo "\" />
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "DBHSystems";
    }

    // line 10
    public function block_other($context, array $blocks = array())
    {
        // line 11
        echo "<div>
    <ul>
        <li><a href=\"\">link_1</a></li>
        <li><a href=\"\">link_2</a></li>
        <li><a href=\"\">link_3</a></li>
        <li><a href=\"\">link_4</a></li>
    </ul>
</div>
";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/vegas/jquery.vegas.min.js"), "html", null, true);
        echo "\" ></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/vegas/jquery.vegas.css"), "html", null, true);
        echo "\" />

<script>
\$(function() {
\$.vegas('slideshow', {
  delay:5000,  
  backgrounds:[
    ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "data"));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            echo "      
    { src:\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getContext($context, "d")), "html", null, true);
            echo "\", fade:1000 },
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        
  ]
})('overlay');        
        
});
</script>


<div id=\"neogeo-container\">
    <div class=\"data\">ABC</div>
    
    <ul>
        ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "data"));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 46
            echo "            <li>";
            echo twig_escape_filter($this->env, $this->getContext($context, "d"), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    </ul>
    
</div>

<div class=\"js-background-1 container\">
    <h2>The first box!</h2>
</div>
<div class=\"js-background-2 container\">
    <h2>The second box!</h2>
</div>


";
    }

    public function getTemplateName()
    {
        return "AcmeNeogeoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 48,  116 => 46,  112 => 45,  98 => 33,  90 => 32,  84 => 31,  74 => 24,  70 => 23,  67 => 22,  64 => 21,  52 => 11,  49 => 10,  43 => 8,  37 => 5,  34 => 4,  31 => 3,);
    }
}
