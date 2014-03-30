<?php

/* EmpruntBundle:Default:index.html.twig */
class __TwigTemplate_233b7faee703433eeccfefa216737b38a15823771d2c3c960e6c4675b595b5f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <title>Dashboard | BlueWhale Admin</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/css/reset.css"), "html", null, true);
        echo "\" media=\"screen\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/css/text.css"), "html", null, true);
        echo "\" media=\"screen\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/css/grid.css"), "html", null, true);
        echo "\" media=\"screen\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/css/layout.css"), "html", null, true);
        echo "\" media=\"screen\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/css/nav.css"), "html", null, true);
        echo "\" media=\"screen\" />
    <!--[if IE 6]><link rel=\"stylesheet\" type=\"text/css\" href=\"css/ie6.css\" media=\"screen\" /><![endif]-->
    <!--[if IE 7]><link rel=\"stylesheet\" type=\"text/css\" href=\"css/ie.css\" media=\"screen\" /><![endif]-->
    <!-- BEGIN: load jquery -->
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/js/jquery-1.6.4.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/js/jquery-ui/jquery.ui.core.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/js/jquery-ui/jquery.ui.widget.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/js/jquery-ui/jquery.ui.accordion.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/js/jquery-ui/jquery.effects.core.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/js/jquery-ui/jquery.effects.slide.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END: load jquery -->
    <!-- BEGIN: load jqplot -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/css/jquery.jqplot.min.css"), "html", null, true);
        echo "\" />
    <!--[if lt IE 9]><script language=\"javascript\" type=\"text/javascript\" src=\"js/jqPlot/excanvas.min.js\"></script><![endif]-->
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/js/jqPlot/jquery.jqplot.min.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/js/jqPlot/plugins/jqplot.barRenderer.min.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/js/jqPlot/plugins/jqplot.pieRenderer.min.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/js/jqPlot/plugins/jqplot.categoryAxisRenderer.min.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/js/jqPlot/plugins/jqplot.highlighter.min.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/js/jqPlot/plugins/jqplot.pointLabels.min.js"), "html", null, true);
        echo "\"></script>
    <!-- END: load jqplot -->
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/js/setup.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">

        \$(document).ready(function () {
            setupDashboardChart('chart1');
            setupLeftMenu();
\t\t\tsetSidebarHeight();


        });
    </script>
</head>
<body>
    <div class=\"container_12\">
        <div class=\"grid_12 header-repeat\">
            <div id=\"branding\">
                <div class=\"floatleft\">
                    <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" /></div>
                <div class=\"floatright\">
                    <div class=\"floatleft\">
                        <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/images/img-profile.jpg"), "html", null, true);
        echo "\" alt=\"Profile Pic\" /></div>
                    <div class=\"floatleft marginleft10\">
                        <ul class=\"inline-ul floatleft\">
                            <li>Hello Admin</li>
                            <li><a href=\"#\">Config</a></li>
                            <li><a href=\"#\">Logout</a></li>
                        </ul>
                        <br />
                        <span class=\"small grey\">Last Login: 3 hours ago</span>
                    </div>
                </div>
                <div class=\"clear\">
                </div>
            </div>
        </div>
        <div class=\"clear\">
        </div>
        <div class=\"grid_12\">
            <ul class=\"nav main\">
                <li class=\"ic-dashboard\"><a href=\"dashboard.html\"><span>Dashboard</span></a> </li>
                <li class=\"ic-form-style\"><a href=\"javascript:\"><span>Controls</span></a>
                    <ul>
                        <li><a href=\"form-controls.html\">Forms</a> </li>
                        <li><a href=\"buttons.html\">Buttons</a> </li>
                        <li><a href=\"form-controls.html\">Full Page Example</a> </li>
                        <li><a href=\"table.html\">Page with Sidebar Example</a> </li>
                    </ul>
                </li>
                <li class=\"ic-typography\"><a href=\"typography.html\"><span>Typography</span></a></li>
\t\t\t\t<li class=\"ic-charts\"><a href=\"charts.html\"><span>Charts & Graphs</span></a></li>
                <li class=\"ic-grid-tables\"><a href=\"table.html\"><span>Data Table</span></a></li>
                <li class=\"ic-gallery dd\"><a href=\"javascript:\"><span>Image Galleries</span></a>
               \t\t <ul>
                        <li><a href=\"image-gallery.html\">Pretty Photo</a> </li>
                        <li><a href=\"gallery-with-filter.html\">Gallery with Filter</a> </li>
                    </ul>
                </li>
                <li class=\"ic-notifications\"><a href=\"notifications.html\"><span>Notifications</span></a></li>

            </ul>
        </div>
        <div class=\"clear\">
        </div>
        <div class=\"grid_2\">
            <div class=\"box sidemenu\">
                <div class=\"block\" id=\"section-menu\">
                    <ul class=\"section menu\">
                        <li><a class=\"menuitem\">Menu 1</a>
                            <ul class=\"submenu\">
                                <li><a>Submenu 1</a> </li>
                                <li><a>Submenu 2</a> </li>
                              
                            </ul>
                        </li>
                        <li><a class=\"menuitem\">Menu 2</a>
                            <ul class=\"submenu\">
                                <li><a>Submenu 1</a> </li>
                                <li><a>Submenu 2</a> </li>
                                <li><a>Submenu 3</a> </li>
                                <li><a>Submenu 4</a> </li>
                                <li><a>Submenu 5</a> </li>
                            </ul>
                        </li>
                        <li><a class=\"menuitem\">Menu 3</a>
                            <ul class=\"submenu\">
                                <li><a>Submenu 1</a> </li>
                                <li><a>Submenu 2</a> </li>
                                <li><a>Submenu 3</a> </li>
                                <li><a>Submenu 4</a> </li>
                                <li><a>Submenu 5</a> </li>
                                <li><a>Submenu 1</a> </li>
                                <li><a>Submenu 2</a> </li>
                                <li><a>Submenu 3</a> </li>
                                <li><a>Submenu 4</a> </li>
                                <li><a>Submenu 5</a> </li>
                            </ul>
                        </li>
                        <li><a class=\"menuitem\">Menu 4</a>
                            <ul class=\"submenu\">
                                <li><a>Submenu 1</a> </li>
                                <li><a>Submenu 2</a> </li>
                                <li><a>Submenu 3</a> </li>
                                <li><a>Submenu 4</a> </li>
                                <li><a>Submenu 5</a> </li>
                                <li><a>Submenu 6</a> </li>
                                <li><a>Submenu 7</a> </li>
                                <li><a>Submenu 8</a> </li>
                                <li><a>Submenu 9</a> </li>
                                <li><a>Submenu 10</a> </li>
                    
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"grid_10\">
            <div class=\"box round first\">
                <h2>
                    Product Sales</h2>
                <div class=\"block\">
                    <div id=\"chart1\">
                    </div>
                </div>
            </div>
            <div class=\"box round\">
                <h2>
                    Figures</h2>
                <div class=\"block\">
                    <div class=\"stat-col\">
                        <span>Target</span>
                        <p class=\"purple\">
                            70,000</p>
                    </div>
                    <div class=\"stat-col\">
                        <span>Last Month Sales</span>
                        <p class=\"yellow\">
                            32,729</p>
                    </div>
                    <div class=\"stat-col\">
                        <span>Current Month Sales</span>
                        <p class=\"green\">
                            63,829</p>
                    </div>
                    <div class=\"stat-col\">
                        <span>Change</span>
                        <p class=\"blue\">
                            99.9%</p>
                    </div>
                    <div class=\"stat-col\">
                        <span>Difference</span>
                        <p class=\"red\">
                            693.00</p>
                    </div>
                    <div class=\"stat-col\">
                        <span>Stats with Icon</span>
                        <p class=\"purple\">
                            <img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/images/icon-direction.png"), "html", null, true);
        echo "\" alt=\"\" />&nbsp;65,000</p>
                    </div>
                    <div class=\"stat-col last\">
                        <span>Total</span>
                        <p class=\"darkblue\">
                            70,000</p>
                    </div>
                    <div class=\"clear\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"grid_5\">
            <div class=\"box round\">
                <h2>
                    Column on Left</h2>
                <div class=\"block\">
                    <p class=\"start\">
                        <img src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/images/horizontal.jpg"), "html", null, true);
        echo "\" alt=\"Ginger\" class=\"left\" />Lorem ipsum dolor sit
                        amet, consectetur <a href=\"\">adipisicing</a> elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur..</p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        <div class=\"grid_5\">
            <div class=\"box round\">
                <h2>
                    Right Column</h2>
                <div class=\"block\">
                    <p class=\"start\">
                        <img src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/images/vertical.jpg"), "html", null, true);
        echo "\" alt=\"Ginger\" class=\"right\" />Lorem Ipsum is simply dummy
                        text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only
                        five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                        Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                        PageMaker including versions of Lorem Ipsum.</p>
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content
                        of a page when looking at its layout. The point of using Lorem Ipsum is that it
                        has a more-or-less normal distribution of letters, as opposed to using 'Content
                        here, content here', making it look like readable English. Many desktop publishing
                        packages and web page editors now use Lorem Ipsum as their default model text, and
                        a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various
                        versions have evolved over the years, sometimes by accident, sometimes on purpose
                        (injected humour and the like).</p>
                </div>
            </div>
        </div>
        <div class=\"clear\">
        </div>
    </div>
    <div class=\"clear\">
    </div>
    <div id=\"site_info\">
        <p>
            Copyright <a href=\"#\">BlueWhale Admin</a>. All Rights Reserved.
        </p>
    </div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "EmpruntBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 227,  292 => 206,  271 => 188,  131 => 51,  125 => 48,  105 => 31,  100 => 29,  96 => 28,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  75 => 22,  69 => 19,  65 => 18,  61 => 17,  57 => 16,  53 => 15,  49 => 14,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
