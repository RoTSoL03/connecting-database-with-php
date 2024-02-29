<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr  style="background-color: black; color: white;">
                <th>ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Course</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            <?php    
                $sql = "SELECT * FROM tblstudents";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    //output connection
                    while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <th style="background-color: #c9f2a0;"><?php echo $row["id"];?></th>
                <td><?php echo $row["first_name"];?></td>
                <td><?php echo $row["middle_name"];?></td>
                <td><?php echo $row["last_name"];?></td>
                <td><?php echo $row["course"];?></td>
                <td><a href="profile.php?id=<?php echo $row["id"];?>">View student Profile</a></td>
            </tr>
            <?php 
                    }
                }
            ?>
        </tbody>
    </table>
</body>
</html>