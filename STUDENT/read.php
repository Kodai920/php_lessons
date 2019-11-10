
<?php
 
// check of id parameter from index.php url
 if(isset($_GET["id"])&& !empty($_GET["id"])){
 	require_once('./inc/config.php');
 	// prepare the select statement
 	$sql = "SELECT * FROM Student WHERE id = ?;";
 	if($stmt = mysqli_prepare($conn,$sql)){
 		// Bind variables to the prepared statement as parameters
 		mysqli_stmt_bind_param($stmt,"i",$param_id);
 		// Set parameters
 		$param_id = $_GET["id"];
 		// Attempt to execute the prepared statement
 		if(mysqli_stmt_execute($stmt)){
 			$result = mysqli_stmt_get_result($stmt);
 			if(mysqli_num_rows($result) == 1){
 				$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 				// Retrive individual field value
 				$name = $row["name"]; 
 				$major = $row["major"];
 				$grade = $row["grade"];
 			}
 			else{
 				header("location: error.php");
 				exit();
 			}
 		} else{
 			echo "Error $sql".$conn->error;
 		}
 	}
 	 	mysqli_stmt_close($stmt);
 	 	mysqli_close($conn);
 }
 else{
 	header("location:error.php");
 	exit();
 }
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-sxale-1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Student Details</div>
					<div class="card-body">
						<h5 class="card-title"><?php echo $row["name"];?></h5>
						<p class="card-text">
							<b>major:<b> <?php echo $row["major"];?><br></b>
							<b>grade:<b> <?php echo $row["grade"];?><br></b>
						</p>
							<a href="index.php" class="btn btn-primary">Back</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
