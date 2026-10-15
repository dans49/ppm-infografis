<?php
if(empty($_GET['page'])) {
    include "modul/dashboard.php";
}

if($_GET['page'] == 'kecamatan') {
    include "modul/kecamatan/index.php";
} elseif($_GET['page'] == 'kategori') {
    include "modul/kategori/index.php";
} elseif($_GET['page'] == 'indikator') {
    include "modul/indikator/index.php";
} elseif($_GET['page'] == 'tambah_indikator') {
    include "modul/indikator/add.php";
} elseif($_GET['page'] == 'detail_indikator') {
    include "modul/indikator/add_detail.php";
} elseif($_GET['page'] == 'user') {
    include "modul/user/index.php";
} 
  


if($_GET['page'] == 'ubah_password') {
    include "modul/user/ubahpassword.php";
} 