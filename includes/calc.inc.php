<?php 

class Calc {
    private $_num1;
    private $_num2;
    private $_cal;

    public function __construct(int $num1, int $num2, string $cal){
        $this->_num1 = $num1;
        $this->_num2 = $num2;
        $this->_cal = $cal;
    }

    public function operations(){
        switch ($this->_cal){
            case 'add':
                $result = $this->_num1 + $this->_num2;
                break;
            case 'sub':
                $result = $this->_num1 - $this->_num2;
                break;
            case 'mul':
                $result = $this->_num1 * $this->_num2;
                break;
            case 'div':
                if($this->_num2 == 0){
                    $result = "You can't be divide by 0";
                }else{
                    $result = $this->_num1 / $this->_num2;
                }
                break;   
            default:
                $result = "Error!";
                break;     
        }
        return $result;
    }

}