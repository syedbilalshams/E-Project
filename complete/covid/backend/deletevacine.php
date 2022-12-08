<?php
include "config.php" ;
 $id = $_GET["id"] ;

 $sql =" DELETE FROM `vaccine` WHERE `vid`=$id";
 $result =mysqli_query($conn,$sql);
 if($result){
    header("location:{$host}Rvacine.php");
 }
?>