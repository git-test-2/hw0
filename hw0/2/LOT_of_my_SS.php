<?php
$data = file_get_contents('SuperLoto_Results__1-538.txt');
var_dump($data);

$arr = [];
$arr = $data;

echo $arr;

usort($arr, function ($a,$b)){
    return $a - $b;
});

var_dump($arr);

?>