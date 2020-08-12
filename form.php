<?php

$number = (int) $_POST['number'];

if ($number < 1 || $number > 100 || !is_numeric($_POST['number']) ) {
    die("Wrong data given");
}

$rand = rand(1,100);
$counter = 1;

do {
    $rand = rand(1,100);
    $counter++;
}while ($number != $rand);

echo "I found $number from $counter attempt";