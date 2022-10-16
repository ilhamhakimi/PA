<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Add Student Info</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<?php
    include "config.php";
    if(@$_POST['submit']){
        $StudentID=$_POST['StudentID'];
        $StudentName=$_POST['StudentName'];
        $ICNum=$_POST['ICNum'];
        $Address=$_POST['Address'];
        $City=$_POST['City'];
        $State=$_POST['State'];
        $Postcode=$_POST['Postcode'];
        $TelNum=$_POST['TelNum'];

        $sql="Insert into `pelajar` (StudentID, StudentName, ICNum, Address, City, State, Postcode, TelNum) values ('$StudentID','$StudentName','$ICNum','$Address','$City','$State','$Postcode','$TelNum')";
        mysqli_query($connect,$sql);
        if(mysqli_query($connect,$sql)){
            header ("Location : papar.php");
        }else{
            echo mysqli_error($connect);
        }
    }
?>
<body style="max-width: max-content; margin: auto;">
    <br><table border="1px black" style="border-collapse:collapse;"><form method="POST">
        <tr><td><label for="StudentID">Student ID : </label></td>
        <td><input type="text" name="StudentID"></td></tr>
        <tr><td><label for="StudentName">Student Name : </label></td>
        <td><input type="text" name="StudentName"></td></tr>
        <tr><td><label for="ICNum">IC Number : </label></td>
        <td><input type="text" name="ICNum"></td></tr>
        <tr><td><label for="Address">Address : </label></td>
        <td><input type="text" name="Address"></td></tr>
        <tr><td><label for="City">City : </label></td>
        <td><input type="text" name="City"></td></tr>
        <tr><td><label for="State">State : </label></td>
        <td><input type="text" name="State"></td></tr>
        <tr><td><label for="Postcode">Postcode : </label></td>
        <td><input type="text" name="Postcode"></td></tr>
        <tr><td><label for="TelNum">Telephone Number : </label></td>
        <td><input type="text" name="TelNum"></td></tr>
        <tr><th colspan="2"><input type="submit" name="submit"></th></tr>
    </form></table>
</body>
</html>