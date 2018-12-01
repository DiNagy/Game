<?php

class CreateTable {

    private $tempArrayhalfBig = ["pictures/ping.png",
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
    private $rows, $columns;

    public function __construct() {

        $mode = $_GET['mode'] ?? 25;
        switch ($mode) {
            case 1:
                $this->rows = 4;
                $this->columns = 4;
                break;
            case 2:
                $this->rows = 8;
                $this->columns = 8;
                break;
            default:
                $this->rows = 6;
                $this->columns = 6;
        }
    }

    public function getArray($type = 'pinguin') {
        //   $type = 'pinguins'; //only option now
        if (($this->rows * $this->columns) > (count($this->tempArrayhalfBig) * 2)) {
            $tempArrayhalf = array_merge($this->tempArrayhalfBig, array_slice($this->tempArrayhalfBig, 0, 16));
        } else {
            $tempArrayhalf = array_slice($this->tempArrayhalfBig, 0, ($this->rows * $this->columns / 2));
        }
        $tempArray = (array_merge($tempArrayhalf, $tempArrayhalf));


        shuffle($tempArray);

        return $tempArray;
    }

    public function printTable($tempArray) {
$key=0;
        echo '<div class="game">';
        echo '<div class="timer"><div class="clock" id="clock">25%</div></div>';
        echo '<table id="mainTable">';

        for ($i = 0; $i < $this->rows; $i++) {
            echo '<tr>';
            for ($j = 0; $j < $this->columns; $j++) {
                echo '<td  id="' . $i . '_' . $j . '" class="td "><img  src=' . $tempArray[$key] . '></td>';
                $key++;
            }
            echo '</tr>';
        }

        echo '</tr></table></div>';
    }

}


