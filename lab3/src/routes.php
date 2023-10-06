<?php
    return $route = [
        '~^hello/(.*)$~'=>[src\Controllers\MainController::class, 'sayHello'],
        '~^$~'=>[src\Controllers\MainController::class, 'main'],
    ]
?>