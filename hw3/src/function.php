<?php

$users = [];

for($i=1;$i <= 50;$i++)
{
    // взято с php.net по запросу из гугл.
    // ecли ($input, 1) - 1 то вернёт ключ, если ($input, 2) -2 то вернёт значение ключа, то есть случайное имя из массива
    $input = ["Neo", "Morpheus", "Trinity", "Cypher", "Tank"," "];
    $rand_keys = array_rand($input, 2);
    //echo $input[$rand_keys[0]] . "\n"; - как так?
    $user=['id'=>$i,'name'=>$input[$rand_keys[0]],'age'=>mt_rand(18,45)];
    $users[] = $user;
}

var_dump($users);