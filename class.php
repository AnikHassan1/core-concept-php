<?php
class fruits
{
    public $name;
    protected $roll;
    protected function set($name, $roll)
    {
        $this->name = $name;
        $this->roll = $roll;
    }
    public function get($nam,$rol)
    {
       $this-> set($nam,$rol);
    }
    public function display()
    {
        return $this->name . $this->roll;
    }
    private function password($passwor){
       echo $passwor;
    }
    public function passwordss($pass){
        $this->password($pass);
    }
}
$std = new fruits;
$std->get("anik", 45);
echo $std->display();
$std->passwordss("Anik4890@");
