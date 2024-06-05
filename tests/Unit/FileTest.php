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

test('avarage_of_three', function () {
    $result = avarage_of_three(60, 40, 20);
    $result_two = avarage_of_three(132, 360, 720);
    expect($result)->toBe(40);
    expect($result_two)->toBe(404);
});


test('find max', function () {
    $result = find_max(60, 40, 20);
    $result_two = find_max(132, 360, 720);
    expect($result)->toBe(60);
    expect($result_two)->toBe(720);
});


test('find min', function () {
    $result = find_min(60, 40, 20);
    $result_two = find_min(132, 360, 720);
    expect($result)->toBe(20);
    expect($result_two)->toBe(132);
});

test('find repeated', function () {
    $result = find_repeated(60, 40, 20, 25, 40);
    $result_two = find_repeated(132, 360, 720, 132, 756);
    expect($result)->toBe(40);
    expect($result_two)->toBe(132);
});