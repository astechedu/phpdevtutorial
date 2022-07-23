<?php
//echo "<pre>";print_r($_POST);
//echo "<pre>"; print_r($_POST);
//echo "<pre>";print_r($_SERVER);

//User Data
$uname = "ajay";
$upass = "ajay123";

if($_SERVER['REQUEST_METHOD'] == "POST"){
	
	$name = isset($_POST['username'])? $_POST['username'] : '';
	$password = isset($_POST['password'])? $_POST['password'] : '';

	if($name == $uname && $password == $upass){
	 	//header("location: dashboard.php");
        echo "<h1>Welcome ".$name." "." Sisaudiya. Your password is ".$password."</h1>";
        
	}else{
	    echo "Wrong Credentials";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<div class="container">		
		<div class="row">
			<div class="col">
			  <h1>User Dashboard</h1>
			</div>
		</div>
	</div>

</body>
</html>