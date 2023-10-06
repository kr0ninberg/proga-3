
<?php
    spl_autoload_register('MyAutoloadRegister');

    function MyAutoloadRegister($className){
        require_once('D:\xampp-folder\htdocs\211-171-352-384\lab3'.str_replace('\\', '/', $className).'.php');
    }
    // require('src/Models/Users/User.php');
     // require('src/Models/Articles/Article.php');

    $user = new src\models\Users\User('Ivan');
    $article = new src\models\Articles\Article('title', 'text', $user);
    echo $article->getAuthor()->getName();
?>