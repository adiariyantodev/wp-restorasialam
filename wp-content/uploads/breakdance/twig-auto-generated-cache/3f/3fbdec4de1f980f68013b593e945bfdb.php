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

/* 57f26a4ddaeb2a70060908980e45b87d87b19cc0 */
class __TwigTemplate_611614f30b92c78db6c51d6104597d9e extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "57f26a4ddaeb2a70060908980e45b87d87b19cc0", 2)->unwrap();
        // line 3
        echo "
          <div class=\"bde-social-share-button bde-social-share-button-mobile js-breakdance-share-mobile\">
  <span class=\"bde-social-share-button-icon\">
    <svg fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 16 16\">
      <path d=\"M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12c.154.49.154 1.015 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.504 2.504 0 0 1 11 2.5Z\" fill=\"currentColor\"/>
    </svg>
  </span>
  ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "style", [], "any", false, false, false, 10), "display", [], "any", false, false, false, 10) != "icon")) {
            // line 11
            echo "  <span class=\"bde-social-share-button-text\">";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "responsive", [], "any", false, true, false, 11), "button_text", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "responsive", [], "any", false, true, false, 11), "button_text", [], "any", false, false, false, 11), "Share")) : ("Share"));
            echo "</span>
  ";
        }
        // line 13
        echo "</div>

";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "buttons", [], "any", false, false, false, 15), "buttons", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "<div class=\"js-breakdance-share-button bde-social-share-button bde-social-share-button-";
            echo twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "network", [], "any", false, false, false, 16));
            echo "\" data-network=\"";
            echo twig_get_attribute($this->env, $this->source, $context["item"], "network", [], "any", false, false, false, 16);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "share", [], "any", false, false, false, 16), "url", [], "any", false, false, false, 16) == "custom_url")) {
                echo " data-url=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "share", [], "any", false, false, false, 16), "custom_url", [], "any", false, false, false, 16);
                echo "\" ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "share", [], "any", false, false, false, 16), "text", [], "any", false, false, false, 16) == "custom_text")) {
                echo " data-text=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "share", [], "any", false, false, false, 16), "custom_text", [], "any", false, false, false, 16);
                echo "\" ";
            }
            echo ">
  ";
            // line 17
            if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "style", [], "any", false, false, false, 17), "display", [], "any", false, false, false, 17) == "icon") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "style", [], "any", false, false, false, 17), "display", [], "any", false, false, false, 17) == "icon-text")) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "style", [], "any", false, false, false, 17), "display", [], "any", false, false, false, 17)))) {
                // line 18
                echo "  <span class=\"bde-social-share-button-icon\">
    ";
                // line 19
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "network", [], "any", false, false, false, 19) == "Facebook")) {
                    // line 20
                    echo "    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fab\" class=\"svg-inline--fa fa-facebook fa-w-16\" role=\"img\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 800 800\">
      <path d=\"M768 0H32C14.3 0 0 14.3 0 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32Zm-92.4 233.5h-63.9c-50.1 0-59.8 23.8-59.8 58.8v77.1h119.6l-15.6 120.7h-104V800H427.2V490.2H322.9V369.4h104.3v-89c0-103.3 63.1-159.6 155.3-159.6 44.2 0 82.1 3.3 93.2 4.8v107.9h-.1Z\" fill=\"currentColor\"/>
    </svg>
    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 23
$context["item"], "network", [], "any", false, false, false, 23) == "Twitter")) {
                    // line 24
                    echo "    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fab\" class=\"svg-inline--fa fa-twitter fa-w-16\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 512 512\">
      <path fill=\"currentColor\" d=\"M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z\"></path>
    </svg>
    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 27
$context["item"], "network", [], "any", false, false, false, 27) == "Pinterest")) {
                    // line 28
                    echo "    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fab\" class=\"svg-inline--fa fa-pinterest fa-w-16\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 496 512\">
      <path fill=\"currentColor\" d=\"M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3.8-3.4 5-20.3 6.9-28.1.6-2.5.3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z\"></path>
    </svg>
    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 31
$context["item"], "network", [], "any", false, false, false, 31) == "LinkedIn")) {
                    // line 32
                    echo "    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fab\" class=\"svg-inline--fa fa-linkedin fa-w-14\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 448 512\">
      <path fill=\"currentColor\" d=\"M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z\"></path>
    </svg>
    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 35
$context["item"], "network", [], "any", false, false, false, 35) == "VK")) {
                    // line 36
                    echo "    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fab\" class=\"svg-inline--fa fa-vk fa-w-18\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 576 512\">
      <path fill=\"currentColor\" d=\"M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z\"></path>
    </svg>
    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 39
$context["item"], "network", [], "any", false, false, false, 39) == "Tumblr")) {
                    // line 40
                    echo "    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fab\" class=\"svg-inline--fa fa-tumblr-square fa-w-14\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 448 512\">
      <path fill=\"currentColor\" d=\"M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-82.3 364.2c-8.5 9.1-31.2 19.8-60.9 19.8-75.5 0-91.9-55.5-91.9-87.9v-90h-29.7c-3.4 0-6.2-2.8-6.2-6.2v-42.5c0-4.5 2.8-8.5 7.1-10 38.8-13.7 50.9-47.5 52.7-73.2.5-6.9 4.1-10.2 10-10.2h44.3c3.4 0 6.2 2.8 6.2 6.2v72h51.9c3.4 0 6.2 2.8 6.2 6.2v51.1c0 3.4-2.8 6.2-6.2 6.2h-52.1V321c0 21.4 14.8 33.5 42.5 22.4 3-1.2 5.6-2 8-1.4 2.2.5 3.6 2.1 4.6 4.9l13.8 40.2c1 3.2 2 6.7-.3 9.1z\"></path>
    </svg>
    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 43
$context["item"], "network", [], "any", false, false, false, 43) == "Reddit")) {
                    // line 44
                    echo "    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fab\" class=\"svg-inline--fa fa-reddit fa-w-16\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 512 512\">
      <path fill=\"currentColor\" d=\"M201.5 305.5c-13.8 0-24.9-11.1-24.9-24.6 0-13.8 11.1-24.9 24.9-24.9 13.6 0 24.6 11.1 24.6 24.9 0 13.6-11.1 24.6-24.6 24.6zM504 256c0 137-111 248-248 248S8 393 8 256 119 8 256 8s248 111 248 248zm-132.3-41.2c-9.4 0-17.7 3.9-23.8 10-22.4-15.5-52.6-25.5-86.1-26.6l17.4-78.3 55.4 12.5c0 13.6 11.1 24.6 24.6 24.6 13.8 0 24.9-11.3 24.9-24.9s-11.1-24.9-24.9-24.9c-9.7 0-18 5.8-22.1 13.8l-61.2-13.6c-3-.8-6.1 1.4-6.9 4.4l-19.1 86.4c-33.2 1.4-63.1 11.3-85.5 26.8-6.1-6.4-14.7-10.2-24.1-10.2-34.9 0-46.3 46.9-14.4 62.8-1.1 5-1.7 10.2-1.7 15.5 0 52.6 59.2 95.2 132 95.2 73.1 0 132.3-42.6 132.3-95.2 0-5.3-.6-10.8-1.9-15.8 31.3-16 19.8-62.5-14.9-62.5zM302.8 331c-18.2 18.2-76.1 17.9-93.6 0-2.2-2.2-6.1-2.2-8.3 0-2.5 2.5-2.5 6.4 0 8.6 22.8 22.8 87.3 22.8 110.2 0 2.5-2.2 2.5-6.1 0-8.6-2.2-2.2-6.1-2.2-8.3 0zm7.7-75c-13.6 0-24.6 11.1-24.6 24.9 0 13.6 11.1 24.6 24.6 24.6 13.8 0 24.9-11.1 24.9-24.6 0-13.8-11-24.9-24.9-24.9z\"></path>
    </svg>
    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 47
$context["item"], "network", [], "any", false, false, false, 47) == "Digg")) {
                    // line 48
                    echo "    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fab\" class=\"svg-inline--fa fa-digg fa-w-16\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 512 512\">
      <path fill=\"currentColor\" d=\"M81.7 172.3H0v174.4h132.7V96h-51v76.3zm0 133.4H50.9v-92.3h30.8v92.3zm297.2-133.4v174.4h81.8v28.5h-81.8V416H512V172.3H378.9zm81.8 133.4h-30.8v-92.3h30.8v92.3zm-235.6 41h82.1v28.5h-82.1V416h133.3V172.3H225.1v174.4zm51.2-133.3h30.8v92.3h-30.8v-92.3zM153.3 96h51.3v51h-51.3V96zm0 76.3h51.3v174.4h-51.3V172.3z\"></path>
    </svg>
    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 51
$context["item"], "network", [], "any", false, false, false, 51) == "StumbleUpon")) {
                    // line 52
                    echo "    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fab\" class=\"svg-inline--fa fa-stumbleupon fa-w-16\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 512 512\">
      <path fill=\"currentColor\" d=\"M502.9 266v69.7c0 62.1-50.3 112.4-112.4 112.4-61.8 0-112.4-49.8-112.4-111.3v-70.2l34.3 16 51.1-15.2V338c0 14.7 12 26.5 26.7 26.5S417 352.7 417 338v-72h85.9zm-224.7-58.2l34.3 16 51.1-15.2V173c0-60.5-51.1-109-112.1-109-60.8 0-112.1 48.2-112.1 108.2v162.4c0 14.9-12 26.7-26.7 26.7S86 349.5 86 334.6V266H0v69.7C0 397.7 50.3 448 112.4 448c61.6 0 112.4-49.5 112.4-110.8V176.9c0-14.7 12-26.7 26.7-26.7s26.7 12 26.7 26.7v30.9z\"></path>
    </svg>
    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 55
$context["item"], "network", [], "any", false, false, false, 55) == "Pocket")) {
                    // line 56
                    echo "    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fab\" class=\"svg-inline--fa fa-get-pocket fa-w-14\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 448 512\">
      <path fill=\"currentColor\" d=\"M407.6 64h-367C18.5 64 0 82.5 0 104.6v135.2C0 364.5 99.7 464 224.2 464c124 0 223.8-99.5 223.8-224.2V104.6c0-22.4-17.7-40.6-40.4-40.6zm-162 268.5c-12.4 11.8-31.4 11.1-42.4 0C89.5 223.6 88.3 227.4 88.3 209.3c0-16.9 13.8-30.7 30.7-30.7 17 0 16.1 3.8 105.2 89.3 90.6-86.9 88.6-89.3 105.5-89.3 16.9 0 30.7 13.8 30.7 30.7 0 17.8-2.9 15.7-114.8 123.2z\"></path>
    </svg>
    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 59
$context["item"], "network", [], "any", false, false, false, 59) == "WhatsApp")) {
                    // line 60
                    echo "    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fab\" class=\"svg-inline--fa fa-whatsapp fa-w-14\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 448 512\">
      <path fill=\"currentColor\" d=\"M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z\"></path>
    </svg>
    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 63
$context["item"], "network", [], "any", false, false, false, 63) == "Xing")) {
                    // line 64
                    echo "    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fab\" class=\"svg-inline--fa fa-xing fa-w-12\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 384 512\">
      <path fill=\"currentColor\" d=\"M162.7 210c-1.8 3.3-25.2 44.4-70.1 123.5-4.9 8.3-10.8 12.5-17.7 12.5H9.8c-7.7 0-12.1-7.5-8.5-14.4l69-121.3c.2 0 .2-.1 0-.3l-43.9-75.6c-4.3-7.8.3-14.1 8.5-14.1H100c7.3 0 13.3 4.1 18 12.2l44.7 77.5zM382.6 46.1l-144 253v.3L330.2 466c3.9 7.1.2 14.1-8.5 14.1h-65.2c-7.6 0-13.6-4-18-12.2l-92.4-168.5c3.3-5.8 51.5-90.8 144.8-255.2 4.6-8.1 10.4-12.2 17.5-12.2h65.7c8 0 12.3 6.7 8.5 14.1z\"></path>
    </svg>
    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 67
$context["item"], "network", [], "any", false, false, false, 67) == "Telegram")) {
                    // line 68
                    echo "    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fab\" class=\"svg-inline--fa fa-telegram fa-w-16\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 496 512\">
      <path fill=\"currentColor\" d=\"M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm121.8 169.9l-40.7 191.8c-3 13.6-11.1 16.9-22.4 10.5l-62-45.7-29.9 28.8c-3.3 3.3-6.1 6.1-12.5 6.1l4.4-63.1 114.9-103.8c5-4.4-1.1-6.9-7.7-2.5l-142 89.4-61.2-19.1c-13.3-4.2-13.6-13.3 2.8-19.7l239.1-92.2c11.1-4 20.8 2.7 17.2 19.5z\"></path>
    </svg>
    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 71
$context["item"], "network", [], "any", false, false, false, 71) == "Skype")) {
                    // line 72
                    echo "    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fab\" class=\"svg-inline--fa fa-skype fa-w-14\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 448 512\">
      <path fill=\"currentColor\" d=\"M424.7 299.8c2.9-14 4.7-28.9 4.7-43.8 0-113.5-91.9-205.3-205.3-205.3-14.9 0-29.7 1.7-43.8 4.7C161.3 40.7 137.7 32 112 32 50.2 32 0 82.2 0 144c0 25.7 8.7 49.3 23.3 68.2-2.9 14-4.7 28.9-4.7 43.8 0 113.5 91.9 205.3 205.3 205.3 14.9 0 29.7-1.7 43.8-4.7 19 14.6 42.6 23.3 68.2 23.3 61.8 0 112-50.2 112-112 .1-25.6-8.6-49.2-23.2-68.1zm-194.6 91.5c-65.6 0-120.5-29.2-120.5-65 0-16 9-30.6 29.5-30.6 31.2 0 34.1 44.9 88.1 44.9 25.7 0 42.3-11.4 42.3-26.3 0-18.7-16-21.6-42-28-62.5-15.4-117.8-22-117.8-87.2 0-59.2 58.6-81.1 109.1-81.1 55.1 0 110.8 21.9 110.8 55.4 0 16.9-11.4 31.8-30.3 31.8-28.3 0-29.2-33.5-75-33.5-25.7 0-42 7-42 22.5 0 19.8 20.8 21.8 69.1 33 41.4 9.3 90.7 26.8 90.7 77.6 0 59.1-57.1 86.5-112 86.5z\"></path>
    </svg>
    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 75
$context["item"], "network", [], "any", false, false, false, 75) == "Print")) {
                    // line 76
                    echo "    <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" class=\"svg-inline--fa fa-print fa-w-16\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 512 512\">
      <path fill=\"currentColor\" d=\"M448 192V77.25c0-8.49-3.37-16.62-9.37-22.63L393.37 9.37c-6-6-14.14-9.37-22.63-9.37H96C78.33 0 64 14.33 64 32v160c-35.35 0-64 28.65-64 64v112c0 8.84 7.16 16 16 16h48v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h48c8.84 0 16-7.16 16-16V256c0-35.35-28.65-64-64-64zm-64 256H128v-96h256v96zm0-224H128V64h192v48c0 8.84 7.16 16 16 16h48v96zm48 72c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z\"></path>
    </svg>
    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 79
$context["item"], "network", [], "any", false, false, false, 79) == "Email")) {
                    // line 80
                    echo "    <svg class=\"svg-inline--fa fa-envelope-square fa-w-14\" role=\"img\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 20 16\">
      <path d=\"M18 0H2C.9 0 .01.9.01 2L0 14c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V2c0-1.1-.9-2-2-2Zm0 4-8 5-8-5V2l8 5 8-5v2Z\" fill=\"currentColor\"/>
    </svg>
    ";
                }
                // line 84
                echo "  </span>
  ";
            }
            // line 86
            echo "  ";
            if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "style", [], "any", false, false, false, 86), "display", [], "any", false, false, false, 86) == "text") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "style", [], "any", false, false, false, 86), "display", [], "any", false, false, false, 86) == "icon-text")) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "style", [], "any", false, false, false, 86), "display", [], "any", false, false, false, 86)))) {
                // line 87
                echo "  <span class=\"bde-social-share-button-text\">
    ";
                // line 88
                if (twig_get_attribute($this->env, $this->source, $context["item"], "custom_label", [], "any", false, false, false, 88)) {
                    // line 89
                    echo "    ";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "custom_label", [], "any", false, false, false, 89);
                    echo "
    ";
                } else {
                    // line 91
                    echo "    ";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "network", [], "any", false, false, false, 91);
                    echo "
    ";
                }
                // line 93
                echo "  </span>
  ";
            }
            // line 95
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "         ";
    }

    public function getTemplateName()
    {
        return "57f26a4ddaeb2a70060908980e45b87d87b19cc0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 97,  232 => 95,  228 => 93,  222 => 91,  216 => 89,  214 => 88,  211 => 87,  208 => 86,  204 => 84,  198 => 80,  196 => 79,  191 => 76,  189 => 75,  184 => 72,  182 => 71,  177 => 68,  175 => 67,  170 => 64,  168 => 63,  163 => 60,  161 => 59,  156 => 56,  154 => 55,  149 => 52,  147 => 51,  142 => 48,  140 => 47,  135 => 44,  133 => 43,  128 => 40,  126 => 39,  121 => 36,  119 => 35,  114 => 32,  112 => 31,  107 => 28,  105 => 27,  100 => 24,  98 => 23,  93 => 20,  91 => 19,  88 => 18,  86 => 17,  67 => 16,  63 => 15,  59 => 13,  53 => 11,  51 => 10,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "57f26a4ddaeb2a70060908980e45b87d87b19cc0", "");
    }
}
