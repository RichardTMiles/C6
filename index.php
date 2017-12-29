<?php
/**
 * Created by IntelliJ IDEA.
 * User: Miles
 * Date: 9/3/17
 * Time: 11:16 PM
 *
 */


const DS = DIRECTORY_SEPARATOR;

define('SERVER_ROOT', dirname(__FILE__) . DS);  // Set our root folder for the application

if (false == (include SERVER_ROOT . 'Data/Vendors/autoload.php'))     // Load the autoload() for composer dependencies located in the Services folder
    print  "<h1>Loading Composer Failed. Please try again.</h1>" and die;     // Composer autoload

Carbon\Carbon::Application(include_once("Application/Configs/Config.php"))();

return true;

