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

/* themes/bootstrap_mint/templates/views/page--mypage.html.twig */
class __TwigTemplate_e89c045e9bc8717e9b54f8eeb1e31f2b925629a08b4728d9882056d3be4328e3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 72];
        $filters = ["escape" => 84, "date" => 555];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'date'],
                []
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 68
        echo "
<!-- Header and Navbar -->
<header class=\"main-header\">
<!-- Sliding Header Widget -->
";
        // line 72
        if (($context["is_front"] ?? null)) {
            // line 73
            echo "  ";
            if (($this->getAttribute(($context["page"] ?? null), "sliding_header_one", []) || $this->getAttribute(($context["page"] ?? null), "sliding_header_two", []))) {
                // line 74
                echo "    <div class=\"slidewidget\">
\t<div class=\"wrapper\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">
          <div id=\"sliding-header-wrap\">
          <!-- Slide first region -->
          
          ";
                // line 83
                if ($this->getAttribute(($context["page"] ?? null), "sliding_header_one", [])) {
                    // line 84
                    echo "            <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slidewidget_first"] ?? null)), "html", null, true);
                    echo ">
              ";
                    // line 85
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sliding_header_one", [])), "html", null, true);
                    echo "
            </div>
          ";
                }
                // line 88
                echo "          
          <!-- End slide first region -->
          <!-- Slide second region -->
          
          ";
                // line 92
                if ($this->getAttribute(($context["page"] ?? null), "sliding_header_two", [])) {
                    // line 93
                    echo "            <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slidewidget_class"] ?? null)), "html", null, true);
                    echo ">
              ";
                    // line 94
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sliding_header_two", [])), "html", null, true);
                    echo "
            </div>
          ";
                }
                // line 97
                echo "          
          <!-- End slide second region -->
          
\t\t  </div>
        </div>
      </div>
\t  <!-- end: Container -->
\t  </div>
\t  <div class=\"toggle-switch\"><div class=\"fa fa-gear fa-spin\"></div></div>
    </div>
  ";
            }
        }
        // line 109
        echo "<!--Sliding Header Widget -->
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">
      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        ";
        // line 120
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 121
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
        ";
        }
        // line 123
        echo "      </div>

      <!-- Navigation -->
      <div class=\"col-md-9\">
        ";
        // line 127
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 128
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
        ";
        }
        // line 129
        echo "      
      </div>
      <!--End Navigation -->

      </div>
    </div>
  </nav>

  <!-- Banner -->
  ";
        // line 138
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "slideshow", []))) {
            echo "  
    <div class=\"container slideshow\">
      <div class=\"row\">
        <div class=\"col-md-12\">
            ";
            // line 142
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slideshow", [])), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 147
        echo "  <!-- End Banner -->

</header>
<!--End Header & Navbar -->


<!--Search-->
  ";
        // line 154
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "search", []))) {
            // line 155
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
            echo "
  ";
        }
        // line 157
        echo "<!--End Search-->


<!--Home page banner-->
  ";
        // line 161
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "promo", []))) {
            // line 162
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 165
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "promo", [])), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 170
        echo "<!--End Home page banner-->


<!--Highlighted-->
  ";
        // line 174
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 175
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 178
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 183
        echo "<!--End Highlighted-->

<!--Help-->
  ";
        // line 186
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 187
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 190
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 195
        echo "<!--End Help-->

<!-- Start Top Widget -->
";
        // line 198
        if (($context["is_front"] ?? null)) {
            echo "  
  ";
            // line 199
            if ((($this->getAttribute(($context["page"] ?? null), "topwidget_left", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_middle", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_right", []))) {
                // line 200
                echo "    <div class=\"topwidget\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">

          <!-- Top widget left region -->
          
          ";
                // line 208
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_left", [])) {
                    // line 209
                    echo "            <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">
              ";
                    // line 210
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_left", [])), "html", null, true);
                    echo "
            </div>
          ";
                }
                // line 213
                echo "          
          <!-- End top widget left region -->\t\t  
          <!-- Top widget middle region -->
          
          ";
                // line 217
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_middle", [])) {
                    // line 218
                    echo "            <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">
              ";
                    // line 219
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_middle", [])), "html", null, true);
                    echo "
            </div>
          ";
                }
                // line 222
                echo "          
          <!-- End top widget middle region -->
          <!-- Top widget right region -->
          
          ";
                // line 226
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_right", [])) {
                    // line 227
                    echo "            <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">
              ";
                    // line 228
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_right", [])), "html", null, true);
                    echo "
            </div>
          ";
                }
                // line 231
                echo "          
          <!-- End top widget right region -->
        </div>
      </div>
    </div>
  ";
            }
        }
        // line 238
        echo "<!--End Top Widget -->


<!-- Page Title -->
";
        // line 242
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 243
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container-fluid\">
        ";
            // line 247
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 252
        echo "<!-- End Page Title -->


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container-fluid\">
    
    <!--Start Content Top-->
    ";
        // line 261
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 262
            echo "    <div class=\"content-top\">
        <div class=\"row\">
\t\t  <div class=\"col-md-12\">
            ";
            // line 265
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
\t\t  </div>
        </div>
\t</div>
    ";
        }
        // line 270
        echo "    <!--End Content Top-->
    
    <!--start:Breadcrumbs -->
\t";
        // line 273
        if ( !($context["is_front"] ?? null)) {
            // line 274
            echo "    <div class=\"row\">
      <div class=\"col-md-12\">";
            // line 275
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "</div>
    </div>
\t";
        }
        // line 278
        echo "    <!--End Breadcrumbs-->
\t
    <div class=\"row layout\">
      <!--- Start Left Sidebar -->
      ";
        // line 282
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 283
            echo "          <div class = \"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo " sidebar-first\">
            ";
            // line 284
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
          </div>
      ";
        }
        // line 287
        echo "      <!---End Left Sidebar -->

      <!--- Start content -->
      ";
        // line 290
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 291
            echo "          <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo " content-layout\">
            <div>
             <ul>
             \t<li>
             \t";
            // line 295
            if ((($context["lang"] ?? null) == "en")) {
                echo "\t
             \t\t<a href=\"/multty/user/";
                // line 296
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["username"] ?? null)), "html", null, true);
                echo "/edit\">View・Update Account Information</a>
             \t\t<p>You can check and update your account information, such as username and password.</p>
             \t";
            } elseif ((            // line 298
($context["lang"] ?? null) == "ja")) {
                // line 299
                echo "             \t \t<a href=\"/multty/user/";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["username"] ?? null)), "html", null, true);
                echo "/edit\">会員情報の確認・変更</a>
             \t\t<p>ユーザー名やパスワードなどのアカウント情報を確認および更新できます。</p>
             \t";
            } elseif ((            // line 301
($context["lang"] ?? null) == "zh-hant")) {
                // line 302
                echo "             \t \t <a href=\"/multty/user/";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["username"] ?? null)), "html", null, true);
                echo "/edit\">確認/更改會員信息</a>
             \t\t<p>您可以查看和更新您的帳戶信息，例如用戶名和密碼。</p>
             \t";
            } elseif ((            // line 304
($context["lang"] ?? null) == "zh-hans")) {
                // line 305
                echo "             \t \t <a href=\"/multty/user/";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["username"] ?? null)), "html", null, true);
                echo "/edit\">确认/更改会员信息</a>
             \t\t<p>您可以查看和更新您的帐户信息，例如用户名和密码。</p>
             \t";
            }
            // line 308
            echo "             \t</li>
            \t<li>
            \t";
            // line 310
            if ((($context["lang"] ?? null) == "en")) {
                // line 311
                echo "            \t\t<a href=\"/multty/user/";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["username"] ?? null)), "html", null, true);
                echo "/address-book\">Address List</a>
            \t\t<p>You can check and update the address you have saved during checkout. You may also register new address as well.</p>
             \t";
            } elseif ((            // line 313
($context["lang"] ?? null) == "ja")) {
                // line 314
                echo "            \t\t<a href=\"/multty/user/";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["username"] ?? null)), "html", null, true);
                echo "/address-book\">アドレス帳</a>
            \t\t<p>チェックアウト中に保存したアドレスを確認および更新できます。新しい住所を登録することもできます。</p>
             \t";
            } elseif ((            // line 316
($context["lang"] ?? null) == "zh-hant")) {
                // line 317
                echo "             \t\t<a href=\"/multty/user/";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["username"] ?? null)), "html", null, true);
                echo "/address-book\">地址列表</a>
            \t\t<p>您可以檢查並更新結帳時保存的地址。您也可以註冊新地址。</p>
            \t";
            } elseif ((            // line 319
($context["lang"] ?? null) == "zh-hans")) {
                // line 320
                echo "            \t\t<a href=\"/multty/user/";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["username"] ?? null)), "html", null, true);
                echo "/address-book\">地址列表</a>
            \t\t<p>您可以检查并更新结帐时保存的地址。您也可以注册新地址。</p>\t\t
            \t";
            }
            // line 323
            echo "            \t</li>
            \t<li>
             \t";
            // line 325
            if ((($context["lang"] ?? null) == "en")) {
                echo "\t
             \t\t<a href=\"#\">Mail Magazine Subscribe / Unsubscribe</a>
                <p>You can change email magazine registration and stop delivery.</p>
             \t";
            } elseif ((            // line 328
($context["lang"] ?? null) == "ja")) {
                // line 329
                echo "             \t\t<a href=\"#\">メールマガジンの購読/購読解除</a>
                <p>メールマガジンの登録変更・配信停止の設定ができます。</p>
             \t";
            } elseif ((            // line 331
($context["lang"] ?? null) == "zh-hant")) {
                // line 332
                echo "             \t\t<a href=\"#\">郵件雜誌訂閱/取消訂閱</a>
                <p>您可以更改電子郵件雜誌註冊並停止發送。</p>
             \t";
            } elseif ((            // line 334
($context["lang"] ?? null) == "zh-hans")) {
                // line 335
                echo "            \t \t<a href=\"#\">邮件杂志订阅/取消订阅</a>
                <p>您可以更改电子邮件杂志注册并停止发送。</p>
             \t";
            }
            // line 338
            echo "            \t</li>
            \t<li>
            \t";
            // line 340
            if ((($context["lang"] ?? null) == "en")) {
                // line 341
                echo "            \t\t<a href=\"/multty/user/";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["username"] ?? null)), "html", null, true);
                echo "/orders\">Order History</a>
            \t\t<p>You can check the products you have purchased.</p>
            \t";
            } elseif ((            // line 343
($context["lang"] ?? null) == "ja")) {
                // line 344
                echo "            \t\t<a href=\"/multty/user/";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["username"] ?? null)), "html", null, true);
                echo "/orders\">注文履歴</a>
            \t\t<p>ご購入頂いた商品を確認できます。</p>
            \t";
            } elseif ((            // line 346
($context["lang"] ?? null) == "zh-hant")) {
                // line 347
                echo "            \t\t<a href=\"/multty/user/";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["username"] ?? null)), "html", null, true);
                echo "/orders\">訂單歷史</a>
            \t\t<p>您可以查看您購買的產品。</p>
            \t";
            } elseif ((            // line 349
($context["lang"] ?? null) == "zh-hans")) {
                // line 350
                echo "            \t\t<a href=\"/multty/user/";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["username"] ?? null)), "html", null, true);
                echo "/orders\">订单历史</a>
            \t\t<p>您可以查看您购买的产品。</p>
            \t";
            }
            // line 353
            echo "            \t</li>
              <li>
              ";
            // line 355
            if ((($context["lang"] ?? null) == "en")) {
                echo "\t
                <a href=\"/multty/user/";
                // line 356
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["username"] ?? null)), "html", null, true);
                echo "/wishlists\">Favorites</a>
                <p>You can check and delete bookmarked favorite products.</p>
              ";
            } elseif ((            // line 358
($context["lang"] ?? null) == "ja")) {
                // line 359
                echo "                <a href=\"/multty/user/";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["username"] ?? null)), "html", null, true);
                echo "/wishlists\">お気に入り商品</a>
                <p>ブックマークしたお気に入り商品の確認・削除ができます。</p>
              ";
            } elseif ((            // line 361
($context["lang"] ?? null) == "zh-hant")) {
                // line 362
                echo "                <a href=\"/multty/user/";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["username"] ?? null)), "html", null, true);
                echo "/wishlists\">喜歡的產品</a>
                <p>您可以查看和刪除已添加書籤的產品。</p>
              ";
            } elseif ((            // line 364
($context["lang"] ?? null) == "zh-hans")) {
                // line 365
                echo "                  <a href=\"/multty/user/";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["username"] ?? null)), "html", null, true);
                echo "/wishlists\">喜欢的产品</a>
                  <p>您可以查看和删除已添加书签的产品。</p>
              ";
            }
            // line 368
            echo "              </li>
            \t<li>
             \t";
            // line 370
            if ((($context["lang"] ?? null) == "en")) {
                echo "\t
             \t\t<a href=\"/multty/user/";
                // line 371
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["username"] ?? null)), "html", null, true);
                echo "/points\">Point History</a>
                <p>You can check the history of points you have earned.</p>
             \t";
            } elseif ((            // line 373
($context["lang"] ?? null) == "ja")) {
                // line 374
                echo "             \t\t<a href=\"/multty/user/";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["username"] ?? null)), "html", null, true);
                echo "/points\">ポイント履歴</a>
                <p>獲得したポイントの履歴が確認できます。</p>
             \t";
            } elseif ((            // line 376
($context["lang"] ?? null) == "zh-hant")) {
                // line 377
                echo "             \t\t<a href=\"/multty/user/";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["username"] ?? null)), "html", null, true);
                echo "/points\">點歷史</a>
                <p>您可以查看獲得積分的歷史記錄。</p>
             \t";
            } elseif ((            // line 379
($context["lang"] ?? null) == "zh-hans")) {
                // line 380
                echo "              \t\t<a href=\"/multty/user/";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["username"] ?? null)), "html", null, true);
                echo "/points\">点历史</a>
                  <p>您可以查看获得积分的历史记录。</p>
             \t";
            }
            // line 383
            echo "            \t</li>
            \t<li>
             \t";
            // line 385
            if ((($context["lang"] ?? null) == "en")) {
                echo "\t
             \t\t<a href=\"/multty/user/";
                // line 386
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["username"] ?? null)), "html", null, true);
                echo "/deactivate\">Deactivate Account</a>
                <p>You can deactivate / cancel your membership. All services will be unavailable and all points will be invalid.</p>
             \t";
            } elseif ((            // line 388
($context["lang"] ?? null) == "ja")) {
                // line 389
                echo "             \t\t<a href=\"/multty/user/";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["username"] ?? null)), "html", null, true);
                echo "/deactivate\">アカウントを無効化</a>
                <p>退会手続を行います。すべてのサービスがご利用いただけなくなり、 ポイントもすべて無効となります。</p>
             \t";
            } elseif ((            // line 391
($context["lang"] ?? null) == "zh-hant")) {
                // line 392
                echo "            \t\t<a href=\"/multty/user/";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["username"] ?? null)), "html", null, true);
                echo "/deactivate\">關閉戶口</a>
                <p>我們將取消您的會員資格。 所有服務都將無法使用，所有積分都將無效。</p>
             \t";
            } elseif ((            // line 394
($context["lang"] ?? null) == "zh-hans")) {
                // line 395
                echo "            \t\t<a href=\"/multty/user/";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["username"] ?? null)), "html", null, true);
                echo "/deactivate\">关闭户口</a>
                <p>我们将取消您的会员资格。 所有服务都将无法使用，所有积分都将无效。</p>
             \t";
            }
            // line 398
            echo "            \t</li>
            \t<li>
            \t";
            // line 400
            if ((($context["lang"] ?? null) == "en")) {
                echo "\t
            \t \t<a href=\"/multty/user/logout\">Log out</a></li>
            \t";
            } elseif ((            // line 402
($context["lang"] ?? null) == "ja")) {
                echo "\t \t
            \t \t<a href=\"/multty/user/logout\">ログアウト</a></li>
             \t";
            } elseif ((            // line 404
($context["lang"] ?? null) == "zh-hant")) {
                // line 405
                echo "            \t \t<a href=\"/multty/user/logout\">登出</a></li>
             \t";
            } elseif ((            // line 406
($context["lang"] ?? null) == "zh-hans")) {
                // line 407
                echo "            \t \t<a href=\"/multty/user/logout\">登出</a></li>
             \t";
            }
            // line 409
            echo "             </ul>
            </div>
            </div>
        ";
        }
        // line 413
        echo "        <!---End content -->

        <!--- Start Right Sidebar -->
        ";
        // line 416
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 417
            echo "            <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo " sidebar-second\">
              ";
            // line 418
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
            </div>

        ";
        }
        // line 422
        echo "        <!---End Right Sidebar -->
        
      </div>
      <!--End Content -->

      <!--Start Content Bottom-->
      ";
        // line 428
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", [])) {
            // line 429
            echo "      <div class=\"content-bottom\">
          <div class=\"row\">
  \t\t  <div class=\"col-md-12\">
              ";
            // line 432
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom", [])), "html", null, true);
            echo "
  \t\t  </div>
          </div>
  \t</div>
      ";
        }
        // line 437
        echo "      <!--End Content Bottom-->
    </div>
  </div>
  <!-- End layout -->

  <!-- Start Footer -->
    ";
        // line 443
        if (((($this->getAttribute(($context["page"] ?? null), "footer_top_one", []) || $this->getAttribute(($context["page"] ?? null), "footer_top_two", [])) || $this->getAttribute(($context["page"] ?? null), "footer_top_three", [])) || $this->getAttribute(($context["page"] ?? null), "footer_top_four", []))) {
            // line 444
            echo "      <div class=\"footer-widgets\">
        <!-- Start Container -->
        <div class=\"container\">
          
          <div class=\"row\">

            <!-- Start Footer Top One Region -->
            
            ";
            // line 452
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_one", [])) {
                // line 453
                echo "              <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_class"] ?? null)), "html", null, true);
                echo ">
                ";
                // line 454
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_one", [])), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 457
            echo "            
            <!-- End Footer Top One Region -->

            <!-- Start Footer Top Two Region -->
            ";
            // line 461
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_two", [])) {
                // line 462
                echo "              <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_class"] ?? null)), "html", null, true);
                echo ">
                ";
                // line 463
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_two", [])), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 466
            echo "            
            <!-- End Footer Top Two Region -->

            <!-- Start Footer Top Three Region -->
            
            ";
            // line 471
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_three", [])) {
                // line 472
                echo "              <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_class"] ?? null)), "html", null, true);
                echo ">
                ";
                // line 473
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_three", [])), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 476
            echo "            
            <!-- End Footer Top Three Region -->
  \t\t  
  \t\t  <!-- Start Footer Top Four Region -->

            ";
            // line 481
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_four", [])) {
                // line 482
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 483
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_four", [])), "html", null, true);
                echo "
            </div>
            ";
            }
            // line 486
            echo "  \t\t  
  \t\t  <!-- End Footer Top Four Region -->

          </div>
        </div>
      </div>
    ";
        }
        // line 493
        echo "    <!-- Footer Region-->
    ";
        // line 494
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 495
            echo "      <div class=\"footer-space\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 499
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
            </div>
        </div>
        </div>
  \t</div>
    ";
        }
        // line 505
        echo "    <!-- End Footer Region-->
  <!--End Footer -->

  <!-- Start Footer Ribbon -->
  ";
        // line 509
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", [])) {
            // line 510
            echo "    <div class=\"footer-ribbon\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
            // line 514
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_menu", [])), "html", null, true);
            echo "
          </div>
          ";
            // line 516
            if (($context["show_social_icon"] ?? null)) {
                // line 517
                echo "          <div class=\"col-sm-6\">
            <div class=\"social-media\">
              ";
                // line 519
                if (($context["facebook_url"] ?? null)) {
                    // line 520
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                    echo "\" class=\"icon-facebook\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>
              ";
                }
                // line 522
                echo "              ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 523
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
                    echo "\" class=\"icon-gplus\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Google+\"><i class=\"fa fa-google-plus\"></i></a>
              ";
                }
                // line 525
                echo "              ";
                if (($context["twitter_url"] ?? null)) {
                    // line 526
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                    echo "\" class=\"icon-twitter\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>
              ";
                }
                // line 528
                echo "              ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 529
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                    echo "\" class=\"icon-linkedin\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"LinkedIn\"><i class=\"fa fa-linkedin\"></i></a>
              ";
                }
                // line 531
                echo "              ";
                if (($context["ytube_url"] ?? null)) {
                    // line 532
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["ytube_url"] ?? null)), "html", null, true);
                    echo "\" class=\"icon-youtube\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"YouTube\"><i class=\"fa fa-youtube-play\"></i></a>
              ";
                }
                // line 534
                echo "            </div>
          </div>
          ";
            }
            // line 537
            echo "        </div>
      </div>
    </div>
  ";
        }
        // line 541
        echo "  <!-- End Footer Ribbon -->


  <!-- #footer-bottom -->
  <div id=\"footer-bottom\">
      <div class=\"container\">
           <div class=\"row\">
  \t\t <hr class=\"style-mint\">
           <div id=\"toTop\" class=\"col-md-12\">
            <a class=\"scrollUp\"><i class=\"fa fa-angle-up\"></i></a>
           </div>
          </div>
          <div class=\"row\">
          <div class=\"col-md-12 copy_credit\">
          <p class=\"copyright\">Copyright &copy; ";
        // line 555
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved</p>
          ";
        // line 556
        if (($context["show_credit_link"] ?? null)) {
            // line 557
            echo "            <p class=\"credit\">Theme for <a href=\"https://www.drupal.org/8\" target=\"_blank\">Drupal 8</a></p>
          ";
        }
        // line 559
        echo "          </div>
  \t\t</div>
      </div>
  </div>
  <!-- #footer-bottom ends here -->
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_mint/templates/views/page--mypage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  993 => 559,  989 => 557,  987 => 556,  983 => 555,  967 => 541,  961 => 537,  956 => 534,  950 => 532,  947 => 531,  941 => 529,  938 => 528,  932 => 526,  929 => 525,  923 => 523,  920 => 522,  914 => 520,  912 => 519,  908 => 517,  906 => 516,  901 => 514,  895 => 510,  893 => 509,  887 => 505,  878 => 499,  872 => 495,  870 => 494,  867 => 493,  858 => 486,  852 => 483,  847 => 482,  845 => 481,  838 => 476,  832 => 473,  827 => 472,  825 => 471,  818 => 466,  812 => 463,  807 => 462,  805 => 461,  799 => 457,  793 => 454,  788 => 453,  786 => 452,  776 => 444,  774 => 443,  766 => 437,  758 => 432,  753 => 429,  751 => 428,  743 => 422,  736 => 418,  731 => 417,  729 => 416,  724 => 413,  718 => 409,  714 => 407,  712 => 406,  709 => 405,  707 => 404,  702 => 402,  697 => 400,  693 => 398,  686 => 395,  684 => 394,  678 => 392,  676 => 391,  670 => 389,  668 => 388,  663 => 386,  659 => 385,  655 => 383,  648 => 380,  646 => 379,  640 => 377,  638 => 376,  632 => 374,  630 => 373,  625 => 371,  621 => 370,  617 => 368,  610 => 365,  608 => 364,  602 => 362,  600 => 361,  594 => 359,  592 => 358,  587 => 356,  583 => 355,  579 => 353,  572 => 350,  570 => 349,  564 => 347,  562 => 346,  556 => 344,  554 => 343,  548 => 341,  546 => 340,  542 => 338,  537 => 335,  535 => 334,  531 => 332,  529 => 331,  525 => 329,  523 => 328,  517 => 325,  513 => 323,  506 => 320,  504 => 319,  498 => 317,  496 => 316,  490 => 314,  488 => 313,  482 => 311,  480 => 310,  476 => 308,  469 => 305,  467 => 304,  461 => 302,  459 => 301,  453 => 299,  451 => 298,  446 => 296,  442 => 295,  434 => 291,  432 => 290,  427 => 287,  421 => 284,  416 => 283,  414 => 282,  408 => 278,  402 => 275,  399 => 274,  397 => 273,  392 => 270,  384 => 265,  379 => 262,  377 => 261,  366 => 252,  358 => 247,  352 => 243,  350 => 242,  344 => 238,  335 => 231,  329 => 228,  324 => 227,  322 => 226,  316 => 222,  310 => 219,  305 => 218,  303 => 217,  297 => 213,  291 => 210,  286 => 209,  284 => 208,  274 => 200,  272 => 199,  268 => 198,  263 => 195,  255 => 190,  250 => 187,  248 => 186,  243 => 183,  235 => 178,  230 => 175,  228 => 174,  222 => 170,  214 => 165,  209 => 162,  207 => 161,  201 => 157,  195 => 155,  193 => 154,  184 => 147,  176 => 142,  169 => 138,  158 => 129,  152 => 128,  150 => 127,  144 => 123,  138 => 121,  136 => 120,  123 => 109,  109 => 97,  103 => 94,  98 => 93,  96 => 92,  90 => 88,  84 => 85,  79 => 84,  77 => 83,  66 => 74,  63 => 73,  61 => 72,  55 => 68,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Bootstrap Mint's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.sliding_header_one: Items for the Sliding Header Left region.
 * - page.sliding_header_two: Items for the Sliding Header Right region.
 * - page.header: Items for the Header region.
 * - page.primary_menu: Items for the Primary Menu navigation region.
 * - page.page_title: Region for the current page title.
 * - page.slideshow: Items for the Slideshow region.
 * - page.promo: Items for the promo region.
 * - page.highlighted: Items for the Highlighted region.
 * - page.topwidget_left: Items for the Top Widget - Left region.
 * - page.topwidget_middle: Items for the Top Widget - Middle region.
 * - page.topwidget_right: Items for the Top Widget - Right region.
 * - page.content_top: Items for the Content Top region.
 * - page.help: Items for the Help region.
 * - page.breadcrumb: Items for the Breadcrumb region.
 * - page.search: The search region.
 * - page.content: Main content of the current page.
 * - page.sidebar_first: Items for the Left sidebar region.
 * - page.sidebar_second: Items for the Right sidebar region.
 * - page.content_bottom: Items for the Content Bottom region.
 * - page.footer_top_one: Items for the Footer Top Widget - One region.
 * - page.footer_top_two: Items for the Footer Top Widget - Two region.
 * - page.footer_top_three: Items for the Footer Top Widget - Three region.
 * - page.footer_top_four: Items for the Footer Top Widget - Four region.
 * - page.footer: Items for the Footer region.
 * - page.footer_menu: Items for the Footer Menu region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}

<!-- Header and Navbar -->
<header class=\"main-header\">
<!-- Sliding Header Widget -->
{% if is_front %}
  {% if page.sliding_header_one or page.sliding_header_two %}
    <div class=\"slidewidget\">
\t<div class=\"wrapper\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">
          <div id=\"sliding-header-wrap\">
          <!-- Slide first region -->
          
          {% if page.sliding_header_one %}
            <div class = {{ slidewidget_first }}>
              {{ page.sliding_header_one }}
            </div>
          {% endif %}
          
          <!-- End slide first region -->
          <!-- Slide second region -->
          
          {% if page.sliding_header_two %}
            <div class = {{ slidewidget_class }}>
              {{ page.sliding_header_two }}
            </div>
          {% endif %}
          
          <!-- End slide second region -->
          
\t\t  </div>
        </div>
      </div>
\t  <!-- end: Container -->
\t  </div>
\t  <div class=\"toggle-switch\"><div class=\"fa fa-gear fa-spin\"></div></div>
    </div>
  {% endif %}
{% endif %}
<!--Sliding Header Widget -->
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">
      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        {% if page.header %}
          {{ page.header }}
        {% endif %}
      </div>

      <!-- Navigation -->
      <div class=\"col-md-9\">
        {% if page.primary_menu %}
          {{ page.primary_menu }}
        {% endif %}      
      </div>
      <!--End Navigation -->

      </div>
    </div>
  </nav>

  <!-- Banner -->
  {% if is_front and page.slideshow %}  
    <div class=\"container slideshow\">
      <div class=\"row\">
        <div class=\"col-md-12\">
            {{ page.slideshow }}
        </div>
      </div>
    </div>
  {% endif %}
  <!-- End Banner -->

</header>
<!--End Header & Navbar -->


<!--Search-->
  {% if is_front and page.search %}
    {{ page.search }}
  {% endif %}
<!--End Search-->


<!--Home page banner-->
  {% if is_front and page.promo %}
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          {{ page.promo }}
        </div>
      </div>
    </div>
  {% endif %}
<!--End Home page banner-->


<!--Highlighted-->
  {% if page.highlighted %}
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          {{ page.highlighted }}
        </div>
      </div>
    </div>
  {% endif %}
<!--End Highlighted-->

<!--Help-->
  {% if page.help %}
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          {{ page.help }}
        </div>
      </div>
    </div>
  {% endif %}
<!--End Help-->

<!-- Start Top Widget -->
{% if is_front %}  
  {% if page.topwidget_left or page.topwidget_middle or page.topwidget_right %}
    <div class=\"topwidget\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">

          <!-- Top widget left region -->
          
          {% if page.topwidget_left %}
            <div class = {{ topwidget_class }}>
              {{ page.topwidget_left }}
            </div>
          {% endif %}
          
          <!-- End top widget left region -->\t\t  
          <!-- Top widget middle region -->
          
          {% if page.topwidget_middle %}
            <div class = {{ topwidget_class }}>
              {{ page.topwidget_middle }}
            </div>
          {% endif %}
          
          <!-- End top widget middle region -->
          <!-- Top widget right region -->
          
          {% if page.topwidget_right %}
            <div class = {{ topwidget_class }}>
              {{ page.topwidget_right }}
            </div>
          {% endif %}
          
          <!-- End top widget right region -->
        </div>
      </div>
    </div>
  {% endif %}
{% endif %}
<!--End Top Widget -->


<!-- Page Title -->
{%  if page.page_title and not is_front %}
  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container-fluid\">
        {{ page.page_title }}
      </div>
    </div>
  </div>
{% endif %}
<!-- End Page Title -->


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container-fluid\">
    
    <!--Start Content Top-->
    {% if page.content_top %}
    <div class=\"content-top\">
        <div class=\"row\">
\t\t  <div class=\"col-md-12\">
            {{ page.content_top }}
\t\t  </div>
        </div>
\t</div>
    {% endif %}
    <!--End Content Top-->
    
    <!--start:Breadcrumbs -->
\t{%  if not is_front %}
    <div class=\"row\">
      <div class=\"col-md-12\">{{ page.breadcrumb }}</div>
    </div>
\t{% endif %}
    <!--End Breadcrumbs-->
\t
    <div class=\"row layout\">
      <!--- Start Left Sidebar -->
      {% if page.sidebar_first %}
          <div class = \"{{sidebarfirst}} sidebar-first\">
            {{ page.sidebar_first }}
          </div>
      {% endif %}
      <!---End Left Sidebar -->

      <!--- Start content -->
      {% if page.content %}
          <div class=\"{{contentlayout}} content-layout\">
            <div>
             <ul>
             \t<li>
             \t{% if lang == 'en' %}\t
             \t\t<a href=\"/multty/user/{{ username }}/edit\">View・Update Account Information</a>
             \t\t<p>You can check and update your account information, such as username and password.</p>
             \t{% elseif lang == 'ja' %}
             \t \t<a href=\"/multty/user/{{ username }}/edit\">会員情報の確認・変更</a>
             \t\t<p>ユーザー名やパスワードなどのアカウント情報を確認および更新できます。</p>
             \t{% elseif lang == 'zh-hant' %}
             \t \t <a href=\"/multty/user/{{ username }}/edit\">確認/更改會員信息</a>
             \t\t<p>您可以查看和更新您的帳戶信息，例如用戶名和密碼。</p>
             \t{% elseif lang == 'zh-hans' %}
             \t \t <a href=\"/multty/user/{{ username }}/edit\">确认/更改会员信息</a>
             \t\t<p>您可以查看和更新您的帐户信息，例如用户名和密码。</p>
             \t{% endif %}
             \t</li>
            \t<li>
            \t{% if lang == 'en' %}
            \t\t<a href=\"/multty/user/{{ username }}/address-book\">Address List</a>
            \t\t<p>You can check and update the address you have saved during checkout. You may also register new address as well.</p>
             \t{% elseif lang == 'ja' %}
            \t\t<a href=\"/multty/user/{{ username }}/address-book\">アドレス帳</a>
            \t\t<p>チェックアウト中に保存したアドレスを確認および更新できます。新しい住所を登録することもできます。</p>
             \t{% elseif lang == 'zh-hant' %}
             \t\t<a href=\"/multty/user/{{ username }}/address-book\">地址列表</a>
            \t\t<p>您可以檢查並更新結帳時保存的地址。您也可以註冊新地址。</p>
            \t{% elseif lang == 'zh-hans' %}
            \t\t<a href=\"/multty/user/{{ username }}/address-book\">地址列表</a>
            \t\t<p>您可以检查并更新结帐时保存的地址。您也可以注册新地址。</p>\t\t
            \t{% endif %}
            \t</li>
            \t<li>
             \t{% if lang == 'en' %}\t
             \t\t<a href=\"#\">Mail Magazine Subscribe / Unsubscribe</a>
                <p>You can change email magazine registration and stop delivery.</p>
             \t{% elseif lang == 'ja' %}
             \t\t<a href=\"#\">メールマガジンの購読/購読解除</a>
                <p>メールマガジンの登録変更・配信停止の設定ができます。</p>
             \t{% elseif lang == 'zh-hant' %}
             \t\t<a href=\"#\">郵件雜誌訂閱/取消訂閱</a>
                <p>您可以更改電子郵件雜誌註冊並停止發送。</p>
             \t{% elseif lang == 'zh-hans' %}
            \t \t<a href=\"#\">邮件杂志订阅/取消订阅</a>
                <p>您可以更改电子邮件杂志注册并停止发送。</p>
             \t{% endif %}
            \t</li>
            \t<li>
            \t{% if lang == 'en' %}
            \t\t<a href=\"/multty/user/{{ username }}/orders\">Order History</a>
            \t\t<p>You can check the products you have purchased.</p>
            \t{% elseif lang == 'ja' %}
            \t\t<a href=\"/multty/user/{{ username }}/orders\">注文履歴</a>
            \t\t<p>ご購入頂いた商品を確認できます。</p>
            \t{% elseif lang == 'zh-hant' %}
            \t\t<a href=\"/multty/user/{{ username }}/orders\">訂單歷史</a>
            \t\t<p>您可以查看您購買的產品。</p>
            \t{% elseif lang == 'zh-hans' %}
            \t\t<a href=\"/multty/user/{{ username }}/orders\">订单历史</a>
            \t\t<p>您可以查看您购买的产品。</p>
            \t{% endif %}
            \t</li>
              <li>
              {% if lang == 'en' %}\t
                <a href=\"/multty/user/{{ username }}/wishlists\">Favorites</a>
                <p>You can check and delete bookmarked favorite products.</p>
              {% elseif lang == 'ja' %}
                <a href=\"/multty/user/{{ username }}/wishlists\">お気に入り商品</a>
                <p>ブックマークしたお気に入り商品の確認・削除ができます。</p>
              {% elseif lang == 'zh-hant' %}
                <a href=\"/multty/user/{{ username }}/wishlists\">喜歡的產品</a>
                <p>您可以查看和刪除已添加書籤的產品。</p>
              {% elseif lang == 'zh-hans' %}
                  <a href=\"/multty/user/{{ username }}/wishlists\">喜欢的产品</a>
                  <p>您可以查看和删除已添加书签的产品。</p>
              {% endif %}
              </li>
            \t<li>
             \t{% if lang == 'en' %}\t
             \t\t<a href=\"/multty/user/{{ username }}/points\">Point History</a>
                <p>You can check the history of points you have earned.</p>
             \t{% elseif lang == 'ja' %}
             \t\t<a href=\"/multty/user/{{ username }}/points\">ポイント履歴</a>
                <p>獲得したポイントの履歴が確認できます。</p>
             \t{% elseif lang == 'zh-hant' %}
             \t\t<a href=\"/multty/user/{{ username }}/points\">點歷史</a>
                <p>您可以查看獲得積分的歷史記錄。</p>
             \t{% elseif lang == 'zh-hans' %}
              \t\t<a href=\"/multty/user/{{ username }}/points\">点历史</a>
                  <p>您可以查看获得积分的历史记录。</p>
             \t{% endif %}
            \t</li>
            \t<li>
             \t{% if lang == 'en' %}\t
             \t\t<a href=\"/multty/user/{{ username }}/deactivate\">Deactivate Account</a>
                <p>You can deactivate / cancel your membership. All services will be unavailable and all points will be invalid.</p>
             \t{% elseif lang == 'ja' %}
             \t\t<a href=\"/multty/user/{{ username }}/deactivate\">アカウントを無効化</a>
                <p>退会手続を行います。すべてのサービスがご利用いただけなくなり、 ポイントもすべて無効となります。</p>
             \t{% elseif lang == 'zh-hant' %}
            \t\t<a href=\"/multty/user/{{ username }}/deactivate\">關閉戶口</a>
                <p>我們將取消您的會員資格。 所有服務都將無法使用，所有積分都將無效。</p>
             \t{% elseif lang == 'zh-hans' %}
            \t\t<a href=\"/multty/user/{{ username }}/deactivate\">关闭户口</a>
                <p>我们将取消您的会员资格。 所有服务都将无法使用，所有积分都将无效。</p>
             \t{% endif %}
            \t</li>
            \t<li>
            \t{% if lang == 'en' %}\t
            \t \t<a href=\"/multty/user/logout\">Log out</a></li>
            \t{% elseif lang == 'ja' %}\t \t
            \t \t<a href=\"/multty/user/logout\">ログアウト</a></li>
             \t{% elseif lang == 'zh-hant' %}
            \t \t<a href=\"/multty/user/logout\">登出</a></li>
             \t{% elseif lang == 'zh-hans' %}
            \t \t<a href=\"/multty/user/logout\">登出</a></li>
             \t{% endif %}
             </ul>
            </div>
            </div>
        {% endif %}
        <!---End content -->

        <!--- Start Right Sidebar -->
        {% if page.sidebar_second %}
            <div class=\"{{sidebarsecond}} sidebar-second\">
              {{ page.sidebar_second }}
            </div>

        {% endif %}
        <!---End Right Sidebar -->
        
      </div>
      <!--End Content -->

      <!--Start Content Bottom-->
      {% if page.content_bottom %}
      <div class=\"content-bottom\">
          <div class=\"row\">
  \t\t  <div class=\"col-md-12\">
              {{ page.content_bottom }}
  \t\t  </div>
          </div>
  \t</div>
      {% endif %}
      <!--End Content Bottom-->
    </div>
  </div>
  <!-- End layout -->

  <!-- Start Footer -->
    {% if page.footer_top_one or page.footer_top_two or page.footer_top_three or page.footer_top_four %}
      <div class=\"footer-widgets\">
        <!-- Start Container -->
        <div class=\"container\">
          
          <div class=\"row\">

            <!-- Start Footer Top One Region -->
            
            {% if page.footer_top_one %}
              <div class = {{ footer_top_class }}>
                {{ page.footer_top_one }}
              </div>
            {% endif %}
            
            <!-- End Footer Top One Region -->

            <!-- Start Footer Top Two Region -->
            {% if page.footer_top_two %}
              <div class = {{ footer_top_class }}>
                {{ page.footer_top_two }}
              </div>
            {% endif %}
            
            <!-- End Footer Top Two Region -->

            <!-- Start Footer Top Three Region -->
            
            {% if page.footer_top_three %}
              <div class = {{ footer_top_class }}>
                {{ page.footer_top_three }}
              </div>
            {% endif %}
            
            <!-- End Footer Top Three Region -->
  \t\t  
  \t\t  <!-- Start Footer Top Four Region -->

            {% if page.footer_top_four %}
            <div class = {{ footer_top_class }}>
              {{ page.footer_top_four }}
            </div>
            {% endif %}
  \t\t  
  \t\t  <!-- End Footer Top Four Region -->

          </div>
        </div>
      </div>
    {% endif %}
    <!-- Footer Region-->
    {% if page.footer %}
      <div class=\"footer-space\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ page.footer }}
            </div>
        </div>
        </div>
  \t</div>
    {% endif %}
    <!-- End Footer Region-->
  <!--End Footer -->

  <!-- Start Footer Ribbon -->
  {% if page.footer_menu %}
    <div class=\"footer-ribbon\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-6\">
            {{ page.footer_menu }}
          </div>
          {% if show_social_icon %}
          <div class=\"col-sm-6\">
            <div class=\"social-media\">
              {% if facebook_url %}
                <a href=\"{{ facebook_url }}\" class=\"icon-facebook\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>
              {% endif %}
              {% if google_plus_url %}
                <a href=\"{{ google_plus_url }}\" class=\"icon-gplus\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Google+\"><i class=\"fa fa-google-plus\"></i></a>
              {% endif %}
              {% if twitter_url %}
                <a href=\"{{ twitter_url }}\" class=\"icon-twitter\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>
              {% endif %}
              {% if linkedin_url %}
                <a href=\"{{ linkedin_url }}\" class=\"icon-linkedin\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"LinkedIn\"><i class=\"fa fa-linkedin\"></i></a>
              {% endif %}
              {% if ytube_url %}
                <a href=\"{{ ytube_url }}\" class=\"icon-youtube\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"YouTube\"><i class=\"fa fa-youtube-play\"></i></a>
              {% endif %}
            </div>
          </div>
          {% endif %}
        </div>
      </div>
    </div>
  {% endif %}
  <!-- End Footer Ribbon -->


  <!-- #footer-bottom -->
  <div id=\"footer-bottom\">
      <div class=\"container\">
           <div class=\"row\">
  \t\t <hr class=\"style-mint\">
           <div id=\"toTop\" class=\"col-md-12\">
            <a class=\"scrollUp\"><i class=\"fa fa-angle-up\"></i></a>
           </div>
          </div>
          <div class=\"row\">
          <div class=\"col-md-12 copy_credit\">
          <p class=\"copyright\">Copyright &copy; {{ \"now\"|date(\"Y\") }}. All rights reserved</p>
          {% if show_credit_link %}
            <p class=\"credit\">Theme for <a href=\"https://www.drupal.org/8\" target=\"_blank\">Drupal 8</a></p>
          {% endif %}
          </div>
  \t\t</div>
      </div>
  </div>
  <!-- #footer-bottom ends here -->
", "themes/bootstrap_mint/templates/views/page--mypage.html.twig", "/home/acretweb/acret-ph.com/public_html/multty/themes/bootstrap_mint/templates/views/page--mypage.html.twig");
    }
}
