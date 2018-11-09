<?php
/**
 * Created by PhpStorm.
 * User: anygroup
 * Date: 09.11.2018
 * Time: 19:41
 */

//All dependents should dependent from abstraction the most, not from certain type

//WRONG
class Mailer{}

class Mailing{
    public function __construct(Mailer $mailer){
        //Wrong - no abstraction in dependency
    }
}

//CORRECT
interface Mailer{}

class SmtpMailer implements Mailer{}

class SendGridMailer implements Mailer{
    //Correct mailer is an abstraction
}
