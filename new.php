<?php
	
	include "database.php";
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
				<h3 id="heading"> New User Registration</h3>
			<div id="center">
			<?PHP
				IF(ISSET($_POST["submit"]))
				{
					
						$sql="INSERT INTO student(NAME,PASS,MAIL,DEP) values('{$_POST["name"]}','{$_POST["pass"]}','{$_POST["mail"]}','{$_POST["dep"]}')";
						$db->query($sql);
						echo "<p class='success'>Registration successfuly</p>";
											
					
				}
			?>
			<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" >
					<label>Name </label>
					<input type="text" name="name" required>
					<label> Password </label>
					<input type="password" name="pass" required> 
					<label>Email Id </label>
					<input type="email" name="mail" required>
					<select name="dep" required>
					<option value=""> select </option>
					<option value="BCA"> BCA </option>
					<option value="B.SC CS"> B.SC CS </option>
					<option value="MCA"> MCA </option>
					<option value="OTHERS"> OTHERS </option>
					</select>
					<button type="submit" name="submit"> Register Now </button>
					
			</form>
					
				
			</div>	
			</div>
			<div id="navi">
			<?php
				include "sidebar.php";
			?>
			</div>
			<div id="footer">
				<p>Copyright &copy Tutor joes </p>
			</div>
		</div>
	</body>
</html>


