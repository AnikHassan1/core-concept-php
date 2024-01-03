<?php
interface Animal{
    public function makeSound();
}
class cat implements Animal{
    public function makeSound(){
        echo "Meow";
    }
}
$animals = new Cat;
$animals->makeSound();
?>