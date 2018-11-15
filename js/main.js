/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//$('#one').text('Other staff');

var button;
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
           var table=new Table('mainTable');
           var button1=new Button(b);
           var button2=new Button(b1);
           table.checkReachable(button1,button2);
                  return 'yes it is what it is';
                  
       //check for reachability#/*
       /*
       if (reachability(button,b)){
            return 'yes it is what it is';
        }
        else {
            return 'not reachable';
        }*/
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
function reachability(b1,b){
    /**
     * This is already tested, the two buttons are the same
     */
   //    $("aitemp").text(button.id+'OK'+b.id);
    var id1=b1.id;
    var id2=b.id;
     var buttonArray1= id1.split('_');
        var buttonArray2= id2.split('_');
        buttonArray1[0]=parseInt(buttonArray1[0]);
        buttonArray2[0]=parseInt(buttonArray2[0]);
        
      
        buttonArray1[1]=parseInt(buttonArray1[1]);
        buttonArray2[1]=parseInt(buttonArray2[1]);
      if (buttonArray1[0]===buttonArray2[0])
          
              {  
                  if (buttonArray1[1]===1+(buttonArray2[1]) || buttonArray1[1]===(buttonArray2[1])-1)
                  {
    $("#aitemp").text('next to each other1');
                  }
       
      }
       if (buttonArray1[1]===buttonArray2[1])
          
              {  
                  if (buttonArray1[0]===1+(buttonArray2[0]) || buttonArray1[0]===(buttonArray2[0])-1)
                  {
    $("#aitemp").text('next to up and down');
                  }
       
      }
  //  if (id1===id2){
   //     return false;
  //  }
 
   
   
    return true;
}
