<?php

 include_once "src/Calculator.php";
class TriangleTest extends \PHPUnit\Framework\TestCase {

    function testAdd(){
        $a = 4;
        $b = 5;
        $c = 6;
        $expected = 15;
        $calculator = new Calculator();
        $result = $calculator->add($a,$b,$c);

        $this->assertEquals($expected,$result);
    }

    function testAddWithANegative() {
        $a = 0;
        $b = 2;
        $c = 3;
        $expected = "Dữ liệu không đúng";
        try{
            $calculator = new Calculator();
            $result = $calculator->add($a,$b,$c);
        }catch (Exception $exception) {
            $this->assertEquals($expected,$exception->getMessage());
        }
    }
    function testAddWithBNegative() {
        $a = 1;
        $b = 0;
        $c = 3;
        $expected = "Dữ liệu không đúng";
        try{
            $calculator = new Calculator();
            $result = $calculator->add($a,$b,$c);
        }catch (Exception $exception) {
            $this->assertEquals($expected,$exception->getMessage());
        }
    }
    function testAddWithCNegative() {
        $a = 3;
        $b = 2;
        $c = 0;
        $expected = "Dữ liệu không đúng";
        try{
            $calculator = new Calculator();
            $result = $calculator->add($a,$b,$c);
        }catch (Exception $exception) {
            $this->assertEquals($expected,$exception->getMessage());
        }
    }

    function testAddIsTriangle() {
        $a = 1;
        $b = 1;
        $c = 5;
        $expected = 'Không phải là tam giác';
        try{
            $calculator = new Calculator();
            $calculator->add($a,$b,$c);
        }catch(Exception $exception) {
            $this->assertEquals($expected,$exception->getMessage());
        }
    }
}