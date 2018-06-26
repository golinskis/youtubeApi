<?php

/* base.html.twig */
class __TwigTemplate_e8c5bac61f70b6ee393f42ad175adac5b2fa886610802f6248c7cb11c40e8727 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../../../favicon.ico\">

    <title>
        ";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        // line 15
        echo "    </title>


    <!-- Bootstrap core CSS -->

    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Custom styles for this template -->

</head>

<body>

<nav class=\"site-header sticky-top py-1\">
    <div class=\"container d-flex flex-column flex-md-row justify-content-between\">
        <a class=\"py-2\" href=\"#\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"d-block mx-auto\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><line x1=\"14.31\" y1=\"8\" x2=\"20.05\" y2=\"17.94\"></line><line x1=\"9.69\" y1=\"8\" x2=\"21.17\" y2=\"8\"></line><line x1=\"7.38\" y1=\"12\" x2=\"13.12\" y2=\"2.06\"></line><line x1=\"9.69\" y1=\"16\" x2=\"3.95\" y2=\"6.06\"></line><line x1=\"14.31\" y1=\"16\" x2=\"2.83\" y2=\"16\"></line><line x1=\"16.62\" y1=\"12\" x2=\"10.88\" y2=\"21.94\"></line></svg>
        </a>
        <a class=\"py-2 d-none d-md-inline-block\" href=\"/\">Home</a>
        <a class=\"py-2 d-none d-md-inline-block\" href=\"/film/5\">Film</a>
        <a class=\"py-2 d-none d-md-inline-block\" href=\"/category/4\">Category</a>
        <a class=\"py-2 d-none d-md-inline-block\" href=\"/user/1\">User</a>

        <a class=\"py-2 d-none d-md-inline-block\" href=\"/login\">Login</a>

    </div>
</nav>

<main role=\"main\">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class=\"jumbotron\">
        <div class=\"container\">
            <h1 class=\"display-3\">
                ";
        // line 49
        $this->displayBlock('header', $context, $blocks);
        // line 52
        echo "            </h1>
            <p>  ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "            </p>
            <p>

        </p>
        </div>
    </div>

    <div class=\"container\">
        <!-- Example row of columns -->


    </div> <!-- /container -->

</main>

<footer class=\"container\">
    <p>&copy; 2018</p>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script>window.jQuery || document.write('<script src=\"../../../../assets/js/vendor/jquery-slim.min.js\"><\\/script>')</script>


<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 13
        echo "                Test Application
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 50
        echo "                    Test Application
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 54
        echo "                This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.

            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  184 => 54,  175 => 53,  164 => 50,  155 => 49,  144 => 13,  135 => 12,  121 => 83,  93 => 57,  91 => 53,  88 => 52,  86 => 49,  54 => 20,  47 => 15,  45 => 12,  32 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../../../favicon.ico\">

    <title>
        {% block title %}
                Test Application
        {% endblock %}
    </title>


    <!-- Bootstrap core CSS -->

    <link href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\" />

    <!-- Custom styles for this template -->

</head>

<body>

<nav class=\"site-header sticky-top py-1\">
    <div class=\"container d-flex flex-column flex-md-row justify-content-between\">
        <a class=\"py-2\" href=\"#\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"d-block mx-auto\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><line x1=\"14.31\" y1=\"8\" x2=\"20.05\" y2=\"17.94\"></line><line x1=\"9.69\" y1=\"8\" x2=\"21.17\" y2=\"8\"></line><line x1=\"7.38\" y1=\"12\" x2=\"13.12\" y2=\"2.06\"></line><line x1=\"9.69\" y1=\"16\" x2=\"3.95\" y2=\"6.06\"></line><line x1=\"14.31\" y1=\"16\" x2=\"2.83\" y2=\"16\"></line><line x1=\"16.62\" y1=\"12\" x2=\"10.88\" y2=\"21.94\"></line></svg>
        </a>
        <a class=\"py-2 d-none d-md-inline-block\" href=\"/\">Home</a>
        <a class=\"py-2 d-none d-md-inline-block\" href=\"/film/5\">Film</a>
        <a class=\"py-2 d-none d-md-inline-block\" href=\"/category/4\">Category</a>
        <a class=\"py-2 d-none d-md-inline-block\" href=\"/user/1\">User</a>

        <a class=\"py-2 d-none d-md-inline-block\" href=\"/login\">Login</a>

    </div>
</nav>

<main role=\"main\">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class=\"jumbotron\">
        <div class=\"container\">
            <h1 class=\"display-3\">
                {% block header %}
                    Test Application
                {% endblock %}
            </h1>
            <p>  {% block body %}
                This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.

            {% endblock %}
            </p>
            <p>

        </p>
        </div>
    </div>

    <div class=\"container\">
        <!-- Example row of columns -->


    </div> <!-- /container -->

</main>

<footer class=\"container\">
    <p>&copy; 2018</p>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script>window.jQuery || document.write('<script src=\"../../../../assets/js/vendor/jquery-slim.min.js\"><\\/script>')</script>


<script src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\"></script>
</body>
</html>
", "base.html.twig", "/Users/szymongolinski/Desktop/YouTubeApi/templates/base.html.twig");
    }
}
