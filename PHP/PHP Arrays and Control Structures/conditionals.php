<?php

$a = 0;
$b = 5;

/*
if ($a == $b) {
    echo 'values are equal';
} else {
    echo 'values are NOT equal';
}

if (($a == $b) == false) {
    echo 'values are  NOT equal';
}

if ($a <> $b) {
    echo 'values are  NOT equal';
}
*/

/*
if ($a != $b) {
    echo 'values are  NOT equal';
}

if ($a !== $b) {
    echo 'NOT identical';
}
*/

/*
if ($a) {
    echo 'true';
}

if (!$a) {
    echo 'false';
}

if ($a == false) {
    echo 'false';
}

if ($a != true) {
    echo 'false';
}
*/

/*
if ($a == $b) {
    echo ' values are equal ';
}  elseif ($a < $b) {
    echo ' $a is less than $b ';
} elseif ($a > $b) {
    echo ' $a is greater than $b ';
} else {
    echo ' values are NOT equal ';
}
*/

/*
$score = 30;
if ($score >= 59) {
    echo 'You completed the level!';
} elseif ($score <= 30) {
    echo 'You should practice some more before trying this level again.';
} else {
    echo 'Please try again';
}
*/

$num = 1;

if ($num >= 10) {
    if ($num <= 1000) {
        echo "Your number is within the range";
    } else {
        echo "Your number is greater than 1000, NOT wihin the range";
    }
} else {
    echo "Your number is less than 10, NOT within the range";
}

?>
