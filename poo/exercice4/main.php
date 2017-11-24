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


echo "{$val1} + {$val2}  = {$add} \n";
echo "{$val1} - {$val2}  = {$sous} \n";
echo "{$val1} * {$val2}  = {$multi} \n";
echo "{$val1} ^ {$val2}  = {$puis} \n";
echo "{$val1} % {$val2}  = {$reste} \n";
