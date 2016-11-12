<?php
require_once('strategy.php');
require_once('icecream.php');
require_once('decorator.php');

$order1 = new icecream('vanilla','small',5);
$order1A = new icecreamOrder('A');
$order1B = new icecreamOrder('B');
$order1C = new icecreamOrder('C');
$order1D = new icecreamOrder('D');

echo $order1A->showIcecreamOrder($order1).'<br>';
echo $order1B->showIcecreamOrder($order1).'<br>';
echo $order1C->showIcecreamOrder($order1).'<br>';
echo $order1D->showIcecreamOrder($order1).'<br>';
?>
