<?php
	ob_start();
	session_start();
	if (isset($_POST['submit'])){
		if ($_POST['x'] + $_POST['y'] == $_POST['hasil']){
			$_SESSION['score'] += 10;
			$status = true;
		} else {
			$_SESSION['score'] -= 2;
			$_SESSION['lives'] -= 1;
			$status = false;
		}
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
					if (isset($status)){
						// jika status == true, maka akan menampilkan jawaban benar
						if ($status == true){
							echo "<p>Hello ".$_COOKIE['nama'].", selamat jawaban anda benar...</p>";
							echo "<p>Lives: ".$_SESSION['lives']." | Score: ".$_SESSION['score']."</p>";
						} else {
							// jika status =- false, maka akan menampilkan jawaban salah
							echo "<p>Hello ".$_COOKIE['nama'].", sayang jawaban anda salah... tetap semangat ya !!!</p>";
							echo "<p>Lives: ".$_SESSION['lives']." | Score: ".$_SESSION['score']."</p>";
						}
					}
				?>
				<?php
					// jika lives == 0, maka game over
					if ($_SESSION['lives'] == 0){
						header("Location: gameover.php");
					} else {
							echo "<a href=soal.php>Soal Selanjutnya</a>";
					}
				?>
			</td>
		</tr>
	</table>
</div>
</body>
</html>