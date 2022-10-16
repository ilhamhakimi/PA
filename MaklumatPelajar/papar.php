<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Student Info</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body style="max-width: max-content; margin: auto;">
    <br><table border="1px black" style="border-collapse:collapse;">
        <tr>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>IC Number</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Postcode</th>
            <th>Telephone Number</th>
            <th>Action</th>
        </tr>
        <?php
        include "config.php";
        $count=1;
        $sql = "SELECT * from `pelajar`;";
        $result = mysqli_query($connect,$sql);
        while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row["StudentID"]; ?></td>
            <td><?php echo $row ["StudentName"]; ?></td>
            <td><?php echo $row ["ICNum"]; ?></td>
            <td><?php echo $row["Address"]; ?></td>
            <td><?php echo $row ["City"]; ?></td>
            <td><?php echo $row ["State"]; ?></td>
            <td><?php echo $row["Postcode"]; ?></td>
            <td><?php echo $row ["TelNum"]; ?></td>
            <td><input type="button" onclick="location.href='update.php?StudentID=<?php echo $row['StudentID']; ?>'" value="Update" /> | <input type="button" onclick="location.href='delete.php?StudentID=<?php echo $row['StudentID']; ?>'" value="Delete" /></td>
        </tr>
        <?php $count++; }?>
    </table>
    <br><center><input type="button" onclick="location.href='create.php';" value="Add Student Info" /></center>
</body>
</html>