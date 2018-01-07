<?php

use Carbon\Route;
use Carbon\View;

$route = new class extends Route
{
    public function defaultRoute()  // Sockets will not execute this
    {
        if (!$_SESSION['id']):
            return include(SERVER_ROOT . 'Application/View/AdminLTE/home.php');
        else:
            return MVC('user', 'profile');
        endif;
    }

    public function MVC()
    {
        return function (string $class, string $method, array &$argv = []) {
            return MVC($class, $method, $argv);         // So I can throw in ->structure($route->MVC())-> anywhere
        };
    }

    public function Events()
    {
        return function ($class, $method, $argv) {
            global $alert, $json;

            $argv = CM($class, $method, $argv);

            if (!is_array($alert))
                $alert = array();

            if (!is_array($json))
                $json = array();

            $json = [
                'Errors' => $alert,
                'Event' => "CM",
                'Model' => $argv
            ];

            print PHP_EOL . json_encode($json) . PHP_EOL; // new line ensures it sends through the socket

            return true;
        };
    }

};

$route->structure($route->MVC());


if((string)$route->match('Home/', function () {
    return include(SERVER_ROOT . 'Application/View/AdminLTE/home.php');
})) return true;

################################### MVC
if (!$_SESSION['id']) {  // Signed out

    if ((bool)(string)($route->match('Login/*', 'User', 'login')))
        return true;

    if ((string)($route->match('Google/{request?}/*', 'User', 'google')))
        return true;
    if ((string)($route->match('Facebook/{request?}/*', 'User', 'facebook')))
        return true;
    if ((string)($route->match('Register/*', 'User', 'Register')))            // Register
        return true;
    if ((string)($route->match('Recover/{user_email?}/{user_generated_string?}/', 'User', 'recover')))     // Recover $userId
        return true;

} else {

    if (SOCKET || (AJAX && !PJAX)) {    // Implying a json will be returned
        if ((string)($route->match('Search/{search}/', 'Search', 'all')))
            return true;
        if ((string)($route->match('Messages/', 'Messages', 'navigation')))
            return true;
        if ((string)($route->match('Messages/{user_uri}/', 'Messages', 'chat')))    // chat box widget
            return true;
        if ((string)($route->structure($route->Events())->match('Follow/{user_id}/', 'User', 'follow')))           // Event
            return true;
        if ((string)($route->match('Unfollow/{user_id}/', 'User', 'unfollow')))         // Event
            return true;
        $route->structure($route->MVC());

        // $route->match('Notifications/*', 'notifications/notifications', ['widget' => '#NavNotifications']);

        // $route->match('tasks/*', 'tasks/tasks', ['widget' => '#NavTasks']);

        if (SOCKET) return false;                // Sockets only get json
    }
    ################################### MVC
    if ((string)($route->match('Profile/{user_uri?}/', 'User', 'profile')))           // Profile $user
        return true;

    $route->structure($route->MVC());


    if ((string)($route->match('Messages/*', 'Messages', 'messages')))
        return true;
      //
    if ((string)($route->match('Logout/*', function () {
        Controller\User::logout();
    }))) return true;          // Logout
}

return (string)($route->match('Activate/{email?}/{email_code?}/', 'User', 'activate')) ||  // Activate $email $email_code

    (string)($route->match('404/*', function () {
        View::contents('Application/View/Error/404error.php');
    })) ||

    (string)($route->match('500/*', function () {
        View::contents('Application/View/Error/500error.php');
    })) ||

    (string)($route->match('Privacy/*', function () {
        View::contents(SERVER_ROOT . 'Application/View/Policy/privacypolicy.php');
    })) ||

    (string)($route->match('Tests/*',
        function () {
            require_once SERVER_ROOT . 'Tests/index.php';
            exit(1);
        }
    ));

