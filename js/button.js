/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function Button(button) {
    //the actual dom object 
    this.button = button;
    //the id for identification
    this.textId = button.id;
    //temp for converting string to number
    var idArrayString = this.textId.split('_');
    //the place in the matrix
    this.idArray = [parseInt(idArrayString[0]), parseInt(idArrayString[1])];
    //the picture or lack of it
    this.img = $(button).children(':first').attr('src');
}

function Table(name) {
    //creates the table of the game
    var tableNameTrTd = '#' + name + ' tr td';
    var tableNameTr = '#' + name + ' tr ';

    // the cells of the table
    var tableCells = $(tableNameTrTd);

    //number of rows and collumns   
    var numberOfRows = $(tableNameTr).length;
    var numberOfCells = Math.floor(tableCells.length / numberOfRows);

    //the matrix represents the table of the game
    //create the empty matrix
    this.tableButtons = new Array(numberOfRows);

    for (var i = 0; i < numberOfRows; i++) {
        this.tableButtons[i] = new Array(numberOfCells);
    }
    //fill up the matrix 
    var tempButton;
    for (var i = 0; i < tableCells.length; i++) {
        tempButton = new Button((tableCells[i]));
        this.tableButtons[tempButton.idArray[0], tempButton.idArray[1]] = tempButton;
    }


    this.checkReachable = function (button1, button2) {
        var isReachable=false;
    //if next to each other left right
    if (button1.idArray[0]===button2.idArray[0] &&
         ( button1.idArray[1]===button2.idArray[1]+1 ||
           button1.idArray[1]===button2.idArray[1]-1)){
       isReachable=true;
      
           }
        //if next to each other up and down
          if (button1.idArray[1]===button2.idArray[1] &&
         ( button1.idArray[0]===button2.idArray[0]+1 ||
           button1.idArray[0]===button2.idArray[0]-1)){
       isReachable=true;
    
           } 
     
      return isReachable;
     
    };
    this.removeButtons=function(button1,button2){
     var temp=   this.tableButtons[button1.idArray[0],button1.idArray[1]].img;
    //img:  $(b).children(':first')
    
     $('#aitemp').html('<img src="'+temp+'">');
    };
}