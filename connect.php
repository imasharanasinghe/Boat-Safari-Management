<?php

// $HOSTNAME='localhost';
// $USERNAME='root';
// $PASSWORD='';
// $DATABASE='wildwaves-register';

// $con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
$con = new mysqli("localhost","root","","wildwaves-register",3307);


if(!$con){
    die(mysqli_error($con));
}

?>