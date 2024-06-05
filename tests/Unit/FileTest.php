<?php

include(dirname(__DIR__) . '../../code/File.php');

test('Add Works', function () {
    $result = add(1, 3);
    expect($result)->toBe(4);
});


test('Substract Works', function () {
    $result = substract(3, 1);
    expect($result)->toBe(2);
});


test('Divide Works', function () {
    $result = divide(10, 2);
    expect($result)->toBe(5);
});


test('Multiply Works', function () {
    $result = multiply(10, 2);
    expect($result)->toBe(20);
});


test('Multiply 3 numbers Works', function () {
    $result = multiplyThree(10, 2, 2);
    $resultTwo = multiplyThree(10, 2, 3);
    expect($result)->toBe(40);
    expect($resultTwo)->toBe(60);
});


test('Add 3 numbers Works', function () {
    $result = addThree(10, 2, 2);
    $resultTwo = addThree(10, 2, 6);
    expect($result)->toBe(14);
    expect($resultTwo)->toBe(18);
});


test('Substract 3 numbers Works', function () {
    $result = substractThree(10, 2, 2);
    $resultTwo = substractThree(10, 2, 6);
    expect($result)->toBe(6);
    expect($resultTwo)->toBe(2);
});


test('Divide 3 numbers Works', function () {
    $result = divideThree(27, 3, 3);
    $resultTow = divideThree(243, 9, 3);
    expect($result)->toBe(3);
    expect($resultTow)->toBe(9);
});


test('avarage_of_two', function () {
    $result = avarage_of_two(60, 40, );
    $result_two = avarage_of_two(100, 200);
    expect($result)->toBe(50);
    expect($result_two)->toBe(150);
});


test('find max of two', function () {
    $result = find_max_of_two(60, 40);
    $result_two = find_max_of_two(360, 720);
    expect($result)->toBe(60);
    expect($result_two)->toBe(720);
});


test('find min of two', function () {
    $result = find_min_of_two(60, 20);
    $result_two = find_min_of_two(132, 720);
    expect($result)->toBe(20);
    expect($result_two)->toBe(132);
});


test('avarage_of_three', function () {
    $result = avarage_of_three(60, 40, 20);
    $result_two = avarage_of_three(132, 360, 720);
    expect($result)->toBe(40);
    expect($result_two)->toBe(404);
});


test('find max', function () {
    $result = find_max(60, 40, 20);
    $result_two = find_max(132, 360, 720);
    $result_three = find_max(360, 132, 720);
    $result_four = find_max(720, 360, 132, );

    $all_cases = [
        [1,2,3, 3],
        [1,3,2, 3],
        [2,1,3, 3],
        [2,3,1, 3],
        [3,2,1, 3],
        [3,1,2, 3],
    ];

    foreach($all_cases as $case) {
        $res = find_max($case[0],$case[1],$case[2]);
        expect($res)->toBe($case[3]);    
    }

    expect($result)->toBe(60);
    expect($result_two)->toBe(720);
    expect($result_three)->toBe(720);
    expect($result_four)->toBe(720);
});


test('find min', function () {
    $result = find_min(60, 40, 20);
    $result_two = find_min(132, 360, 720);
    $result_three = find_min(360, 720, 132);
    $result_four = find_min(720, 360, 132);

    $all_cases = [
        [1,2,3, 1],
        [1,3,2, 1],
        [2,1,3, 1],
        [2,3,1, 1],
        [3,2,1, 1],
        [3,1,2, 1],
    ];

    foreach($all_cases as $case) {
        $res = find_min($case[0],$case[1],$case[2]);
        expect($res)->toBe($case[3]);    
    }

    expect($result)->toBe(20);
    expect($result_two)->toBe(132);
    expect($result_three)->toBe(132);
    expect($result_four)->toBe(132);
});


// test('sum array',  function () {
//     $result = sum_arrray([60, 40, 20, 25, 40]);
//     $result_two = sum_arrray([132, 360, 720, 132, 756]);
//     expect($result)->toBe(185);
//     expect($result_two)->toBe(2100);
// });


// test('substract all',  function () {
//     $result = substract_all(200, [60, 40, 20, 25, 40]);
//     $result_two = substract_all(2100, [132, 360, 720, 132, 756]);
//     expect($result)->toBe(15);
//     expect($result_two)->toBe(0);
// });


// test('multiply all',  function () {
//     $result = multiply_all([60, 40, 20, 25, 40]);
//     $result_two = multiply_all([132, 360, 720, 132, 756]);
//     expect($result)->toBe(48000000);
//     expect($result_two)->toBe(3414323404800);
// });


// test('divide by all',  function () {
//     $result = divide_by_all(48000000, [60, 40, 20, 25, 40]);
//     $result_two = divide_by_all(3414323404800, [132, 360, 720, 132, 4]);
//     expect($result)->toBe(1);
//     expect($result_two)->toBe(189);
// });


// test('find repeated', function () {
//     $result = find_repeated([60, 40, 20, 25, 40]);
//     $result_two = find_repeated([132, 360, 720, 132, 756]);
//     expect($result)->toBe(40);
//     expect($result_two)->toBe(132);
// });