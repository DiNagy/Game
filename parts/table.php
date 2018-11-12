<?php

$tempArray = ["pictures/ping.png",
    "pictures/ping.png",
    "pictures/cartoon-penguin-png-8.png",
    "pictures/cartoon-penguin-png-8.png"];
shuffle($tempArray);
$key = 0;
echo '<table>';
for ($i = 0; $i < 2; $i++) {
    echo '<tr>';
    for ($j = 0; $j < 2; $j++) {
        echo '<td class="td "><img  src=' . $tempArray[$key] . '></td>';
        $key++;
    }
    echo '</tr>';
}

echo '</tr></table>';
