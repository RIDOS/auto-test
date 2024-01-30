<?php

namespace App;

/**
 * Связный список.
 * 
 * Данная структура состоит из элементов,
 * содержащих помимо собственных данных
 * ссылки на следующий и/или предыдущий элемент списка.
 * 
 * Пример:
 * App\ListNode Object
 * (
 *    [val] => 10
 *    [next] => App\ListNode Object
 *        (
 *            [val] => 20
 *            [next] => App\ListNode Object
 *                (
 *                    [val] => 30
 *                    [next] => App\ListNode Object
 *                        (
 *                            [val] => 40
 *                            [next] => 
 *                        )
 *
 *                )
 *
 *        )
 *
 * )
 * 
 * @author a.imaev <smartsites.dev27@gmail.com>
 */
class ListNode
{
    public int $val = 0;

    public ListNode|null $next = null;

    function __construct(int $val = 0, ListNode $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}