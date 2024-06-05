<?php


function add(int $a, int $b): int
{
    return $a + $b;
}


function substract(int $a, int $b): int
{
    return $a - $b;
}


function divide(int $a, int $b): int
{
    return $a / $b;
}


function multiply(int $a, int $b): int
{
    return $a * $b;
}

function addThree(int $a, int $b, int $c): int
{
    return $a + $b + $c ;
}
//
function multiplyThree(int $a, int $b, int $c):int
 {
    return  ($a * $b * $c);
   
}
function divideThree ( int $a, int $b,int $c): int
{
    return ( $a / $b /$c);
}
function substractThree (int $a, int $b,int $c): int
{
    return $a - $b - $c;
}



                    // 60    40     20
//  function find_max (int $a, int $b,int $c){
//    if ($a > $b) && ($b < $c){
//     echo
//    }
//     return find_max;
  
// }


function find_min(int $a, int $b,int $c) {
    $num =  min($a, $b, $c);
    return $num;
}
// test('find repeated', function () {
//     $result = find_repeated(60, 40, 20, 25, 40);
//     $result_two = find_repeated(132, 360, 720, 132, 756);
//     expect($result)->toBe(40);
//     expect($result_two)->toBe(132);

function find_repeated(int $a, int $b,int $c, int $g, int $f){
    $number = ar     ($a, $b, $c, $g, $f);
    $number1 = array_flip(array_count_values($number));
    return $number1;
}


function find_max_of_two(int $a, int $b){
    if ($a > $b){
        return $a;
        }
        else 
        return $b;
    
}

function find_min_of_two(int $a, int $b){
    if ($a < $b){
        return $a;
        }
        else 
        return $b;
    }



    // test('avarage_of_two', function () {
    //     $result = avarage_of_two(60, 40, );
    //     $result_two = avarage_of_two( 100, 200);
    //     expect($result)->toBe(50);
    //     expect($result_two)->toBe(150);

    function avarage_of_two(int $a, int $b){
        return ($a + $b)/2;


    }