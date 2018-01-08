<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- PJAX Content Control -->
    <meta http-equiv="x-pjax-version" content="<?= $_SESSION['X_PJAX_Version'] ?>">
</head>
<body>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div id="alert"></div>
    <article>
        <!-- /.content -->
    </article>
    <div class="clearfix"></div>

</div>
<!-- /.content-wrapper -->

<script> d

    // JQuery
    loadJS("<?= $this->versionControl(COMPOSER . 'richardtmiles/carbonphp/Helpers/Jquery.min.js') ?>", function () {
        //-- Jquery Form -->
        loadJS('<?= $this->versionControl(COMPOSER . 'bower-asset/jquery-form/jquery.form.js')?>');

        //-- PJAX-->
        loadJS("<?= $this->versionControl(COMPOSER . 'bower-asset/jquery-pjax/jquery.pjax.js') ?>", function () {
            loadJS("<?= $this->versionControl(COMPOSER . 'bower-asset/mustache.js/mustache.js') ?>", function () {
                loadJS("<?= $this->versionControl(COMPOSER . 'richardtmiles/carbonphp/mustache.js') ?>", function () {
                    carbon('article', '');
                });
            });
        });
    });
</script>
</body>
</html>