<?php include("connection.php") ?>

<?php
    if(isset($_GET["id"])) { //check if there is an ID being passed
        $id = $_GET["id"]; 

        $sql = "SELECT * FROM tblstudents WHERE id = $id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            //output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $studentid = $row["id"];
                $fullname = $row["first_name"] . " " . $row["middle_name"] . " " . $row["last_name"];
                $course = $row["course"];
                $first_name = $row["first_name"];
                $middle_name = $row["middle_name"];
                $last_name = $row["last_name"];
            }
        } else {
            echo "<h3>No records found!</h3>";
        }

    } else {
        die(mysqli_connect_error());
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
</head>
<body>
    <h3>Welcome <strong><?php echo $fullname; ?>!</strong></h3>
    <p>First Name: <strong><?php echo $first_name; ?></strong></p>
    <p>Middle Name: <strong><?php echo $middle_name; ?></strong></p>
    <p>Last Name: <strong><?php echo $last_name; ?></strong></p>
    <p>Course: <strong><?php echo $course; ?></strong></p>
</body>
</html>