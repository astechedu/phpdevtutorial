<?php

//echo "<pre>";print_r($_POST);
//echo "<pre>"; print_r($_POST);
//echo "<pre>";print_r($_SERVER);

//$con = mysqli_connect('localhost','root','','php');
//$mysql = mysqli_query($con,"SELECT *from users");

	//$name = isset($_POST['username'])? $_POST['username'] : '';
	//$password = isset($_POST['password'])? $_POST['password'] : '';

if(isset($_POST['username']) && $_POST['username'] !='' || isset($_POST['password']) && $_POST['password'] !=''){

  //header("location: welcome.php");
	echo "Hi";

}

 header("location: index.php");



/*
if($_SERVER['REQUEST_METHOD'] == "POST"){

	$name = isset($_POST['username'])? $_POST['username'] : '';
	$password = isset($_POST['password'])? $_POST['password'] : '';

	//if($name !="" && $password !=""){
	while($user = mysqli_fetch_assoc($mysql) ) {  

		if($name == $user["user_id"] && $password == $user["user_pass"]){
			
		 	//header("location: dashboard.php");
	        echo "<h1>Welcome ".$name." "." Your password is ".$password."</h1>";       
	        
		}
	}
}else{

	//header("location: /");
}
*/


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