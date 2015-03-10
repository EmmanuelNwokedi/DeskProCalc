<?php

class Multiplication implements CalcOperator
{
	public function run($number, $result)
	{
		return $result * $number;
	}
}