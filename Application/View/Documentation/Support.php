<!-- Content Header (Page header) -->
<div class="content-header">
    <h1>
        AdminLTE Documentation
        <small>Version 2.3</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Documentation</li>
    </ol>
</div>

<!-- Main content -->
<div class="content body">
    <p class="lead">
        This documentation is for versions 2.3 and under.
        If you are looking for documentation for version 2.4 and above,
        please visit <a href="https://adminlte.io/docs">our online documentation</a>.
    </p>

    <section id="introduction">
        <h2 class="page-header"><a href="#introduction">Introduction</a></h2>
        <p class="lead">
            <b>AdminLTE</b> is a popular open source WebApp template for admin dashboards and control panels.
            It is a responsive HTML template that is based on the CSS framework Bootstrap 3.
            It utilizes all of the Bootstrap components in its design and re-styles many
            commonly used plugins to create a consistent design that can be used as a user
            interface for backend applications. AdminLTE is based on a modular design, which
            allows it to be easily customized and built upon. This documentation will guide you through
            installing the template and exploring the various components that are bundled with the template.
        </p>
    </section><!-- /#introduction -->


    <!-- ============================================================= -->

    <section id="download">
        <h2 class="page-header"><a href="#download">Download</a></h2>
        <p class="lead">
            AdminLTE can be downloaded in two different versions, each appealing to different skill levels and use case.
        </p>
        <div class="row">
            <div class="col-sm-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Ready</h3>
                        <span class="label label-primary pull-right"><i class="fa fa-html5"></i></span>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <p>Compiled and ready to use in production. Download this version if you don't want to customize
                            AdminLTE's LESS files.</p>
                        <a href="https://adminlte.io/download/AdminLTE-dist" class="btn btn-primary"><i
                                class="fa fa-download"></i> Download</a>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-sm-6">
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Source Code</h3>
                        <span class="label label-danger pull-right"><i class="fa fa-database"></i></span>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <p>All files including the compiled CSS. Download this version if you plan on customizing the
                            template. <b>Requires a LESS compiler.</b></p>
                        <a href="https://adminlte.io/download/AdminLTE" class="btn btn-danger"><i
                                class="fa fa-download"></i> Download</a>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
        <pre class="hierarchy bring-up"><code class="language-bash" data-lang="bash">File Hierarchy of the Source Code Package

      AdminLTE/
      ├── dist/
      │   ├── CSS/
      │   ├── JS
      │   ├── img
      ├── build/
      │   ├── less/
      │   │   ├── AdminLTE's Less files
      │   └── Bootstrap-less/ (Only for reference. No modifications have been made)
      │       ├── mixins/
      │       ├── variables.less
      │       ├── mixins.less
      └── plugins/
          ├── All the customized plugins CSS and JS files</code></pre>
    </section>


    <!-- ============================================================= -->

    <section id="dependencies">
        <h2 class="page-header"><a href="#dependencies">Dependencies</a></h2>
        <p class="lead">AdminLTE depends on two main frameworks.
            The downloadable package contains both of these libraries, so you don't have to manually download them.</p>
        <ul class="bring-up">
            <li><a href="http://getbootstrap.com" target="_blank">Bootstrap 3</a></li>
            <li><a href="http://jquery.com/" target="_blank">jQuery 1.11+</a></li>
            <li><a href="#plugins">All other plugins are listed below</a></li>
        </ul>
    </section>


    <!-- ============================================================= -->

    <section id="advice">
        <h2 class="page-header"><a href="#advice">A Word of Advice</a></h2>
        <p class="lead">
            Before you go to see your new awesome theme, here are few tips on how to familiarize yourself with it:
        </p>

        <ul>
            <li><b>AdminLTE is based on <a href="http://getbootstrap.com/" target="_blank">Bootstrap 3</a>.</b> If you
                are unfamiliar with Bootstrap, visit their website and read through the documentation. All of Bootstrap
                components have been modified to fit the style of AdminLTE and provide a consistent look throughout the
                template. This way, we guarantee you will get the best of AdminLTE.
            </li>
            <li><b>Go through the pages that are bundled with the theme.</b> Most of the template example pages contain
                quick tips on how to create or use a component which can be really helpful when you need to create
                something on the fly.
            </li>
            <li><b>Documentation.</b> We are trying our best to make your experience with AdminLTE be smooth. One way to
                achieve that is to provide documentation and support. If you think that something is missing from the
                documentation, please do not hesitate to create an issue to tell us about it.
            </li>
            <li><b>Built with <a href="http://lesscss.org/" target="_blank">LESS</a>.</b> This theme uses the LESS
                compiler to make it easier to customize and use. LESS is easy to learn if you know CSS or SASS. It is
                not necessary to learn LESS but it will benefit you a lot in the future.
            </li>
            <li><b>Hosted on <a href="https://github.com/almasaeed2010/AdminLTE/" target="_blank">GitHub</a>.</b> Visit
                our GitHub repository to view issues, make requests, or contribute to the project.
            </li>
        </ul>
        <p>
            <b>Note:</b> LESS files are better commented than the compiled CSS file.
        </p>
    </section>


    <!-- ============================================================= -->

    <section id="layout">
        <h2 class="page-header"><a href="#layout">Layout</a></h2>
        <p class="lead">The layout consists of four major parts:</p>
        <ul>
            <li>Wrapper <code>.wrapper</code>. A div that wraps the whole site.</li>
            <li>Main Header <code>.main-header</code>. Contains the logo and navbar.</li>
            <li>Sidebar <code>.sidebar-wrapper</code>. Contains the user panel and sidebar menu.</li>
            <li>Content <code>.content-wrapper</code>. Contains the page header and content.</li>
        </ul>
        <div class="callout callout-danger lead">
            <h4>Tip!</h4>
            <p>The <a href="../starter.html">starter page</a> is a good place to start building your app if you'd like
                to start from scratch.</p>
        </div>

        <h3>Layout Options</h3>
        <p class="lead">AdminLTE 2.0 provides a set of options to apply to your main layout. Each one of these classes
            can be added
            to the body tag to get the desired goal.</p>
        <ul>
            <li><b>Fixed:</b> use the class <code>.fixed</code> to get a fixed header and sidebar.</li>
            <li><b>Collapsed Sidebar:</b> use the class <code>.sidebar-collapse</code> to have a collapsed sidebar upon
                loading.
            </li>
            <li><b>Boxed Layout:</b> use the class <code>.layout-boxed</code> to get a boxed layout that stretches only
                to 1250px.
            </li>
            <li><b>Top Navigation</b> use the class <code>.layout-top-nav</code> to remove the sidebar and have your
                links at the top navbar.
            </li>
        </ul>
        <p><b>Note:</b> you cannot use both layout-boxed and fixed at the same time. Anything else can be mixed
            together.</p>

        <h3>Skins</h3>
        <p class="lead">Skins can be found in the dist/css/skins folder.
            Choose the skin file that you want and then add the appropriate
            class to the body tag to change the template's appearance. Here is the list of available skins:</p>
        <div class="box box-solid" style="max-width: 300px;">
            <div class="box-body no-padding">
                <table id="layout-skins-list" class="table table-striped bring-up nth-2-center">
                    <thead>
                    <tr>
                        <th style="width: 210px;">Skin Class</th>
                        <th>Preview</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><code>skin-blue</code></td>
                        <td><a href="#" data-skin="skin-blue" class="btn btn-primary btn-xs"><i
                                    class="fa fa-eye"></i></a></td>
                    </tr>
                    <tr>
                        <td><code>skin-blue-light</code></td>
                        <td><a href="#" data-skin="skin-blue-light" class="btn btn-primary btn-xs"><i
                                    class="fa fa-eye"></i></a></td>
                    </tr>
                    <tr>
                        <td><code>skin-yellow</code></td>
                        <td><a href="#" data-skin="skin-yellow" class="btn btn-warning btn-xs"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><code>skin-yellow-light</code></td>
                        <td><a href="#" data-skin="skin-yellow-light" class="btn btn-warning btn-xs"><i
                                    class="fa fa-eye"></i></a></td>
                    </tr>
                    <tr>
                        <td><code>skin-green</code></td>
                        <td><a href="#" data-skin="skin-green" class="btn btn-success btn-xs"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><code>skin-green-light</code></td>
                        <td><a href="#" data-skin="skin-green-light" class="btn btn-success btn-xs"><i
                                    class="fa fa-eye"></i></a></td>
                    </tr>
                    <tr>
                        <td><code>skin-purple</code></td>
                        <td><a href="#" data-skin="skin-purple" class="btn bg-purple btn-xs"><i
                                    class="fa fa-eye"></i></a></td>
                    </tr>
                    <tr>
                        <td><code>skin-purple-light</code></td>
                        <td><a href="#" data-skin="skin-purple-light" class="btn bg-purple btn-xs"><i
                                    class="fa fa-eye"></i></a></td>
                    </tr>
                    <tr>
                        <td><code>skin-red</code></td>
                        <td><a href="#" data-skin="skin-red" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><code>skin-red-light</code></td>
                        <td><a href="#" data-skin="skin-red-light" class="btn btn-danger btn-xs"><i
                                    class="fa fa-eye"></i></a></td>
                    </tr>
                    <tr>
                        <td><code>skin-black</code></td>
                        <td><a href="#" data-skin="skin-black" class="btn bg-black btn-xs"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><code>skin-black-light</code></td>
                        <td><a href="#" data-skin="skin-black-light" class="btn bg-black btn-xs"><i
                                    class="fa fa-eye"></i></a></td>
                    </tr>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </section>


    <!-- ============================================================= -->

    <section id="adminlte-options">
        <h2 class="page-header"><a href="#adminlte-options">AdminLTE Javascript Options</a></h2>
        <p class="lead">Modifying the options of AdminLTE's app.js can be done using one of the following ways.</p>

        <h3>Editing app.js</h3>
        <p>Within the main Javascript file, modify the <code>$.AdminLTE.options</code> object to suit your use case.</p>

        <h3>Defining AdminLTEOptions</h3>
        <p>Alternatively, you can define a global options variable named <code>AdminLTEOptions</code> and initialize it
            before loading app.js.</p>
        <p>Example</p>
        <pre class="prettyprint"><code class="html">&lt;script&gt;
        var AdminLTEOptions = {
          //Enable sidebar expand on hover effect for sidebar mini
          //This option is forced to true if both the fixed layout and sidebar mini
          //are used together
          sidebarExpandOnHover: true,
          //BoxRefresh Plugin
          enableBoxRefresh: true,
          //Bootstrap.js tooltip
          enableBSToppltip: true
        };
      &lt;/script&gt;
      &lt;script src="dist/js/app.js" type="text/javascript"&gt;&lt;/script&gt;</code></pre>

        <h3>Available AdminLTE Options</h3>
        <pre class="prettyprint"><code class="javascript">{
        //Add slimscroll to navbar menus
        //This requires you to load the slimscroll plugin
        //in every page before app.js
        navbarMenuSlimscroll: true,
        navbarMenuSlimscrollWidth: "3px", //The width of the scroll bar
        navbarMenuHeight: "200px", //The height of the inner menu
        //General animation speed for JS animated elements such as box collapse/expand and
        //sidebar treeview slide up/down. This option accepts an integer as milliseconds,
        //'fast', 'normal', or 'slow'
        animationSpeed: 500,
        //Sidebar push menu toggle button selector
        sidebarToggleSelector: "[data-toggle='offcanvas']",
        //Activate sidebar push menu
        sidebarPushMenu: true,
        //Activate sidebar slimscroll if the fixed layout is set (requires SlimScroll Plugin)
        sidebarSlimScroll: true,
        //Enable sidebar expand on hover effect for sidebar mini
        //This option is forced to true if both the fixed layout and sidebar mini
        //are used together
        sidebarExpandOnHover: false,
        //BoxRefresh Plugin
        enableBoxRefresh: true,
        //Bootstrap.js tooltip
        enableBSToppltip: true,
        BSTooltipSelector: "[data-toggle='tooltip']",
        //Enable Fast Click. Fastclick.js creates a more
        //native touch experience with touch devices. If you
        //choose to enable the plugin, make sure you load the script
        //before AdminLTE's app.js
        enableFastclick: true,
        //Control Sidebar Tree Views
        enableControlTreeView: true,
        //Control Sidebar Options
        enableControlSidebar: true,
        controlSidebarOptions: {
          //Which button should trigger the open/close event
          toggleBtnSelector: "[data-toggle='control-sidebar']",
          //The sidebar selector
          selector: ".control-sidebar",
          //Enable slide over content
          slide: true
        },
        //Box Widget Plugin. Enable this plugin
        //to allow boxes to be collapsed and/or removed
        enableBoxWidget: true,
        //Box Widget plugin options
        boxWidgetOptions: {
          boxWidgetIcons: {
            //Collapse icon
            collapse: 'fa-minus',
            //Open icon
            open: 'fa-plus',
            //Remove icon
            remove: 'fa-times'
          },
          boxWidgetSelectors: {
            //Remove button selector
            remove: '[data-widget="remove"]',
            //Collapse button selector
            collapse: '[data-widget="collapse"]'
          }
        },
        //Direct Chat plugin options
        directChat: {
          //Enable direct chat by default
          enable: true,
          //The button to open and close the chat contacts pane
          contactToggleSelector: '[data-widget="chat-pane-toggle"]'
        },
        //Define the set of colors to use globally around the website
        colors: {
          lightBlue: "#3c8dbc",
          red: "#f56954",
          green: "#00a65a",
          aqua: "#00c0ef",
          yellow: "#f39c12",
          blue: "#0073b7",
          navy: "#001F3F",
          teal: "#39CCCC",
          olive: "#3D9970",
          lime: "#01FF70",
          orange: "#FF851B",
          fuchsia: "#F012BE",
          purple: "#8E24AA",
          maroon: "#D81B60",
          black: "#222222",
          gray: "#d2d6de"
        },
        //The standard screen sizes that bootstrap uses.
        //If you change these in the variables.less file, change
        //them here too.
        screenSizes: {
          xs: 480,
          sm: 768,
          md: 992,
          lg: 1200
        }
      }</code></pre>
    </section>


    <!-- ============================================================= -->

    <section id="components" data-spy="scroll" data-target="#scrollspy-components">
        <h2 class="page-header"><a href="#components">Components</a></h2>
        <div class="callout callout-info lead">
            <h4>Reminder!</h4>
            <p>
                AdminLTE uses all of Bootstrap 3 components. It's a good start to review
                the <a href="http://getbootstrap.com">Bootstrap documentation</a> to get an idea of the various
                components
                that this documentation <b>does not</b> cover.
            </p>
        </div>
        <div class="callout callout-danger lead">
            <h4>Tip!</h4>
            <p>
                If you go through the example pages and would like to copy a component, right-click on
                the component and choose "inspect element" to get to the HTML quicker than scanning
                the HTML page.
            </p>
        </div>
        <h3 id="component-main-header">Main Header</h3>
        <p class="lead">The main header contains the logo and navbar. Construction of the
            navbar differs slightly from Bootstrap because it has components that Bootstrap doesn't provide.
            The navbar can be constructed in two ways. This is an example for the normal navbar and next we will provide
            an example for
            the top nav layout.</p>
        <div class="box box-solid">
            <div class="box-body" style="position: relative;">
                <span class="eg">Main Header Example</span>
                <header class="main-header" style="position: relative;">
                    <!-- Logo -->
                    <a href="index2.html" class="logo" style="position: relative;"><b>Admin</b>LTE</a>
                    <!-- Header Navbar: style can be found in header.less -->
                    <nav class="navbar" role="navigation" style="border: 0;max-height: 50px;">
                        <!-- Sidebar toggle button-->
                        <a href="#" class="sidebar-toggle" role="button">
                            <span class="sr-only">Toggle navigation</span>
                        </a>
                        <!-- Navbar Right Menu -->
                        <div class="navbar-custom-menu">
                            <ul class="nav navbar-nav">
                                <!-- Messages: style can be found in dropdown.less-->
                                <li class="dropdown messages-menu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="label label-success">4</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="header">You have 4 messages</li>
                                        <li>
                                            <!-- inner menu: contains the actual data -->
                                            <ul class="menu">
                                                <li><!-- start message -->
                                                    <a href="#">
                                                        <div class="pull-left">
                                                            <img src="../dist/img/user2-160x160.jpg" class="img-circle"
                                                                 alt="User Image">
                                                        </div>
                                                        <h4>
                                                            Support Team
                                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                        </h4>
                                                        <p>Why not buy a new awesome theme?</p>
                                                    </a>
                                                </li><!-- end message -->
                                            </ul>
                                        </li>
                                        <li class="footer"><a href="#">See All Messages</a></li>
                                    </ul>
                                </li>
                                <!-- Notifications: style can be found in dropdown.less -->
                                <li class="dropdown notifications-menu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-bell-o"></i>
                                        <span class="label label-warning">10</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="header">You have 10 notifications</li>
                                        <li>
                                            <!-- inner menu: contains the actual data -->
                                            <ul class="menu">
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="footer"><a href="#">View all</a></li>
                                    </ul>
                                </li>
                                <!-- Tasks: style can be found in dropdown.less -->
                                <li class="dropdown tasks-menu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-flag-o"></i>
                                        <span class="label label-danger">9</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="header">You have 9 tasks</li>
                                        <li>
                                            <!-- inner menu: contains the actual data -->
                                            <ul class="menu">
                                                <li><!-- Task item -->
                                                    <a href="#">
                                                        <h3>
                                                            Design some buttons
                                                            <small class="pull-right">20%</small>
                                                        </h3>
                                                        <div class="progress xs">
                                                            <div class="progress-bar progress-bar-aqua"
                                                                 style="width: 20%" role="progressbar"
                                                                 aria-valuenow="20" aria-valuemin="0"
                                                                 aria-valuemax="100">
                                                                <span class="sr-only">20% Complete</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li><!-- end task item -->
                                            </ul>
                                        </li>
                                        <li class="footer">
                                            <a href="#">View all tasks</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- User Account: style can be found in dropdown.less -->
                                <li class="dropdown user user-menu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                        <span class="hidden-xs">Alexander Pierce</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- User image -->
                                        <li class="user-header">
                                            <img src="../dist/img/user2-160x160.jpg" class="img-circle"
                                                 alt="User Image">
                                            <p>
                                                Alexander Pierce - Web Developer
                                                <small>Member since Nov. 2012</small>
                                            </p>
                                        </li>
                                        <!-- Menu Body -->
                                        <li class="user-body">
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Followers</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Sales</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Friends</a>
                                            </div>
                                        </li>
                                        <!-- Menu Footer-->
                                        <li class="user-footer">
                                            <div class="pull-left">
                                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                                            </div>
                                            <div class="pull-right">
                                                <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>
            </div>
        </div>
        <pre class="prettyprint">&lt;header class="main-header"&gt;
        &lt;a href="../../index2.html" class="logo"&gt;
          &lt;!-- LOGO --&gt;
          AdminLTE
        &lt;/a&gt;
        &lt;!-- Header Navbar: style can be found in header.less --&gt;
        &lt;nav class="navbar navbar-static-top" role="navigation"&gt;
          &lt;!-- Navbar Right Menu --&gt;
          &lt;div class="navbar-custom-menu"&gt;
            &lt;ul class="nav navbar-nav"&gt;
              &lt;!-- Messages: style can be found in dropdown.less--&gt;
              &lt;li class="dropdown messages-menu"&gt;
                &lt;a href="#" class="dropdown-toggle" data-toggle="dropdown"&gt;
                  &lt;i class="fa fa-envelope-o"&gt;&lt;/i&gt;
                  &lt;span class="label label-success"&gt;4&lt;/span&gt;
                &lt;/a&gt;
                &lt;ul class="dropdown-menu"&gt;
                  &lt;li class="header"&gt;You have 4 messages&lt;/li&gt;
                  &lt;li&gt;
                    &lt;!-- inner menu: contains the actual data --&gt;
                    &lt;ul class="menu"&gt;
                      &lt;li&gt;&lt;!-- start message --&gt;
                        &lt;a href="#"&gt;
                          &lt;div class="pull-left"&gt;
                            &lt;img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"&gt;
                          &lt;/div&gt;
                          &lt;h4&gt;
                            Sender Name
                            &lt;small&gt;&lt;i class="fa fa-clock-o"&gt;&lt;/i&gt; 5 mins&lt;/small&gt;
                          &lt;/h4&gt;
                          &lt;p&gt;Message Excerpt&lt;/p&gt;
                        &lt;/a&gt;
                      &lt;/li&gt;&lt;!-- end message --&gt;
                      ...
                    &lt;/ul&gt;
                  &lt;/li&gt;
                  &lt;li class="footer"&gt;&lt;a href="#"&gt;See All Messages&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
              &lt;/li&gt;
              &lt;!-- Notifications: style can be found in dropdown.less --&gt;
              &lt;li class="dropdown notifications-menu"&gt;
                &lt;a href="#" class="dropdown-toggle" data-toggle="dropdown"&gt;
                  &lt;i class="fa fa-bell-o"&gt;&lt;/i&gt;
                  &lt;span class="label label-warning"&gt;10&lt;/span&gt;
                &lt;/a&gt;
                &lt;ul class="dropdown-menu"&gt;
                  &lt;li class="header"&gt;You have 10 notifications&lt;/li&gt;
                  &lt;li&gt;
                    &lt;!-- inner menu: contains the actual data --&gt;
                    &lt;ul class="menu"&gt;
                      &lt;li&gt;
                        &lt;a href="#"&gt;
                          &lt;i class="ion ion-ios-people info"&gt;&lt;/i&gt; Notification title
                        &lt;/a&gt;
                      &lt;/li&gt;
                      ...
                    &lt;/ul&gt;
                  &lt;/li&gt;
                  &lt;li class="footer"&gt;&lt;a href="#"&gt;View all&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
              &lt;/li&gt;
              &lt;!-- Tasks: style can be found in dropdown.less --&gt;
              &lt;li class="dropdown tasks-menu"&gt;
                &lt;a href="#" class="dropdown-toggle" data-toggle="dropdown"&gt;
                  &lt;i class="fa fa-flag-o"&gt;&lt;/i&gt;
                  &lt;span class="label label-danger"&gt;9&lt;/span&gt;
                &lt;/a&gt;
                &lt;ul class="dropdown-menu"&gt;
                  &lt;li class="header"&gt;You have 9 tasks&lt;/li&gt;
                  &lt;li&gt;
                    &lt;!-- inner menu: contains the actual data --&gt;
                    &lt;ul class="menu"&gt;
                      &lt;li&gt;&lt;!-- Task item --&gt;
                        &lt;a href="#"&gt;
                          &lt;h3&gt;
                            Design some buttons
                            &lt;small class="pull-right"&gt;20%&lt;/small&gt;
                          &lt;/h3&gt;
                          &lt;div class="progress xs"&gt;
                            &lt;div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;
                              &lt;span class="sr-only"&gt;20% Complete&lt;/span&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/a&gt;
                      &lt;/li&gt;&lt;!-- end task item --&gt;
                      ...
                    &lt;/ul&gt;
                  &lt;/li&gt;
                  &lt;li class="footer"&gt;
                    &lt;a href="#"&gt;View all tasks&lt;/a&gt;
                  &lt;/li&gt;
                &lt;/ul&gt;
              &lt;/li&gt;
              &lt;!-- User Account: style can be found in dropdown.less --&gt;
              &lt;li class="dropdown user user-menu"&gt;
                &lt;a href="#" class="dropdown-toggle" data-toggle="dropdown"&gt;
                  &lt;img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"&gt;
                  &lt;span class="hidden-xs"&gt;Alexander Pierce&lt;/span&gt;
                &lt;/a&gt;
                &lt;ul class="dropdown-menu"&gt;
                  &lt;!-- User image --&gt;
                  &lt;li class="user-header"&gt;
                    &lt;img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"&gt;
                    &lt;p&gt;
                      Alexander Pierce - Web Developer
                      &lt;small&gt;Member since Nov. 2012&lt;/small&gt;
                    &lt;/p&gt;
                  &lt;/li&gt;
                  &lt;!-- Menu Body --&gt;
                  &lt;li class="user-body"&gt;
                    &lt;div class="col-xs-4 text-center"&gt;
                      &lt;a href="#"&gt;Followers&lt;/a&gt;
                    &lt;/div&gt;
                    &lt;div class="col-xs-4 text-center"&gt;
                      &lt;a href="#"&gt;Sales&lt;/a&gt;
                    &lt;/div&gt;
                    &lt;div class="col-xs-4 text-center"&gt;
                      &lt;a href="#"&gt;Friends&lt;/a&gt;
                    &lt;/div&gt;
                  &lt;/li&gt;
                  &lt;!-- Menu Footer--&gt;
                  &lt;li class="user-footer"&gt;
                    &lt;div class="pull-left"&gt;
                      &lt;a href="#" class="btn btn-default btn-flat"&gt;Profile&lt;/a&gt;
                    &lt;/div&gt;
                    &lt;div class="pull-right"&gt;
                      &lt;a href="#" class="btn btn-default btn-flat"&gt;Sign out&lt;/a&gt;
                    &lt;/div&gt;
                  &lt;/li&gt;
                &lt;/ul&gt;
              &lt;/li&gt;
            &lt;/ul&gt;
          &lt;/div&gt;
        &lt;/nav&gt;
      &lt;/header&gt;</pre>
        <h4>Top Nav Layout. Main Header Example.</h4>
        <div class="callout callout-info lead">
            <h4>Reminder!</h4>
            <p>To use this main header instead of the regular one, you must add the <code>layout-top-nav</code> class to
                the body tag.</p>
        </div>
        <div class="box box-solid">
            <div class="box-body layout-top-nav">
                <span class="eg">Top Nav Example</span>
                <header class="main-header">
                    <nav class="navbar navbar-static-top">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a href="../../index2.html" class="navbar-brand"><b>Admin</b>LTE</a>
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#navbar-collapse">
                                    <i class="fa fa-bars"></i>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="navbar-collapse">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                                    <li><a href="#">Link</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span
                                                class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">One more separated link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <form class="navbar-form navbar-left" role="search">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="navbar-search-input"
                                               placeholder="Search">
                                    </div>
                                </form>
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#">Link</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span
                                                class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </header>
            </div>
        </div>
        <pre class="prettyprint">      &lt;header class="main-header"&gt;
        &lt;nav class="navbar navbar-static-top"&gt;
          &lt;div class="container-fluid"&gt;
          &lt;div class="navbar-header"&gt;
            &lt;a href="../../index2.html" class="navbar-brand"&gt;&lt;b&gt;Admin&lt;/b&gt;LTE&lt;/a&gt;
            &lt;button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"&gt;
              &lt;i class="fa fa-bars"&gt;&lt;/i&gt;
            &lt;/button&gt;
          &lt;/div&gt;

          &lt;!-- Collect the nav links, forms, and other content for toggling --&gt;
          &lt;div class="collapse navbar-collapse" id="navbar-collapse"&gt;
            &lt;ul class="nav navbar-nav"&gt;
              &lt;li class="active"&gt;&lt;a href="#"&gt;Link &lt;span class="sr-only"&gt;(current)&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;
              &lt;li class="dropdown"&gt;
                &lt;a href="#" class="dropdown-toggle" data-toggle="dropdown"&gt;Dropdown &lt;span class="caret"&gt;&lt;/span&gt;&lt;/a&gt;
                &lt;ul class="dropdown-menu" role="menu"&gt;
                  &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                  &lt;li class="divider"&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                  &lt;li class="divider"&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;a href="#"&gt;One more separated link&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
              &lt;/li&gt;
            &lt;/ul&gt;
            &lt;form class="navbar-form navbar-left" role="search"&gt;
              &lt;div class="form-group"&gt;
                &lt;input type="text" class="form-control" id="navbar-search-input" placeholder="Search"&gt;
              &lt;/div&gt;
            &lt;/form&gt;
            &lt;ul class="nav navbar-nav navbar-right"&gt;
              &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;
              &lt;li class="dropdown"&gt;
                &lt;a href="#" class="dropdown-toggle" data-toggle="dropdown"&gt;Dropdown &lt;span class="caret"&gt;&lt;/span&gt;&lt;/a&gt;
                &lt;ul class="dropdown-menu" role="menu"&gt;
                  &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                  &lt;li class="divider"&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
              &lt;/li&gt;
            &lt;/ul&gt;
          &lt;/div&gt;&lt;!-- /.navbar-collapse --&gt;
          &lt;/div&gt;&lt;!-- /.container-fluid --&gt;
        &lt;/nav&gt;
      &lt;/header&gt;</pre>

        <!-- ===================================================================== -->

        <h3 id="component-sidebar">Sidebar</h3>
        <p class="lead">
            The sidebar used in this page to the left provides an example of what your sidebar should like.
            Construction of a sidebar:
        </p>
        <pre class="prettyprint">      &lt;div class="main-sidebar"&gt;
        &lt;!-- Inner sidebar --&gt;
        &lt;div class="sidebar"&gt;
          &lt;!-- user panel (Optional) --&gt;
          &lt;div class="user-panel"&gt;
            &lt;div class="pull-left image"&gt;
              &lt;img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"&gt;
            &lt;/div&gt;
            &lt;div class="pull-left info"&gt;
              &lt;p&gt;User Name&lt;/p&gt;

              &lt;a href="#"&gt;&lt;i class="fa fa-circle text-success"&gt;&lt;/i&gt; Online&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;&lt;!-- /.user-panel --&gt;

          &lt;!-- Search Form (Optional) --&gt;
          &lt;form action="#" method="get" class="sidebar-form"&gt;
            &lt;div class="input-group"&gt;
              &lt;input type="text" name="q" class="form-control" placeholder="Search..."&gt;
              &lt;span class="input-group-btn"&gt;
                &lt;button type="submit" name="search" id="search-btn" class="btn btn-flat"&gt;&lt;i class="fa fa-search"&gt;&lt;/i&gt;&lt;/button&gt;
              &lt;/span&gt;
            &lt;/div&gt;
          &lt;/form&gt;&lt;!-- /.sidebar-form --&gt;

          &lt;!-- Sidebar Menu --&gt;
          &lt;ul class="sidebar-menu"&gt;
            &lt;li class="header"&gt;HEADER&lt;/li&gt;
            &lt;!-- Optionally, you can add icons to the links --&gt;
            &lt;li class="active"&gt;&lt;a href="#"&gt;&lt;span&gt;Link&lt;/span&gt;&lt;/a&gt;&lt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#"&gt;&lt;span&gt;Another Link&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li class="treeview"&gt;
              &lt;a href="#"&gt;&lt;span&gt;Multilevel&lt;/span&gt; &lt;i class="fa fa-angle-left pull-right"&gt;&lt;/i&gt;&lt;/a&gt;
              &lt;ul class="treeview-menu"&gt;
                &lt;li&gt;&lt;a href="#"&gt;Link in level 2&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;Link in level 2&lt;/a&gt;&lt;/li&gt;
              &lt;/ul&gt;
            &lt;/li&gt;
          &lt;/ul&gt;&lt;!-- /.sidebar-menu --&gt;

        &lt;/div&gt;&lt;!-- /.sidebar --&gt;
      &lt;/div&gt;&lt;!-- /.main-sidebar --&gt;</pre>

        <h3 id="component-control-sidebar">Control Sidebar</h3>
        <p class="lead">Control sidebar is the right side bar. It can be used for many purposes and is extremely easy
            to create. The sidebar ships with two different show/hide styles. The first allows the sidebar to
            slide over the content. The second pushes the content to make space for the sidebar. Either of
            these methods can be set through the <a href="#adminlte-options">Javascript options</a>.</p>
        <p class="lead">The following code should be placed within the <code>.wrapper</code> div. I prefer
            to place it right after the footer.</p>
        <p class="lead">Dark Sidebar Markup</p>
        <pre class="prettyprint"><code class="lang-html">&lt;!-- The Right Sidebar --&gt;
      &lt;aside class="control-sidebar control-sidebar-dark"&gt;
        &lt;!-- Content of the sidebar goes here --&gt;
      &lt;/aside&gt;
      &lt;!-- The sidebar's background --&gt;
      &lt;!-- This div must placed right after the sidebar for it to work--&gt;
      &lt;div class="control-sidebar-bg"&gt;&lt;/div&gt;</code></pre>

        <p class="lead">Light Sidebar Markup</p>
        <pre class="prettyprint"><code class="lang-html">&lt;!-- The Right Sidebar --&gt;
      &lt;aside class="control-sidebar control-sidebar-light"&gt;
        &lt;!-- Content of the sidebar goes here --&gt;
      &lt;/aside&gt;
      &lt;!-- The sidebar's background --&gt;
      &lt;!-- This div must placed right after the sidebar for it to work--&gt;
      &lt;div class="control-sidebar-bg"&gt;&lt;/div&gt;</code></pre>

        <p class="lead">Once you create the sidebar, you will need a toggle button to open/close it.
            By adding the attribute <code>data-toggle="control-sidebar"</code> to any button, it will
            automatically act as the toggle button.</p>

        <p class="lead">Toggle Button Example</p>
        <button class="btn btn-primary" data-toggle="control-sidebar">Toggle Right Sidebar</button>
        <br><br>

        <p class="lead">Sidebar Toggle Markup</p>
        <pre class="prettyprint"><code class="lang-html">&lt;button class="btn btn-default" data-toggle="control-sidebar"&gt;Toggle Right Sidebar&lt;/button&gt;</code></pre>
        <!-- ===================================================================== -->

        <h3 id="component-info-box">Info Box</h3>
        <p class="lead">Info boxes are used to display statistical snippets. There are two types of info boxes.</p>
        <h4>First Type of Info Boxes</h4>
        <!-- Info Boxes -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Messages</span>
                        <span class="info-box-number">1,410</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Bookmarks</span>
                        <span class="info-box-number">410</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Uploads</span>
                        <span class="info-box-number">13,648</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Likes</span>
                        <span class="info-box-number">93,139</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
        <p class="lead">Markup</p>
        <pre class="prettyprint"><code class="lang-html">&lt;div class="info-box"&gt;
        &lt;!-- Apply any bg-* class to to the icon to color it --&gt;
        &lt;span class="info-box-icon bg-red"&gt;&lt;i class="fa fa-star-o"&gt;&lt;/i&gt;&lt;/span&gt;
        &lt;div class="info-box-content"&gt;
          &lt;span class="info-box-text"&gt;Likes&lt;/span&gt;
          &lt;span class="info-box-number"&gt;93,139&lt;/span&gt;
        &lt;/div&gt;&lt;!-- /.info-box-content --&gt;
      &lt;/div&gt;&lt;!-- /.info-box --&gt;</code></pre>

        <h4>Second Type of Info Boxes</h4>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-aqua">
                    <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Bookmarks</span>
                        <span class="info-box-number">41,410</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                  70% Increase in 30 Days
                </span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-green">
                    <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Likes</span>
                        <span class="info-box-number">41,410</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                  70% Increase in 30 Days
                </span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-yellow">
                    <span class="info-box-icon"><i class="fa fa-calendar"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Events</span>
                        <span class="info-box-number">41,410</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                  70% Increase in 30 Days
                </span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-red">
                    <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Comments</span>
                        <span class="info-box-number">41,410</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                  70% Increase in 30 Days
                </span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
        <p class="lead">Markup</p>
        <pre class="prettyprint"><code class="lang-html">&lt;!-- Apply any bg-* class to to the info-box to color it --&gt;
      &lt;div class="info-box bg-red"&gt;
        &lt;span class="info-box-icon"&gt;&lt;i class="fa fa-comments-o"&gt;&lt;/i&gt;&lt;/span&gt;
        &lt;div class="info-box-content"&gt;
          &lt;span class="info-box-text"&gt;Likes&lt;/span&gt;
          &lt;span class="info-box-number"&gt;41,410&lt;/span&gt;
          &lt;!-- The progress section is optional --&gt;
          &lt;div class="progress"&gt;
            &lt;div class="progress-bar" style="width: 70%"&gt;&lt;/div&gt;
          &lt;/div&gt;
          &lt;span class="progress-description"&gt;
            70% Increase in 30 Days
          &lt;/span&gt;
        &lt;/div&gt;&lt;!-- /.info-box-content --&gt;
      &lt;/div&gt;&lt;!-- /.info-box --&gt;</code></pre>
        <p class="lead">The only thing you need to change to alternate between these style is change the placement of
            the bg-* class. For the
            first style apply any bg-* class to the icon itself. For the other style, apply the bg-* class to the
            info-box div.</p>
        <!-- ===================================================================== -->

        <h3 id="component-box">Box</h3>
        <p class="lead">The box component is the most widely used component through out this template. You can
            use it for anything from displaying charts to just blocks of text. It comes in many different
            styles that we will explore below.</p>
        <h4>Default Box Markup</h4>
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Default Box Example</h3>
                <div class="box-tools pull-right">
                    <!-- Buttons, labels, and many other things can be placed here! -->
                    <!-- Here is a label for example -->
                    <span class="label label-primary">Label</span>
                </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div class="box-body">
                The body of the box
            </div><!-- /.box-body -->
            <div class="box-footer">
                The footer of the box
            </div><!-- box-footer -->
        </div><!-- /.box -->
        <pre class="prettyprint">&lt;div class="box"&gt;
        &lt;div class="box-header with-border"&gt;
          &lt;h3 class="box-title"&gt;Default Box Example&lt;/h3&gt;
          &lt;div class="box-tools pull-right"&gt;
            &lt;!-- Buttons, labels, and many other things can be placed here! --&gt;
            &lt;!-- Here is a label for example --&gt;
            &lt;span class="label label-primary"&gt;Label&lt;/span&gt;
          &lt;/div&gt;&lt;!-- /.box-tools --&gt;
        &lt;/div&gt;&lt;!-- /.box-header --&gt;
        &lt;div class="box-body"&gt;
          The body of the box
        &lt;/div&gt;&lt;!-- /.box-body --&gt;
        &lt;div class="box-footer"&gt;
          The footer of the box
        &lt;/div&gt;&lt;!-- box-footer --&gt;
      &lt;/div&gt;&lt;!-- /.box --&gt;</pre>
        <h4>Box Variants</h4>
        <p class="lead">You can change the style of the box by adding any of the contextual classes.</p>
        <div class="row">
            <div class="col-md-4">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Default Box Example</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        The body of the box
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Primary Box Example</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        The body of the box
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
            <div class="col-md-4">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Info Box Example</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        The body of the box
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Warning Box Example</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        The body of the box
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
            <div class="col-md-4">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Success Box Example</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        The body of the box
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
            <div class="col-md-4">
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Danger Box Example</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        The body of the box
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div><!-- /.row -->
        <pre class="prettyprint">&lt;div class="box box-default"&gt;...&lt;/div&gt;
      &lt;div class="box box-primary"&gt;...&lt;/div&gt;
      &lt;div class="box box-info"&gt;...&lt;/div&gt;
      &lt;div class="box box-warning"&gt;...&lt;/div&gt;
      &lt;div class="box box-success"&gt;...&lt;/div&gt;
      &lt;div class="box box-danger"&gt;...&lt;/div&gt;</pre>

        <h4>Solid Box</h4>
        <p class="lead">Solid Boxes are alternative ways to display boxes.
            They can be created by simply adding the box-solid class to the box component.
            You may also use contextual classes with you solid boxes.</p>
        <div class="row">
            <div class="col-md-4">
                <div class="box box-solid box-default">
                    <div class="box-header">
                        <h3 class="box-title">Default Solid Box Example</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        The body of the box
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
            <div class="col-md-4">
                <div class="box box-solid box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Primary Solid Box Example</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        The body of the box
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
            <div class="col-md-4">
                <div class="box box-solid box-info">
                    <div class="box-header">
                        <h3 class="box-title">Info Solid Box Example</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        The body of the box
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4">
                <div class="box box-solid box-warning">
                    <div class="box-header">
                        <h3 class="box-title">Warning Solid Box Example</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        The body of the box
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
            <div class="col-md-4">
                <div class="box box-solid box-success">
                    <div class="box-header">
                        <h3 class="box-title">Success Solid Box Example</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        The body of the box
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
            <div class="col-md-4">
                <div class="box box-solid box-danger">
                    <div class="box-header">
                        <h3 class="box-title">Danger Solid Box Example</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        The body of the box
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div><!-- /.row -->
        <pre class="prettyprint">      &lt;div class="box box-solid box-default"&gt;...&lt;/div&gt;
      &lt;div class="box box-solid box-primary"&gt;...&lt;/div&gt;
      &lt;div class="box box-solid box-info"&gt;...&lt;/div&gt;
      &lt;div class="box box-solid box-warning"&gt;...&lt;/div&gt;
      &lt;div class="box box-solid box-success"&gt;...&lt;/div&gt;
      &lt;div class="box box-solid box-danger"&gt;...&lt;/div&gt;</pre>
        <h4>Box Tools</h4>
        <p class="lead">Boxes can contain tools to deploy a specific event or provide simple info. The following
            examples makes use
            of multiple AdminLTE components within the header of the box.</p>
        <p>AdminLTE data-widget attribute provides boxes with the ability to collapse or be removed. The buttons
            are placed in the box-tools which is placed in the box-header.</p>
        <pre class="prettyprint">      &lt;!-- This will cause the box to be removed when clicked --&gt;
      &lt;button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"&gt;&lt;i class="fa fa-times"&gt;&lt;/i&gt;&lt;/button&gt;
      &lt;!-- This will cause the box to collapse when clicked --&gt;
      &lt;button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"&gt;&lt;i class="fa fa-minus"&gt;&lt;/i&gt;&lt;/button&gt;</pre>
        <div class="row">
            <div class="col-md-4">
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">Collapsable</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        The body of the box
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
                <pre class="prettyprint">      &lt;div class="box box-default"&gt;
        &lt;div class="box-header with-border"&gt;
          &lt;h3 class="box-title"&gt;Collapsable&lt;/h3&gt;
          &lt;div class="box-tools pull-right"&gt;
            &lt;button class="btn btn-box-tool" data-widget="collapse"&gt;&lt;i class="fa fa-minus"&gt;&lt;/i&gt;&lt;/button&gt;
          &lt;/div&gt;&lt;!-- /.box-tools --&gt;
        &lt;/div&gt;&lt;!-- /.box-header --&gt;
        &lt;div class="box-body"&gt;
          The body of the box
        &lt;/div&gt;&lt;!-- /.box-body --&gt;
      &lt;/div&gt;&lt;!-- /.box --&gt;</pre>
            </div>
            <div class="col-md-4">
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">Removable</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        The body of the box
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
                <pre class="prettyprint">      &lt;div class="box box-default"&gt;
        &lt;div class="box-header with-border"&gt;
          &lt;h3 class="box-title"&gt;Removable&lt;/h3&gt;
          &lt;div class="box-tools pull-right"&gt;
            &lt;button class="btn btn-box-tool" data-widget="remove"&gt;&lt;i class="fa fa-times"&gt;&lt;/i&gt;&lt;/button&gt;
          &lt;/div&gt;&lt;!-- /.box-tools --&gt;
        &lt;/div&gt;&lt;!-- /.box-header --&gt;
        &lt;div class="box-body"&gt;
          The body of the box
        &lt;/div&gt;&lt;!-- /.box-body --&gt;
      &lt;/div&gt;&lt;!-- /.box --&gt;</pre>
            </div>
            <div class="col-md-4">
                <div class="box box-default collapsed-box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Expandable</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        The body of the box
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
                <pre class="prettyprint">      &lt;div class="box box-default collapsed-box"&gt;
        &lt;div class="box-header with-border"&gt;
          &lt;h3 class="box-title"&gt;Expandable&lt;/h3&gt;
          &lt;div class="box-tools pull-right"&gt;
            &lt;button class="btn btn-box-tool" data-widget="collapse"&gt;&lt;i class="fa fa-plus"&gt;&lt;/i&gt;&lt;/button&gt;
          &lt;/div&gt;&lt;!-- /.box-tools --&gt;
        &lt;/div&gt;&lt;!-- /.box-header --&gt;
        &lt;div class="box-body"&gt;
          The body of the box
        &lt;/div&gt;&lt;!-- /.box-body --&gt;
      &lt;/div&gt;&lt;!-- /.box --&gt;</pre>
            </div>
        </div><!-- /.row -->
        <p>We can also add labels, badges, pagination, tooltips, inputs and many more in the box tools. A few
            examples:</p>
        <div class="row">
            <div class="col-md-4">
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">Labels</h3>
                        <div class="box-tools pull-right">
                            <span class="label label-default">Some Label</span>
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        The body of the box
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
                <pre class="prettyprint">      &lt;div class="box box-default"&gt;
        &lt;div class="box-header with-border"&gt;
          &lt;h3 class="box-title"&gt;Labels&lt;/h3&gt;
          &lt;div class="box-tools pull-right"&gt;
            &lt;span class="label label-default"&gt;8 New Messages&lt;/span&gt;
          &lt;/div&gt;&lt;!-- /.box-tools --&gt;
        &lt;/div&gt;&lt;!-- /.box-header --&gt;
        &lt;div class="box-body"&gt;
          The body of the box
        &lt;/div&gt;&lt;!-- /.box-body --&gt;
      &lt;/div&gt;&lt;!-- /.box --&gt;</pre>
            </div>
            <div class="col-md-4">
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">Input</h3>
                        <div class="box-tools pull-right">
                            <div class="has-feedback">
                                <input type="text" class="form-control input-sm" placeholder="Search...">
                                <span class="glyphicon glyphicon-search form-control-feedback text-muted"></span>
                            </div>
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        The body of the box
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
                <pre class="prettyprint">      &lt;div class="box box-default"&gt;
        &lt;div class="box-header with-border"&gt;
          &lt;h3 class="box-title"&gt;Input&lt;/h3&gt;
          &lt;div class="box-tools pull-right"&gt;
            &lt;div class="has-feedback"&gt;
              &lt;input type="text" class="form-control input-sm" placeholder="Search..."&gt;
              &lt;span class="glyphicon glyphicon-search form-control-feedback"&gt;&lt;/span&gt;
            &lt;/div&gt;
          &lt;/div&gt;&lt;!-- /.box-tools --&gt;
        &lt;/div&gt;&lt;!-- /.box-header --&gt;
        &lt;div class="box-body"&gt;
          The body of the box
        &lt;/div&gt;&lt;!-- /.box-body --&gt;
      &lt;/div&gt;&lt;!-- /.box --&gt;</pre>
            </div>
            <div class="col-md-4">
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tootips on buttons</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                    title="Collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fa fa-times"></i></button>
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        The body of the box
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
                <pre class="prettyprint">      &lt;div class="box box-default"&gt;
        &lt;div class="box-header with-border"&gt;
          &lt;h3 class="box-title"&gt;Tooltips on buttons&lt;/h3&gt;
          &lt;div class="box-tools pull-right"&gt;
            &lt;button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"&gt;&lt;i class="fa fa-minus"&gt;&lt;/i&gt;&lt;/button&gt;
            &lt;button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"&gt;&lt;i class="fa fa-times"&gt;&lt;/i&gt;&lt;/button&gt;
          &lt;/div&gt;&lt;!-- /.box-tools --&gt;
        &lt;/div&gt;&lt;!-- /.box-header --&gt;
        &lt;div class="box-body"&gt;
          The body of the box
        &lt;/div&gt;&lt;!-- /.box-body --&gt;
      &lt;/div&gt;&lt;!-- /.box --&gt;</pre>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <p>
            If you inserted a box into the document after <code>app.js</code> was loaded, you have to activate
            the collapse/remove buttons explicitly by calling <code>.activateBox()</code>:
        </p>
        <pre class="prettyprint"><code class="html">&lt;script&gt;
          $("#box-widget").activateBox();
      &lt;/script&gt;</code></pre>

        <h4>Loading States</h4>
        <div class="row">
            <div class="col-md-6">
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">Loading state</h3>
                    </div>
                    <div class="box-body">
                        The body of the box
                    </div><!-- /.box-body -->
                    <!-- Loading (remove the following to stop the loading)-->
                    <div class="overlay">
                        <i class="fa fa-refresh fa-spin"></i>
                    </div>
                    <!-- end loading -->
                </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-6">
                <div class="box box-default box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Loading state (.box-solid)</h3>
                    </div>
                    <div class="box-body">
                        The body of the box
                    </div><!-- /.box-body -->
                    <!-- Loading (remove the following to stop the loading)-->
                    <div class="overlay">
                        <i class="fa fa-refresh fa-spin"></i>
                    </div>
                    <!-- end loading -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
        <p class="lead">
            To simulate a loading state, simply place this code before the <code>.box</code> closing tag.
        </p>
        <pre class="prettyprint"><code class="html">&lt;div class="overlay"&gt;
        &lt;i class="fa fa-refresh fa-spin"&gt;&lt;/i&gt;
      &lt;/div&gt;
      </code></pre>
        <h3 id="component-direct-chat">Direct Chat</h3>
        <p class="lead">The direct chat widget extends the box component to create a beautiful chat interface. This
            widget
            consists of a required messages pane and an <b>optional</b> contacts pane. Examples:</p>
        <!-- Direct Chat -->
        <div class="row">
            <div class="col-md-3">
                <!-- DIRECT CHAT PRIMARY -->
                <div class="box box-primary direct-chat direct-chat-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Direct Chat</h3>
                        <div class="box-tools pull-right">
                            <span data-toggle="tooltip" title="3 New Messages" class="badge bg-light-blue">3</span>
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts"
                                    data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <!-- Conversations are loaded here -->
                        <div class="direct-chat-messages">
                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name pull-left">Alexander Pierce</span>
                                    <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                                </div><!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg"
                                     alt="message user image"><!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    Is this template really for free? That's unbelievable!
                                </div><!-- /.direct-chat-text -->
                            </div><!-- /.direct-chat-msg -->

                            <!-- Message to the right -->
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name pull-right">Sarah Bullock</span>
                                    <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                                </div><!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg"
                                     alt="message user image"><!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    You better believe it!
                                </div><!-- /.direct-chat-text -->
                            </div><!-- /.direct-chat-msg -->
                        </div><!--/.direct-chat-messages-->

                        <!-- Contacts are loaded here -->
                        <div class="direct-chat-contacts">
                            <ul class="contacts-list">
                                <li>
                                    <a href="#">
                                        <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg"
                                             alt="Contact Avatar">
                                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Count Dracula
                            <small class="contacts-list-date pull-right">2/28/2015</small>
                          </span>
                                            <span class="contacts-list-msg">How have you been? I was...</span>
                                        </div><!-- /.contacts-list-info -->
                                    </a>
                                </li><!-- End Contact Item -->
                            </ul><!-- /.contatcts-list -->
                        </div><!-- /.direct-chat-pane -->
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <form action="#" method="post">
                            <div class="input-group">
                                <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                <span class="input-group-btn">
                      <button type="button" class="btn btn-primary btn-flat">Send</button>
                    </span>
                            </div>
                        </form>
                    </div><!-- /.box-footer-->
                </div><!--/.direct-chat -->
            </div><!-- /.col -->

            <div class="col-md-3">
                <!-- DIRECT CHAT SUCCESS -->
                <div class="box box-success direct-chat direct-chat-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Direct Chat</h3>
                        <div class="box-tools pull-right">
                            <span data-toggle="tooltip" title="3 New Messages" class="badge bg-green">3</span>
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts"
                                    data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <!-- Conversations are loaded here -->
                        <div class="direct-chat-messages">
                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name pull-left">Alexander Pierce</span>
                                    <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                                </div><!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg"
                                     alt="message user image"><!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    Is this template really for free? That's unbelievable!
                                </div><!-- /.direct-chat-text -->
                            </div><!-- /.direct-chat-msg -->

                            <!-- Message to the right -->
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name pull-right">Sarah Bullock</span>
                                    <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                                </div><!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg"
                                     alt="message user image"><!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    You better believe it!
                                </div><!-- /.direct-chat-text -->
                            </div><!-- /.direct-chat-msg -->
                        </div><!--/.direct-chat-messages-->

                        <!-- Contacts are loaded here -->
                        <div class="direct-chat-contacts">
                            <ul class="contacts-list">
                                <li>
                                    <a href="#">
                                        <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg"
                                             alt="Contact Avatar">
                                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Count Dracula
                            <small class="contacts-list-date pull-right">2/28/2015</small>
                          </span>
                                            <span class="contacts-list-msg">How have you been? I was...</span>
                                        </div><!-- /.contacts-list-info -->
                                    </a>
                                </li><!-- End Contact Item -->
                            </ul><!-- /.contatcts-list -->
                        </div><!-- /.direct-chat-pane -->
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <form action="#" method="post">
                            <div class="input-group">
                                <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                <span class="input-group-btn">
                      <button type="button" class="btn btn-success btn-flat">Send</button>
                    </span>
                            </div>
                        </form>
                    </div><!-- /.box-footer-->
                </div><!--/.direct-chat -->
            </div><!-- /.col -->

            <div class="col-md-3">
                <!-- DIRECT CHAT WARNING -->
                <div class="box box-warning direct-chat direct-chat-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Direct Chat</h3>
                        <div class="box-tools pull-right">
                            <span data-toggle="tooltip" title="3 New Messages" class="badge bg-yellow">3</span>
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts"
                                    data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <!-- Conversations are loaded here -->
                        <div class="direct-chat-messages">
                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name pull-left">Alexander Pierce</span>
                                    <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                                </div><!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg"
                                     alt="message user image"><!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    Is this template really for free? That's unbelievable!
                                </div><!-- /.direct-chat-text -->
                            </div><!-- /.direct-chat-msg -->

                            <!-- Message to the right -->
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name pull-right">Sarah Bullock</span>
                                    <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                                </div><!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg"
                                     alt="message user image"><!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    You better believe it!
                                </div><!-- /.direct-chat-text -->
                            </div><!-- /.direct-chat-msg -->
                        </div><!--/.direct-chat-messages-->

                        <!-- Contacts are loaded here -->
                        <div class="direct-chat-contacts">
                            <ul class="contacts-list">
                                <li>
                                    <a href="#">
                                        <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg"
                                             alt="Contact Avatar">
                                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Count Dracula
                            <small class="contacts-list-date pull-right">2/28/2015</small>
                          </span>
                                            <span class="contacts-list-msg">How have you been? I was...</span>
                                        </div><!-- /.contacts-list-info -->
                                    </a>
                                </li><!-- End Contact Item -->
                            </ul><!-- /.contatcts-list -->
                        </div><!-- /.direct-chat-pane -->
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <form action="#" method="post">
                            <div class="input-group">
                                <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                <span class="input-group-btn">
                      <button type="button" class="btn btn-warning btn-flat">Send</button>
                    </span>
                            </div>
                        </form>
                    </div><!-- /.box-footer-->
                </div><!--/.direct-chat -->
            </div><!-- /.col -->

            <div class="col-md-3">
                <!-- DIRECT CHAT DANGER -->
                <div class="box box-danger direct-chat direct-chat-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Direct Chat</h3>
                        <div class="box-tools pull-right">
                            <span data-toggle="tooltip" title="3 New Messages" class="badge bg-red">3</span>
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts"
                                    data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <!-- Conversations are loaded here -->
                        <div class="direct-chat-messages">
                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name pull-left">Alexander Pierce</span>
                                    <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                                </div><!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg"
                                     alt="message user image"><!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    Is this template really for free? That's unbelievable!
                                </div><!-- /.direct-chat-text -->
                            </div><!-- /.direct-chat-msg -->

                            <!-- Message to the right -->
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name pull-right">Sarah Bullock</span>
                                    <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                                </div><!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg"
                                     alt="message user image"><!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    You better believe it!
                                </div><!-- /.direct-chat-text -->
                            </div><!-- /.direct-chat-msg -->
                        </div><!--/.direct-chat-messages-->

                        <!-- Contacts are loaded here -->
                        <div class="direct-chat-contacts">
                            <ul class="contacts-list">
                                <li>
                                    <a href="#">
                                        <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg"
                                             alt="Contact Avatar">
                                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Count Dracula
                            <small class="contacts-list-date pull-right">2/28/2015</small>
                          </span>
                                            <span class="contacts-list-msg">How have you been? I was...</span>
                                        </div><!-- /.contacts-list-info -->
                                    </a>
                                </li><!-- End Contact Item -->
                            </ul><!-- /.contatcts-list -->
                        </div><!-- /.direct-chat-pane -->
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <form action="#" method="post">
                            <div class="input-group">
                                <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                <span class="input-group-btn">
                      <button type="button" class="btn btn-danger btn-flat">Send</button>
                    </span>
                            </div>
                        </form>
                    </div><!-- /.box-footer-->
                </div><!--/.direct-chat -->
            </div><!-- /.col -->
        </div><!-- /.row -->
        <p class="lead">Direct Chat Markup</p>
        <pre class="prettyprint"><code class="html">
      &lt;!-- Construct the box with style you want. Here we are using box-danger --&gt;
      &lt;!-- Then add the class direct-chat and choose the direct-chat-* contexual class --&gt;
      &lt;!-- The contextual class should match the box, so we are using direct-chat-danger --&gt;
      &lt;div class="box box-danger direct-chat direct-chat-danger"&gt;
        &lt;div class="box-header with-border"&gt;
          &lt;h3 class="box-title"&gt;Direct Chat&lt;/h3&gt;
          &lt;div class="box-tools pull-right"&gt;
            &lt;span data-toggle="tooltip" title="3 New Messages" class="badge bg-red"&gt;3&lt;/span&gt;
            &lt;button class="btn btn-box-tool" data-widget="collapse"&gt;&lt;i class="fa fa-minus"&gt;&lt;/i&gt;&lt;/button&gt;
            &lt;!-- In box-tools add this button if you intend to use the contacts pane --&gt;
            &lt;button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle"&gt;&lt;i class="fa fa-comments"&gt;&lt;/i&gt;&lt;/button&gt;
            &lt;button class="btn btn-box-tool" data-widget="remove"&gt;&lt;i class="fa fa-times"&gt;&lt;/i&gt;&lt;/button&gt;
          &lt;/div&gt;
        &lt;/div&gt;&lt;!-- /.box-header --&gt;
        &lt;div class="box-body"&gt;
          &lt;!-- Conversations are loaded here --&gt;
          &lt;div class="direct-chat-messages"&gt;
            &lt;!-- Message. Default to the left --&gt;
            &lt;div class="direct-chat-msg"&gt;
              &lt;div class="direct-chat-info clearfix"&gt;
                &lt;span class="direct-chat-name pull-left"&gt;Alexander Pierce&lt;/span&gt;
                &lt;span class="direct-chat-timestamp pull-right"&gt;23 Jan 2:00 pm&lt;/span&gt;
              &lt;/div&gt;&lt;!-- /.direct-chat-info --&gt;
              &lt;img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="message user image"&gt;&lt;!-- /.direct-chat-img --&gt;
              &lt;div class="direct-chat-text"&gt;
                Is this template really for free? That's unbelievable!
              &lt;/div&gt;&lt;!-- /.direct-chat-text --&gt;
            &lt;/div&gt;&lt;!-- /.direct-chat-msg --&gt;

            &lt;!-- Message to the right --&gt;
            &lt;div class="direct-chat-msg right"&gt;
              &lt;div class="direct-chat-info clearfix"&gt;
                &lt;span class="direct-chat-name pull-right"&gt;Sarah Bullock&lt;/span&gt;
                &lt;span class="direct-chat-timestamp pull-left"&gt;23 Jan 2:05 pm&lt;/span&gt;
              &lt;/div&gt;&lt;!-- /.direct-chat-info --&gt;
              &lt;img class="direct-chat-img" src="../dist/img/user3-128x128.jpg" alt="message user image"&gt;&lt;!-- /.direct-chat-img --&gt;
              &lt;div class="direct-chat-text"&gt;
                You better believe it!
              &lt;/div&gt;&lt;!-- /.direct-chat-text --&gt;
            &lt;/div&gt;&lt;!-- /.direct-chat-msg --&gt;
          &lt;/div&gt;&lt;!--/.direct-chat-messages--&gt;

          &lt;!-- Contacts are loaded here --&gt;
          &lt;div class="direct-chat-contacts"&gt;
            &lt;ul class="contacts-list"&gt;
              &lt;li&gt;
                &lt;a href="#"&gt;
                  &lt;img class="contacts-list-img" src="../dist/img/user1-128x128.jpg" alt="Contact Avatar"&gt;
                  &lt;div class="contacts-list-info"&gt;
                    &lt;span class="contacts-list-name"&gt;
                      Count Dracula
                      &lt;small class="contacts-list-date pull-right"&gt;2/28/2015&lt;/small&gt;
                    &lt;/span&gt;
                    &lt;span class="contacts-list-msg"&gt;How have you been? I was...&lt;/span&gt;
                  &lt;/div&gt;&lt;!-- /.contacts-list-info --&gt;
                &lt;/a&gt;
              &lt;/li&gt;&lt;!-- End Contact Item --&gt;
            &lt;/ul&gt;&lt;!-- /.contatcts-list --&gt;
          &lt;/div&gt;&lt;!-- /.direct-chat-pane --&gt;
        &lt;/div&gt;&lt;!-- /.box-body --&gt;
        &lt;div class="box-footer"&gt;
          &lt;div class="input-group"&gt;
            &lt;input type="text" name="message" placeholder="Type Message ..." class="form-control"&gt;
            &lt;span class="input-group-btn"&gt;
              &lt;button type="button" class="btn btn-danger btn-flat"&gt;Send&lt;/button&gt;
            &lt;/span&gt;
          &lt;/div&gt;
        &lt;/div&gt;&lt;!-- /.box-footer--&gt;
      &lt;/div&gt;&lt;!--/.direct-chat --&gt;
      </code></pre>

        <p>Of course you can use direct chat with a solid box by adding the class <code>solid-box</code> to the box.
            Here are a couple of examples:</p>

        <!-- Direct Chat With Solid Boxes -->
        <div class="row">
            <div class="col-md-6">
                <!-- DIRECT CHAT WARNING -->
                <div class="box box-primary box-solid direct-chat direct-chat-primary">
                    <div class="box-header">
                        <h3 class="box-title">Direct Chat in a Solid Box</h3>
                        <div class="box-tools pull-right">
                            <span data-toggle="tooltip" title="3 New Messages" class="badge bg-light-blue">3</span>
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts"
                                    data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <!-- Conversations are loaded here -->
                        <div class="direct-chat-messages">
                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name pull-left">Alexander Pierce</span>
                                    <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                                </div><!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg"
                                     alt="message user image"><!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    Is this template really for free? That's unbelievable!
                                </div><!-- /.direct-chat-text -->
                            </div><!-- /.direct-chat-msg -->

                            <!-- Message to the right -->
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name pull-right">Sarah Bullock</span>
                                    <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                                </div><!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg"
                                     alt="message user image"><!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    You better believe it!
                                </div><!-- /.direct-chat-text -->
                            </div><!-- /.direct-chat-msg -->
                        </div><!--/.direct-chat-messages-->

                        <!-- Contacts are loaded here -->
                        <div class="direct-chat-contacts">
                            <ul class="contacts-list">
                                <li>
                                    <a href="#">
                                        <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg"
                                             alt="Contact Avatar">
                                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Count Dracula
                            <small class="contacts-list-date pull-right">2/28/2015</small>
                          </span>
                                            <span class="contacts-list-msg">How have you been? I was...</span>
                                        </div><!-- /.contacts-list-info -->
                                    </a>
                                </li><!-- End Contact Item -->
                            </ul><!-- /.contatcts-list -->
                        </div><!-- /.direct-chat-pane -->
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <form action="#" method="post">
                            <div class="input-group">
                                <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                <span class="input-group-btn">
                      <button type="button" class="btn btn-primary btn-flat">Send</button>
                    </span>
                            </div>
                        </form>
                    </div><!-- /.box-footer-->
                </div><!--/.direct-chat -->
            </div><!-- /.col -->

            <div class="col-md-6">
                <!-- DIRECT CHAT DANGER -->
                <div class="box box-info box-solid direct-chat direct-chat-info">
                    <div class="box-header">
                        <h3 class="box-title">Direct Chat in a Solid Box</h3>
                        <div class="box-tools pull-right">
                            <span data-toggle="tooltip" title="3 New Messages" class="badge bg-aqua">3</span>
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts"
                                    data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <!-- Conversations are loaded here -->
                        <div class="direct-chat-messages">
                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name pull-left">Alexander Pierce</span>
                                    <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                                </div><!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg"
                                     alt="message user image"><!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    Is this template really for free? That's unbelievable!
                                </div><!-- /.direct-chat-text -->
                            </div><!-- /.direct-chat-msg -->

                            <!-- Message to the right -->
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name pull-right">Sarah Bullock</span>
                                    <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                                </div><!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg"
                                     alt="message user image"><!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    You better believe it!
                                </div><!-- /.direct-chat-text -->
                            </div><!-- /.direct-chat-msg -->
                        </div><!--/.direct-chat-messages-->

                        <!-- Contacts are loaded here -->
                        <div class="direct-chat-contacts">
                            <ul class="contacts-list">
                                <li>
                                    <a href="#">
                                        <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg"
                                             alt="Contact Avatar">
                                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Count Dracula
                            <small class="contacts-list-date pull-right">2/28/2015</small>
                          </span>
                                            <span class="contacts-list-msg">How have you been? I was...</span>
                                        </div><!-- /.contacts-list-info -->
                                    </a>
                                </li><!-- End Contact Item -->
                            </ul><!-- /.contatcts-list -->
                        </div><!-- /.direct-chat-pane -->
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <form action="#" method="post">
                            <div class="input-group">
                                <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat">Send</button>
                    </span>
                            </div>
                        </form>
                    </div><!-- /.box-footer-->
                </div><!--/.direct-chat -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section>


    <!-- ============================================================= -->

    <section id="plugins">
        <h2 class="page-header"><a href="#plugins">Plugins</a></h2>
        <p class="lead">AdminLTE makes use of the following plugins. For documentation, updates or license information,
            please visit the provided links.</p>
        <div class="row bring-up">
            <div class="col-sm-3">
                <ul class="list-unstyled">
                    <li><h4>Charts</h4></li>
                    <li><a href="http://www.chartjs.org/" target="_blank">ChartJS</a></li>
                    <li><a href="http://www.flotcharts.org/" target="_blank">Flot</a></li>
                    <li><a href="http://morrisjs.github.io/morris.js/" target="_blank">Morris.js</a></li>
                    <li><a href="http://omnipotent.net/jquery.sparkline/" target="_blank">Sparkline</a></li>
                </ul>
            </div><!-- /.col -->
            <div class="col-sm-3">
                <ul class="list-unstyled">
                    <li><h4>Form Elements</h4></li>
                    <li><a href="https://github.com/seiyria/bootstrap-slider/">Bootstrap Slider</a></li>
                    <li><a href="http://ionden.com/a/plugins/ion.rangeSlider/en.html" target="_blank">Ion Slider</a>
                    </li>
                    <li><a href="http://bootstrap-datepicker.readthedocs.org/" target="_blank">Date Picker</a></li>
                    <li><a href="http://www.daterangepicker.com/" target="_blank">Date Range Picker</a></li>
                    <li><a href="http://mjolnic.com/bootstrap-colorpicker/" target="_blank">Color Picker</a></li>
                    <li><a href="https://github.com/jdewit/bootstrap-timepicker/" target="_blank">Time Picker</a></li>
                    <li><a href="http://fronteed.com/iCheck/" target="_blank">iCheck</a></li>
                    <li><a href="https://github.com/RobinHerbots/jquery.inputmask/" target="_blank">Input Mask</a></li>
                </ul>
            </div><!-- /.col -->
            <div class="col-sm-3">
                <ul class="list-unstyled">
                    <li><h4>Editors</h4></li>
                    <li><a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg/" target="_blank">Bootstrap
                            WYSIHTML5</a></li>
                    <li><a href="http://ckeditor.com/" target="_blank">CK Editor</a></li>
                </ul>
            </div><!-- /. col -->
            <div class="col-sm-3">
                <ul class="list-unstyled">
                    <li><h4>Other</h4></li>
                    <li><a href="https://datatables.net/examples/styling/bootstrap.html" target="_blank">DataTables</a>
                    </li>
                    <li><a href="http://fullcalendar.io/" target="_blank">Full Calendar</a></li>
                    <li><a href="http://jqueryui.com/" target="_blank">jQuery UI</a></li>
                    <li><a href="http://anthonyterrien.com/knob/" target="_blank">jQuery Knob</a></li>
                    <li><a href="http://jvectormap.com/" target="_blank">jVector Map</a></li>
                    <li><a href="http://rocha.la/jQuery-slimScroll/" target="_blank">Slim Scroll</a></li>
                    <li><a href="http://github.hubspot.com/pace/docs/welcome/" target="_blank">Pace</a></li>
                </ul>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section>


    <!-- ============================================================= -->

    <section id="browsers">
        <h2 class="page-header"><a href="#browsers">Browser Support</a></h2>
        <p class="lead">AdminLTE supports the following browsers:</p>
        <ul>
            <li>IE9+</li>
            <li>Firefox (latest)</li>
            <li>Safari (latest)</li>
            <li>Chrome (latest)</li>
            <li>Opera (latest)</li>
        </ul>
        <p><b>Note:</b> IE9 does not support transitions or animations. The template will function properly but it won't
            use animations/transitions on IE9.</p>
    </section>


    <!-- ============================================================= -->

    <section id="upgrade">
        <h2 class="page-header"><a href="#upgrade">Upgrade Guide</a></h2>
        <p class="lead">To upgrade from version 1.x to the lateset version, follow this guide.</p>
        <h3>New Files</h3>
        <p>Make sure you update all CSS and JS files that are related to AdminLTE. Otherwise, the layout will not
            function properly. Most important files are AdminLTE.css, skins CSS files, and app.js.</p>
        <h3>Layout Changes</h3>
        <ol>
            <li>The .wrapper div must be placed immediately after the body tag rather than after the header</li>
            <li>Change the .header div to .main-header <code>&lt;div class="main-header"&gt;</code></li>
            <li>Change the .right-side class to .content-wrapper <code>&lt;div class="content-wrapper"&gt;</code></li>
            <li>Change the .left-side class to .main-sidebar <code>&lt;div class="main-sidebar"&gt;</code></li>
            <li>In the navbar, change .navbar-right to .navbar-custom-menu <code>&lt;div
                    class="navbar-custom-menu"&gt;</code></li>
        </ol>
        <h3>Navbar Custom Dropdown Menus</h3>
        <ol>
            <li>The icons in the notification menu do not need bg-* classes. They should be replaced with contextual
                text color class such as text-aqua or text-red.
            </li>
        </ol>
        <h3>Login, Registration and Lockscreen Pages</h3>
        <p>There are major changes to the HTML markup and style to these pages. The best way is to copy the page's code
            and customize it.</p>
        <p>And you should be set to go!</p>
        <h3>Mailbox</h3>
        <p>Mailbox got an upgrade to include three different views. The views are inbox, read mail, and compose new
            email. To use these views,
            you should use the provided HTML files in the pages/mailbox folder.</p>
        <p><b class="text-red">Note:</b> the old mailbox layout has been deprecated in favor of the new one and will be
            removed by the next release.</p>
    </section>


    <!-- ============================================================= -->

    <section id="implementations">
        <h2 class="page-header"><a href="#implementations">Implementations</a></h2>
        <p class="lead">Thanks to many of AdminLTE users, there are multiple implementations of the template
            for easy integration with back-end frameworks. The following are some of them:</p>

        <ul>
            <li><a href="https://github.com/mmdsharifi/AdminLTE-RTL">Persian RTL</a> by <a
                    href="https://github.com/mmdsharifi">Mohammad Sharifi</a></li>
            <li><a href="https://github.com/dmstr/yii2-adminlte-asset" target="_blank">Yii 2</a> by <a
                    href="https://github.com/schmunk42" target="_blank">Tobias Munk</a></li>
            <li><a href="https://github.com/yajra/laravel-admin-template" target="_blank">Laravel</a> by <a
                    href="https://github.com/yajra" target="_blank">Arjay Angeles</a></li>
            <li><a href="https://github.com/acacha/adminlte-laravel" target="_blank">Laravel 5 package</a> by <a
                    href="https://github.com/acacha" target="_blank">Sergi Tur Badenas</a></li>
            <li><a href="https://github.com/jeroennoten/Laravel-AdminLTE" target="_blank">Laravel-AdminLTE</a> by <a
                    href="https://github.com/jeroennoten" target="_blank">Jeroen Noten</a></li>
            <li><a href="https://github.com/avanzu/AdminThemeBundle" target="_blank">Symfony</a> by <a
                    href="https://github.com/avanzu" target="_blank">Marc Bach</a></li>
            <li>Rails gems: <a href="https://github.com/nicolas-besnard/adminlte2-rails"
                               target="_blank">adminlte2-rails</a> by <a href="https://github.com/nicolas-besnard"
                                                                         target="_blank">Nicolas Besnard</a> and <a
                    href="https://github.com/racketlogger/lte-rails" target="_blank">lte-rails</a> (using AdminLTE
                sources) by <a href="https://github.com/racketlogger" target="_blank">Carlos at RacketLogger</a></li>
            <li><a href="https://github.com/misterGF/CoPilot" target="_blank">CoPilot (AdminLTE with Vue.js)</a> by<a
                    href="https://github.com/misterGF" target="_blank">Gil Ferreira</a></li>
        </ul>

        <p><b class="text-red">Note:</b> these implementations are not supported by Almsaeed Studio. However,
            they do provide a good example of how to integrate AdminLTE into different frameworks. For the latest
            release
            of AdminLTE, please visit our <a href="https://github.com/almasaeed2010/AdminLTE">repository</a> or <a
                href="https://adminlte.io">website</a></p>
    </section>


    <!-- ============================================================= -->

    <section id="faq">
        <h2 class="page-header"><a href="#faq">FAQ</a></h2>
        <h3>Can AdminLTE be used with Wordpress?</h3>
        <p class="lead">AdminLTE is an HTML template that can be used for any purpose. However, it is not made to be
            easily installed on Wordpress. It will require some effort and enough knowledge of the Wordpress script to
            do so.</p>

        <h3>Is there an integration guide for PHP frameworks such as Yii or Symfony?</h3>
        <p class="lead">Short answer, no. However, there are forks and tutorials around the web that provide info on how
            to integrate with many different frameworks. There are even versions of AdminLTE that are integrated with
            jQuery ajax, AngularJS and/or MVC5 ASP .NET.</p>

        <h3>How do I get notified of new AdminLTE versions?</h3>
        <p class="lead">The best option is to subscribe to our mailing list using the <a
                href="https://adminlte.io/#subscribe">subscription form on Almsaeed Studio</a>.
            If that's not appealing to you, you may watch the <a href="https://github.com/almasaeed2010/AdminLTE">repository
                on Github</a> or visit <a href="https://adminlte.io">Almsaeed Studio</a> every now and then for updates
            and announcements.</p>
    </section>


    <!-- ============================================================= -->

    <section id="license">
        <h2 class="page-header"><a href="#license">License</a></h2>
        <h3>AdminLTE</h3>
        <p class="lead">
            AdminLTE is an open source project that is licensed under the <a href="http://opensource.org/licenses/MIT">MIT
                license</a>.
            This allows you to do pretty much anything you want as long as you include
            the copyright in "all copies or substantial portions of the Software."
            Attribution is not required (though very much appreciated).
        </p>
    </section>


    <div>
        <div class="row docs-premium-template">
            <div class="col-sm-12 col-md-6">
                <div class="box box-solid">
                    <div class="box-body">
                        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
                            PREMIUM TEMPLATE
                        </h4>
                        <div class="media">
                            <div class="media-left">
                                <a href="https://themequarry.com/theme/ample-admin-the-ultimate-dashboard-template-ASFEDA95"
                                   class="ad-click-event">
                                    <img src="https://themequarry.com/storage/images/approved/ASFEDA95_v1.0_58db8909df34d.png"
                                         alt="Ample Admin" class="media-object"
                                         style="width: 150px;height: auto;border-radius: 4px;box-shadow: 0 1px 3px rgba(0,0,0,.15);">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="clearfix">
                                    <p class="pull-right">
                                        <a href="https://themequarry.com/theme/ample-admin-the-ultimate-dashboard-template-ASFEDA95"
                                           class="btn btn-success btn-sm ad-click-event">
                                            LEARN MORE
                                        </a>
                                    </p>

                                    <h4 style="margin-top: 0">Ample Admin ─ $22</h4>

                                    <p>Admin + Frontend Template</p>
                                    <p style="margin-bottom: 0">
                                        <i class="fa fa-shopping-cart margin-r5"></i> 47+ purchases
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="box box-solid">
                    <div class="box-body">
                        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
                            PREMIUM TEMPLATE
                        </h4>
                        <div class="media">
                            <div class="media-left">
                                <a href="https://themequarry.com/theme/appzia-responsive-admin-dashboard-ASFEDAAB"
                                   class="ad-click-event">
                                    <img src="https://themequarry.com/storage/images/approved/ASFEDAAB_v1.0.0_5992c3326c307.png"
                                         alt="Appzia" class="media-object"
                                         style="width: 150px;height: auto;border-radius: 4px;box-shadow: 0 1px 3px rgba(0,0,0,.15);">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="clearfix">
                                    <p class="pull-right">
                                        <a href="https://themequarry.com/theme/appzia-responsive-admin-dashboard-ASFEDAAB"
                                           class="btn btn-success btn-sm ad-click-event">
                                            LEARN MORE
                                        </a>
                                    </p>

                                    <h4 style="margin-top: 0">Appzia ─ $18</h4>

                                    <p>Responsive Admin Dashboard</p>
                                    <p style="margin-bottom: 0">
                                        <i class="fa fa-shopping-cart margin-r5"></i> NEW purchases
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.content -->