<?php

use Breakdance\Lib\Vendor\Twig\Environment;
use Breakdance\Lib\Vendor\Twig\Error\LoaderError;
use Breakdance\Lib\Vendor\Twig\Error\RuntimeError;
use Breakdance\Lib\Vendor\Twig\Extension\SandboxExtension;
use Breakdance\Lib\Vendor\Twig\Markup;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedTagError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use Breakdance\Lib\Vendor\Twig\Source;
use Breakdance\Lib\Vendor\Twig\Template;

/* 60bf721d8c5dacc91194bdbb3fa0f891abb6b9e6 */
class __TwigTemplate_fc0dd4888756d37822c8af5c13e4e67d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
          ";
        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "60bf721d8c5dacc91194bdbb3fa0f891abb6b9e6", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  background-color: ";
        // line 5
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 5), "background", [], "any", false, false, false, 5);
        echo ";
  ";
        // line 6
        echo twig_call_macro($macros["macros"], "macro_spacing_padding_all", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 6), "padding", [], "any", false, false, false, 6)], 6, $context, $this->getSourceContext());
        echo "
  ";
        // line 7
        echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 7), "borders", [], "any", false, false, false, 7)], 7, $context, $this->getSourceContext());
        echo "
  ";
        // line 8
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 8)], 8, $context, $this->getSourceContext());
        echo "
}
%%SELECTOR%% ul {
gap: ";
        // line 11
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 11), "gap", [], "any", false, false, false, 11), "style", [], "any", false, false, false, 11);
        echo ";
}
%%SELECTOR%% .lang-item a {
";
        // line 14
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14), ($context["globalSettings"] ?? null)], 14, $context, $this->getSourceContext());
        echo "
}
%%SELECTOR%% .lang-item a:hover {
";
        // line 17
        echo twig_call_macro($macros["macros"], "macro_typographyWithHoverableColorAndEffects", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17)], 17, $context, $this->getSourceContext());
        echo "
}
";
        // line 19
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 19), "hide_current", [], "any", false, false, false, 19)) {
            // line 20
            echo "%%SELECTOR%% .lang-item.current-lang a {
";
            // line 21
            echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 21), "current", [], "any", false, false, false, 21), ($context["globalSettings"] ?? null)], 21, $context, $this->getSourceContext());
            echo "
}
%%SELECTOR%% .lang-item.current-lang a:hover {
";
            // line 24
            echo twig_call_macro($macros["macros"], "macro_typographyWithHoverableColorAndEffects", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 24), "current", [], "any", false, false, false, 24)], 24, $context, $this->getSourceContext());
            echo "
}
";
        }
        // line 27
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 27), "position", [], "any", false, false, false, 27) == "vertical")) {
            // line 28
            echo "%%SELECTOR%% ul {
  flex-direction:column;
}
";
        }
        // line 33
        echo "

    %%SELECTOR%% {
        ";
        // line 36
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 37
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 37), "wrapper", [], "any", false, false, false, 37), "background", [], "any", false, false, false, 37), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 38
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 38), "wrapper", [], "any", false, false, false, 38), "layout", [], "any", false, false, false, 38), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 39
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 39), "wrapper", [], "any", false, false, false, 39), "size", [], "any", false, false, false, 39), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 40
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 40), "wrapper", [], "any", false, false, false, 40), "typography", [], "any", false, false, false, 40),         // line 41
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 42
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 42), "wrapper", [], "any", false, false, false, 42), "spacing", [], "any", false, false, false, 42), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 43
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 43), "wrapper", [], "any", false, false, false, 43), "borders", [], "any", false, false, false, 43), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 44
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 44), "wrapper", [], "any", false, false, false, 44), "effects", [], "any", false, false, false, 44)], 36, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 48
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 49
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 49), "wrapper_hover", [], "any", false, false, false, 49), "background", [], "any", false, false, false, 49), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 50
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 50), "wrapper_hover", [], "any", false, false, false, 50), "layout", [], "any", false, false, false, 50), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 51
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 51), "wrapper_hover", [], "any", false, false, false, 51), "size", [], "any", false, false, false, 51), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 52
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 52), "wrapper_hover", [], "any", false, false, false, 52), "typography", [], "any", false, false, false, 52),         // line 53
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 54
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 54), "wrapper_hover", [], "any", false, false, false, 54), "spacing", [], "any", false, false, false, 54), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 55
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 55), "wrapper_hover", [], "any", false, false, false, 55), "borders", [], "any", false, false, false, 55), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 56
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 56), "wrapper_hover", [], "any", false, false, false, 56), "effects", [], "any", false, false, false, 56)], 48, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 60
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 60), "css", [], "any", false, false, false, 60);
        echo "


";
        // line 63
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 63), "hide", [], "any", false, false, false, 63)))) {
            // line 64
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 65
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 65), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 65), "hide", [], "any", false, false, false, 65))) {
                    // line 66
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 68
                    if (($context["isBuilder"] ?? null)) {
                        // line 69
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 72
                        echo "                        display: none;
                    ";
                    }
                    // line 74
                    echo "                }
            }
        ";
                }
                // line 77
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 79
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "60bf721d8c5dacc91194bdbb3fa0f891abb6b9e6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 79,  179 => 77,  174 => 74,  170 => 72,  165 => 69,  163 => 68,  157 => 66,  154 => 65,  149 => 64,  147 => 63,  141 => 60,  134 => 56,  133 => 55,  132 => 54,  131 => 53,  130 => 52,  129 => 51,  128 => 50,  127 => 49,  126 => 48,  119 => 44,  118 => 43,  117 => 42,  116 => 41,  115 => 40,  114 => 39,  113 => 38,  112 => 37,  111 => 36,  106 => 33,  100 => 28,  98 => 27,  92 => 24,  86 => 21,  83 => 20,  81 => 19,  76 => 17,  70 => 14,  64 => 11,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "60bf721d8c5dacc91194bdbb3fa0f891abb6b9e6", "");
    }
}
