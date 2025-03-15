<?php
	$notify='';
	$notifyClass='';

	if (isset($_POST['submit'])) {
		//Membuat sebuah Variabel, untuk bisa menerima data-data dari isi Form
			$nama= $_POST['nama'];
			$email=$_POST['email'];
			$pesan=$_POST['pesan'];

		//Periksa, apakah ada data-data, yang masih belum terisi dengan benar
			if (!empty($nama) && ! empty($email) && !empty($pesan)) {

				if (filter_var($email, FILTER_VALUE_EMAIL)== false) {
					$notify = 'email, salah. Silahkan coba lagi, dan juga ketikkan Alamat Akun Email, yang lengkap dan benar.';
					$notifyClass = 'errordiv';
				ele {
					//Pengaturan penerima Email, dan pesan. 
					$toEmail = 'creativesoftware60@gmailcom'; //Mengganti dengan Alamat Akun Email, yang diinginkan. 
					$pesan = 'Silahkan masukkan pesan anda.'; 
					$htmlContent = '<h2>Via Aplikasi Form Kontak, Website</h2> <h3>Nama</h3><p>'$name'</p> <h4>Email</h4><p>'$email'</p> <h4>Pesan</h4><p>'$Psan</p>';

					//Mengatur konten Type Header, untuk mengirimkan Email, dalam bentuk format HTML. 
					$headers = "Sublimen Text 3 \r \n";
					$headers = "Content-type:text/html;charset=UTF-8". \r \n";

					//Header tambahan
						$headers .= 'From:'.$name.'<'.$email.'>'."\r \n";

					//Pengiriman Email
						if(mail($toEmail, $emailMessages, $htmlContent, $headers)) {
							$notify = 'Pesan anda sudah terkirim dengan SUKSES/BERHASIL!';
							$notifyClass = 'succdiv';
						} else {
							$notify = 'Maaf, pesan anda GAGAL terkirim. Silahkan coba ulang lagi.';
							$notifyClass = 'errordiv';
						}
					}
					} else {
						$notify = 'Harap, mengisi seluruh semua Field, data, yang tersedia disini.';
						$notifyClass = 'errordiv';
					}
				}  
				