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

function multiplyThree(int $a, int $b, int $c): int
{
    return  ($a * $b * $c);
}

function divideThree(int $a, int $b, int $c): int
{
    return ($a / $b / $c);
}

function substractThree(int $a, int $b, int $c): int
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


function findmin(int $a, int $b, int $c)
{
    // $num =  min($a, $b, $c);
    // return $num;
}
// test('find repeated', function () {
//     $result = find_repeated(60, 40, 20, 25, 40);
//     $result_two = find_repeated(132, 360, 720, 132, 756);
//     expect($result)->toBe(40);
//     expect($result_two)->toBe(132);

function find_repeated(int $a, int $b, int $c, int $g, int $f)
{
    $number = ar($a, $b, $c, $g, $f);
    $number1 = array_flip(array_count_values($number));
    return $number1;
}

function find_max_of_two(int $a, int $b)
{
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }

}

function find_min_of_two(int $a, int $b)
{
    if ($a < $b) {
        return $a;
    } else {
        return $b;
    }
}






function avarage_of_two(int $a, int $b)
{
    return ($a + $b) / 2;
}


    

    function avarage_of_three ($a, $b, $c) {
        
        return ($b + $a + $c)/3;
    }
    

    
    function find_max ($a, $b, $c){
        if ($a > $b) {
            return $a;
         } elseif ($b > $c){
            return $b;
        } else {
            return $c;
        }
    }


    // test('find min', function () {
    //     $result = find_min(60, 40, 20);
    //     $result_two = find_min(132, 360, 720);
    //     expect($result)->toBe(20);
    //     expect($result_two)->toBe(132);
    // });
     function find_min ($a, $b, $c){
        if ($a <$b){
            return $a;
        } elseif ($b < $c){
            return $b;
        } else {
            return $c;
        }
     }
     