<?php
class cart{
    private $member;
    private $list;
    function __construct($member){
        $this->list = array();
        $this->member= $member;
    }
    function addItem($pid,$qty){
        $this ->list[$pid]=$qty;
    }
    function removeItem($pid){
        unset($this ->list[$pid]);
    }
    function getList(){
        return $this->list;
    }
    function getMember(){
        return $this->member;
    }
}


class member{
    var $twID;
    function __construct($twID)
    {
        $this->twID = new TWID($twID);
    }
}

class TWID
{
    private $id;
    static $counter = 0;

    function __construct($id)
    {
        $this->id = $id;
        TWID::$counter++;
    }
    function getTWID(){
        return $this->id;
    }

    function getGender()
    {
        return true;
    }

    function getArea()
    {
        return '台中市';
    }

    static public function checkId($twid)
    {
        $ret = 0; //格式錯誤
        if (preg_match('/^[A-Z][12][0-9]{8}$/', $twid)) {
            $n12s = substr($twid, 0, 1);
            // echo $n12s;
            $letter = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
            $n12 = strpos($letter, $n12s) + 10;
            //echo $n12;
            $n1 = substr($n12, 0, 1);
            $n2 = substr($n12, 1, 1);
            $n3 = substr($twid, 1, 1);
            $n4 = substr($twid, 2, 1);
            $n5 = substr($twid, 3, 1);
            $n6 = substr($twid, 4, 1);
            $n7 = substr($twid, 5, 1);
            $n8 = substr($twid, 6, 1);
            $n9 = substr($twid, 7, 1);
            $n10 = substr($twid, 8, 1);
            $n11 = substr($twid, 9, 1);

            $sum = $n1 + $n2 * 9 + $n3 * 8 + $n4 * 7 + $n5 * 6 + $n6 * 5 + $n7 * 4 + $n8 * 3 + $n9 * 2 + $n10 + $n11;

            if ($sum % 10 == 0) {
                $ret = 1;
            } else {
                $ret = -1;
            }

        }
        return $ret;
    }
}

class Bike
{
    protected $speed;

    function __construct()
    {
        echo 'construct';
    }

    function upSpeed($gear = 1)
    {
        $this->speed = ($this->speed < 1) ? 1 : ($this->speed) * 1.2 * $gear;
    }

    function downSpeed()
    {
        $this->speed = ($this->speed < 1) ? 0 : ($this->speed) * 0.6;
    }

    function getSpeed()
    {
        return $this->speed;
    }
}

class Scooter extends Bike
{

    function __construct()
    {
        parent::__construct();
        echo 'V2';
    }

    function upSpeed($gear = 1)
    {
        parent::upSpeed($gear);
        $this->speed *= 2;
    }

}

function fx($x)
{
    $r = 2 * $x + 1;
    return $r;
}

function sayHi($who, $pre = "Hi")
{
    echo "{$pre},{$who}<br>";
}

function sayHello()
{
    $names = func_get_args();
    foreach ($names as $name) {
        echo "Hello,{$name}<br>";
    }
}

function TWID(string $twid){
    $ret = 0; //格式錯誤
    if (preg_match('/^[A-Z][12][0-9]{8}$/', $twid)) {
        $n12s = substr($twid, 0, 1);
        // echo $n12s;
        $letter = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
        $n12 = strpos($letter, $n12s) + 10;
        //echo $n12;
        $n1 = substr($n12, 0, 1);
        $n2 = substr($n12, 1, 1);
        $n3 = substr($twid, 1, 1);
        $n4 = substr($twid, 2, 1);
        $n5 = substr($twid, 3, 1);
        $n6 = substr($twid, 4, 1);
        $n7 = substr($twid, 5, 1);
        $n8 = substr($twid, 6, 1);
        $n9 = substr($twid, 7, 1);
        $n10 = substr($twid, 8, 1);
        $n11 = substr($twid, 9, 1);

        $sum = $n1 + $n2 * 9 + $n3 * 8 + $n4 * 7 + $n5 * 6 + $n6 * 5 + $n7 * 4 + $n8 * 3 + $n9 * 2 + $n10 + $n11;

        if ($sum % 10 == 0) {
            $ret = 1;
        } else {
            $ret = -1;
        }

    }
    return $ret;
}

function Lotto()
{
    $lottoballs = range(1, 49);
    shuffle($lottoballs);
    for ($i = 0; $i < 6; $i++) {
        $lot[$i] = $lottoballs[$i];
    }
    sort($lot);
    return $lot;
}