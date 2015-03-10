<?php

class Division implements CalcOperator
{
	public function run($number, $result)
	{
		return $result / $number;
	}
}