<?php

use Carbon\Route;
use Carbon\View;


$url = new class extends Route
{
    public function defaultRoute()  // Sockets will not execute this
    {
        View::$forceWrapper = true; // this will hard refresh the wrapper

        if (!$_SESSION['id']):
            return $this->wrap()('Documentation/Home.php');  // don't change how wrap works, I know it looks funny
        else:
            return MVC('user', 'profile');
        endif;
    }

    public function fullPage()
    {
        return catchErrors(function (string $file) {
            return include APP_VIEW . $file;
        });
    }

    public function wrap()
    {
        return function (string $file) : bool {
            return View::content(APP_VIEW . $file);
        };
    }

    public function MVC()
    {
        return function (string $class, string $method, array &$argv = []) {
            return MVC($class, $method, $argv);         // So I can throw in ->structure($route->MVC())-> anywhere
        };
    }

    public function events()
    {
        return function ($class, $method, $argv) {
            global $alert, $json;

            $argv = CM($class, $method, $argv);

            if (!is_array($alert)) {
                $alert = array();
            }

            $json = [
                'Errors' => $alert,
                'Event' => 'Controller->Model',        // This doesn't do anything.. Its just a mental note when I look at the json's in console (controller->model only)
                'Model' => $argv
            ];

            print PHP_EOL . json_encode($json) . PHP_EOL; // new line ensures it sends through the socket

            return true;
        };
    }

};

$url->structure($url->wrap());


#################################### CarbonPHP Doc
if ((string)$url->match('Home/', 'Documentation/Home.php') ||
    (string)$url->match('CarbonPHP', 'Documentation/Introduction.php') ||
    (string)$url->match('Installation', 'Documentation/Installation.php') ||
    (string)$url->match('Implementations', 'Documentation/Implementations.php') ||
    (string)$url->match('Dependencies', 'Documentation/Dependencies.php') ||
    (string)$url->match('FileStructure', 'Documentation/QuickStart/FileStructure.php') ||
    (string)$url->match('Environment', 'Documentation/QuickStart/Environment.php') ||
    (string)$url->match('Options', 'Documentation/QuickStart/Options.php') ||
    (string)$url->match('Bootstrap', 'Documentation/QuickStart/Bootstrap.php') ||
    (string)$url->match('Wrapper', 'Documentation/QuickStart/Wrapper.php') ||
    (string)$url->match('Parallel', 'Documentation/QuickStart/ParallelProcessing.php') ||
    (string)$url->match('Overview', 'Documentation/PHP/Overview.php') ||
    (string)$url->match('Entities', 'Documentation/PHP/Entities.php') ||
    (string)$url->match('Request', 'Documentation/PHP/Request.php') ||
    (string)$url->match('Route', 'Documentation/PHP/Route.php') ||
    (string)$url->match('Server', 'Documentation/PHP/Server.php') ||
    (string)$url->match('Session', 'Documentation/PHP/Session.php') ||
    (string)$url->match('Singleton', 'Documentation/PHP/Singleton.php') ||
    (string)$url->match('View', 'Documentation/PHP/View.php') ||
    (string)$url->match('OSSupport', 'Documentation/PlatformSupport.php') ||
    (string)$url->match('UpgradeGuide', 'Documentation/PlatformSupport.php') ||
    (string)$url->match('Support', 'Documentation/Support.php') ||
    (string)$url->match('License', 'Documentation/License.php') ||
    (string)$url->match('AdminLTE', 'Documentation/AdminLTE.php') ||
    (string)$url->match('N00B', 'Documentation/N00B.php')) {
    return true;
}



###################################### AdminLTE DOC

if ((string)$url->match('UIElements/{AdminLTE?}', function ($AdminLTE) use ($url) {

    $AdminLTE = (new \Carbon\Request())->set($AdminLTE)->word();  // must be validated

    if (!$AdminLTE) {
        View::$forceWrapper = true;
        $AdminLTE = 'widgets';
    }

    if (file_exists(SERVER_ROOT.APP_VIEW.$path = 'AdminLTE'.DS.$AdminLTE.'.php') ||
        file_exists(SERVER_ROOT.APP_VIEW.$path = 'AdminLTE/Charts'.DS.$AdminLTE.'.php') ||
        file_exists(SERVER_ROOT.APP_VIEW.$path = 'AdminLTE/Examples'.DS.$AdminLTE.'.php') ||
        file_exists(SERVER_ROOT.APP_VIEW.$path = 'AdminLTE/Forms'.DS.$AdminLTE.'.php') ||
        file_exists(SERVER_ROOT.APP_VIEW.$path = 'AdminLTE/Layout'.DS.$AdminLTE.'.php') ||
        file_exists(SERVER_ROOT.APP_VIEW.$path = 'AdminLTE/Mailbox'.DS.$AdminLTE.'.php') ||
        file_exists(SERVER_ROOT.APP_VIEW.$path = 'AdminLTE/Tables'.DS.$AdminLTE.'.php') ||
        file_exists(SERVER_ROOT.APP_VIEW.$path = 'AdminLTE/UI'.DS.$AdminLTE.'.php')) {

        View::$wrapper = SERVER_ROOT . APP_VIEW . 'AdminLTE/wrapper.php';

        $url->wrap()($path);
    }
})) {
    return true;
}

$url->structure($url->MVC());

################################### MVC
if (!$_SESSION['id']) {  // Signed out

    if ((string)$url->match('Login/*', 'User', 'login') ||
        (string)$url->match('Google/{request?}/*', 'User', 'google') ||
        (string)$url->match('Facebook/{request?}/*', 'User', 'facebook') ||
        (string)$url->match('Register/*', 'User', 'Register') ||           // Register
        (string)$url->match('Recover/{user_email?}/{user_generated_string?}/', 'User', 'recover')) {     // Recover $userId
        return true;
    }

} else {
    // Event
    if (((AJAX && !PJAX) || SOCKET) && (
            (string)$url->match('Search/{search}/', 'Search', 'all') ||
            (string)$url->match('Messages/', 'Messages', 'navigation') ||
            (string)$url->match('Messages/{user_uri}/', 'Messages', 'chat') ||    // chat box widget
            (string)$url->structure($url->events())->match('Follow/{user_id}/', 'User', 'follow') ||
            (string)$url->match('Unfollow/{user_id}/', 'User', 'unfollow'))) {
        return true;         // Event
    }

    // $url->match('Notifications/*', 'notifications/notifications', ['widget' => '#NavNotifications']);

    // $url->match('tasks/*', 'tasks/tasks', ['widget' => '#NavTasks']);

    if (SOCKET) {
        return false;
    }                // Sockets only get json

    ################################### MVC
    $url->structure($url->MVC());
    if ((string)$url->match('Profile/{user_uri?}/', 'User', 'profile') ||   // Profile $user
        (string)$url->match('Messages/*', 'Messages', 'messages') ||
        (string)$url->match('Logout/*', function () {
            Controller\User::logout();
        })) {
        return true;          // Logout
    }

}

return (string)$url->structure($url->MVC())->match('Activate/{email?}/{email_code?}/', 'User', 'activate') ||  // Activate $email $email_code
    (string)$url->structure($url->wrap())->match('404/*', 'Error/404error.php') ||
    (string)$url->match('500/*', 'Error/500error.php');

