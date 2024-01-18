<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\SalaryCalculator;

/**
 * Тестирование класса SalaryCalculator.
 * 
 * @author a.imaev <smartsites.dev27@gmail.com>
 */
class SalaryCalculatorTest extends TestCase
{
    /**
     * Тестирование вычисления заработной платы сотрудников.
     * 
     * @retun void
     */
    public function testCalculate(): void
    {
        $salaryCalculator = new SalaryCalculator();
        $result = $salaryCalculator->calculate(13850.90);

        self::assertEquals(11080.72, $result);
    }
}
