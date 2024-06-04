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
    expect($result)->toBe(40);
});

test('Add 3 numbers Works', function () {
    $result = addThree(10, 2, 2);
    expect($result)->toBe(14);
});

test('Substract 3 numbers Works', function () {
    $result = substractThree(10, 2, 2);
    expect($result)->toBe(6);
});

test('Divide 3 numbers Works', function () {
    $result = divideThree(27, 3, 3);
    expect($result)->toBe(3);
});