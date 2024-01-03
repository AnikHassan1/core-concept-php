<?php
abstract class car
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function intro():string;
}
class audi extends car{
    public function intro():string{
        return"this is abstruct class $this->name";
    }
}
$std = new audi("Audi");
$std->intro();
?>

<?php
abstract class parentClass{
    abstract protected function prefixname($name);
}

class childClass extends parentClass{
    public function prefixname($name,$separator = ".",$greet="Dear"){
        if($name =="John Doe" ){
            $prefix="Mr";
        }elseif($name=="Raisa"){
            $prefix="Ms";
        }else{
            $prefix=" ";
        }
        return "{$greet}{$prefix}{$separator}{$name}";
    }
}
$std2 = new childClass;
echo $std2->prefixname("Raisa");
?>