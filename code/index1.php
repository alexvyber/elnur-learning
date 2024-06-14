<?php 
$Alex=[
    
    "Age"        =>[28],
    "height"     => [178],
    "weight"     => [86],
    "works"      => ["programmer"],["babysitter"],["Driver"],
    "step speed" => [5.2]
];
$Bus = [
    "length"        => [7],
    "width"         => [2,5],
    "weight"        =>[4000],
    "Capacity"      => [2.9],
    "driving speed" => [80]
];
    $travel_time = 1;
    

    $distance_bus = $Bus["driving speed"][0]*  $travel_time;
    $distance_Alex = $Alex["step speed"][0] * $travel_time;
    // function FunctionName($distance_Alex, $distance_bus)
    // { 
    //     if ($distance_bus < $distance_Alex)
    // {
    //     echo ("Путь автобуса составил: $distance_bus км ");
    // }
    // else {
    //     echo ("Путь автобуса составил: $distance_Alex");
    // }
        
    // }
    
      var_dump($distance_bus );
?>