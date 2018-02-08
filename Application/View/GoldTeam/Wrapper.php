<!DOCTYPE html>
<html>
<?php
include_once SERVER_ROOT . APP_VIEW . 'Layout/Head.php';
$logged_in = $_SESSION['id'] ?? false;
?>
<!-- Full Width Column -->
<body class="hold-transition skin-blue-light layout-top-nav fixed">
<div class="wrapper" style="background-color: rgba(0, 0, 0, 0.7)">


    <header class="main-header">
        <nav class="navbar navbar-static-top">

            <div class="navbar-header">
                <a href="<?= SITE ?>" class="navbar-brand" id="mytitle"><b>Root</b>Prerogative<small>.com</small>
                </a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employee Scheduling<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?=SITE?>FAQ">FAQ?</a></li>
                            <li><a href="<?=SITE?>Trial">Free Trial</a></li>
                            <li><a href="<?=SITE?>Features">Features</a></li>
                            <li class="divider"></li>
                            <li><a href="<?=SITE?>Contact">Contact Us</a></li>
                        </ul>
                    </li>
                    <li><a href="<?=SITE?>About">About Us<span class="sr-only">(current)</span></a></li>
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
                    <li><a href="<?=SITE?>login">Login</a></li>
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
                <a href="<?= SITE ?>Privacy/" class="text-primary">Privacy Policy</a> <b>Version</b> <?= SITE_VERSION ?>
            </div>
            <strong>Copyright &copy; 2014-2017 <a href="<?=SITE?>"><span class="text-primary">Gold Team</span></a>.</strong>
            <!--script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script-->
        </div>
        <!-- /.container -->
    </footer>

    <?php
    include_once SERVER_ROOT . APP_VIEW . 'Layout/Styles.php';
    include_once SERVER_ROOT . APP_VIEW . 'Layout/Scripts.php';
    ?>
</body>
</html>
