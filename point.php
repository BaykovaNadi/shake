<?php
class Point
{
    public $x;
    public $y;
    public $sym;
    public $my_array = array();
    
    function __construct() {
        for ($i = 0; $i <= 9; $i++) {
            $this->my_array[$i] = '----------';
        };
    }
    
    public function drawPoint()
    {       
        $this->my_array[$this->x][$this->y] = $this->sym;
        print_r ($this->my_array);
        // for ($i = 0; $i <= 9; $i++) {
        //     print_r ($this->my_array[$i]);
        //     echo (" \n");
        // };
    }
}  

?>