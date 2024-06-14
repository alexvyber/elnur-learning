<?php
//инициализировали массив $tariffs
$tariffs = [
    // инициализировал(создал) ключи "heading", т.д  присвоил ключу ("heading") массива ($tariffs)
    //  значение ""InternetTB"  
    [
        "heading"     => "InternetTB",
        "description" => "Скорость 3 ГБ/с + 300 channel",
        "price"       => 300,
        "durations"   =>"week","month","year",
        "sale"        => 20,
    ],
    [
        "heading"     => "TB",
        "description" => "600 channel ",
        "price"       => 100 ,
        "durations"   => "month",
        "sale"        => 10,
    ],
    [
        "heading"     => "Internet",
        "description" => "Скорость 9 ГБ/с ",
        "price"       => 450 , 
        "durations"   => "month",
        "sale"        => 20,
    ],
    [
        "heading"     => "Mobele Internet",
        "description" => "Скорость 1 ГБ/с ",
        "price"       => 200 , 
        "durations"   => "month",
        "sale"        => 40,
    ],
    [
        "heading"     => "Rouming Internet",
        "description" => "Скорость 2 ГБ/с ",
        "price"       => 1400, 
        "durations"   => "month",
        "sale"        => 5,
    ],
    [
        "heading"     => "Sputnik Internet",
        "description" => "Скорость 1 ГБ/с ",
        "price"       => 1400 , 
        "durations"   => "month",
        "sale"        => 5,
    ]   
];



//  инициализируем переменную А и присваиваем значение массива с указанием индекса и ключа
// $A = $tariffs[0]["sale"];
//инициализируем переменную А и присваиваем значение массива с указанием индекса и ключа
// $B = $tariffs[0]["price"];
// указываем формулу для подсчета скидки 
// ("price" / 100)* (100 - "sale") 


// вызываем   foreach,обращаемся к массиву $tariffs для перебора всех элементов массива "as"=>"как "
 //в переменную $tariff <= (создаем )
foreach ($tariffs as $tariff){
// вызываем echo обращаемся к массиву $tariff с указанием ключа heading, ((." ".) <=указываем для пробела)
//($tariff["price"] и дальше по формуле  ("price" / 100)* (100 - "sale") 
// выводим echo обращаемся к массиву с указанием конкретного ("heading"ключа) ($tariff["heading"](." ".("пробел"))
// обращаемся ($tariff["price"] далее по формуле, 
$heading = $tariff["heading"];
$price = $tariff["price"];
$sale = $tariffs[0]["sale"];
$priseDivision = ($price /100 );
$seleSubstract = (100 - $sale);
$multiplication = $priseDivision * $seleSubstract;
$result = $heading ." ". $multiplication;

echo $result."\n";
};



?>
