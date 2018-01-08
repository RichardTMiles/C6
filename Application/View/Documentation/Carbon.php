<!-- Content Header (Page header) -->
<div class="content-header col-lg-10">
    <br>
    <br>
    <h1>
        Documentation
        <small>Version 1.*</small>
    </h1>
</div>

<!-- Main content -->
<div class="content body col-lg-10">
    <p class="lead">
        <b>CarbonPHP is a library</b> which allows developers to <b>edit the DOM in real-time.</b>
        We provide you with the tools to needed to create a full scale application in minutes.
        Before we start be sure to check out <a href="<?= SITE ?>Dependencies"> our dependencies.</a>
    </p>

    <br>
    <!-- ============================================================= -->

    <div>
        <!-- Custom Tabs (Pulled to the right) -->
        <div class="nav-tabs-custom">

            <ul class="nav nav-tabs pull-right">
                <li><a href="#Mapping" data-toggle="tab">Routing</a></li>
                <li><a href="#Configuration" data-toggle="tab">Configuration</a></li>
                <li><a href="#Install" data-toggle="tab">Installation</a></li>
                <li class="active"><a href="#Why" data-toggle="tab">Why?</a></li>
                <li class="pull-left header"><i class="fa fa-th"></i> Introduction</li>
            </ul>

            <div class="tab-content" style="overflow-x: scroll;">

                <div class="tab-pane active" id="Why">

                    CarbonPHP's core objective is to load all content in a <b>controlled asynchronous fashion</b>.
                    Features can be modified or replaced to suit your unique development and feature needs.
                    Here are some modules for quick reference.
                    <br><br>
                    <div class="row">
                        <ul>
                            <div class="col-sm-3">
                                <li><a href="">Session</a></li>
                                <li><a href="">Database</a></li>
                                <li><a href="">Autoloading</a></li>
                            </div>
                            <div class="col-sm-3">
                                <li><a href="">View</a></li>
                                <li><a href="">Request</a></li>
                                <li><a href="">Route</a></li>
                            </div>

                            <div class="col-sm-3">
                                <li><a href="">Forks</a></li>
                                <li><a href="">Files</a></li>
                                <li><a href="">Servers & Sockets</a></li>
                            </div>
                            <div class="col-sm-3">
                                <li><a href="">Serialized</a></li>
                                <li><a href="">Skeleton</a></li>
                                <li><a href="">Entities</a></li>
                            </div>
                        </ul>
                    </div>
                    <h4>Technical Overview</h4>

                    <ul>
                        <li><b>HTTP</b> and <b>HTTPS</b> requests will always return the <b>outer HTML presentation layer.</b><br><br></li>

                        <li><?=highlight('<form>')?> data and<?=highlight('<a href="">')?> links will automatically be sent through AJAX.
                            Post data is cleared from all other connections other that ajax.<br><br></li>

                        <li>When the browser receives the outer view ( HTML code ) it will begin processing the external resources
                            such as styles, scripts, and images.<br><br>
                        </li>
                        <li>During this time we will continue processing the users request to determine
                            the html that should be sent back. Typically this is database heavy.
                            We cache (store) the inner presentation layer in the users session and exit.<br><br>
                        </li>
                        <li>The user should be almost done rendering the view where we'll place the carbon.js script.
                            which tells the browser to pull and render the cached content from our server.<br><br>
                        </li>
                        <li>
                            Finally, Mustache templates allow us to process the php data into html
                            on the users processor rather than our servers.
                        </li>
                    </ul>

                    <div class="callout callout-warning"></div>

                    <b>We send the view to the user as soon as possible.</b> If a <b>session callback</b> is callable
                    then the HTML wrapper will send after our session has started. Thus the session callback should only
                    be used if your outer wrapper may change due to some arbitrary condition. For example, if the application
                    uses a user system, it maybe necessary pull the users from the database and change or reload
                    the content wrapper.
                    <br><br><br>
                    Content can be requested through HTTP, HTTPS, AJAX, and SOCKETS. To help the developer the
                    all connection types are defined constants and the current connection is set to true. <br><br>
                    <?= highlight('const SOCKETS = true;     // This code would only be run for a socket connection') ?>
                    <br><br>
                    <a href="Initiation"> Connection constants are defined on CarbonPHP initiation.</a>
                </div>


                <div class="tab-pane" id="Install">
                    <br><b>We recommend CarbonPHP be installed as a using the shell command below.</b>
                    This will automatically set up our project and install all of our needed and recommended
                    dependencies.
                    <br>
                    <br>
                    <div class="callout callout-info">
                        <?= highlight('wget http://CarbonPHP.com/InstallCarbon.sh -O - | sh ') ?>
                    </div>
                    You can also install using composer or download directly with github.
                    <a href="Installation">See other installation
                        methods here.</a><br>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="Configuration">
                    <br><b>Classes should be initialized using the Carbon::Application method.</b> A
                    list of optional variables will determine the structure of your application. The method will
                    return a callable function to execute the bootstrap. We chose this functionality so developers
                    could preform request on the session before mapping the url if needed.
                    Our bootstrap will only deal with mapping/routing a user requested URI to appropriate methods.
                    The Application (setup) method should be run once.
                    <br><br>
                    <?= highlight("Carbon\Carbon::Application( );        // This will only start a session") ?>
                    <br><br>
                    <?= highlight("Carbon\Carbon::Application( )( );    // Setup then execute the bootstrap") ?>
                    <br><br>
                    However inorder to run the bootstrap it's path
                    must be given to the <b>SITE => BOOTSTRAP => Variable </b></p>
                    Because we did not specify a routing function the second function would neatly fail.
                    The code below shows how the options will be presented to the library.
                    <br><br>
                    <?= highlight('Carbon\Carbon::Application( [ 
                    "SITE" => [ "BOOTSTRAP" => "Route.php" ]
                    ] )( );') ?>
                    <br><br>
                    This will execute and attempt to run the "Route.php" file from the root of the CarbonPHP library.
                    To override the root directory, which is recommended, the <b>SITE => ROOT => Variable</b> should be
                    set. <br><br>
                    <div class="callout callout-info"><h4><a href="Options">Quick Preference Reference.</a></h4></div>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="Mapping">
                    <h4>Easy Search Engines Optimization</h4>
                    <p><b>URI's should be intuitive and easy to comprehend when optimising for SEO.</b><br>
                        Its important to note that each request will hit the server twice.
                        The second request should return the inner wrapper processed during the first request.
                        This is generally good for speed when processing dynamic inner content.
                        To use this dynamic request state processing you must use the View::contents method.
                        <br><br>
                        <?= highlight('View::contents( \'Home.php\') and die;') ?>
                        <br><br>
                        Even though the function call is static the view class uses <a href="Singleton">Singleton</a>, so template files
                        passed to the method will still inherit the view class <b>as well as the global scope.</b>
                        You can use the route class to map urls to the appropriate views.
                    </p>
                    <?= highlight('
// on match run function
$url->match(\'CarbonPHP/*\', function () {      // Stars match any proceeding string  
    View::contents( \'home.php\');
});

// match variables in URI
$url->match(\'CarbonPHP/{folder}/{file}/\', function ($folder, $file){
    View::contents("\$folder\$file.php");
});

// if reaches we match until a `*` we will return match 
$url->match(\'CarbonPHP/{notOptional}/{Optional?}/\', function ($notOptional, $Optional){
    if (Optional != false)
        View::contents( "/notOptional.html" );
    else 
        View::contents( "/Optional.html" );
});

') ?>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="Wrapper">
                    <?= highlight(CODE_EXAMPLES . 'WrapperHome.php', 'html') ?>
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- nav-tabs-custom -->
    </div>

    <!-- ============================================================= -->


    <section id="introduction">

        <h2 class="page-header">
            <a href="#introduction">Less than a second</a></h2>


        <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4>
                <a href="https://www.thinkwithgoogle.com/marketing-resources/experience-design/speed-is-key-optimize-your-mobile-experience/"><i
                            class="icon fa fa-info"></i></a> Google's Analysis</h4>
            "... 40% of [customers] will wait no more than three seconds before abandoning a retail or travel site."
        </div>
        <p class="lead">
            We analysed trending frameworks in every language to provide a semantically pleasing, powerful, and portable
            library.
            On average, CarbonPHP's application framework can render content in under a hundredth of second.

            <br><br>
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="info-box bg-aqua">
                    <span class="info-box-icon"><i class="fa fa-fw fa-check-circle">
                        </i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Pushing</span>
                        <span class="info-box-number">Performance</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="progress-description">
                        100% on all Google speed metrics
          </span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-sm-6 col-xs-12">
                <div class="info-box bg-green">
                    <span class="info-box-icon"><i class="fa fa-terminal"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">HTML & MUSTACHE</span>
                        <span class="info-box-number">Do More</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 25%"></div>
                        </div>
                        <span class="progress-description">
            Spend less time configuring dynamic websites
          </span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-sm-6 col-xs-12">
                <div class="info-box bg-yellow">
                    <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Real Time</span>
                        <span class="info-box-number">Platform Support</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 90%"></div>
                        </div>
                        <span class="progress-description">Windows systems require and extra <a href="Dependencies">dependency</a></span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-sm-6 col-xs-12">
                <div class="info-box bg-red">
                    <span class="info-box-icon"><i class="fa fa-cubes"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Fully Degrades</span>
                        <span class="info-box-number">Completely Free</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="progress-description">CarbonPHP is modular and fully degrades</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
        </div>

    </section><!-- /#introduction -->


    <!-- ============================================================= -->

    <section>
        <h2 class="page-header"><a href="<?= SITE ?>N00B">What if im a N00B</a></h2>
        <p class="lead">
            CarbonPHP is the ultimate configuration file. It's the quick and easy setup to get you
            started
            programming high level applications quickly. It the word <b>terminal</b> is foreign...

        <div class="col-lg-6 col-sm-offset-3">
            <a href="N00B">
                <button type="button" class="btn btn-block btn-success btn-md">New Programmers Start Here!</button>
            </a>
        </div>
        </p>
    </section>


</div><!-- /.content -->
