<?php
	session_start();
	include'../koneksi/koneksi.php';
	if (!($_POST['subjek']=='') and !($_POST['aspirasi']=='')){
		date_default_timezone_set('Asia/Jakarta');
		

		$text='abcdefghijklmnopqrstuvwxyz0123456789';
		$pjg=10;
		$txt=strlen($text)-1;
		$kode ='';
		for($i=1; $i<=$pjg; $i++){
			$kode.=$text[rand(0,$txt)];		
		}	
		$date  = date("H:i, d-m-Y");
		$nim   = $_SESSION['nim'];
		
		
		$subjek	= $_POST['subjek'];
		$aspirasi     	= $_POST['aspirasi'];		
	
		$sql = "INSERT into tb_aspirasi(kd_aspirasi,nim,wkt_masuk,subjek,aspirasi)
							VALUES  ('$kode','$nim','$date','$subjek','$aspirasi')";
		$execute = mysqli_query($db, $sql);
		
		echo "<Center><h2>Aspirasi anda telah disimpan<br>Terima Kasih</h2></center>
		<meta http-equiv='refresh' content='2;url=../user/mahasiswa/'>";
	}
	else{
		echo "<Center><h2>Silahkan isi semua kolom lalu tekan submit<br>Terima Kasih</h2></center>
		<meta http-equiv='refresh' content='2;url=../user/mahasiswa/aspirasi-baru'>";
	}
	
?>
	