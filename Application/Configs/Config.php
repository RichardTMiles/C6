<?php
/**
 * Created by IntelliJ IDEA.
 * User: richardmiles
 * Date: 10/29/17
 * Time: 11:14 AM
 */


// Tables that require a unique identifier
const USER = 1;
const USER_FOLLOWERS = 2;
const USER_NOTIFICATIONS = 3;
const USER_MESSAGES = 4;
const USER_TASKS = 5;
const ENTITY_COMMENTS = 6;
const ENTITY_PHOTOS = 7;


// Template
const COMPOSER = 'Data' . DS . 'Vendors' . DS;
const TEMPLATE = COMPOSER . 'almasaeed2010' . DS . 'adminlte' . DS;

// Facebook
const FACEBOOK_APP_ID = '';
const FACEBOOK_APP_SECRET = '';

// Google
const GOOGLE_APP_ID = '';
const GOOGLE_APP_SECRET = '';

return [
    'DATABASE' => [

        'DB_DSN' => getenv('MYSQL_DSN') ?: "mysql:host=127.0.0.1;dbname=StatsCoach",

        'DB_USER' => getenv('MYSQL_USER') ?: 'root',

        'DB_PASS' => getenv('MYSQL_PASSWORD') ?: 'Huskies!99',

        'INITIAL_SETUP' => false                       // no tables
    ],

    'SITE' => [
        'URL' => 'statscoach-miles.appspot.com',    // statscoach-miles.appspot.com

        'ROOT' => SERVER_ROOT,

        'ALLOWED_EXTENSIONS' => 'png|jpg|gif|jpeg|bmp|icon|js|css|woff|woff2|map|hbs|eotv',

        'CONFIG' => __FILE__,

        'TIMEZONE' => 'America/Phoenix',

        'TITLE' => 'Carbon 6',

        'VERSION' => '1.1.7',

        'SEND_EMAIL' => 'no-reply@example.com',

        'REPLY_EMAIL' => 'support@example.com',

        'BOOTSTRAP' => 'Application/Route.php',

        'HTTP' => (bool)true,
    ],

    'SESSION' => [
        'REMOTE' => (bool) true,             // Store the session in the CSQL database

        'SERIALIZE' => [ 'user' ],

        // 'PATH' => (string) SERVER_ROOT . 'Data/Sessions',    -- REMOTE must = false

        'CALLBACK' => function () {         // optional variable $reset which would be true if a url is passed to startApplication()

            if ($_SESSION['id'] ?? $_SESSION['id'] = false) {

                global $user;

                if (!is_array($user)) $user = [];

                if (!is_array($me = &$user[$_SESSION['id']] ?? false)) {          // || $reset  /  but this shouldn't matter
                    Tables\Users::all($me, $_SESSION['id']);
                    Tables\Followers::get($me,  $_SESSION['id']);
                    Tables\Messages::all($me,  $_SESSION['id']);
                }
            }
        },
    ],

    /*
    'SOCKET' => [
        'WEBSOCKETD' => true,
        'PORT' => 8888,
        'DEV' => true,
        'SSL' => [
            'KEY' => '',
            'CERT' => ''
        ]
    ],  */

    'ERROR' => [
        'LEVEL' => (int)E_ALL,

        // 'LOCATION' => (string)SERVER_ROOT . 'Data/Logs/',

        'STORE' => (bool)true,

        'SHOW' => (bool)true,

        'FULL' => (bool)true
    ],

    'VIEW' => [
        'VIEW' => 'Application/View/',

        'WRAPPER' => 'wrapper.php',
    ],


    'AUTOLOAD' => [                                     // 'Carbon' => '',
        'View' => SERVER_ROOT . 'Application/View',

        'Tables' => SERVER_ROOT . 'Application/Tables',

        'Controller' => SERVER_ROOT . 'Application/Controller',

        'Model' => SERVER_ROOT . 'Application/Model',

        'App' => SERVER_ROOT . 'Application'
    ]
];

