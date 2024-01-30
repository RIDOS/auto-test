<?php

require_once 'vendor/autoload.php';

use App\ListNode;

// Тестовая среда.
$lst = new ListNode(40);
$lst2 = new ListNode(30, $lst);
$lst3 = new ListNode(20, $lst2);
$lst3 = new ListNode(10, $lst3);

print_r($lst3->next->next->next->val);