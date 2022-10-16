<?php
include "config.php";
$StudentID=$_GET['StudentID'];
$sqld="Delete from `pelajar` where StudentID='$StudentID'";
mysqli_query($connect,$sqld);
if(mysqli_query($connect,$sqld)){
    header ("Location: papar.php");
}else{
    echo mysqli_error($connect);
}