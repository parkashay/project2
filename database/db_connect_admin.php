<?php
$con=mysqli_connect("localhost","root","","school_of_engineering_pu_admin");//host,username,password,database name
mysqli_set_charset($con,'utf8');
if(mysqli_connect_errno()){
    echo ("Unable to connect to database:". mysqli_connect_error());
}
?>
