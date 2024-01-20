<?php

namespace Tests;

use App\TwoNumbers;
use PHPUnit\Framework\TestCase;

/**
 * Тестирование класса TwoNumbers.
 * 
 * @author a.imaev <smartsites.dev27@gmail.com>
 */
class TwoNumbersTest extends TestCase
{
    /**
     * Тестирование вычисления суммы чисел в массиве.
     * 
     * @dataProvider dataProvider
     * 
     * @param array $numbers Целочисленный массив.
     * @param int $target Сумма.
     * @param array $expected Ожидаемое значение.
     * 
     * @retun void
     */
    public function testCalculate(array $nums, int $target, array $expected): void
    {
        $salaryCalculator = new TwoNumbers();
        $result = $salaryCalculator->twoSum(nums: $nums, target: $target);

        self::assertEquals($expected, $result);
    }

    /**
     * Тестовы данные.
     * 
     * @return array Все тестовые параметры.
     */
    public static function dataProvider(): array
    {
        return [
            [
                [2, 7, 11, 15], 9, [0, 1]
            ],
            [
                [3,2,4], 6, [1, 2]
            ],
            [
                [3, 3], 6, [0, 1]
            ],
            [
                [3, 2, 3], 6, [0, 2]
            ],
            [
                [2, 5, 5, 11], 10, [1, 2]
            ],
        ];
    }
}
