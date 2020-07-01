<?php
	session_start();
	include "database.php";
		
	if(!isset($_SESSION["AID"]))
	{
		header("location:alogin.php");
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
				<h3 id="heading"> View Request Details</h3>
				<?php
					$sql="SELECT student.NAME,reguest.MES,reguest.LOGS FROM student INNER JOIN reguest ON student.ID=reguest.ID ";
					$res=$db->query($sql);
					if($res->num_rows>0)
					{
						echo "<table>
							<tr>
								<th>SNO</th>
								<th>NAME</th>
								<th>MESSAGE</th>
								<th>LOGS</th>
								
							</tr> 
								";
								$i=0;
							while($row=$res->fetch_assoc())
							{
								$i++;
								echo"<tr>";
								echo"<td>{$i}</td>";
								echo"<td>{$row["NAME"]}</td>";
								echo"<td>{$row["MES"]}</td>";
								echo"<td>{$row["LOGS"]}</td>";
								echo"</tr>";
							
							}
							echo "</table>";
					}
					else
					{
						echo "<p class='error'> No Student Request Found </p>";
					}
				?>
				
			</div>
			<div id="navi">
			<?php
				include "adminSidebar.php";
			?>
			</div>
			<div id="footer">
				<p>Copyright &copy Tutor joes </p>
			</div>
		</div>
	</body>
</html>


