<?php
/**
 * Created by PhpStorm.
 * User: anygroup
 * Date: 09.11.2018
 * Time: 18:41
 */

//Child Class should be able to run parent class that means
//It must be 100% correspondence interface/abstract class and all methods in child classes.


//WRONG
abstract class Animal{
    abstract function run();
}

class Dog extends Animal{
    function run(){
        echo "running";
    }
}

class Fish extends Animal{
    function run(){
        //fish can not run
    }
    //We can't use run but swim so this is breaking the rule of Liskov
}


//CORRECT
abstract class Animal{
    abstract function move();
}

class Dog extends Animal{
    function move(){
        echo "running";
    }
}

class Fish extends Animal{
    function move(){
        //fish can not run
    }
    //We can't use run but swim so this is breaking the rule of Liskov
}