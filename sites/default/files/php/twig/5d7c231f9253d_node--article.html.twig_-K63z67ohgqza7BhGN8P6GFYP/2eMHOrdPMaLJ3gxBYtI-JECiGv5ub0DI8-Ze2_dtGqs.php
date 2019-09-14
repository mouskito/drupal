<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/showcase_lite/templates/node--article.html.twig */
class __TwigTemplate_0fc21bad30da35029c7a2cc2a74e9fe1507c0aa9c95539db9d7541568dfde6fe extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 8
        $this->parent = $this->loadTemplate("node.html.twig", "themes/showcase_lite/templates/node--article.html.twig", 8);
        $this->blocks = [
            'meta_area' => [$this, 'block_meta_area'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 11, "trans" => 30];
        $filters = ["escape" => 10, "format_date" => 28, "without" => 67];
        $functions = ["attach_library" => 47];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 'format_date', 'without'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doGetParent(array $context)
    {
        return "node.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_meta_area($context, array $blocks = [])
    {
        // line 10
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 11
        if ( !($context["page"] ?? null)) {
            // line 12
            echo "    <h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method")), "html", null, true);
            echo ">
      <a href=\"";
            // line 13
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a>
    </h2>
  ";
        }
        // line 16
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 17
        if (($context["display_submitted"] ?? null)) {
            // line 18
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 20
        echo "  ";
        if (((($context["display_submitted"] ?? null) || $this->getAttribute(($context["node"] ?? null), "comment", [])) || ((($context["view_mode"] ?? null) == "full") && $this->getAttribute(($context["mt_setting"] ?? null), "reading_time", [])))) {
            // line 21
            echo "    <div class=\"node__meta\">
       <ul class=\"inline-list\">
          ";
            // line 23
            if ((($context["display_submitted"] ?? null) || ($this->getAttribute(($context["node"] ?? null), "comment", []) && (($context["comment_count"] ?? null) > 0)))) {
                // line 24
                echo "            <li class=\"inline-list__item\">
              ";
                // line 25
                if (($context["display_submitted"] ?? null)) {
                    // line 26
                    echo "                <span";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["author_attributes"] ?? null), "addClass", [0 => "node__submitted-info"], "method")), "html", null, true);
                    echo ">
                  <span class=\"node__submitted-date\">
                    ";
                    // line 28
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFilter('format_date')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "createdtime", [])), "custom", "F d, Y"]), "html", null, true);
                    echo "
                  </span>
                  ";
                    // line 30
                    echo t("<span class=\"node__submitted-info-text\">By</span> @author_name", array("@author_name" => ($context["author_name"] ?? null), ));
                    // line 31
                    echo "                </span>
                ";
                    // line 32
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null)), "html", null, true);
                    echo "
              ";
                }
                // line 34
                echo "              ";
                if (($this->getAttribute(($context["node"] ?? null), "comment", []) && (($context["comment_count"] ?? null) > 0))) {
                    // line 35
                    echo "                <span class=\"comments-count__counter text--colored\">
                  ";
                    // line 36
                    echo \Drupal::translation()->formatPlural(abs(                    // line 38
($context["comment_count"] ?? null)), "1 comment", "@comment_count comments", array("@comment_count" =>                     // line 39
($context["comment_count"] ?? null), ));
                    // line 41
                    echo "                </span>
              ";
                }
                // line 43
                echo "            </li>
          ";
            }
            // line 45
            echo "        ";
            if (((($context["view_mode"] ?? null) == "full") && $this->getAttribute(($context["mt_setting"] ?? null), "reading_time", []))) {
                // line 46
                echo "          <li class=\"inline-list__item\">
            ";
                // line 47
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("showcase_lite/reading-time"), "html", null, true);
                echo "
            <span class=\"reading-time\">
              <span class=\"text--dark\">";
                // line 49
                echo t("Time to read", array());
                echo "</span>
              ";
                // line 50
                if ((($context["minutes"] ?? null) < 1)) {
                    // line 51
                    echo "                ";
                    echo t("less than 1 minute", array());
                    // line 52
                    echo "              ";
                } elseif ((($context["minutes"] ?? null) < 2)) {
                    // line 53
                    echo "                ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["minutes"] ?? null)), "html", null, true);
                    echo " ";
                    echo t("minute", array());
                    // line 54
                    echo "              ";
                } else {
                    // line 55
                    echo "                ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["minutes"] ?? null)), "html", null, true);
                    echo " ";
                    echo t("minutes", array());
                    // line 56
                    echo "              ";
                }
                // line 57
                echo "            </span>
          </li>
        ";
            }
            // line 60
            echo "      </ul>
    </div>
  ";
        }
    }

    // line 64
    public function block_content($context, array $blocks = [])
    {
        // line 65
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("showcase_lite/node-article"), "html", null, true);
        echo "
  <div class=\"node__main-content-section\">
    ";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "comment"), "html", null, true);
        echo "
  </div>
  ";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "comment", [])), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/showcase_lite/templates/node--article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 69,  214 => 67,  208 => 65,  205 => 64,  198 => 60,  193 => 57,  190 => 56,  185 => 55,  182 => 54,  177 => 53,  174 => 52,  171 => 51,  169 => 50,  165 => 49,  160 => 47,  157 => 46,  154 => 45,  150 => 43,  146 => 41,  144 => 39,  143 => 38,  142 => 36,  139 => 35,  136 => 34,  131 => 32,  128 => 31,  126 => 30,  121 => 28,  115 => 26,  113 => 25,  110 => 24,  108 => 23,  104 => 21,  101 => 20,  95 => 18,  93 => 17,  88 => 16,  80 => 13,  75 => 12,  73 => 11,  68 => 10,  65 => 9,  22 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/showcase_lite/templates/node--article.html.twig", "/var/www/projects/drupal/themes/showcase_lite/templates/node--article.html.twig");
    }
}
