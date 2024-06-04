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
