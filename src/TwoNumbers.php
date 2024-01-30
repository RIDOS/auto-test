<?php

namespace App;

/**
 * Задание из Leetcode.
 * 
 * Задание: 1. Two Sum.
 * 
 * Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
 * You may assume that each input would have exactly one solution, and you may not use the same element twice.
 * You can return the answer in any order.
 * 
 * @author a.imaev <smartsites.dev27@gmail.com>
 */
class TwoNumbers
{

    /**
     * Вывод индексов двух чисел, чтобы сумма составляла $target.
     * 
     * Сложность: О(pow(n, 2)).
     * 
     * @param array $nums Массив чисел.
     * @param int $target Сумма чисел.
     * 
     * @return array Индексы массива
     * 
     * Пример:
     *  Input: nums = [2, 7, 11, 15], target = 9
     *  Output: [0, 1]
     */
    function twoSum(array $nums, int $target): array
    {
        $result = [];

        for ($i = 0; $i < count($nums) - 1; $i++)
        {
            for ($j = $i + 1; $j < count($nums); $j++)
            {
                if ($nums[$i] + $nums[$j] == $target)
                {
                    return [$i, $j];
                }
            }
        }

        return [];
    }

    /**
     * Улучшенный метод.
     * 
     * Данный метод имеет более лучший алгоритм,
     * по сравнению с моим решением.
     * 
     * Сложность: О(n).
     */
    function twoSumUp(array $nums, int $target): array
    {
        $map = [];
        for($i = 0; $i < count($nums); $i++)
        {
            $cur = $nums[$i];
            $x = $target - $cur;

            if ((in_array($x, $map))) {
                return [array_search($x, $map), $i];
            }
            $map[$i] = $cur;
        }
        return [];
    }
}
