<?php
for ($i = 1; $i <= 50; $i++) {
    // Check if the number is a multiple of 5
    if ($i % 5 == 0) {
        continue; // Skip multiples of 5
    }
    echo $i . ' ';
}
?>
