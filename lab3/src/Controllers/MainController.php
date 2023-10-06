<?php
namespace src\Controllers;

class MainController{
    public function main(){
        echo "Hey";
    }
    public function sayHello(string $name){
        echo 'hi, '.$name;
    }
}
?>