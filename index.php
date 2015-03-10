<?php

require 'classes/Calculator.php';
require 'classes/CalcOperator.php';
require 'classes/Addition.php';
require 'classes/Subtraction.php';

// Instantiates a new calculator.

$c = new Calculator;

// Operators and values are injected as dependencies.

$c->setOperation(new Addition); // Sets your arithmetic operator.

// Test to check whether Addition is working correctly.
$c->calculate(25,35); // Sets your values, multiple values are allowed separated by comma.
echo $c->getResult();