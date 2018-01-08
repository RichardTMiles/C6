<?php

use Carbon\Route;
use Carbon\View;

$url = new class extends Route
{
    public function defaultRoute()  // Sockets will not execute this
    {
        if (!$_SESSION['id']):
            return $this->FullPage()('AdminLTE/home.php');
        else:
            return MVC('user', 'profile');
        endif;
    }

    public function FullPage()
    {
        return catchErrors(function (string $file) {
            return View::contents(APP_VIEW . $file);
        });      // This could cache
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

if ((string)$url->structure($url->FullPage())->match('Home/', 'AdminLTE/home.php') ||

    ((string)$url->match('CarbonPHP/', 'AdminLTE/home.php')) ||

    ((string)$url->match('Installation/', 'Documentation/Installation.php')) ||

    ((string)$url->match('Dependencies/', 'Documentation/Dependencies.php')) ||

    ((string)$url->match('FileStructure/', 'Documentation/QuickStart/FileStructure.php')) ||

    ((string)$url->match('Htaccess/', 'Documentation/QuickStart/htaccess.php')) ||

    ((string)$url->match('Options/', 'Documentation/QuickStart/Options.php')) ||

    ((string)$url->match('Bootstrap/', 'Documentation/QuickStart/Bootstrap.php')) ||

    ((string)$url->match('Wrapper/', 'Documentation/QuickStart/Wrapper.php')) ||

    ((string)$url->match('Parallel/', 'Documentation/QuickStart/ParallelProcessing.php')) ||

    ((string)$url->match('Overview/', 'Documentation/PHP/Overview.php')) ||

    ((string)$url->match('Entities/', 'Documentation/PHP/Entities.php')) ||

    ((string)$url->match('Request/', 'Documentation/PHP/Request.php')) ||

    ((string)$url->match('Route/', 'Documentation/PHP/Route.php')) ||

    ((string)$url->match('Server/', 'Documentation/PHP/Server.php')) ||

    ((string)$url->match('Session/', 'Documentation/PHP/Session.php')) ||

    ((string)$url->match('Singleton/', 'Documentation/PHP/Singleton.php')) ||

    ((string)$url->match('View/', 'Documentation/PHP/View.php')) ||

    ((string)$url->match('OSSupport/', 'Documentation/OSSupport.php')) ||

    ((string)$url->match('UpgradeGuide/', 'Documentation/OSSupport.php')) ||

    ((string)$url->match('Support/', 'Documentation/Support.php')) ||

    ((string)$url->match('License/', 'Documentation/License.php')) ||

    ((string)$url->match('AdminLTE/', 'Documentation/AdminLTE.php')) ||

    ((string)$url->match('N00B/', 'Documentation/N00B.php'))) return true;

$url->structure($url->MVC());

################################### MVC
if (!$_SESSION['id']) {  // Signed out

     if ((bool)(string)($url->match('Login/*', 'User', 'login')) ||

     ((string)($url->match('Google/{request?}/*', 'User', 'google'))) ||

     ((string)($url->match('Facebook/{request?}/*', 'User', 'facebook'))) ||

     ((string)($url->match('Register/*', 'User', 'Register'))) ||           // Register

     ((string)($url->match('Recover/{user_email?}/{user_generated_string?}/', 'User', 'recover'))))     // Recover $userId
        return true;

} else {

    if ((SOCKET || (AJAX && !PJAX)) &&    // Implying a json will be returned
        ((string)($url->match('Search/{search}/', 'Search', 'all'))) ||

        ((string)($url->match('Messages/', 'Messages', 'navigation'))) ||

        ((string)($url->match('Messages/{user_uri}/', 'Messages', 'chat'))) ||    // chat box widget

        ((string)($url->structure($url->Events())->match('Follow/{user_id}/', 'User', 'follow'))) ||
        // Event
        ((string)($url->match('Unfollow/{user_id}/', 'User', 'unfollow'))))
        return true;         // Event

    // $url->match('Notifications/*', 'notifications/notifications', ['widget' => '#NavNotifications']);

    // $url->match('tasks/*', 'tasks/tasks', ['widget' => '#NavTasks']);

    if (SOCKET) return false;                // Sockets only get json

    ################################### MVC
    if ((string)($url->structure($url->MVC())->match('Profile/{user_uri?}/', 'User', 'profile')) ||   // Profile $user

        ((string)($url->match('Messages/*', 'Messages', 'messages'))) ||

        ((string)($url->match('Logout/*', function () { Controller\User::logout(); }))))
        return true;          // Logout

}


return (string)($url->structure($url->MVC())->match('Activate/{email?}/{email_code?}/', 'User', 'activate')) ||  // Activate $email $email_code
    (string)($url->structure($url->FullPage())->match('404/*', 'Error/404error.php')) ||
    (string)($url->match('500/*', 'Error/500error.php'));

