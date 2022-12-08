<?php
include "config.php" ;
 $id = $_GET["id"] ;

 $sql =" DELETE FROM `patient` WHERE `pid`=$id ";
 $result =mysqli_query($conn,$sql);
 if($result){
    header("location:{$host}Rpatient.php");
 }
?>