<!-- Content Header (Page header) -->
<div class="content-header">
    <h1><a href="">
            Recommended Project Directory Structure</a>
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> CarbonPHP</a></li>
        <li class="active">ZEND FRAMEWORK</li>
    </ol>
</div>

<!-- Main content -->
<div class="content body">

    <p class="lead">
        <a href="https://framework.zend.com/manual/1.10/en/project-structure.project.html">Zend Framework</a> has a very
        intuitive and clear file archetecture. We're going to use their recommended file hierarchy with a few tweaks.
    </p>
    <div class="col-md-offset-4">
        <a href="/Installation">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success">
                Automatically setup a new application!
            </button>
        </a>
    </div>

    <br>
    <pre class="hierarchy bring-up"><code class="language-bash" data-lang="bash">Recommended File Hierarchy

      Website Directory/
      │
      ├── Application/
      │   ├── Configs/
      │   ├── Controller/
      │   ├── Model/
      │   │   ├── Helpers/
      │   ├── Tables/
      │   ├── View/
      │
      ├── Data/
      │   ├── Cache/
      │   ├── Indexes/
      │   ├── Logs/
      │   ├── Session/
      │   ├── Temp/
      │   ├── Uploads/
      │   ├── Views/
      │
      ├── Public/
      │   ├── Cache/
      │
      └── Tests/

    </code></pre>


    <section id="introduction">
        <p class="lead">
            <b>CarbonPHP</b> recommends using an MVC structure.<br>
            The following function is used for many <a href="Home">Stats.Coach</a> routes involving<a href="#"> user
                input</a>.
        <ul>
            <li>
                Hello
            </li>
        </ul>
        <br>
        <b><?= highlight('function MVC(string $class, string $method, array &$argv = [])
    {
        static $view = false;

        $controller = "Controller\\$class";
        $model = "Model\\$class";

        $run = function ($class, $argv) use ($method) {
            return call_user_func_array([new $class, "$method"],    // This automatically loads the file
                is_array($argv) ? $argv : [$argv]);
        };

        catchErrors(function () use ($run, $controller, $model, $argv) {
            if (!empty($argv = $run($controller, $argv))) $run($model, $argv);
        })();

        $view = $view ?: View::getInstance(false);     // Send the wrapper? only run once. (singleton)

        // This could cache or send
        $view->content("Public/$class/$method.php");  // but will exit(1);
    }') ?></b>

        The following function is made available when <?= highlight('Carbon::Application();') ?> is run.
        </p>
    </section><!-- /#introduction -->


</div><!-- /.content -->

