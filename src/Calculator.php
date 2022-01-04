<?php

class Calculator
{
   function add($a,$b,$c){


       if(!$this->checkInteger($a,$b,$c)) {
           throw new Exception('Không phải là số!');
       }
       if($a <= 0 | $b <= 0 | $c<= 0) {
           throw new Exception('Dữ liệu không đúng');
       }
       if($a + $b < $c | $b + $c < $a | $a + $c < $b) {
           throw new Exception('Không phải là tam giác');
       }
       return $a + $b + $c;
   }

   function checkInteger($a,$b,$c){
       if(!is_integer($a) | !is_integer($b) | !is_integer($c)){
          return false;
       }
       return true;
   }
}