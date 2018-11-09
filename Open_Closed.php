<?php
/**
 * Created by PhpStorm.
 * User: anygroup
 * Date: 09.11.2018
 * Time: 18:33
 */

//WRONG
class Programmer{
    public function coding(){return 'coding';}
}

class Tester{
    public function testing(){return 'testing';}
}

class Management{
    public function development($member)
    {
        if ($member instanceof Programmer) {$member->code();}
        elseif ($member instanceof Tester) {$member->test();};
    }
}

//CORRECT
interface Workable{
    public function work();
}

class Programmer implements Workable{
    public function work(){return 'coding';}
}

class Tester implements Workable{
    public function work(){return 'testing';}
}

class Management{
    public function development(Workable $member)
    {
        return $member->work();
    }
}
