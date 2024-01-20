<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\SalaryCalculator;

/**
 * Тестирование класса SalaryCalculator.
 *
 * @group Deprecated
 *
 * @author a.imaev <smartsites.dev27@gmail.com>
 */
class SalaryCalculatorTest extends TestCase
{
    /**
     * Тестирование вычисления заработной платы сотрудников.
     * 
     * @dataProvider dataProvider
     * 
     * @param float $salary Заработная плата.
     * @param float $expected Ожидаемое значение.
     * 
     * @retun void
     */
    public function testCalculate(float $salary, float $expected): void
    {
        $salaryCalculator = new SalaryCalculator();
        $result = $salaryCalculator->calculate($salary);

        self::assertEquals($expected, $result);
    }

    /**
     * Тестовы данные.
     * 
     * Пример:
     *  Заработная плата - 13850.90,
     *  Ожидаемый результат - 11080.72.
     * 
     * @return array Все тестовые параметры.
     */
    public static function dataProvider(): array
    {
        return [
            [
                13850.90, 11080.72
            ],
            [
                10, 8.0
            ],
            [
                20, 16.0
            ],
            [
                10.5, 8.4
            ],
            [
                15.5, 12.4
            ],
        ];
    }
}
