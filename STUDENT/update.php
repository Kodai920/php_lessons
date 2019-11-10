
<?php
		require_once('./inc/config.php');
		$name = $major = $grade = "";
		$name_err = $major_err = $grade_err = "";
		if(isset($_POST["id"]) && !empty($_POST["id"])){
            $id = $_POST["id"];

		$input_name = $_POST["name"];
		if(empty($input_name)){
			$name_err = "Please enter your name";
		}
		else{
			$name = $input_name;
		}

		$input_major = $_POST["major"];
		if(empty($input_major)){
			$major_err = "Please enter your major";
		}
		else{
			$major = $input_major;
        }

		$input_grade = $_POST["grade"];
		if(empty($input_grade)){
			$grade_err = "Please enter your grade";
		}
		else{
			$grade = $input_grade;
		}

	if(empty($name_err)&& empty($major_err)&& empty($grade_err)){

		$sql = "UPDATE Student SET name=?, major=?,grade=? WHERE id = ?;";
		if($stmt = mysqli_prepare($conn,$sql)){
            mysqli_stmt_bind_param($stmt,"ssii",$param_name,$param_major,$param_grade,$param_id);

			$param_name = $name;
			$param_major = $major;
			$param_grade = $grade;
      $param_id = $id;

			if(mysqli_stmt_execute($stmt)){

				header("location: index.php");
				exit();
			}
			else{
				echo "Something went wrong. Please try again later";
			}
		}
		mysqli_stmt_close($stmt);
	}
	mysqli_close($conn);
}
else{
		if(isset($_GET["id"])&& !empty($_GET["id"])){
			$id = $_GET["id"];
 		$sql = "SELECT * FROM Student WHERE id = ?;";
 		if($stmt = mysqli_prepare($conn,$sql)){
 			mysqli_stmt_bind_param($stmt,"i",$param_id);
 			$param_id = $id;
 		if(mysqli_stmt_execute($stmt)){
 			$result = mysqli_stmt_get_result($stmt);
 			if(mysqli_num_rows($result) == 1){
 				$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 				$name = $row["name"];
 				$major = $row["major"];
 				$grade = $row["grade"];
 			}
 			else{
 				header("location: error.php");
 				exit();
 			}
 		}
 			else{
 			echo "Something went wrong. Please try again later.";
 		}
 	}
 	 	mysqli_stmt_close($stmt);
 	 	mysqli_close($conn);
 	}else{
 	header("location: error.php");
 	exit();
 	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-sxale-1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<style>
			.error{ color:red;}
		</style>
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col_md-8">
					<div class="page-header text-center"><h2>UPDATE Record</h2></div>
						<form action="update.php" method="post">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" name="name" value="<?php echo $name ?>">
								<span class="error">*<?php echo $name_err;?></span>
							</div>
							<div class="form-group">
								<label for="major">Major</label>
								<textarea name="major" cols="10" rows="5" class="form-control"><?php echo $major; ?></textarea>
								<span class="error">*<?php echo $major_err; ?></span>
							</div>
							<div class="form-group">
								<label for="name">Grade</label>
								<input type="text" class="form-control" name="grade" value="<?php echo $grade ?>">
								<span class="error">*<?php echo $grade_err;?></span>
							</div>
							<div class="form-group">
								<input type="hidden" name="id" value="<?php echo $id;?>">
								<input type="submit" class="btn btn-primary" name="submit" value="Submit">
								<a href="index.php" class="btn btn-default">Cancel</a>
							</div>
						</form>
					</div>
			</div>
		</div>
	</div>
</body>
</html>
