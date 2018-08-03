<?php
/**
 * Comparator.php
 */
class Comparator {
    protected $key;

    public function __construct($key) {
            $this->key = $key;
    }

    public function __invoke($a, $b) {
        return $a[$this->key] <=> $b[$this->key];
    }
}
$n = 1000;
$arr = [];
for ($i = 0; $i < $n; $i++) {
    $arr[] = rand(1, $n);
}



$t = microtime(true);

$comparator = new Comparator("key");
usort($arr, $comparator);

// print_r($arr);

var_dump(microtime(true) - $t);
var_dump(memory_get_usage(true));

