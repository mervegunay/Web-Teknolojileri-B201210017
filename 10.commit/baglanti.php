<?php
$vt_sunucu="sql112.infinityfree.com";
$vt_kullanici="if0_36574708";
$vt_sifre="bemBrNBrUJa4Q";
$vt_adi="if0_36574708_iletisim";

$baglan=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

if(!$baglan){
    
    die("Bağlantı başarısız".mysqli_connect_error());
}

?>

