<?php
class names
{
    private $sub;
    private $resuit;
    public function set($sub, $resuit)
    {
        $this->sub = $sub;
        $this->resuit = $resuit;
    }
    public function dispaly()
    {
        echo "$this->sub . $this->resuit";
    }
}
class color extends names
{
    const constant = "use constant";
    public $total;
    public function set($sub, $resuit, $total = null)
    {
        parent::set($sub, $resuit);
        $this->total = $total;
    }
    public function display()
    {
        parent::dispaly();
        echo "{$this->total}";
        echo self::constant;
    }
}
$std = new color;
$std->set("bangla", 56, 100);
$std->display();
