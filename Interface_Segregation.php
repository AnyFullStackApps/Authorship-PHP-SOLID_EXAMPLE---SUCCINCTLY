<?php
/**
 * Created by PhpStorm.
 * User: anygroup
 * Date: 09.11.2018
 * Time: 19:25
 */

//Do not create function in Interfaces that child classes will not use
//Many client-specific interfaces are better than one general-purpose interface.


//WRONG
interface Workable{
    public function code();
    public function test();
}
class Programmer implements Workable
{
    public function code(){return 'coding';}
    public function test(){return 'testing';}
}

class Tester implements Workable
{
    public function code(){return 'He can not coding!!!';} //WRONG
    public function test(){return 'testing';}
}


//CORRECT
interface Codeable{
    public function code();
}
interface Testable{
    public function test();
}
class Programmer implements Codeable, Testable
{
    public function code(){return 'coding';}
    public function test(){return 'testing';}
}
class Tester implements Testable
{
    public function test(){return 'testing ';}
}