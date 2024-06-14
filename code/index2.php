<?php
$num = [1,2,3,4,5,6,7,0,9,0];

$str = ["a","b","c","d","e"];

$num_keys = [
    "key0" => 1,
    "key1" => 2,
    "key2" => 3,
    "key3" => 4,
    "key4" => 5,

];
$fruts = [
    "apple" => "red",
    "banana" => "green",
    "orange" =>"orange"
];
$investments = [
    "investment1" => $num,
    "investment2" => $str,
    "investment3" =>$num_keys,
    "investment4" => $fruts
];
$all_investments = [
    "all" => $investments
];
$a = $investments["investment1"];
$one = $a[0];

var_dump($one);



































// var_dump ($num [0]);
// var_dump ($num [3]);
// var_dump ($num [7]);

// var_dump ($num_keys ["key0"]);
// var_dump ($num_keys ["key4"]);

// var_dump ($fruts ["apple"]);
?>
