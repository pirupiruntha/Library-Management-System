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
				<h3 id="heading"> New Book Request</h3>
			<div id="center">
			<?PHP
				IF(ISSET($_POST["submit"]))
				{
					$sql="Insert into reguest (ID,MES,LOGS) values({$_SESSION["ID"]},'{$_POST["msg"]}',now())";
					$res=$db->query($sql);					
					echo "<p class='success'> Request send to admin</p>";
					
				}
			?>
			<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
					<label>Message </label>
					<textarea name="msg" required></textarea>
				
					<button type="submit" name="submit"> Send Message</button>
					
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


