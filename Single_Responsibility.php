<?php
/**
 * Created by PhpStorm.
 * User: anygroup
 * Date: 09.11.2018
 * Time: 18:17
 */

//WRONG
class Employee{
    private $name;
    private $street;
    private $city;
    private $email;

    public function validateEmail(){
        //This class should not do that
    }
}
//======================================================

//CORRECT
class Employee{
    private $name;
    private $address;
    private $email;
    public function __construct(Address $address, string $name, string $email){
        $this->email = EmailValidator::validate($email);
        //...
    }
}

class Address{
    private $street;
    private $city;
}

class EmailValidator{
    public static function validate(string $email){
        //...
    }
}