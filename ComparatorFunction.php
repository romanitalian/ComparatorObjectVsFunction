<?php
// ComparatorFunction.php
$n = 1000;
$arr = [];
for ($i = 0; $i < $n; $i++) {
    $arr[] = ["key" => rand(1, $n)];
}


$t = microtime(true);
$sortBy = "key";
usort($arr, function($a, $b) use ($sortBy) {return $a[$sortBy] <=> $b[$sortBy];});

// print_r($arr);

var_dump(microtime(true) - $t);
var_dump(memory_get_usage(true));
