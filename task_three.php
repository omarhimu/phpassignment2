<?php
$first = 0;
$second = 1;

echo "The first 10 Fibonacci numbers are: ";

for ($i = 0; $i < 10; $i++) {
    echo $first . ' ';
    $next = $first + $second;
    $first = $second;
    $second = $next;

    if ($first > 100) {
        break;
    }
}
?>
