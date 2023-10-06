<?php
namespace src\Controllers;

class MainController{
    public function main(){
        echo "Hey</br>";
    }
    public function sayHello(string $name){
        echo 'hi, '.$name.'</br>';
    }
}
?>