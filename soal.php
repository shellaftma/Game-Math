<?php
	session_start();
	// merandom 2 bilangan
	$x = rand(0, 10);
	$y = rand(0, 10);

	if (isset($_POST['submit1'])){
	 	setcookie('nama', $_POST['nama']);
	 	setcookie('email', $_POST['email']);
	 	header("Location: soal.php");
	}

	if (isset($_POST['bukan'])){
		setcookie('nama', '');
		setcookie('email', '');
		header("Location: index.php");
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Game Math</title>
	<link rel ="stylesheet" href="main.css">
</head>
<body>
	<div id="body" style="width:500px; height:100px;">
	<div id="head"><h2>Game Math</h2></div>
	<table class="tabel" border="1" width=500 align=center>
		<tr align=center>
			<td>
				<?php
				// menampilkan nama dari cookie
					echo "<p>Hello ".$_COOKIE['nama'].", tetap semangat ya.. you can do the best!</p>";
					// menampilkan  lives dan score dari session
					echo "<p>Lives: ".$_SESSION['lives']." | Score: ".$_SESSION['score']."</p>";
				?>

	
				<form method="post" action="jawaban.php">
					<?php
						// menampilkan bilangan random x dan y
						echo "$x + $y = ";
					?>
					<input type="hidden" name="x" value="<?php echo $x;?>">
					<input type="hidden" name="y" value="<?php echo $y;?>">
					<input type="text" name="hasil">
					<input type="submit" name="submit" value="Submit">
				</form>
			</td>
		</tr>
	</table>
</div>

</body>
</html>
