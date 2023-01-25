<?php

namespace LaravelersAcademy\FirstPackage\Tests;

use PHPUnit\Framework\TestCase;
use LaravelersAcademy\FirstPackage\Calculator;

class CalculatorTests extends TestCase
{

	/** @test */
	public function sum_test()
	{

		$calculator = new Calculator;

		$this->assertEquals(3, $calculator->sum(1, 2));
        
        $this->assertEquals(4, $calculator->sum(2, 2));

        $this->assertEquals(5, $calculator->sum(2, 3));

	}

}