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
const TEAMS = 6;
const TEAM_MEMBERS = 7;
const GOLF_TOURNAMENTS = 8;
const GOLF_ROUNDS = 9;
const GOLF_COURSE = 10;
const ENTITY_COMMENTS = 11;
const ENTITY_PHOTOS = 12;


// Template
const COMPOSER = 'Data' . DS . 'Vendor' . DS;
const TEMPLATE = COMPOSER . 'almasaeed2010' . DS . 'adminlte' . DS;

// Facebook
const FACEBOOK_APP_ID = '';
const FACEBOOK_APP_SECRET = '';

// Google
const GOOGLE_APP_ID = '';
const GOOGLE_APP_SECRET = '';


return [
    'SITE' => [
        'URL' => '',

        'ROOT' => SERVER_ROOT,

        'CONFIG' => __FILE__,

        'TIMEZONE' => 'America/Phoenix',

        'TITLE' => 'Carbon 6',

        'VERSION' => '1.1.7',

        'SEND_EMAIL' => 'Support@Stats.Coach',

        'REPLY_EMAIL' => 'Richard@Miles.Systmes',

        'BOOTSTRAP' => 'Application/Route.php',

        'HTTP' => (bool)true,
    ],

    'SERIALIZE' => [ 'user', 'team', 'course', 'tournament'],

    'SESSION' => [
        'REMOTE' => (bool)true,

        'PATH' => (string)SERVER_ROOT . 'Data/Sessions',

        'CALLBACK' => function ($reset) {
            if ($_SESSION['id'] ?? $_SESSION['id'] = false) {
                global $user;

                if (!is_array($user)) $user = [];

                if (!is_array($me = &$user[$_SESSION['id']] ?? false)) {          // || $reset  /  but this shouldn't matter
                    Tables\Users::all($me, $_SESSION['id']);
                    Tables\Users::sport($me,  $_SESSION['id']);
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

        'LOCATION' => (string)SERVER_ROOT . 'Data/Logs/',

        'STORE' => (bool)true,

        'SHOW' => (bool)true,

        'FULL' => (bool)true
    ],

    'VIEW' => [
        'VIEW' => 'Application/View/',

        'WRAPPER' => 'wrapper.php',
    ],

    'DATABASE' => [
        'DB_HOST' => '127.0.0.1',

        'DB_NAME' => '',

        'DB_USER' => '',

        'DB_PASS' => '',

        'INITIAL_SETUP' => true                       // no tables
    ],

    'AUTOLOAD' => [                                     // 'Carbon' => '',
        'View' => SERVER_ROOT . 'Application/View',

        'Tables' => SERVER_ROOT . 'Application/Tables',

        'Controller' => SERVER_ROOT . 'Application/Controller',

        'Model' => SERVER_ROOT . 'Application/Model',

        'App' => SERVER_ROOT . 'Application'
    ]
];

