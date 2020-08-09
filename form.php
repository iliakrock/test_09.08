<?php

$digit = range('1', '100');

$initials = '7';

$first= getRandomElement($digit);

$rndInitials = $first;

$counter = 1;

while ($initials !== $rndInitials) {
    $first= getRandomElement($digit);

    $rndInitials = $first . $second . $third;
    $counter++;
}

echo "My Digit:$rndInitials. Attempt:$counter<br>";

function getRandomElement(array $array): string
{
    $len=count($array);
    $index=rand(0, $len - 1);

    return $array[$index];
}

print_r($_POST);
