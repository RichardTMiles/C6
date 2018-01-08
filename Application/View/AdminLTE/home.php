<!DOCTYPE html>
<html>
<?php
include_once SERVER_ROOT . APP_VIEW . 'AdminLTE/Head.php';
?>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-purple layout-top-nav" style="background: transparent">
<div class="wrapper" style="background: transparent">

    <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="<?= site ?>" class="navbar-brand"><b>C</b>6</a>

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">

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
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
                        </div>
                    </form>

                </div>
                <!-- /.navbar-collapse -->
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                <?php if ($_SESSION['id']) :
                    global $user;
                    $me = $user[$_SESSION['id']];
                    include_once 'navbar-nav.php';
                 else : ?>
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li><a href="<?= site ?>Register/">Try Me ---></a></li>
                        <li><a href="<?= site ?>login/">Login <span class="sr-only">(current)</span></a></li>
                        <li><a href="<?= site ?>Register/">Register </a></li>
                    </ul>
                <?php endif; ?>
                </div>
                <!-- /.navbar-custom-menu -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
    <!-- Full Width Column -->
    <div class="content-wrapper" style="background: black; opacity: .9">
        <div class="container">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1 style="color: ghostwhite">
                    Top Navigation
                    <small style="color: ghostwhite">Example 2.0</small>
                </h1>
                <ol class="breadcrumb" style="color: ghostwhite">
                    <li><a href="#" style="color: ghostwhite"><i class="fa fa-dashboard" style="color: ghostwhite"></i>
                            Home</a></li>
                    <li><a href="#" style="color: ghostwhite">Layout</a></li>
                    <li class="active" style="color: ghostwhite">Top Navigation</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-6">

                        <div class="callout bg-green">
                            <h4>Heads Up!</h4>
                            <p>Carbon 6, or C6 for short, is a ready-made open source application template.
                                I make use of CarbonPHP our backend framework as well as AdminLTE for the
                                user interface. CarbonPHP and AdminLTE can be used independently for other
                                project specifications.
                            </p>
                        </div>

                        <div class="callout bg-orange">
                            <h4>New C6 project with Composer</h4>
                            composer create-project --stability dev --prefer-dist richardtmiles/c6 .
                        </div>

                        <div class="callout bg-black">
                            <h4>Quick Start</h4>
                            <br>
                            CarbonPHP is where the work is done.<br>
                            C6 provides an abstraction to run CarbonPHP in jQuery.<br><br>

                            <h5>PHP</h5>
                            <ul>
                                <li>startApplication &nbsp;( &nbsp;$new_url&nbsp; )</li>
                            </ul>
                            <h5>jQuery</h5>
                            <ul>
                                <li>$.fn.startApplication &nbsp;( &nbsp;string&nbsp; )</li>
                            </ul>
                            <br>
                            <p>startApplication() restarts your Route.php file from line 1.<br><br>
                                If a string is passed to the funtion, it will replace the url with PJAX.

                            </p>
                            <h5></h5>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <!-- PHP LCOAL -->
                            <div class="callout bg-purple" style="overflow-x: scroll">
                                <h4>Run locally with PHP's Built in server</h4>

                                <p>>> php -S localhost:8000 index.php</p>
                            </div>
                            <!-- ./ PHP LOCAL -->
                            <!-- GOOGLE  -->
                            <div class="callout bg-info">
                                <h4>Google Cloud App Engine Support</h4>

                                <p>>> gcloud app deploy</p>

                                <h4>Google Cloud Local MYSQL</h4>
                                <p>>> ./cloud_sql_proxy
                                    -instances="[example-name]:[location]:[databaseserver]"=tcp:[port]</p>
                            </div>
                            <!-- ./ GOOGLE -->

                            <!-- small box -->
                            <div class="small-box bg-gray">
                                <div class="inner">
                                    <h3>Webscokets Built in!</h3>

                                    <p>and made easy...</p>
                                </div>
                                <div class="icon">
                                    <i class="glyphicon glyphicon-globe"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    Learn more <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>


                        </div>
                    </div>


                </div>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="container">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.0
            </div>
            <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
            reserved.
        </div>
        <!-- /.container -->
    </footer>
</div>
<!-- ./wrapper -->

<?php
include_once SERVER_ROOT . APP_VIEW . 'AdminLTE/Styles.php';
include_once SERVER_ROOT . APP_VIEW . 'AdminLTE/Scripts.php';
?>

</body>
</html>

