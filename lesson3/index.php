<?php
// Task 1
// $num = 1;
// while($num <= 100) {
//     if ($num % 3 == 0) {
//         echo $num . "<br>";
//         $num++;
//     }
//     $num++;
// }

//--------------------------------

// Task 2
// $n = 10;
// $i = 0;
// do {
//     if($i == 0) {
//         echo "$i - is null<br>";
//         $i++;
//     }
//     elseif ($i % 2 == 0) {
//         echo "$i - is even number<br>";
//         $i++;
//     }
//     else {
//         echo "$i - is odd number<br>";
//         $i++;
//     }
// }
// while($i <= $n);

// -------------------------------

// Task 3
// $regions = [
//     'Хабаровский край' => ['Хабаровск', 'Комсомольск-на-Амуре', 'Амурск'],
// 		'Московская область' => ['Москва', 'Зеленоград', 'Клин','Королев'],
// 		'Ленинградская область' => ['Санкт-Петербург', 'Всеволжск', 'Павловск', 'Кронштадт']
//     ];

// foreach($regions as $region => $cities) {
//     $str = implode(', ', $cities) . ".";
//     echo "$region<br>$str<br>";
// }

//------------------------------

// Task 4
function translit($value) {
    $converter = [
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya'
    ];
    $value = strtr(mb_strtolower($value), $converter);
    return $value;
}
// echo translit("Алексеев Олег Дмитриевич");

//--------------------------------

// Task 5
$str = "Алексеев Олег Дмитриевич";
// $newStr = str_replace(' ', '_', $str);
// echo $newStr;

//--------------------------------

// Task 7
// for($i = 0; $i <= 9; print $i++) {};

// Task 9

echo translit(str_replace(' ', '_', $str));
