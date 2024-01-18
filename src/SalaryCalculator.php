<?php

namespace App;

/**
 * Класс высчитывающий оклад сотрудников.
 * 
 * @author a.imaev <smartsites.dev27@gmail.com>
 */
class SalaryCalculator
{
    /**
     * Вычисление заработной платы.
     * 
     * @param float $salary Заработная плата.
     * 
     * @return float Заработная плата с вычисленным коэфицентом.
     * Результат округляется до 2.
     * 
     * Пример:
     *  Оклад = 13.850,90
     *  Результат = 13.850,90 * 0.8 = 11.080,72
     */
    public function calculate(float $salary): float
    {
        return round(num: $salary * 0.8, precision: 2);
    }
}
