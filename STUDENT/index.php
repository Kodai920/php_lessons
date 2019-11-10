<?php

require_once('./inc/config.php');


$sql = "CREATE TABLE IF NOT EXISTS Student(
		id INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		name VARCHAR(30) NOT NULL,
		major VARCHAR(50) NOT NULL,
        grade INT(10))";

// if($conn->query($sql) == TRUE)
// 	echo "Table Created Successfully<br>";
// else
//     echo "Error creating Table;".$conn->error;
//
// $sql = "INSERT INTO Student(name,major,grade)VALUES('Okabe','Law',3);";
// $sql .= "INSERT INTO Student(name,major,grade)VALUES('Akiyama','Engineering',1);";
// $sql .= "INSERT INTO Student(name,major,grade)VALUES('Kikuta','Literature',2);";
// $sql .= "INSERT INTO Student(name,major,grade)VALUES('Kanou','Economics',2);";
// $sql .= "INSERT INTO Student(name,major,grade)VALUES('Murakami','Agriculture',4);";
//
// if($conn->multi_query($sql)){
// 	echo "New record created successfully";
// }
// else{
// 	echo "Error:".$sql."<br>".$conn->error;
// }

?>



<!DOCTYPE html>
<html>
	<head>
		<title>Student</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-sxale-1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    </head>

	<body>
    <div class="wrapper">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2 class="pull-left text-center">Student Details</h2>
            <a href="create.php" class="btn btn-success float-right mb-2">ADD NEW STUDENT</a>
        </div>
        <?php
            $sql = "SELECT * FROM Student";
            if($result = mysqli_query($conn,$sql)){
                if(mysqli_num_rows($result) > 0){
                    echo "<table class='table table-bordered table-striped'>";
                    echo "<thead>";
                    echo "<tr>";
                        echo "<th>#</th>";
                        echo "<th>Name</th>";
                        echo "<th>Major</th>";
                        echo "<th>Grade</th>";
                        echo "<th colsapan='3'></th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                            echo "<td>".$row['id']."</td>";
                            echo "<td>".$row['name']."</td>";
                            echo "<td>".$row['major']."</td>";
                            echo "<td>".$row['grade']."</td>";
                            echo "<td><a href ='read.php?id=".$row['id']."'title='View Record'>
                            <i class='far fa-eye'></i></a></td>";
                            echo "<td><a href ='update.php?id=".$row['id']."'title='Update Record'>
                            <i class='fas fa-edit'></i></a></td>";
                            echo "<td><a href ='delete.php?id=".$row['id']."'title='Delete Record'>
                            <i class='fas fa-trash-alt'></i></a></td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                    mysqli_free_result($result);
                }
                else
                    echo "<p class='lead'><em>No records were found</em></p>";
            }
            else
                echo "ERROR: Could not able to execute $sql".mysqli_error($conn);
            mysqli_close($conn);
        ?>
    </div>
</div>
</div>
</div>
</body>
</html>
