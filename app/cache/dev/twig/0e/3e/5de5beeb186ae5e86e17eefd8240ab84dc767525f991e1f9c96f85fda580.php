<?php

/* EmpruntBundle:Default:dashboard.html.twig */
class __TwigTemplate_0e3e5de5beeb186ae5e86e17eefd8240ab84dc767525f991e1f9c96f85fda580 extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
<title>Emprunts bancaires | ETAP</title>
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/css/style.default.css"), "html", null, true);
        echo "\" type=\"text/css\" />
<script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/js/plugins/jquery-1.7.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/js/plugins/jquery-ui-1.8.16.custom.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/js/plugins/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/js/plugins/jquery.uniform.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/js/plugins/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/js/plugins/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/js/plugins/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/js/custom/general.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/js/custom/dashboard.js"), "html", null, true);
        echo "\"></script>
<!--[if lte IE 8]><script language=\"javascript\" type=\"text/javascript\" src=\"js/plugins/excanvas.min.js\"></script><![endif]-->
<!--[if IE 9]>
    <link rel=\"stylesheet\" media=\"screen\" href=\"css/style.ie9.css\"/>
<![endif]-->
<!--[if IE 8]>
    <link rel=\"stylesheet\" media=\"screen\" href=\"css/style.ie8.css\"/>
<![endif]-->
<!--[if lt IE 9]>
\t<script src=\"http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js\"></script>
<![endif]-->
</head>

<body class=\"withvernav\">

<div class=\"bodywrapper\">
    <div class=\"topheader\">
        <div class=\"left\">
            <h1 class=\"logo\">ETAP</h1> 
            <span class=\"slogan\">Entreprise Tunisienne d'Activités Pétrolières</span>
            
            <div class=\"search\">
            \t<form action=\"\" method=\"post\">
                \t<input type=\"text\" name=\"keyword\" id=\"keyword\" value=\"Enter keyword(s)\" />
                    <button class=\"submitbutton\"></button>
                </form>
            </div><!--search-->
            
            <br clear=\"all\" />
            
        </div><!--left-->
        
        <div class=\"right\">
        \t<div class=\"notification\">
                <a class=\"count\" href=\"ajax/notifications.html\"><span>9</span></a>
        \t</div>
            <div class=\"userinfo\">
            \t<img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/images/thumbs/avatar.png"), "html", null, true);
        echo "\" alt=\"\" />
                <span>Juan Dela Cruz</span>
            </div><!--userinfo-->
            
            <div class=\"userinfodrop\">
            \t<div class=\"avatar\">
                \t<a href=\"\"><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/images/thumbs/avatarbig.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
                    <div class=\"changetheme\">
                    \tChange theme: <br />
                    \t<a class=\"default\"></a>
                        <a class=\"blueline\"></a>
                        <a class=\"greenline\"></a>
                        <a class=\"contrast\"></a>
                        <a class=\"custombg\"></a>
                    </div>
                </div><!--avatar-->
                <div class=\"userdata\">
                \t<h4>Juan Dela Cruz</h4>
                    <span class=\"email\">youremail@yourdomain.com</span>
                    <ul>
                    \t<li><a href=\"editprofile.html\">Edit Profile</a></li>
                        <li><a href=\"accountsettings.html\">Account Settings</a></li>
                        <li><a href=\"help.html\">Help</a></li>
                        <li><a href=\"index.html\">Sign Out</a></li>
                    </ul>
                </div><!--userdata-->
            </div><!--userinfodrop-->
        </div><!--right-->
    </div><!--topheader-->
    
    
    <div class=\"header\">
    \t<ul class=\"headermenu\">
        \t<li class=\"current\"><a href=\"dashboard.html\"><span class=\"icon icon-flatscreen\"></span>Dashboard</a></li>
            <li><a href=\"manageblog.html\"><span class=\"icon icon-pencil\"></span>Manage Blog</a></li>
            <li><a href=\"messages.html\"><span class=\"icon icon-message\"></span>Messages</a></li>
            <li><a href=\"reports.html\"><span class=\"icon icon-chart\"></span>Reports</a></li>
        </ul>
        
        <div class=\"headerwidget\">
        \t<div class=\"earnings\">
            \t<div class=\"one_half\">
                \t<h4>Today's Earnings</h4>
                    <h2>\$640.01</h2>
                </div><!--one_half-->
                <div class=\"one_half last alignright\">
                \t<h4>Current Rate</h4>
                    <h2>53%</h2>
                </div><!--one_half last-->
            </div><!--earnings-->
        </div><!--headerwidget-->
        
        
    </div><!--header-->
    
    <div class=\"vernav2 iconmenu\">
    \t<ul>
        \t<li><a href=\"#formsub\" class=\"editor\">Forms</a>
            \t<span class=\"arrow\"></span>
            \t<ul id=\"formsub\">
               \t\t<li><a href=\"forms.html\">Basic Form</a></li>
                    <li><a href=\"wizard.html\">Wizard</a></li>
                    <li><a href=\"editor.html\">WYSIWYG</a></li>
                </ul>
            </li>
            <li><a href=\"filemanager.html\" class=\"gallery\">File Manager</a></li>
            <li><a href=\"elements.html\" class=\"elements\">Elements</a></li>
            <li><a href=\"widgets.html\" class=\"widgets\">Widgets</a></li>
            <li><a href=\"calendar.html\" class=\"calendar\">Calendar</a></li>
            <li><a href=\"support.html\" class=\"support\">Customer Support</a></li>
            <li><a href=\"typography.html\" class=\"typo\">Typography</a></li>
            <li><a href=\"tables.html\" class=\"tables\">Tables</a></li>
\t\t\t<li><a href=\"buttons.html\" class=\"buttons\">Buttons &amp; Icons</a></li>
            <li><a href=\"#error\" class=\"error\">Error Pages</a>
            \t<span class=\"arrow\"></span>
            \t<ul id=\"error\">
               \t\t<li><a href=\"notfound.html\">Page Not Found</a></li>
                    <li><a href=\"forbidden.html\">Forbidden Page</a></li>
                    <li><a href=\"internal.html\">Internal Server Error</a></li>
                    <li><a href=\"offline.html\">Offline</a></li>
                </ul>
            </li>
            <li><a href=\"#addons\" class=\"addons\">Addons</a>
            \t<span class=\"arrow\"></span>
            \t<ul id=\"addons\">
               \t\t<li><a href=\"newsfeed.html\">News Feed</a></li>
                    <li><a href=\"profile.html\">Profile Page</a></li>
                    <li><a href=\"productlist.html\">Product List</a></li>
                    <li><a href=\"photo.html\">Photo/Video Sharing</a></li>
                    <li><a href=\"gallery.html\">Gallery</a></li>
                    <li><a href=\"invoice.html\">Invoice</a></li>
                </ul>
            </li>
        </ul>
        <a class=\"togglemenu\"></a>
        <br /><br />
    </div><!--leftmenu-->
        
    <div class=\"centercontent\">
    
        <div class=\"pageheader\">
            <h1 class=\"pagetitle\">Dashboard</h1>
            <span class=\"pagedesc\">This is a sample description of a page</span>
            
            <ul class=\"hornav\">
                <li class=\"current\"><a href=\"#updates\">Updates</a></li>
                <li><a href=\"#activities\">Activities</a></li>
            </ul>
        </div><!--pageheader-->
        
        <div id=\"contentwrapper\" class=\"contentwrapper\">
        
        \t<div id=\"updates\" class=\"subcontent\">
                    <div class=\"notibar announcement\">
                        <a class=\"close\"></a>
                        <h3>Announcement</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div><!-- notification announcement -->
                    
                    <div class=\"two_third dashboard_left\">
                    
                    \t<ul class=\"shortcuts\">
                        \t<li><a href=\"\" class=\"settings\"><span>Settings</span></a></li>
                            <li><a href=\"\" class=\"users\"><span>Users</span></a></li>
                            <li><a href=\"\" class=\"gallery\"><span>Gallery</span></a></li>
                            <li><a href=\"\" class=\"events\"><span>Events</span></a></li>
                            <li><a href=\"\" class=\"analytics\"><span>Analytics</span></a></li>
                        </ul>
                        
                        <br clear=\"all\" />
                    
                        <div class=\"contenttitle2 nomargintop\">
                            <h3>Visit Overview</h3>
                        </div><!--contenttitle-->
                        
                        <div class=\"overviewhead\">
                        \t<div class=\"overviewselect\">
                                <select id=\"overviewselect\" name=\"select\">
                                    <option value=\"\">Last 1 hour ago</option>
                                    <option value=\"\">Last 5 hours ago</option>
                                    <option value=\"\">Today</option>
                                    <option value=\"\">Yesterday</option>
                                    <option value=\"\">This Week</option>
                                    <option value=\"\">Last Week</option>
                                    <option value=\"\">This Month</option>
                                    <option value=\"\">Last Month</option>
                                </select>
                            </div><!--floatright-->
                        \tFrom: &nbsp;<input type=\"text\" id=\"datepickfrom\" /> &nbsp; &nbsp; To: &nbsp;<input type=\"text\" id=\"datepickto\" />
                        </div><!--overviewhead-->
                        
                        <br clear=\"all\" />
                        
                        <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"stdtable overviewtable\">
                            <colgroup>
                                <col class=\"con0\" width=\"20%\" />
                                <col class=\"con1\" width=\"20%\" />
                                <col class=\"con0\" width=\"20%\" />
                                <col class=\"con1\" width=\"20%\" />
                                <col class=\"con0\" width=\"20%\" />
                            </colgroup>
                            <thead>
                                <tr>
                                    <th class=\"head0\">Metric</th>
                                    <th class=\"head1\">Rates</th>
                                    <th class=\"head0\">Impressions</th>
                                    <th class=\"head1\">Unique Visits</th>
                                    <th class=\"head0\">Average Time (min)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                    \t<div class=\"progress progress150\">
                            \t\t\t\t<div class=\"bar\"><div style=\"width: 60%;\" class=\"value bluebar\"></div></div>
                        \t\t\t\t</div>
                        \t\t\t</td>
                                    <td>67.3%</td>
                                    <td>856, 220</td>
                                    <td class=\"center\">32, 012</td>
                                    <td class=\"center\">20.5</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <br clear=\"all\" />
                        
                        <div id=\"chartplace\" style=\"height:300px;\"></div>
                        
                        <br clear=\"all\" />
                        
                        <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"stdtable stdtablecb overviewtable2\">
                            <colgroup>
                                <col class=\"con0\" style=\"width: 4%\" />
                                <col class=\"con1\" />
                                <col class=\"con0\" />
                                <col class=\"con1\" />
                                <col class=\"con0\" />
                                <col class=\"con1\" />
                            </colgroup>
                            <thead>
                                <tr>
                                    <th class=\"head0\"><input type=\"checkbox\" class=\"checkall\" /></th>
                                    <th class=\"head1\">Rendering engine</th>
                                    <th class=\"head0\">Browser</th>
                                    <th class=\"head1\">Platform(s)</th>
                                    <th class=\"head0\">Engine version</th>
                                    <th class=\"head1\">CSS grade</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th class=\"head0\"><input type=\"checkbox\" class=\"checkall\" /></th>
                                    <th class=\"head1\">Rendering engine</th>
                                    <th class=\"head0\">Browser</th>
                                    <th class=\"head1\">Platform(s)</th>
                                    <th class=\"head0\">Engine version</th>
                                    <th class=\"head1\">CSS grade</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td align=\"center\"><input type=\"checkbox\" /></td>
                                    <td>Trident</td>
                                    <td>Internet  Explorer 5.5</td>
                                    <td>Win 95+</td>
                                    <td class=\"center\">5.5</td>
                                    <td class=\"center\">A</td>
                                </tr>
                                <tr>
                                    <td align=\"center\"><input type=\"checkbox\" /></td>
                                    <td>Trident</td>
                                    <td>Internet Explorer 6</td>
                                    <td>Win 98+</td>
                                    <td class=\"center\">6</td>
                                    <td class=\"center\">A</td>
                                </tr>
                                <tr>
                                    <td align=\"center\"><input type=\"checkbox\" /></td>
                                    <td>Trident</td>
                                    <td>Internet Explorer 7</td>
                                    <td>Win XP SP2+</td>
                                    <td class=\"center\">7</td>
                                    <td class=\"center\">A</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <br />
                        
                        <div class=\"widgetbox\">
                        \t<div class=\"title\"><h3>Latest Articles</h3></div>
                            <div class=\"widgetcontent\">
                                <div id=\"scroll1\" class=\"mousescroll\">
                                        <ul class=\"entrylist\">
                                              <li>
                                                <div class=\"entry_wrap\">
                                                    <div class=\"entry_img\"><img src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/images/thumbs/image1.png"), "html", null, true);
        echo "\" alt=\"\" /></div>
                                                    <div class=\"entry_content\">
                                                        <h4><a href=\"\">Why Won't My Cat Eat?</a></h4>
                                                        <small>Submitted by: <a href=\"\"><strong>Hiccup</strong></a> - June 10, 2012</small>
                                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non...</p>
                                                        <p><button class=\"stdbtn btn_lime\">Approve</button> <button class=\"stdbtn\">Decline</button></p>
                                                    </div>
                                                </div>
                                              </li>
                                              <li class=\"even\">
                                                <div class=\"entry_wrap\">
                                                <div class=\"entry_img\"><img src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/images/thumbs/image2.png"), "html", null, true);
        echo "\" alt=\"\" /></div>
                                                <div class=\"entry_content\">
                                                    <h4><a href=\"\">We Are About Color</a></h4>
                                                    <small>Submitted by: <a href=\"\"><strong>Hiccup</strong></a> - June 10, 2012</small>
                                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non...</p>
                                                    <p><button class=\"stdbtn btn_lime\">Approve</button> <button class=\"stdbtn\">Decline</button></p>
                                                </div>
                                                </div>
                                              </li>
                                              <li>
                                                <div class=\"entry_wrap\">
                                                <div class=\"entry_img\"><img src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/images/thumbs/image3.png"), "html", null, true);
        echo "\" alt=\"\" /></div>
                                                <div class=\"entry_content\">
                                                    <h4><a href=\"\">Ancient Technology</a></h4>
                                                    <small>Submitted by: <a href=\"\"><strong>Hiccup</strong></a> - June 10, 2012</small>
                                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non...</p>
                                                    <p><button class=\"stdbtn btn_lime\">Approve</button> <button class=\"stdbtn\">Decline</button></p>
                                                </div>
                                                </div>
                                              </li>
                                              <li class=\"even\">
                                                <div class=\"entry_wrap\">
                                                <div class=\"entry_img\"><img src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/images/thumbs/image4.png"), "html", null, true);
        echo "\" alt=\"\" /></div>
                                                <div class=\"entry_content\">
                                                    <h4><a href=\"\">Bird's Nest Soup</a></h4>
                                                    <small>Submitted by: <a href=\"\"><strong>Hiccup</strong></a> - June 10, 2012</small>
                                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non...</p>
                                                    <p><button class=\"stdbtn btn_lime\">Approve</button> <button class=\"stdbtn\">Decline</button></p>
                                                </div>
                                                </div>
                                              </li>
                                            </ul>                        
                                </div><!--#scroll1-->
                            </div><!--widgetcontent-->
                        </div><!-- widgetbox -->                            
                        
                        
                    </div><!--two_third dashboard_left -->
                    
                    <div class=\"one_third last dashboard_right\">
                    
                        <div class=\"contenttitle2 nomargintop\">
                            <h3>Top Rated Sites</h3>
                        </div><!--contenttitle-->
                    
                    
                    \t<ul class=\"toplist\">
                        \t<li>
                            \t<div>
                                \t<span class=\"three_fourth\">
                                    \t<span class=\"left\">
                                    \t\t<span class=\"title\"><a href=\"\">loremipsum.com</a></span>
                                        \t<span class=\"desc\">Social Network</span>
                                    \t</span><!--left-->
                                    </span><!--three_fourth-->
                                    <span class=\"one_fourth last\">
                                    \t<span class=\"right\">
                                        \t<span class=\"h3\">8.1</span>
                                        </span><!--right-->
                                    </span><!--one_fourth-->
                                    <br clear=\"all\" />
                                </div>
                            </li>
                        \t<li>
                            \t<div>
                                \t<span class=\"three_fourth\">
                                    \t<span class=\"left\">
                                    \t\t<span class=\"title\"><a href=\"\">dolorsitamet.net</a></span>
                                        \t<span class=\"desc\">Social Network</span>
                                    \t</span><!--left-->
                                    </span><!--three_fourth-->
                                    <span class=\"one_fourth last\">
                                    \t<span class=\"right\">
                                        \t<span class=\"h3\">7.8</span>
                                        </span><!--right-->
                                    </span><!--one_fourth-->
                                    <br clear=\"all\" />
                                </div>
                            </li>
                        \t<li>
                            \t<div>
                                \t<span class=\"three_fourth\">
                                    \t<span class=\"left\">
                                    \t\t<span class=\"title\"><a href=\"\">consectetur.org</a></span>
                                        \t<span class=\"desc\">Social Network</span>
                                    \t</span><!--left-->
                                    </span><!--three_fourth-->
                                    <span class=\"one_fourth last\">
                                    \t<span class=\"right\">
                                        \t<span class=\"h3\">7.5</span>
                                        </span><!--right-->
                                    </span><!--one_fourth-->
                                    <br clear=\"all\" />
                                </div>
                            </li>
                        </ul>
                        
\t\t\t\t\t\t<div class=\"widgetbox\">
                            <div class=\"title\"><h3>Newly Registered User</h3></div>
                            <div class=\"widgetoptions\">
                                <div class=\"right\"><a href=\"\">View All Users</a></div>
                                <a href=\"\">Add User</a>
                            </div>
                            <div class=\"widgetcontent userlistwidget nopadding\">
                                <ul>
                                    <li>
                                        <div class=\"avatar\"><img alt=\"\" src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/images/thumbs/avatar1.png"), "html", null, true);
        echo "\" /></div>
                                        <div class=\"info\">
                                            <a href=\"\">Squint</a> <br />
                                            Front-End Engineer <br /> 18 minutes ago
                                        </div><!--info-->
                                    </li>
                                    <li>
                                        <div class=\"avatar\"><img alt=\"\" src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/images/thumbs/avatar2.png"), "html", null, true);
        echo "\" /></div>
                                        <div class=\"info\">
                                            <a href=\"\">Eunice</a> <br />
                                            Architectural Designer <br /> 18 minutes ago
                                        </div><!--info-->
                                    </li>
                                    <li>
                                        <div class=\"avatar\"><img alt=\"\" src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/images/thumbs/avatar1.png"), "html", null, true);
        echo "\" /></div>
                                        <div class=\"info\">
                                            <a href=\"\">Captain Gutt</a> <br />
                                            Software Engineer <br /> 18 minutes ago
                                        </div><!--info-->
                                    </li>
                                    <li>
                                        <div class=\"avatar\"><img alt=\"\" src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emprunt/images/thumbs/avatar2.png"), "html", null, true);
        echo "\" /></div>
                                        <div class=\"info\">
                                            <a href=\"\">Flynn</a> <br />
                                            Accounting Manager <br /> 18 minutes ago
                                        </div><!--info-->
                                    </li>
                                </ul>
                                <a class=\"more\" href=\"\">View More Users</a>
                            </div><!--widgetcontent-->
                        </div>
                        
                        <div class=\"widgetbox\">
                            <div class=\"title\"><h3>Latest News</h3></div>
                            <div class=\"widgetcontent\">
                                <div id=\"accordion\" class=\"accordion\">
                                    <h3><a href=\"#\">Section 1</a></h3>
                                    <div>
                                        <p>
                                        Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                        ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                        amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                        odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                                        </p>
                                    </div>
                                    <h3><a href=\"#\">Section 2</a></h3>
                                    <div>
                                        <p>
                                        Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                                        purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                        velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                                        suscipit faucibus urna.
                                        </p>
                                    </div>
                                    <h3><a href=\"#\">Section 3</a></h3>
                                    <div>
                                        <p>
                                        Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                                        Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                                        ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                                        lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                                        </p>
                                        <ul class=\"margin1020\">
                                            <li>List item one</li>
                                            <li>List item two</li>
                                            <li>List item three</li>
                                        </ul>
                                    </div>
                                    <h3><a href=\"#\">Section 4</a></h3>
                                    <div>
                                        <p>
                                        Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                                        et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                                        faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                                        mauris vel est.
                                        </p>
                                        <p>
                                        Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                        inceptos himenaeos.
                                        </p>
                                    </div>
                                </div>     
                              </div> <!--widgetcontent-->
                         </div><!--widgetbox-->                        
                                            
                    </div><!--one_third last-->
                    
                    
            </div><!-- #updates -->
            
            <div id=\"activities\" class=\"subcontent\" style=\"display: none;\">
            \t&nbsp;
            </div><!-- #activities -->
        
        </div><!--contentwrapper-->
        
        <br clear=\"all\" />
        
\t</div><!-- centercontent -->
    
    
</div><!--bodywrapper-->

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "EmpruntBundle:Default:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  525 => 448,  515 => 441,  505 => 434,  495 => 427,  408 => 343,  394 => 332,  380 => 321,  366 => 310,  112 => 59,  103 => 53,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
