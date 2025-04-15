<?php

echo "Enter your name: ";
$handle = fopen("php://stdin", "r");
$name = trim(fgets($handle)); 

$num = rand(1, 10);

echo "Hi $name! Guess the number between 1 to 10:\n";

$attempts = 3;

for ($i = 1; $i <= $attempts; $i++) {
    echo "Attempt $i: ";
    $handle = fopen("php://stdin", "r");
    $guess = (int)fgets($handle); 

    if ($guess === $num) {
        echo "True: You guessed right!\n";
        exit;
    } else {
        if ($i < $attempts) {
            echo "Wrong! Try again.\n";
        } else {
            echo "System guessed: $num\n";
            echo "Fail! Please try next time.\n";
        }
    }
}