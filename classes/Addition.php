<?php

class Addition implements CalcOperator
{
	public function run($number, $result)
	{
		return $result + $number;
	}
}