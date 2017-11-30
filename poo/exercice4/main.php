<?php
/**
 * Created by PhpStorm.
 * User: Etienne
 * Date: 24/11/2017
 * Time: 17:00
 */

require_once __DIR__. './Calculator.php';

$val1 = 5;
$val2 = 9;

$add = Calculator::addition($val1,$val2);
$sous = Calculator::soustraction($val1,$val2);
$multi = Calculator::multiplication($val1,$val2);
$puis = Calculator::puissance($val1,$val2);
$reste = Calculator::resteDivision($val1,$val2);

echo "Calculator";
echo "{$val1} + {$val2}  = {$add} \n";
echo "{$val1} - {$val2}  = {$sous} \n";
echo "{$val1} * {$val2}  = {$multi} \n";
echo "{$val1} ^ {$val2}  = {$puis} \n";
echo "{$val1} % {$val2}  = {$reste} \r\n<br>";

$taxRate = 50;
$taxRateClass = new TaxIncludedCalculator($taxRate);

$add = $taxRateClass->additionRate($val1,$val2);
$sous = $taxRateClass->soustractionRate($val1,$val2);
$multi = $taxRateClass->multiplicationRate($val1,$val2);
$puis = $taxRateClass->puissanceRate($val1,$val2);
$reste = $taxRateClass->resteDivisionRate($val1,$val2);

echo "\r\n TaxRate {$taxRate}% \n\n";
echo "{$val1} + {$val2}  = {$add} \n";
echo "{$val1} - {$val2}  = {$sous} \n";
echo "{$val1} * {$val2}  = {$multi} \n";
echo "{$val1} ^ {$val2}  = {$puis} \n";
echo "{$val1} % {$val2}  = {$reste} \r\n<br>";