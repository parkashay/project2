<?php
$con=mysqli_connect("localhost","root","","school_of_engineering_pu_staffs");
mysqli_set_charset($con,'utf8');
//check connection
if(mysqli_connect_errno()){
    echo("Unable to connect to database:".mysqli_connect_error());
}
?>