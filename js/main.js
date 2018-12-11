/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var button;
var table;
$(document).ready(function () {
    //this only for index.php
    //********************************

$('label').click(function() {
      
       $(this).prev().trigger('click');
  
});
  //this only for game 
  //*********************************
  
    
    $('.td').click(function (e) {

     //   $('#temp').text(this.id + ' ' + ai(this));
        ai(this);
         var inner = $('#inner');
         

  reduceHeight(inner, 20);

    });
});

function ai(b) {
    //two cells are the same (clik on the same again)
    if (button) {
        if (button.id === b.id) {
            $(button).removeClass('chosen');
            button = null;
            return 'The buttons are the same buton';

        }
        //two DIFFERENT active cell 


        var img1 = $(b).children(':first').attr('src');
        var img2 = $(button).children(':first').attr('src');
        $(button, b).removeClass('chosen');
        var b1 = button;
        button = null;

        if (img1 === img2 && img1) {
            // reachability(b1,b);
            if (!table) {
                table = new Table('mainTable');
            }
            var button1 = new Button(b);
            var button2 = new Button(b1);
            if (table.checkReachable(button1, button2)) {
                table.removeButtons(button1, button2);
                return 'yes it is removable reachable OK';
            }

        }
        //two cells have different pictures
        return 'The buttons have different pictures';
    } else {
//the first active cell is chosen
   var img=$(b).children(':first').attr('src');
if ($(b).children(':first').attr('src')){
        button = b;
        $(button).addClass('chosen');
        return 'The first button is '+img;
        }
    }
}

