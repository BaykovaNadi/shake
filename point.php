<?php
class Point
{
    public $x;
    public $y;
    public $sym;
    public $my_array = array();
    
    function __construct($x, $y, $sym) {
        for ($i = 0; $i <= 9; $i++) {
            $this->my_array[$i] = '----------';
        };
        $this->x = $x;
        $this->y = $y;
        $this->sym = $sym;
    }
    
    public function drawPoint()
    {       
        $this->my_array[$this->x][$this->y] = $this->sym;
        print_r ($this->my_array);
    }
}  

?>