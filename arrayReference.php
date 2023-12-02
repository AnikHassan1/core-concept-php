<?php
#create array
$fruits=array("apple"=>200,"Orange"=>220,"Mango"=>50);
print_r ($fruits)."<br>";
echo count($fruits)."<br>";
#foreach loops
foreach($fruits as $x=>$value){
    echo $x. $value."<br>";
}
#array_chunk total array theke number anuzaye bag kore
$names=array("anik","Hassan","tarif","Arif","anik","Mondol","tadif");
 print_r(array_chunk($names,2))."<br>";
#column onusare man return korbe
 $student=array(
    array("fast_name"=>"anik"),
    array("fast_name"=>"Masud"),
    array("fast_name"=>"tadif"),
);

$fastname=array_column($student,"fast_name");
echo "<br>";
print_r($fastname);
echo "<br>";
#array combine multiple array  one key and one value 
$age=array(12,21,23,12,34,56,78);

$c=array_combine($names,$age);
print_r($c);
echo "<br>";
#count_values counted the array same valus
print_r(array_count_values($names));
echo "<br>";
#array_diff compare two array return difference value
$a1=array("a"=>"red2","b"=>"green2","c"=>"blue2","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$resuit =array_diff($a1,$a2);
print_r($resuit);
echo "<br>";
?>