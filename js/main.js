/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var button;
var table;
$(document).ready(function () {
    $('.td').click(function (e) {

        $('#temp').text(this.id + ' ' + ai(this));

    });
});

function ai(b) {
    //two cells are the same (clik on the same again)
    if (button) {
        if (button.id === b.id) {
            $(button).removeClass('choosen');
            button = null;
            return 'the same';

        }
     //two DIFFERENT active cell 

        var text = '#' + button.id;
        //text+=b.id;
        var img1 = $(b).children(':first').attr('src');
        var img2 = $(button).children(':first').attr('src');
        $(button, b).removeClass('choosen');
        var b1=button;
        button = null;

        if (img1 === img2) {
           // reachability(b1,b);
           if (!table){
            table=new Table('mainTable');
            }
           var button1=new Button(b);
           var button2=new Button(b1);
       if( table.checkReachable(button1,button2)){
           table.removeButtons(button1,button2);
              return 'yes it is removable reachable OK';
       }
                  return 'yes not reachable YET!!!';
     
        }
        //two cells have different pictures
        return 'not at all';
    } else {
//the first active cell is choosen
        button = b;
        $(button).addClass('choosen');
        return 'only one';
    }
}
