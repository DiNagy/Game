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

    this.isReachable = false;
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

        if (tempButton.idArray[0] === 0 || tempButton.idArray[0] === 3
                || tempButton.idArray[1] === 0 || tempButton.idArray[1] === 3
                ) {
            tempButton.isReachable = true;
        }
        this.tableButtons[tempButton.idArray[0]][ tempButton.idArray[1]] = tempButton;

    }

    this.checkReachable = function (button1, button2) {
        var isReachable = false;
        //if next to each other left right
        if (button1.idArray[0] === button2.idArray[0] &&
                (button1.idArray[1] === button2.idArray[1] + 1 ||
                        button1.idArray[1] === button2.idArray[1] - 1)) {
            isReachable = true;

        }
        //if next to each other up and down
        if (button1.idArray[1] === button2.idArray[1] &&
                (button1.idArray[0] === button2.idArray[0] + 1 ||
                        button1.idArray[0] === button2.idArray[0] - 1)) {
            isReachable = true;

        }
        if ((this.tableButtons[button1.idArray[0]][button1.idArray[1]].isReachable) 
                && (this.tableButtons[button2.idArray[0]][button2.idArray[1]]).isReachable) {
            isReachable = true;
        }

        return isReachable;

    };
    this.removeButtons = function (button1, button2) {
        var tempButton1 = this.tableButtons[button1.idArray[0]][button1.idArray[1]];
        var tempButton2 = this.tableButtons[button2.idArray[0]][button2.idArray[1]];
        //img:  $(b).children(':first')

        $('#aitemp').html('<img src="' + tempButton1.img + '">' + '<img src="'
                + tempButton2.img + '">');
        //

        //    delete tempButton1.img;

        //  delete tempButton2.img;

        var tempIdImg1 = '#' + tempButton1.textId + ' img';
        var tempIdImg2 = '#' + tempButton2.textId + ' img';

        $('#aitemp').html('<img src="' + tempButton1.img + '">' + tempIdImg1 + '<img src="'
                + tempButton2.img + '">');

        $(tempIdImg1).remove();
        $(tempIdImg2).remove();


        this.reachChange(button1.idArray[0], button1.idArray[1]);
        this.reachChange(button2.idArray[0], button2.idArray[1]);


    };
    this.reachChange = function (x, y) {
        var temp;
        var tempid;
        var buttont;
        if (x > 0) {
            temp=x-1;
            buttont= this.tableButtons[temp][y];
            buttont.isReachable = true;
           tempid='#'+temp+'_'+y;
           $(tempid).addClass('background');
           $('#temp2').append('<img src="'+buttont.img+'">'+buttont.isReachable);
        }
        if (x < 3) {
            temp=x+1;
            buttont=     this.tableButtons[temp][y];
                    buttont.isReachable = true;
              tempid='#'+temp+'_'+y;
           $(tempid).addClass('background');
             $('#temp2').append('<img src="'+buttont.img+'">'+buttont.isReachable);
        }
        if (y > 0) {
            temp=y-1;
            buttont=this.tableButtons[x][temp];
                    buttont.isReachable = true;
               tempid='#'+x+'_'+temp;
           $(tempid).addClass('background');
          $('#temp2').append('<img src="'+buttont.img+'">'+buttont.isReachable);
        }
        if (y < 3) {
            temp=y+1;
            buttont=this.tableButtons[x][temp];
                    buttont.isReachable = true;
                tempid='#'+x+'_'+temp;
           $(tempid).addClass('background');
              $('#temp2').append('<img src="'+buttont.img+'">'+buttont.textId+buttont.isReachable);
        }
    };
}