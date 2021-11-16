<?php

session_start();
include('function/connect.php');

?>



<?php
if ($_SERVER['REQUEST_METHOD']== "POST" )  {


$loginname  = $_POST['username'] ;
$loginpassword  = $_POST['password'] ;
$hashedpassword = md5($loginpassword);

$sql = "SELECT * FROM user WHERE user_name = '$loginname' and password = '$hashedpassword' and groub_id = 1  "; 
$result = $conn->query($sql) ; 
$count_result = $result->num_rows ; 

if ($count_result > 0) {

	$_SESSION['username'] = $loginname ;
	header('Location:index.php');
	}else
	{echo "error";}

/* another solution
$stmt = $conn->prepare("SELECT * FROM user WHERE username = '$loginname' and password = '$hashedpassword' and groub_id = 1  "); 
$stmt->excute(array($loginname , $hashedpassword));
$count=$stmt->rowCount();
*/
 


}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form action="<?php $_SERVER['PHP_SELF'] ?>"  method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="User name" name="username" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
						<input type="submit" value="login" class="btn btn-primary">
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
