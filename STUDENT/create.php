<?php
		$name = $major = $grade = "";
    $name_err = $major_err = $grade_err = "";

		if($_SERVER["REQUEST_METHOD"]== "POST"){

		$input_name = $_POST["name"];
		if(empty($_POST["name"])){
			$name_err = "Please enter your name";
		}
		else{
			$name = $_POST["name"];
			if(!preg_match("/^[a-zA-Z ]*$/",$name)){
				$name_err = "Only letters and white space allowed";
			}
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
        require_once('./inc/config.php');

	$stmt = $conn->prepare("INSERT INTO Student(name,major,grade) VALUES(?,?,?);");
	$stmt->bind_param("ssi",$param_name,$param_major,$param_grade);
	//set parameter and execute
	$param_name = $name;
	$param_major = $major;
	$param_grade = $grade;
	if($stmt->execute()){
		header("Location: index.php");
		exit();
	}
	else{
		echo "Something went wrong. Please try again later.";
	}
	$stmt->close();
	$conn->close();
}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>STUDENT</title>
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
					<div class="page-header text-center"><h2>NEW STUDENT</h2></div>
						<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
							<div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control" name="name" value="<?php echo $name ?>"placeholder="enter your username">
								<span class="error">*<?php echo $name_err;?></span>
							</div>
							<div class="form-group">
								<label>Major</label>
								<textarea name="major" cols="10" rows="5" class="form-control"><?php echo $major ?></textarea>
								<span class="error">*<?php echo $major_err; ?></span>
							</div>
							<div class="form-group">
								<label>Grade</label>
								<input type="text" class="form-control" name="grade" value="<?php echo $grade ?>"placeholder="typein your grade">
								<span class="error">*<?php echo $grade_err;?></span>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-primary" name="submit" value="Submit">
								<a href="index.php" class="btn btn-default">Cansel</a>
							</div>
						</form>
					</div>
			</div>
		</div>
	</div>
</body>
</html>
