<script src="/vendor/almasaeed2010/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/vendor/bower-asset/jquery-pjax/jquery.pjax.js"></script>
<script src="/vendor/bower-asset/mustache.js/mustache.js"></script>
<script src="/vendor/richardtmiles/carbonphp/Helpers/Carbon.js"></script>

<script>
    const TEMPLATE = "/vendor/almasaeed2010/adminlte/",
        APP_VIEW = "/view/",
        COMPOSER = "/vendor/",
        carbon = new $.carbon;

    carbon.start('#pjax-content', '', false);

    //-- JQuery -->
    carbon.js(TEMPLATE + 'bower_components/jquery/dist/jquery.min.js', () => {
        //-- Jquery Form -->
        carbon.js(COMPOSER + 'bower-asset/jquery-form/src/jquery.form.js');
        //-- Bootstrap -->
        carbon.js(TEMPLATE + 'bower_components/bootstrap/dist/js/bootstrap.min.js', () => {
            //-- Slim Scroll -->
            carbon.js(TEMPLATE + 'bower_components/jquery-slimscroll/jquery.slimscroll.min.js', () => {
                //-- Fastclick -->
                carbon.js(TEMPLATE + 'bower_components/fastclick/lib/fastclick.js', () => {
                    //-- Admin LTE -->
                    carbon.js(TEMPLATE + 'dist/js/adminlte.min.js', () => {
                        //-- Template Plugins -->
                        carbon.js(COMPOSER + 'richardtmiles/carbonphp/Helpers/asynchronous.js', () => {
                            //-- Send the Carbon Event and run the Carbon Function() -->
                            carbon.event("Carbon");

                            $(document).on('pjax:complete', function () {
                                let boxes = $(".box");

                                if (!boxes.exists()){
                                    return;
                                }

                                boxes.boxWidget({
                                    animationSpeed: 500,
                                    collapseTrigger: '[data-widget="collapse"]',
                                    removeTrigger: '[data-widget="remove"]',
                                    collapseIcon: 'fa-minus',
                                    expandIcon: 'fa-plus',
                                    removeIcon: 'fa-times'
                                });
                                $('#my-box-widget').boxRefresh('load');
                            });

                            $.load_backStretch(APP_VIEW + 'Img/Carbon-red.png');
                            $('.sidebar-menu').tree();
                        });

                        carbon.js(APP_VIEW + 'AdminLTE/Demo/demo.js');
                        //-- AJAX Pace -->
                        carbon.js(TEMPLATE + 'bower_components/PACE/pace.js', () => $(document).ajaxStart(() => Pace.restart()));

                    })
                })
            })
        })
    });
    <!-- Global site tag (gtag.js) - Google Analytics -->
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-100885582-1');
</script>