<?php
	session_start();
	include "database.php";
		
	if(!isset($_SESSION["ID"]))
	{
		header("location:ulogin.php");
	}
?>


<!DOCTYPE HTML>
<html>
	<head>
		<title> Tutor joes </title>
		<link rel="stylesheet" href="css/style.css" type="text/css">
	</head>
	<body>
		<div id="container">
			<div id="header">
				<h1> E-Library Management System </h1>
			</div>
			<div id="wrapper">
				<h3 id="heading"> Change Password</h3>
			<div id="center">
			<?PHP
				IF(ISSET($_POST["submit"]))
				{
					$sql="SELECT * from student where PASS='{$_POST["opass"]}' and ID='{$_SESSION["ID"]}'";
					$res=$db->query($sql);
					if($res->num_rows>0)
					{
						$s="update student set PASS='{$_POST["npass"]}' WHERE ID=".$_SESSION["ID"];
						$db->query($s);
						echo "<p class='success'> Password Changed Successfuly</p>";
					}
					else
					{
						echo "<p class='error'>Invalid Password </p>";
					}
				}
			?>
			<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
					<label> Old Password </label>
					<input type="password" name="opass" required>
					<label> New Password </label>
					<input type="password" name="npass" required>
					<button type="submit" name="submit"> Update Password </button>
					
			</form>
					
				
			</div>	
			</div>
			<div id="navi">
			<?php
				include "userSidebar.php";
			?>
			</div>
			<div id="footer">
				<p>Copyright &copy Tutor joes </p>
			</div>
		</div>
	</body>
</html>


