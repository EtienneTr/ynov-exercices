<?php

/**
 * Created by PhpStorm.
 * User: Etienne
 * Date: 24/11/2017
 * Time: 16:36
 */
class Calculator
{
    static public function addition($val1, $val2){
        return $val1 + $val2;
    }

    static public function soustraction($val1, $val2){
        return $val1 - $val2;
    }

    static public function multiplication($val1, $val2){
        return $val1 * $val2;
    }

    static public function puissance($val1, $val2){
        return pow($val1, $val2);
    }

    static public function resteDivision($val1, $val2){
        return $val1 % $val2;
    }

}


Class TaxIncludedCalculator extends Calculator {

    private $taxRate;

    /**
     * TaxIncludedCalculator constructor.
     * @param $taxRate
     */
    public function __construct($taxRate)
    {
        $this->taxRate = $taxRate;
    }

    public function additionRate($val1, $val2){
        return self::addition($val1, $val2) * ($this->taxRate /100);
    }

    public function soustractionRate($val1, $val2){
        return self::soustraction($val1, $val2) * ($this->taxRate /100);
    }

    public function multiplicationRate($val1, $val2){
        return self::multiplication($val1, $val2) * ($this->taxRate /100);
    }

    public function puissanceRate($val1, $val2){
        return self::puissance($val1, $val2) * ($this->taxRate /100);
    }

    public function resteDivisionRate($val1, $val2){
        return self::resteDivision($val1, $val2) * ($this->taxRate /100);
    }
}