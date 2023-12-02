<?php
namespace myArea;
class anik{
    public function myValue(){
        return __CLASS__;#Magic Class retun class name;
    }
}
class aniks{
    public function myValues(){
        return __FUNCTION__;#Magic function retun class name;
    }
}

class fruits{
    public function fruit(){
        return Fruits::class;
    }
}
$std = new anik;
echo $std->myValue()."<br>";
echo __DIR__."<br>";
echo __FILE__."<br>";

$std2 = new aniks;
echo $std2->myValues()."<br>";
echo __LINE__."<br>";

$std3 =new fruits;
echo $std3->fruit()."<br>";

?>