<?php
require 'TableBase.php';
class CreateTable {
    private $myArray;
    
    private $rows, $columns;

//set the $type and $mode  here
    public function __construct() {

        $mode = $_GET['mode'] ?? 25;
        $this->setRowColumn($mode);
        
        $type= $_GET['type'] ?? 'pinguin';
     $this->setArray($type);
    }
   private function setArray($type){
     //choose the pictures for the table   
       $tableBase=new TableBase();
          switch ($type){
            case 'animal':
               
                 $this->myArray= $this->getArray($tableBase->getAnimal());
              
                break;
            case 'giraffe':
                $this->myArray= $this->getArray($tableBase->getGiraffe());
              
                break;
               case 'abc':
                $this->myArray= $this->getArray($tableBase->getAbc());
              
                break;
           default:
                $this->myArray= $this->getArray($tableBase->getPinguin());
                
        }
   } 
    
private function setRowColumn($mode){
    //set the number of rows and columns 
    switch ($mode) {
            case 1:
                $this->rows = 4;
                $this->columns = 4;
                break;
            case 3:
                $this->rows = 8;
                $this->columns = 8;
                break;
            default:
                $this->rows = 6;
                $this->columns = 6;
        }
}
    public function getArray($type) {
        //cut shorter or double the number of pictures
        //the size of table -> the length of the array of pictures
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
     //  display the table and the timer
     //   
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
