<!DOCTYPE html>
<html>
<?php
include_once SERVER_ROOT . APP_VIEW . 'Layout/Head.php';
$logged_in = $_SESSION['id'] ?? false;
?>
<!-- Full Width Column -->
<body class="hold-transition skin-red-light layout-top-nav fixed">
<div class="wrapper" style="background-color: rgba(0, 0, 0, 0.7)">


    <header class="main-header">
        <nav class="navbar navbar-static-top">

            <div class="navbar-header">
                <a href="<?= SITE ?>" class="navbar-brand" id="mytitle"><b>Miles</b>.Systems
                    <small> LLC</small>
                </a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?=SITE?>About">About Us<span class="sr-only">(current)</span></a></li>
                    <li><a href="<?=SITE?>Portfolio">Portfolio</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Strategy <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?=SITE?>Designers">The Team</a></li>
                            <li><a href="<?=SITE?>Speed">Quick Content</a></li>
                            <li><a href="<?=SITE?>Turnaround">Our Turnaround</a></li>
                            <li class="divider"></li>
                            <li><a href="<?=SITE?>Price">Price Point</a></li>
                            <li class="divider"></li>
                            <li><a href="<?=SITE?>Mail">Contact Us</a></li>
                        </ul>
                    </li>
                </ul>
                <script>//--  Sidebar Search Engine
                    Carbon(() => {
                        let $menu = $('#left-sidebar-menu' + ' li');

                        let activity = function () {
                            $("li a").filter(function () {
                                $menu.removeClass('active');
                                return this.href === location.href.replace(/#.*/, "");
                            }).parent().addClass("active");
                        };

                        activity();

                        $menu.click(function () {
                            $menu.removeClass('active');
                            $(this).addClass('active');
                        });

                        $('#mytitle').click(function () {
                            $menu.removeClass('active');
                        });

                        $('#sidebar-form').on('submit', function (e) {
                            e.preventDefault();
                        });

                        $('#left-sidebar-menu li.active').data('lte.pushmenu.active', true);

                        $('#search-input').on('keyup', function () {
                            let term = $('#search-input').val().trim(),
                                sidebar = $('#left-sidebar-menu li');

                            if (term.length === 0) {
                                sidebar.each(function () {
                                    $(this).show(0);
                                    $(this).removeClass('active');
                                    if ($(this).data('lte.pushmenu.active')) {
                                        $(this).addClass('active');
                                    }
                                });
                                return;
                            }

                            sidebar.each(function () {
                                if ($(this).text().toLowerCase().indexOf(term.toLowerCase()) === -1) {
                                    $(this).hide(0);
                                    $(this).removeClass('pushmenu-search-found', false);

                                    if ($(this).is('.treeview')) {
                                        $(this).removeClass('active');
                                    }
                                } else {
                                    $(this).show(0);
                                    $(this).addClass('pushmenu-search-found');

                                    if ($(this).is('.treeview')) {
                                        $(this).addClass('active');
                                    }

                                    let parent = $(this).parents('li').first();
                                    if (parent.is('.treeview')) {
                                        parent.show(0);
                                    }
                                }

                                if ($(this).is('.header')) {
                                    $(this).show();
                                }
                            });

                            $('#left-sidebar-menu li.pushmenu-search-found.treeview').each(function () {
                                $(this).find('.pushmenu-search-found').show(0);
                            });
                        });

                    })
                </script>

                <!--form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input onkeyup="$.fn.startApplication('<?=SITE.'Search/'?>'+this.value)" type="text" class="form-control" id="navbar-search-input" placeholder="Search">
                    </div>
                </form-->
            </div>
            <!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li><a href="<?=SITE?>UIElements">Explore</a></li>
                    <!--li><a href="<?=SITE?>login">Login</a></li-->
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-custom-menu -->

            <!-- /.container-fluid -->
        </nav>
    </header>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background: transparent">
        <!--  style="background: transparent"  Add this to use the backstretch fn-->
        <div id="alert"></div>
        <!-- content -->
        <div class="col-md-offset-1 col-md-10">
            <div id="pjax-content">
                <?= \Carbon\View::$bufferedContent ?? '' ?>
            </div>
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer bg-black" style="border: none;">
        <div class="container">
            <div class="pull-right hidden-xs">
                <a href="<?= SITE ?>Privacy/" class="text-red">Privacy Policy</a> <b>Version</b> <?= SITE_VERSION ?>
            </div>
            <strong>Copyright &copy; 2014-2017 <a href="<?=SITE?>"><span class="text-red">Richard Miles</span></a>.</strong>
            <!--script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script-->
        </div>
        <!-- /.container -->
    </footer>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-yellow"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input type="checkbox" class="pull-right">
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>


    <?php
    include_once SERVER_ROOT . APP_VIEW . 'Layout/Styles.php';
    include_once SERVER_ROOT . APP_VIEW . 'Layout/Scripts.php';
    ?>
</body>
</html>
