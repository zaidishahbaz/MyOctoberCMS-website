<?php

/* C:\xampp\htdocs\acme/themes/acme/pages/contact.htm */
class __TwigTemplate_361eb7872b73565de400f48314be47588ff1281ce7898a0d043eb0f630994b87 extends Twig_Template
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
        echo "<div>Contact us</div>
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

</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/acme/pages/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>Contact us</div>
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

</form>", "C:\\xampp\\htdocs\\acme/themes/acme/pages/contact.htm", "");
    }
}
