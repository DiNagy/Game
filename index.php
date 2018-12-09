


<?php
require 'parts/header.php';
?>
<div class="start">
    <form action="game.php" method="get">
        <div class="formpart">
            <input type="radio" name="mode" value="1"><label for="1">Small </label>
            <input type="radio" name="mode" value="2" checked ><label for="2">Medium</label> 
            <input type="radio" name="mode" value="3"><label for="3">Large</label> 



        </div>
        <div class="formpart">
            <div class="button"> <input type="radio" name="type" value="animal"><label for="animal">animal<img src="pictures/animal/frog.png"> </label>

                <input type="radio" name="type" value="abc"><label for="abc">a_b_c <img src="pictures/abc/animal_alphabets_T.png"> </label> </div>
            <div class="button">   <input type="radio" name="type" value="pinguin" checked ><label for="pinguin">penguin<img src="pictures/penguin/Gangnam_penguin.png"></label> 
                <input type="radio" name="type" value="giraffe"><label for="giraffe">giraffe<img src="pictures/giraffe/Giraffe.png"></label> </div>
        </div>
        <div class="formpart">
            <button type="submit">Play</button>
        </div>
    </form>
</div>
<?php
require 'parts/footer.php';
?>
        


