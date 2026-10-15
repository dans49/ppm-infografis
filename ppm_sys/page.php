<?php
if(empty($_GET['page'])) {
    include "modul/dashboard.php";
}

if($_GET['page'] == 'kecamatan') {
    include "modul/kecamatan/index.php";
} elseif($_GET['page'] == 'indikator') {
    include "modul/indikator/index.php";
} elseif($_GET['page'] == 'user') {
    include "modul/user/index.php";
} 
  


if($_GET['page'] == 'ubah_password') {
    include "modul/user/ubahpassword.php";
} 