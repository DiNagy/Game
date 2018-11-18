/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var myvar=setInterval(myTimer,1000);
var step=25;
var color;
function myTimer(){
 step--;
  var timeClock=$('#clock');
  
      if (step===0){
          $('.td').unbind('click');
        timeClock.fadeOut();
        clearInterval(myvar);
    }
    timeClock.text(step+'%');
   //timeClock.css({height:step + "%"});
   if (step<20){
       timeClock.css({'backgroundColor':'rgb(230,0,0)',height:step + "%"});
   }
   if (step>19){
     //  timeClock.css({'backgroundColor':'blue',height:step + "%"});
     color="rgb("+(300-(step*5))+",0,"+(350-(step*2))+")";
     timeClock.css({'backgroundColor':color,height:step + "%",'color':'white'});
   }
   }

  //if step==0 click is to be removed game over



