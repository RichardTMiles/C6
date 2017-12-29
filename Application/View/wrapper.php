<!DOCTYPE html>
<html>
<?php

include_once SERVER_ROOT . PUBLIC_FOLDER . 'StatsCoach/Head.php';

$userType = ($this->user[$_SESSION['id']]['user_type'] ?? false);
$layout = ($userType == 'Athlete') ? 'hold-transition skin-green layout-top-nav' :
    (($userType == 'Coach') ? 'skin-green fixed sidebar-mini sidebar-collapse' :
        'stats-wrap');
?>
<!-- Full Width Column -->
<body class="<?= $layout ?>" style="background: transparent">
<div <?= (($userType == 'Athlete' || $userType == 'Coach') ? 'class="wrapper"' : 'class="container" id="pjax-content"') ?>
        style="background: transparent">

    <?php

    if (($_SESSION['id'] ?? false) && is_array($this->user[$_SESSION['id']] ?? false)):
        $my = $this->user[$_SESSION['id']];
        ($userType == 'Coach' ?  require_once SERVER_ROOT . PUBLIC_FOLDER . 'AdminLTE/CoachLayout.php' :
            require_once SERVER_ROOT . PUBLIC_FOLDER . 'AdminLTE/AthleteLayout.php'); ?>

        <div class="content-wrapper" style="background: transparent">
            <div class="container">
                <div id="alert"></div>
                <!-- content -->
                <div id="pjax-content">
                    <?= $this->bufferedContent ?>
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
include_once SERVER_ROOT . PUBLIC_FOLDER . 'StatsCoach/Styles.php';
include_once SERVER_ROOT . PUBLIC_FOLDER . 'StatsCoach/Scripts.php';
?>
</body>
</html>
