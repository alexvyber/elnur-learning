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
 

    
     function find_min ($a, $b, $c){
        if ($a <$b){
            return $a;
        } elseif ($b < $c){
            return $b;
        } else {
            return $c;
        }
     }
     