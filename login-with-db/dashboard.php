<?php
//echo "<pre>";print_r($_POST);
//echo "<pre>"; print_r($_POST);
//echo "<pre>";print_r($_SERVER);


if($_SERVER['REQUEST_METHOD'] == "POST"){
	
	$name = isset($_POST['username'])? $_POST['username'] : '';
	$password = isset($_POST['password'])? $_POST['password'] : '';
    include 'database.php';

    $sql = "select *from users where user_id ='$name' and user_pass ='$password'";
    $query = mysqli_query($conn,$sql);    

     if(mysqli_num_rows($query) > 0){

     	$user = mysqli_fetch_assoc($query);

		if($name == $user['user_id'] && $password == $user['user_pass']){	
		 	//header("location: dashboard.php");
	        echo "<h1>Welcome ".$name." "." Sisaudiya. Your password is ".$password."</h1>";
	       //echo "<pre>"; print_r($result);        
		}
     }else{
     	echo "Record not found";
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