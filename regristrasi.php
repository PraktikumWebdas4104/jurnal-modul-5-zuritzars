<?php
$koneksi = new mysqli("localhost", "root", "", "mahasiswa");
	if (isset($_POST['submit'])) {
		$koneksi = new mysqli("localhost", "root", "", "mahasiswa");
		if ($koneksi) {
			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$email = $_POST['email'];
			$row =mysqli_fetch_array(mysqli_query($koneksi,"SELECT*FROM daftar WHERE nim =$nim"));

				if(strlen($nim)==10 && is_numeric($nim)==TRUE){
					if(strlen($nama)<=25 && !preg_match("/^[a-zA-Z]*$/",$nama)==TRUE){
						if(strpos($email, '@gmail.com')==TRUE || strpos($email, 'yahoo.com')==TRUE ){  
						$sql = $koneksi->query("
						INSERT INTO `daftar` (`nim`, `nama`, `email`)
						VALUES ('$nim', '$nama','$email')
										   ");
						echo "Pendaftaran Berhasil<br>";
						}else{
							echo "NIM sudah digunakan mahasiswa lain!";
							}
						}else{
							echo "Nama yang dimasukkan minimal 25 karakter! Dan hanya huruf saja!";
						}
					}else{
						echo "Email harus sesuai aturan gmail atau Yahoo!";
						}
		}else{
			echo "NIM harus 10 karakter dan hanya angka!";
			}
	}else{
		echo "Pendaftaran GAGAL!";
		}
 ?>
