<?php

$con = mysqli_connect('localhost', 'root', '', 'charity');

if($con){
    //echo "Database connection established";
}
else{
    echo "Database connection error!!";
}



//<a href="index.php"><input type="submit" class="l-btn" value="Sign UP" name="reg"></a>