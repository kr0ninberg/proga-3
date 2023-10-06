
<?php
    spl_autoload_register('MyAutoloadRegister');

    function MyAutoloadRegister($className){
        require_once('D:\xampp-folder\htdocs\211-171-352-384\lab3'.str_replace('\\', '/', $className));
    }
    //require('');
    //require('');\

    $user = new src\models\Users\User('Ivan');
    $article = new src\models\Articles\Article('title', 'text', $user);
    echo $article->getAuthor()->getName();
?>