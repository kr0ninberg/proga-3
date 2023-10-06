
<?php
    spl_autoload_register('MyAutoloadRegister');

    function MyAutoloadRegister($className){
        //require_once('D:\xampp-folder\htdocs\211-171-352-384\lab3'.str_replace('\\', '/', $className).'.php');
        require_once('../'.str_replace('\\', '/', $className).'.php');
    }
    // require('src/Models/Users/User.php');
    // require('src/Models/Articles/Article.php');

    $url = $_GET['route'] ?? '';
    $routes = require('../src/routes.php');
    //var_dump($routes);
    $pattern = '~^hello/(.*)$~';
    $controller = new src\Controllers\MainController;
    preg_match($pattern, $url, $matches);
    //var_dump($matches);

    if(!empty($matches)){
        $controller->sayHello($matches[1]);
    } else $controller->main();

    $pattern = '~^$~';

    if(!empty($matches)){
        $controller->main();
        return;
    }
    echo 'not found'

    /*if(!empty($_GET['name'])){
        $controller->sayHello($_GET['name']);
    } else $controller->main();

    $user = new src\models\Users\User('Ivan');
    $article = new src\models\Articles\Article('title', 'text', $user);*/
    // echo $url
    //echo $article->getAuthor()->getName();
?>