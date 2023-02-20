<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Implementasi User Interface</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<div class="container">
		<div class="box">
		<span class="title">
			<h4><span style="color:#C92C6D">V</span>SGA-<span style="color:#C92C6D">C</span>ALCULATOR</h4>
			<hr>
		</span>
		<form method="post">
			<input class="input" type="number" name="nilai1" placeholder="Masuk kan Nilai ke-1" required>	
			<input class="input" type="number" name="nilai2" placeholder="Masuk kan Nilai ke-2" required>
			<div class="button-area">
				<button type="submit" name="tambah" class="button">+</button>
				<button type="submit" name="kurang" class="button">-</button>
				<button type="submit" name="kali" class="button">*</button>
				<button type="submit" name="bagi" class="button">/</button>
			</div>		
		</form>

		<!-- Hasil Perhitungan -->
		<div class="box-count">
				<?php 
				// membuat fungsi penjumlahan
				function FungsiTambah($nilai1,$nilai2){
				$tambah = $nilai1+$nilai2;
				return $tambah; // kembalikan hasil tambah
				}
				// membuat fungsi pengurangan
				function FungsiKurang($nilai1,$nilai2){
				$kurang = $nilai1-$nilai2;
				return $kurang; // kembalikan hasil kurang
				}

				// membuat fungsi perkalian
				function FungsiKali($nilai1,$nilai2){
				$kali = $nilai1*$nilai2;
				return $kali; // kembalikan hasil kali
				}

				// membuat fungsi pembagian
				function FungsiBagi($nilai1,$nilai2){
				$bagi = $nilai1/$nilai2;
				return $bagi; // kembalikan hasil bagi
				}

				// ===== PROSES JIKA TOMBOL DI KLIK ===
				// jika tombol tambah di klik
				if (isset($_POST['tambah'])) {
				// panggil hasil dari fungsi FungsiTambah()
				echo "<p>Hasil dari {$_POST['nilai1']} + {$_POST['nilai2']} adalah :<p><h1>".FungsiTambah($_POST['nilai1'],$_POST['nilai2'])."</h1>"; 
				}
				// jika tombol kurang di klik
				if (isset($_POST['kurang'])) {
				// panggil hasil dari fungsi FungsiKurang()
				echo "<p>Hasil dari {$_POST['nilai1']} - {$_POST['nilai2']} adalah :<p><h1>".FungsiKurang($_POST['nilai1'],$_POST['nilai2'])."</h1>"; 
				}
				// jika tombol kali di klik
				if (isset($_POST['kali'])) {
				// panggil hasil dari fungsi FungsiKali()
				echo "<p>Hasil dari {$_POST['nilai1']} x {$_POST['nilai2']} adalah :<p><h1>".FungsiKali($_POST['nilai1'],$_POST['nilai2'])."</h1>"; 
				}
				// jika tombol bagi di klik
				if (isset($_POST['bagi'])) {
				// panggil hasil dari fungsi FungsiBagi()
				echo "<p>Hasil dari {$_POST['nilai1']} / {$_POST['nilai2']} adalah :<p><h1>".FungsiBagi($_POST['nilai1'],$_POST['nilai2'])."</h1>"; 
				}

				?>
	
		</div>
			<p class="author">
				By : I Gede Arya Danny Pratama <br>
				Regis. Number : 1935604860-333
			</p>
		</div>
	</div>

</body>
</html>