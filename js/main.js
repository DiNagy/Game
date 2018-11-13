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
    if (button) {
        if (button.id === b.id) {
            $(button).removeClass('choosen');
            button = null;
            return 'the same';

        }
        ;

        var text = '#' + button.id;
        //text+=b.id;
        var img1 = $(b).children(':first').attr('src');
        var img2 = $(button).children(':first').attr('src');
        $(button, b).removeClass('choosen');
        button = null;

        if (img1 === img2) {
       //check for reachability
       if (reachability()){
            return 'yes';
        }
        else {
            return 'not reachable';
        }
        }
        return 'not at all';
    } else {

        button = b;
        $(button).addClass('choosen');
        return 'only one';
    }
}
function reachability(){
    return true;
}