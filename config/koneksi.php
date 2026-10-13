<?php
date_default_timezone_set("Asia/Jakarta");
$conn = mysqli_connect("localhost","root","","satudatappm");

if(!$conn) {
	echo "Koneksi Database Gagal : ".mysqli_connect_error();
}
