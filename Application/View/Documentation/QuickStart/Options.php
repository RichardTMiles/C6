<div class="col-md-12">
    <div class="box box-solid box-warning" style="margin-top: 20px">
        <div class="box-header with-border">
            <h1 style="margin:0;">index.php does it all</h1>
        </div>
        <div class="box-body" style="overflow-x: scroll">
            <p class="lead">When you download C6 you get an exact copy of this website.
            The index file and options passed can be modified to suit your unique development.
            CarbonPHP will handle all requests passed to the index, including serving static files
                with appropriate headers and mime type.</p>
            <br>
            ####################### SERVER_ROOT . index.php
            <pre style="overflow-x: scroll"><?= highlight(SERVER_ROOT . 'index.php') ?>
            </pre>
        </div>

    </div>
</div>
<div class="col-md-12">
    <div class="box box-solid box-success" style="margin-top: 20px">
        <div class="box-header with-border">
            Config.php
        </div>
        <div class="box-body">
            <p class="lead">Our config file does not utilize all options CarbonPHP provides.
                Unneeded options can be removed, as carbonphp can
                start with out any parameters passed. This however
                is discouraged and further requests will cause unexpected behavior.
                The file below has all available options commented before the main
                options return.
            </p>

            <br>
            ####################### SERVER_ROOT . config/Config.php
            <pre style="overflow-x: scroll">
            <?= highlight(SERVER_ROOT . 'config/Config.php') ?>
                </pre>
        </div>
    </div>
</div>