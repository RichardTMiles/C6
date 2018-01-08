<!DOCTYPE html>
<html>
<?php
include_once SERVER_ROOT . APP_VIEW . 'AdminLTE/Head.php';
$logged_in = $_SESSION['id'] ?? false;
?>
<!-- Full Width Column -->
<body class="skin-green fixed sidebar-mini sidebar-collapse" style="background: transparent">
<div <?= ($logged_in ? 'class="wrapper"' : 'class="container" id="pjax-content"') ?> style="background: transparent">

    <?php
    if ($logged_in) :
        global $user;
        $my = $user[$_SESSION['id']];
        require_once SERVER_ROOT . APP_VIEW . 'AdminLTE/logged-in-layout.php'; ?>

        <div class="content-wrapper" style="background: transparent">
            <div class="container">
                <div id="alert"></div>
                <!-- content -->
                <div id="pjax-content">
                    <?= $this->bufferedContent ?? ''?>
                </div>
                <!-- /.content -->
            </div>
            <div class="clearfix"></div>
            <!-- /.container -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer" style="">
            <div class="container">
                <div class="pull-right hidden-xs">
                    <a href="<?= SITE ?>Privacy/">Privacy Policy</a> <b>Version</b> <?= SITE_VERSION ?>
                </div>
                <strong>Copyright &copy; 2014-2017 <a href="http://lilRichard.com">Stats Coach</a>.</strong>
                <!--script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script-->
            </div>
            <!-- /.container -->
        </footer>

    <?php else:
        print $this->bufferedContent;
    endif; ?>
</div>
<?php
include_once SERVER_ROOT . APP_VIEW . 'AdminLTE/Styles.php';
include_once SERVER_ROOT . APP_VIEW . 'AdminLTE/Scripts.php';
?>
</body>
</html>
