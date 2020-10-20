<?php 

// menampilkan tanggal dengan format tertentu
// echo 	date("l,d,M,m,yy <br/> ");
// echo 	date("l, D-M-Y <br/>");

// // detik yang berlalu sejak 1 jan 1970
// echo time();


// menghitung hari dari hari ini sampai 100 hari kedepan hari apa
// echo date(" l M Y ", time()+60*60*24*100);


// mktime 
// membuat sendiri detik
// mktime(0,0,0,0,0,0,)
// jam, menit, detik, bulan, tanggal, tahun
// mengetahui hari apa gue lahir
// mengetahui detik gue lahir cukup echo mktime
// echo date("l", mktime(0,0,0,8,17,1998));

// php echo bisa diganti dengan <?=



// gunanya isi string di function untuk membackup kalau function di pemanggilan php nya kosong
function salam( $waktu = "datang", $nama="baskaraa"){
	return "Selamat $waktu $nama";
}




 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>test</title>
 </head>
 <body>


 	<h1> <?= salam("pagi"); ?></h1>
 
 </body>
 </html>