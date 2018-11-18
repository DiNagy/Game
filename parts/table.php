<div class="timer"><div class="clock" id="clock">100%</div></div>
<?php
$tempArrayhalf = ["pictures/ping.png",
    
    "pictures/110334logo1517426828.png",
    
    "pictures/Aqua-Penguin-NC13.png",
    
    "pictures/Gangnam_penguin.png",

    "pictures/kisspng-club-penguin-game-day-blue-drawing-image-of-a-penguin-5b18cf312d6d46.7869555515283525611861.png",
  
    "pictures/Pinguino-411.png",
    
    "pictures/penguin_dancing.png",
   
    "pictures/birthdayping.png",
     "pictures/carfping.png",
     "pictures/drumerping.png",
     "pictures/hapyhatping.png",
    
    "pictures/smallscarfping.png",
     "pictures/halping.png",
     "pictures/swimping.png",
     "pictures/sweetping.png",
    
     "pictures/realping.png",
     "pictures/tinyping.png",
     "pictures/tuxedoping.png",
     "pictures/tux1.png",
     "pictures/ghostping.png",
     "pictures/chickenping.png",
         "pictures/leftping.png",
         "pictures/hatping.png",
    "pictures/cartoon-penguin-png-8.png"];


$tempArray=(array_merge($tempArrayhalf, $tempArrayhalf));

/*
 * 
 * /home/diana/Downloads/realping.png--
/home/diana/Downloads/tinyping.png--
/home/diana/Downloads/tuxedoping.png--
/home/diana/Downloads/tux1.png--
/home/diana/Downloads/ghostping.png--
/home/diana/Downloads/chickenping.png---
birthdayping--
 * carfping--
 * drumerping--
 * hapyhatping--
 * hatping--
 * pointpint---
-------------------------
/home/diana/Downloads/smallscarfping.png---
/home/diana/Downloads/halping.png---
/home/diana/Downloads/swimping.png---
/home/diana/Downloads/sweetping.png---


 * 
 */
shuffle($tempArray);
$key = 0;
echo '<table id="mainTable">';
for ($i = 0; $i < 4; $i++) {
    echo '<tr>';
    for ($j = 0; $j <4; $j++) {
        echo '<td  id="'.$i.'_'.$j.'" class="td "><img  src=' . $tempArray[$key] . '></td>';
        $key++;
    }
    echo '</tr>';
}

echo '</tr></table>';

?>
