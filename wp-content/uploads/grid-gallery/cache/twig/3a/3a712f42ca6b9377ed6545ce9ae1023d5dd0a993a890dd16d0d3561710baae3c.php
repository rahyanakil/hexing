<?php

/* @galleries/shortcode/import.twig */
class __TwigTemplate_859c83de51ceac4ebde4e8b682ae4dd5828fb7404b0442a82d9f874bfb15dfa5 extends Twig_SupTwgSgg_Template
{
    public function __construct(Twig_SupTwgSgg_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    // line 1
    public function getshow($__areaWidth__ = null, $__galleryId__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "areaWidth" => $__areaWidth__,
            "galleryId" => $__galleryId__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context["form1"] = $this->loadTemplate("@core/form.twig", "@galleries/shortcode/import.twig", 2);
            // line 3
            echo "    <div class=\"media-wrapr";
            if (Twig_SupTwgSgg_test_empty(($context["galleryId"] ?? null))) {
                echo "no-gallery-id";
            }
            echo "\" style=\"width:";
            echo Twig_SupTwgSgg_escape_filter($this->env, ($context["areaWidth"] ?? null), "html", null, true);
            echo "px;margin: 0 auto !important;display: block;\">";
            // line 4
            if (($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == true)) {
                // line 5
                echo "\t\t\t<br/>
\t\t\t<label>";
                // line 7
                echo $context["form1"]->getcheckbox("importUseExifData", 0, array("checked" => "checked", "class" => "ggUseExifData"));
                // line 8
                echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import EXIF data")), "html", null, true);
                echo "
\t\t\t</label>";
            } else {
                // line 11
                echo "\t\t\t<div>";
                // line 12
                echo $context["form1"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("")), "utm_source=plugin&utm_medium=use-exif-data&utm_campaign=gallery", "backgroundColorForShowOnHoverFree",                 // line 16
$context["form1"]->getcheckbox("importExifData", 0, array("disabled" => "disabled", "class" => "ggUseExifData")));
                // line 18
                echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import EXIF data")), "html", null, true);
                echo "
\t\t\t</div>";
            }
            // line 21
            echo "        <h1>";
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose source")), "html", null, true);
            echo "</h1>
        <button class=\"button button-primary button-hero gallery\" id=\"gg-btn-upload\" data-folder-id=\"0\"
                style=\"width: 400px; margin-bottom: 20px;\"
                data-gallery-id=\"";
            // line 24
            echo Twig_SupTwgSgg_escape_filter($this->env, ($context["galleryId"] ?? null), "html", null, true);
            echo "\" data-upload>
            <i class=\"fa fa-wordpress fa-2x\"></i>";
            // line 26
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array(" Import from WordPress Media Library")), "html", null, true);
            echo "
        </button>";
            // line 28
            if (($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == true)) {
                // line 29
                echo "\t\t\t<button class=\"button button-primary button-hero gallery\" id=\"sggUploadVideoFromUrlBtn\" data-folder-id=\"0\"
\t\t\t\t\tstyle=\"width: 400px;\"
\t\t\t>
\t\t\t\t<i class=\"fa fa-youtube-play fa-2x\" aria-hidden=\"true\"></i>";
                // line 33
                echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array(" Add video")), "html", null, true);
                echo "
\t\t\t</button>";
            }
            // line 36
            echo "        <h3>";
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from social networks")), "html", null, true);
            echo "</h3>";
            // line 37
            if (($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == true)) {
                // line 38
                echo "            <a class=\"button button-primary button-hero\" href=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "flickr", 1 => "index", 2 => array("id" => ($context["galleryId"] ?? null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-flickr fa-2x\"></i>";
                // line 40
                echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array(" Import from your Flickr account")), "html", null, true);
                echo "
            </a>";
                // line 46
                echo "
            <h3 style=\"margin-top: 0px\">";
                // line 47
                echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from cloud services")), "html", null, true);
                echo "</h3>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 48
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "ftp", 1 => "index", 2 => array("id" => ($context["galleryId"] ?? null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-file-image-o fa-2x\"></i>";
                // line 50
                echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array(" Import from your FTP server")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 52
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "googledrive", 1 => "index", 2 => array("id" => ($context["galleryId"] ?? null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-google fa-2x\"></i>";
                // line 54
                echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array(" Import from your Google Drive account")), "html", null, true);
                echo "
            </a>";
            } else {
                // line 57
                echo "            <h3>";
                echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Get Pro to enable import")), "html", null, true);
                echo "</h3>
            <a class=\"button button-primary button-hero\" href=\"http://supsystic.com/plugins/photo-gallery/\" target=\"_blank\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-unlock fa-2x\"></i>";
                // line 60
                echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array(" Get PRO")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero disabled\" href=\"http://supsystic.com/plugins/photo-gallery/\" target=\"_blank\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-youtube-play fa-2x\"></i>";
                // line 64
                echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add video")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero disabled\" href=\"https://supsystic.com/documentation/flickr/\" target=\"_blank\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-flickr fa-2x\"></i>";
                // line 68
                echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array(" Import from your Flickr account")), "html", null, true);
                echo "
            </a>";
                // line 74
                echo "            <a class=\"button button-primary button-hero disabled\" href=\"https://supsystic.com/documentation/ftp-import/\" target=\"_blank\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-file-image-o fa-2x\"></i>";
                // line 76
                echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your FTP server")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero disabled\" href=\"https://supsystic.com/documentation/google-drive-import/\" target=\"_blank\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-google fa-2x\"></i>";
                // line 80
                echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Google Drive account")), "html", null, true);
                echo "
            </a>";
            }
            // line 83
            echo "    </div>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    // line 86
    public function getview_dialogs($__gallery_id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "gallery_id" => $__gallery_id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 87
            $context["form"] = $this->loadTemplate("@core/form.twig", "@galleries/shortcode/import.twig", 87);
            // line 88
            $context["importTypes"] = $this;
            // line 89
            echo "    <div id=\"importDialog\" title=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select source to import from")), "html", null, true);
            echo "\" style=\"display: none;\">";
            // line 90
            echo $context["importTypes"]->getshow(400, ($context["gallery_id"] ?? null));
            echo "
    </div>

    <div id=\"videoUrlAddDialog\" title=\"";
            // line 93
            echo "Add video url";
            echo "\" style=\"display:none;\" data-gallery-id=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, ($context["gallery_id"] ?? null), "html", null, true);
            echo "\">
        <div class=\"sggVideoUrlAddWr\">
            <div class=\"sggTableRow\">
                <div class=\"sggTableColumn6\">
                    <div class=\"sggDlgVideoTypeH3\">";
            // line 97
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video type:")), "html", null, true);
            echo "</div>
                </div>
                <div class=\"sggTableColumn6\">";
            // line 100
            echo ((((            // line 101
$context["form"]->getradio("sggDlgVideoType", "youtube", array("id" => "sggDlgYoutubeVideoType", "class" => "sggDlgVideoTypeRadio", "checked" => "checked")) .             // line 106
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Youtube url")), "sggDlgYoutubeVideoType")) . "<br/>") .             // line 110
$context["form"]->getradio("sggDlgVideoType", "vimeo", array("id" => "sggDlgVimeoVideoType", "class" => "sggDlgVideoTypeRadio"))) .             // line 115
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Vimeo url")), "sggDlgVimeoVideoType"));
            // line 119
            echo "
                </div>
            </div>
            <div class=\"sggTableRow\">
                <div class=\"sggTableColumn6\">
                    <div class=\"sggDlgVideoTypeH3\">";
            // line 124
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video url:")), "html", null, true);
            echo "</div>
                </div>
                <div class=\"sggTableColumn6\">";
            // line 127
            echo             // line 128
$context["form"]->getinput("text", "sggDlgUrlVideoValue", "", array("id" => "sggDlgUrlVideoInp", "class" => ""));
            // line 134
            echo "
                </div>
            </div>
            <div class=\"sggTableRow sggAduHiden\" id=\"sggAduErrorText\"></div>
        </div>
    </div>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@galleries/shortcode/import.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 134,  243 => 128,  242 => 127,  237 => 124,  230 => 119,  228 => 115,  227 => 110,  226 => 106,  225 => 101,  224 => 100,  219 => 97,  210 => 93,  204 => 90,  200 => 89,  198 => 88,  196 => 87,  184 => 86,  169 => 83,  164 => 80,  158 => 76,  155 => 74,  151 => 68,  145 => 64,  139 => 60,  133 => 57,  128 => 54,  124 => 52,  119 => 50,  115 => 48,  111 => 47,  108 => 46,  104 => 40,  99 => 38,  97 => 37,  93 => 36,  88 => 33,  83 => 29,  81 => 28,  77 => 26,  73 => 24,  66 => 21,  61 => 18,  59 => 16,  58 => 12,  56 => 11,  51 => 8,  49 => 7,  46 => 5,  44 => 4,  36 => 3,  34 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        //@trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_SupTwgSgg_Source("", "@galleries/shortcode/import.twig", "/Applications/MAMP/htdocs/Hexing/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Galleries/views/shortcode/import.twig");
    }
}
