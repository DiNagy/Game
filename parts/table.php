<div class="timer"><div class="clock" id="clock">100%</div></div>
<?php

$tempArray = ["pictures/ping.png",
    "pictures/ping.png",
    "pictures/110334logo1517426828.png",
    "pictures/110334logo1517426828.png",
    "pictures/Aqua-Penguin-NC13.png",
    "pictures/Aqua-Penguin-NC13.png",
    "pictures/Gangnam_penguin.png",
    "pictures/Gangnam_penguin.png",
    "pictures/kisspng-club-penguin-game-day-blue-drawing-image-of-a-penguin-5b18cf312d6d46.7869555515283525611861.png",
    "pictures/kisspng-club-penguin-game-day-blue-drawing-image-of-a-penguin-5b18cf312d6d46.7869555515283525611861.png",
    "pictures/Pinguino-411.png",
    "pictures/Pinguino-411.png",
    "pictures/penguin_dancing.png",
    "pictures/penguin_dancing.png",
    "pictures/cartoon-penguin-png-8.png",
    "pictures/cartoon-penguin-png-8.png"];
shuffle($tempArray);
$key = 0;
echo '<table id="mainTable">';
for ($i = 0; $i < 4; $i++) {
    echo '<tr>';
    for ($j = 0; $j < 4; $j++) {
        echo '<td  id="'.$i.'_'.$j.'" class="td "><img  src=' . $tempArray[$key] . '></td>';
        $key++;
    }
    echo '</tr>';
}

echo '</tr></table>';

?>
