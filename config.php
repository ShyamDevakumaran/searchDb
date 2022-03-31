<?php
$con = new mysqli('localhost','root','','jbsearch');
if($con-> connect_errno)
{
    echo $con-> connect_error;
    die ('OOPS! ERROR 404');
}
//else{  echo"database connected";}
?>