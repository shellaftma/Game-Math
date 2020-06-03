<?php
	session_start();
	// mengecek  keberadaan cookie nama
	if (isset($_COOKIE['nama'])){
		$status = true;
	} else {
		$status = false;
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
	<div id="head"><h2>Game Math</h2>
	</div>
	<table class="tabel" border="1" width=500 align=center>
		<tr align=center>
			<td align="center">
				<form method="post" action="soal.php">
				<?php
					if ($status == false){
				?>
					Masukkan Nama : <input type="text" name="nama"></br></br>
					Maukkan Email : <input type="Email" name="email"></br></br>
					<input type="submit" name="submit1" value="Submit">
				<?php		
					} else {
					
					echo "<p>Hallo ".$_COOKIE['nama'].", selamat datang kembali di permainan ini!!!</p>";

					echo "<button type=submit name=submit2>Start Game</button><br><br>";
					echo "Bukan anda? <button type=submit name=bukan>Klik Disini</button>";
					}
					
				?>
			</form>
				<?php
					// nilai awal live = 5 dan score awal = 0
					$_SESSION['lives'] = 5;
					$_SESSION['score'] = 0;
				?>
			</td>
		</tr>
	</table>
	</div>
</body>
</html>

<h1></h1>
	