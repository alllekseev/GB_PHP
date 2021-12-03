<?php
// Deposit
// function deposit($money, $years) {
//     $rate = $money > 3 ? 5 : 4;
//     $startMoney = $money;
//     for($i = 1; $i <= $years; $i++) {
//         $profit = round($money * $rate / 100,2);
//         $money += $profit;
//         echo "За $i год Ваша сумма = $money. Прибыль = $profit.<br>";
//     }
//     echo "<hr> За $years лет прибыль составила " . ($money - $startMoney) . "<br>";
// }

// deposit(100000, 5);

// $money = $_GET['$money'] ? $_GET['$money'] : rand(100000, 1000000);
// $y = $_GET['$y'] ? $_GET['$y'] : rand(1,5);
// echo "У клиента $money рублей. Срок вклада $y<hr>";
// deposit($money, $y);

// Array
// $cars = ["BMW", "VW", "Audi", "Seat"];
// echo count($cars);

// $age = array("Peter"=>"35", "Ben"=>"43", "Ann"=>"25" );
// foreach($age as $x => $x_value) {
//     echo "User " . $x . " is " . $x_value . " years old. <hr>";
// }

// $cars = array (
//     array("Volvo",22,18),
//     array("BMW",15,13),
//     array("Saab",5,2),
//     array("Land Rover",17,15,44)
// );

// for($row = 0; $row < 4; $row++) {
//     echo "<p>Row number $row</p>";
//     echo "<ul>";
//     for ($col = 0; $col < 3; $col++) {
//         echo "<li>".$cars[$row][$col]."</li>";
//     }
//     echo "</ul>";
// }


// ---------------------------------------------

$regions = [
    "Московская область" => ["Москва", "Зеленоград", "Клин"],
    "Ленинградская область" => ["Санкт-Петербург", "Всеволжск", "Павловск", "Кронштадт"],
];

foreach($regions as $region => $cities) {
    // echo "$aria: <br>";
    // for($i = 0; $i < count($properties); $i++){
    //     echo "$properties <br>";
    // }
    $str = implode(', ', $cities) . ".";
    echo "$region:<br/>$str<br/>";
};
