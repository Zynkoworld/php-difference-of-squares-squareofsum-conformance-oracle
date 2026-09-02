<?php

declare(strict_types=1);

function squareOfSum($max)
{
    $sum = 0;

    foreach (range(1, $max) as $i) {
        $sum += $i;
    }

    $sum = pow($sum, 2);

    return $sum;
}

function sumOfSquares($max)
{
    $sum = 0;

    foreach (range(1, $max) as $i) {
        $sum += pow($i, 2);
    }

    return $sum;
}

function difference($max)
{
    return squareOfSum($max) - sumOfSquares($max);
}

$__in = json_decode('[1, 5, 100]', true);
$__out = [];
foreach ($__in as $x) {
  try { $__out[] = ["ok" => true, "v" => squareOfSum($x)]; }
  catch (\Throwable $e) { $__out[] = ["ok" => false, "e" => get_class($e)]; }
}
echo json_encode(["out" => $__out]);
