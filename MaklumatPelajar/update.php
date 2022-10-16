<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Update Student Info</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body style="max-width: max-content; margin: auto;">
    <br><table border="1px black" style="border-collapse:collapse;" width="100%">
        <tr>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>IC Number</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Postcode</th>
            <th>Telephone Number</th>
        </tr>
        <?php
        include "config.php";
        $StudentID = $_GET['StudentID'];
        $sql = mysqli_query($connect,"Select * from `pelajar` where StudentID= '$StudentID'");
        $row = mysqli_fetch_array($sql);
        if(isset($_POST['update'])){
            $StudentID=$_POST['StudentID'];
            $StudentName=$_POST['StudentName'];
            $ICNum=$_POST['ICNum'];
            $Address=$_POST['Address'];
            $City=$_POST['City'];
            $State=$_POST['State'];
            $Postcode=$_POST['Postcode'];
            $TelNum=$_POST['TelNum'];
    
            $sqlu = mysqli_query($connect,"UPDATE pelajar set StudentID='$StudentID', StudentName='$StudentName', ICNum='$ICNum', Address='$Address', City='$City', State='$State', Postcode='$Postcode', TelNum='$TelNum' where StudentID='$StudentID'");
            if($sqlu){
                mysqli_close($connect);
                header ("Location : papar.php");
            }else{
                echo mysqli_error($connect);
            }
        }
        ?>
        <form method="POST">
        <tr>
            <td><input type="text" name="StudentID" value="<?php echo $row['StudentID']; ?>"></td>
            <td><input type="text" name="StudentName" value="<?php echo $row ['StudentName']; ?>"></td>
            <td><input type="text" name="ICNum" value="<?php echo $row ['ICNum']; ?>"></td>
            <td><input type="text" name="Address" value="<?php echo $row ['Address']; ?>"></td>
            <td><input type="text" name="City" value="<?php echo $row ['City']; ?>"></td>
            <td><input type="text" name="State" value="<?php echo $row ['State']; ?>"></td>
            <td><input type="text" name="Postcode" value="<?php echo $row ['Postcode']; ?>"></td>
            <td><input type="text" name="TelNum" value="<?php echo $row ['TelNum']; ?>"></td>
            </tr>
    </table>
    <br><center><input type="submit" name="update" value="Update"></center>
    </form>
</body>
</html>