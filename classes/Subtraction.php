<?php

class Subtraction implements CalcOperator
{
	public function run($number, $result)
	{
		return $result - $number;
	}
}