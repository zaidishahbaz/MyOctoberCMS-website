<?php

/* C:\xampp\htdocs\acme/themes/responsiv-clean/pages/contact.htm */
class __TwigTemplate_5fe8bed380ba08e4117fd1fb0054ca9960979028347d88aa346e061613bd2a2a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div>
<h1>Contact us</h1>

<form >
    <div class=\"form-group\">
        <label >Name</label>
        <input type=\"text\" class=\"form-control\">
    </div>
    
     <div class=\"form-group\">
            <label >Email</label>
            <input type=\"text\" class=\"form-control\">
    </div>
    
     <div class=\"form-group\">
            <label >Message</label>
            <textarea class=\"form-control\"></textarea>
    </div>

    <button type=\"submit\">Submit</button>

</form>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/responsiv-clean/pages/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
<h1>Contact us</h1>

<form >
    <div class=\"form-group\">
        <label >Name</label>
        <input type=\"text\" class=\"form-control\">
    </div>
    
     <div class=\"form-group\">
            <label >Email</label>
            <input type=\"text\" class=\"form-control\">
    </div>
    
     <div class=\"form-group\">
            <label >Message</label>
            <textarea class=\"form-control\"></textarea>
    </div>

    <button type=\"submit\">Submit</button>

</form>
</div>", "C:\\xampp\\htdocs\\acme/themes/responsiv-clean/pages/contact.htm", "");
    }
}
