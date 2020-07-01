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
				<h3 id="heading"> View Comment Details</h3>
				<?php
					$sql="SELECT book.BTITLE, student.NAME,comment.COMM,comment.LOGS FROM comment INNER join book on book.BID=comment.BID 
                           INNER JOIN student ON comment.SID=student.ID ";
					$res=$db->query($sql);
					if($res->num_rows>0)
					{
						echo "<table>
							<tr>
								<th>SNO</th>
								<th>BOOK</th>
								<th>NAME</th>
								<th>COMMENT</th>
								<th>LOGS</th>
								
							</tr> 
								";
								$i=0;
							while($row=$res->fetch_assoc())
							{
								$i++;
								echo"<tr>";
								echo"<td>{$i}</td>";
								echo"<th>{$row["BTITLE"]}</th>";
								echo"<td>{$row["NAME"]}</td>";
								echo"<td>{$row["COMM"]}</td>";
								echo"<td>{$row["LOGS"]}</td>";
								echo"</tr>";
							
							}
							echo "</table>";
					}
					else
					{
						echo "<p class='error'> No Comment Found </p>";
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


