<?php
/**
 * Программно создайте массив из 50 пользователей, у каждого пользователя есть поля id, name и age:
id - уникальный идентификатор, равен номеру эл-та в массиве
name - случайное имя из 5ти возможных (сами придумайте каких)
age - случайное число от 18 до 45
Преобразуйте массив в json и сохраните в файл users.json
Откройте файл users.json и преобразуйте данные из него обратно ассоциативный массив РНР.
Посчитайте количество пользователей с каждым именем в массиве
Посчитайте средний возраст пользователей

 */
include "../src/functions.php";

for($i = 0; $i < 50; $i++) {
    $users[] = createUser();
}

file_put_contents('users.json', json_encode($users));

$data = file_get_contents('users.json');
$decodedUsers = json_decode($data, true);

$names = [];
$sumAge = 0;
foreach ($decodedUsers as $user) {
    if (isset($names[$user['name']])) {
        $names[$user['name']]++;
    } else {
        $names[$user['name']] = 1;
    }
    $sumAge += $user['age'];
}

var_dump($names);
echo "Средний возраст: " . ($sumAge / sizeof($decodedUsers));