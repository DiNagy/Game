<?php

class CreateTable {
    private $myArray;
    
    private $abc=[
         "pictures/abc/animal_alphabet_A_T.png",
        "pictures/abc/animal_alphabet_B_T.png",
        "pictures/abc/animal_alphabet_C_T.png",
        "pictures/abc/animal_alphabet_D_T.png",
        "pictures/abc/animal_alphabet_E_T.png",
        "pictures/abc/animal_alphabet_F_T.png",
        "pictures/abc/animal_alphabet_G_T.png",
        "pictures/abc/animal_alphabet_H_T.png",
        "pictures/abc/animal_alphabet_I_T.png",
        "pictures/abc/animal_alphabet_J_T.png",
        "pictures/abc/animal_alphabet_K_T.png",
        "pictures/abc/animal_alphabet_L_T.png",
        "pictures/abc/animal_alphabet_M_T.png",
        "pictures/abc/animal_alphabet_N_T.png",
        "pictures/abc/animal_alphabet_O_T.png",
        "pictures/abc/animal_alphabet_P_T.png",
        "pictures/abc/animal_alphabet_R_T.png",
        "pictures/abc/animal_alphabet_S_T.png",
        "pictures/abc/animal_alphabet_T_T.png",
        "pictures/abc/animal_alphabets_T.png",
        "pictures/abc/animal_alphabet_V_T.png",
        "pictures/abc/animal_alphabet_W_T.png",
        "pictures/abc/animal_alphabet_Y_T.png",
        "pictures/abc/animal_alphabet_Z_T.png"
    ];
    
    private $giraffe=[
        
        "pictures/giraffe/Giraffe_angel_T.png",
                
        "pictures/giraffe/Giraffe_chef_T.png",
                
        "pictures/giraffe/Giraffe_doctor_T.png",
        "pictures/giraffe/Giraffe_driver_T.png",
        "pictures/giraffe/Giraffe_ghost_T.png",
        "pictures/giraffe/Giraffe_handyman_T.png",
        "pictures/giraffe/Giraffe.png",
        
          "pictures/giraffe/Giraffe_hulu_T.png",
           "pictures/giraffe/Giraffe_magician_T.png",
           "pictures/giraffe/Giraffe_painter_T.png",
          
           "pictures/giraffe/Giraffe_party_T.png",
           "pictures/giraffe/Giraffe_pharaoh_T.png",
           "pictures/giraffe/Giraffe_pirate_T.png",
           "pictures/giraffe/Giraffe_romance_T.png",
           "pictures/giraffe/Giraffe_sailor_T.png",
           "pictures/giraffe/Giraffe_student_T.png",
           "pictures/giraffe/Giraffe_swimmer_T.png",
           "pictures/giraffe/Giraffe_wild_T.png"
          
        
    ];
    
    private $animal=[
            
     
        "pictures/animal/duckling.png",
        "pictures/animal/bird.png",
      
       
        "pictures/animal/peacock.png",
        "pictures/animal/crab.png",
        
        
        "pictures/animal/girafe.png",
        "pictures/animal/hypo.png",
  "pictures/animal/jellyfish.png",
        "pictures/animal/lobster.png",
        "pictures/animal/polecat.png",
        "pictures/animal/bat.png",
        "pictures/animal/butterfly.png",
        "pictures/animal/cow.png",
        "pictures/animal/dinosaur1.png",
        "pictures/animal/dinosaur2.png",
        "pictures/animal/dinosaur3.png",
        "pictures/animal/dinosaur4.png",
         "pictures/animal/gnu.png",
        "pictures/animal/zebra.png",
        "pictures/animal/piggy.png",
        "pictures/animal/rabbit.png",
        "pictures/animal/racoon.png",
        "pictures/animal/sheep.png",
        "pictures/animal/snail.png",
        
        
         "pictures/animal/octopus.png", 
        "pictures/animal/mouse.png",
         "pictures/animal/leopard.png",
         "pictures/animal/lion2.png",
      "pictures/animal/donkey.png",
        "pictures/animal/fish.png",
        "pictures/animal/frog.png",
        "pictures/animal/horse.png",
      
      // "pictures/animal/.png",
    ];

    private $pinguin = ["pictures/pinguin/ping.png",
        "pictures/pinguin/110334logo1517426828.png",
        "pictures/pinguin/Aqua-Penguin-NC13.png",
        "pictures/pinguin/Gangnam_penguin.png",
        "pictures/pinguin/kisspng-club-penguin-game-day-blue-drawing-image-of-a-penguin-5b18cf312d6d46.7869555515283525611861.png",
        "pictures/pinguin/Pinguino-411.png",
        "pictures/pinguin/penguin_dancing.png",
        "pictures/pinguin/birthdayping.png",
        "pictures/pinguin/carfping.png",
               "pictures/pinguin/penguin10.png",
               "pictures/pinguin/penguin9.png",
        
        "pictures/pinguin/drumerping.png",
        "pictures/pinguin/hapyhatping.png",
        "pictures/pinguin/smallscarfping.png",
        "pictures/pinguin/halping.png",
        "pictures/pinguin/swimping.png",
        "pictures/pinguin/sweetping.png",
        "pictures/pinguin/realping.png",
        "pictures/pinguin/tinyping.png",
        "pictures/pinguin/tuxedoping.png",
        "pictures/pinguin/tux1.png",
        "pictures/pinguin/ghostping.png",
        "pictures/pinguin/chickenping.png",
        "pictures/pinguin/leftping.png",
        "pictures/pinguin/hatping.png",
        "pictures/pinguin/cartoon-penguin-png-8.png"];
    private $rows, $columns;

//set the $type here
    public function __construct() {

        $mode = $_GET['mode'] ?? 25;
        $this->setRowColumn($mode);
        
        $type= $_GET['type'] ?? 'pinguin';
     $this->setArray($type);
    }
   private function setArray($type){
          switch ($type){
            case 'animal':
               
                 $this->myArray= $this->getArray($this->animal);
              
                break;
            case 'giraffe':
                $this->myArray= $this->getArray($this->giraffe);
              
                break;
               case 'abc':
                $this->myArray= $this->getArray($this->abc);
              
                break;
           default:
                $this->myArray= $this->getArray($this->pinguin);
                
        }
   } 
    
private function setRowColumn($mode){
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
    public function getArray($type) {
      $tempArray=$type;
        if (($this->rows * $this->columns) > (count($tempArray) )) {
     
            $tempArray = array_merge($tempArray, $tempArray);
         $tempArray = array_slice($tempArray, 0, ($this->rows * $this->columns / 2));
            } else { 
            $tempArray = array_slice($tempArray, 0, ($this->rows * $this->columns / 2));
        }
        $tempArray = (array_merge($tempArray, $tempArray));


        shuffle($tempArray);

        return $tempArray;
    }

    public function toHTML() {
     //   $tempArray = $this->getArray();
        $key = 0;
        echo '<div class="game">';
        echo '<div class="timer"><div class="clock" id="clock">25%</div></div>';
        echo '<table id="mainTable">';

        for ($i = 0; $i < $this->rows; $i++) {
            echo '<tr>';
            for ($j = 0; $j < $this->columns; $j++) {
                echo '<td  id="' . $i . '_' . $j . '" class="td "><img  src=' . $this->myArray[$key] . '></td>';
                $key++;
            }
            echo '</tr>';
        }

        echo '</tr></table></div>';
    }

}
