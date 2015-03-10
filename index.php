<?php

require 'classes/Calculator.php';
require 'classes/CalcOperator.php';
require 'classes/Addition.php';
require 'classes/Subtraction.php';
require 'classes/Division.php';
require 'classes/Multiplication.php';

// Instantiates a new calculator.

$c = new Calculator;

// Operators and values are injected as dependencies.

$c->setOperation(new Addition); // Sets your arithmetic operator.
$c->calculate(1); // Sets your values, multiple values are allowed separated by comma.

$c->setOperation(new Multiplication);
$c->calculate(3);

$c->setOperation(new Addition);
$c->calculate(1,3);


echo $c->getResult();