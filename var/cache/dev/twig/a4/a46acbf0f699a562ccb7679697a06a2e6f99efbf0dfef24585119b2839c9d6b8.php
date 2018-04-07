<?php

/* base.html.twig */
class __TwigTemplate_20e0610c2f449405d6c2ac07357585c42706deb85ca7c032cb320a4d2f127d5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>VA BLOG || ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    <div id=\"wrapper\">
        <aside id=\"left\">
            <h1>VA Blog</h1>
            <div class=\"top\">
                ";
        // line 16
        $this->displayBlock('navigation', $context, $blocks);
        // line 29
        echo "            </div>
        </aside>

        <main>
            ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        </main>


        <aside id=\"right\">
            ";
        // line 38
        $this->displayBlock('sidebar', $context, $blocks);
        // line 110
        echo "        </aside>
    </div>



        ";
        // line 115
        $this->displayBlock('javascripts', $context, $blocks);
        // line 116
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel='stylesheet' href= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/basic-template.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 17
        echo "                    <nav>
                        <ul class=\"navigation\">
                            <li><a href=\"/\">Home</a></li>
                            <li><a href=\"#\">About</a></li>
                            <li> <a href = \"#\">Add a new</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                        Created by <a href=\"https://github.com/Leratony\">Leratony</a>


                    </nav>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 39
        echo "            <div class = \"search\"><input type = \"text\" placeholder=\"search\"></div><br>


            <div class = \"formWrapper\">
                <form action=\"/\" name = \"Enter\" method = \"post\">
                    <label class = \"Login\"> Log In:<br>
                        <input type =\"text\" name = \"login\"/>
                    </label><br>

                    <label class = \"Password\"> Enter password:<br>
                        <input type =\"password\" name = \"pswd1\"/>
                    </label>
                    <div id = \"forgotten\"><a href = \"#\">Forgot your password?</a></div>


                    <input type = \"submit\" name = \"EnterSend\" value = \"Log In\">
                </form><br>
            </div>


            <div class = \"formWrapper\">
                <form action = \"/\" name = \"Registration\" method=\"post\">
                    <label class = \"Name\"> Name: <br>
                        <input type =\"text\" name = \"UserName\">
                    </label>


                    <label> Surame: <br>
                        <input type =\"text\" name = \"UserSurName\"><br>
                    </label>

                    <span class = \"Gender_wr\" datatype=\"radio\">
                    <span class = \"gndr\">
                         <input type=\"radio\" name=\"sex\" value=\"1\" id = \"g_m\">
                        <label class = g_1 for=\"g_m\"> Male</label>
                    </span>
                    <span class = \"gndr\">
                        <input type=\"radio\" name=\"sex\" value=\"2\" id = \"g_f\">
                        <label class = g_1 for=\"g_f\"> Female </label>
                    </span>

                </span>


            </div>
            <div class = \"BDayDiv\">

                <label>Birthday:</label>
                <input type = \"date\" name = \"date\">
            </div>

            <label> Enter password:<br>
                <input type =\"password\" name = \"pswd\">
            </label>

            <label> Confirm password:<br>
                <input type =\"password\" name = \"pswd_confirm\"><br>
            </label>

            <div class = \"regConf\">

                <input type = \"submit\" name = \"reg\" value = \"Register\">


                <div class =\"warn\">
                    By clicking Create an account, you agree to our Terms and confirm that you have read our Data Policy, including our Cookie Use Policy
                </div>
            </div>
            </form>
    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
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
        return array (  268 => 115,  188 => 39,  179 => 38,  162 => 33,  141 => 17,  132 => 16,  119 => 7,  110 => 6,  93 => 5,  81 => 116,  79 => 115,  72 => 110,  70 => 38,  64 => 34,  62 => 33,  56 => 29,  54 => 16,  43 => 9,  41 => 6,  37 => 5,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>VA BLOG || {% block title %}{% endblock %}</title>
        {% block stylesheets %}
            <link rel='stylesheet' href= \"{{ asset('css/basic-template.css')}}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
    <div id=\"wrapper\">
        <aside id=\"left\">
            <h1>VA Blog</h1>
            <div class=\"top\">
                {% block navigation %}
                    <nav>
                        <ul class=\"navigation\">
                            <li><a href=\"/\">Home</a></li>
                            <li><a href=\"#\">About</a></li>
                            <li> <a href = \"#\">Add a new</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                        Created by <a href=\"https://github.com/Leratony\">Leratony</a>


                    </nav>
                {% endblock %}
            </div>
        </aside>

        <main>
            {% block body %}{% endblock %}
        </main>


        <aside id=\"right\">
            {% block sidebar %}
            <div class = \"search\"><input type = \"text\" placeholder=\"search\"></div><br>


            <div class = \"formWrapper\">
                <form action=\"/\" name = \"Enter\" method = \"post\">
                    <label class = \"Login\"> Log In:<br>
                        <input type =\"text\" name = \"login\"/>
                    </label><br>

                    <label class = \"Password\"> Enter password:<br>
                        <input type =\"password\" name = \"pswd1\"/>
                    </label>
                    <div id = \"forgotten\"><a href = \"#\">Forgot your password?</a></div>


                    <input type = \"submit\" name = \"EnterSend\" value = \"Log In\">
                </form><br>
            </div>


            <div class = \"formWrapper\">
                <form action = \"/\" name = \"Registration\" method=\"post\">
                    <label class = \"Name\"> Name: <br>
                        <input type =\"text\" name = \"UserName\">
                    </label>


                    <label> Surame: <br>
                        <input type =\"text\" name = \"UserSurName\"><br>
                    </label>

                    <span class = \"Gender_wr\" datatype=\"radio\">
                    <span class = \"gndr\">
                         <input type=\"radio\" name=\"sex\" value=\"1\" id = \"g_m\">
                        <label class = g_1 for=\"g_m\"> Male</label>
                    </span>
                    <span class = \"gndr\">
                        <input type=\"radio\" name=\"sex\" value=\"2\" id = \"g_f\">
                        <label class = g_1 for=\"g_f\"> Female </label>
                    </span>

                </span>


            </div>
            <div class = \"BDayDiv\">

                <label>Birthday:</label>
                <input type = \"date\" name = \"date\">
            </div>

            <label> Enter password:<br>
                <input type =\"password\" name = \"pswd\">
            </label>

            <label> Confirm password:<br>
                <input type =\"password\" name = \"pswd_confirm\"><br>
            </label>

            <div class = \"regConf\">

                <input type = \"submit\" name = \"reg\" value = \"Register\">


                <div class =\"warn\">
                    By clicking Create an account, you agree to our Terms and confirm that you have read our Data Policy, including our Cookie Use Policy
                </div>
            </div>
            </form>
    </div>
    {% endblock %}
        </aside>
    </div>



        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/valeria/projects/Blog/app/Resources/views/base.html.twig");
    }
}
