<?php
/**
 * Created by IntelliJ IDEA.
 * User: Miles
 * Date: 9/3/17
 * Time: 11:16 PM
 *
 */

const DS = DIRECTORY_SEPARATOR;

define('SERVER_ROOT', __DIR__ . DS);  // Set our root folder for the application

if (false === (include SERVER_ROOT . 'Data/Vendors/autoload.php')) {     // Load the autoload() for composer dependencies located in the Services folder
    print '<h1>Loading Composer Failed. Please try again.</h1><h2>' . SERVER_ROOT . '</h2>' and die;     // Composer autoload
}

$app = new Carbon\Carbon(include SERVER_ROOT . "config/Config.php");


/** At one point I returned the invocation of $app to show that
 * the application will not exit on completion, but rather return
 * back to this index file. This means you can still execute code
 * after $app(); I stopped returning the __invoke() because if false
 * is returned, the index will re-execute. This turns very bad quickly.
 */

$app();

return true;


