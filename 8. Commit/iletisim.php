<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Şehrim</title>
</head>


<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-rop">
        <a class="navbar-brand" href="#">SİİRT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="index.html " aria-current="page"><i class="fas fa-home"></i>Ana Sayfa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hakkimda.html"><i class="fas fa-info"></i>Hakkımda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="egitim.html"><i class="fas fa-school"></i>Eğitim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sehrim.html"><i class="fas fa-city"></i>Şehrim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mirasimiz.html"><i class="fas fa-mosque"></i>Mirasımız</a>
                </li>
                li class="nav-item">
                    <a class="nav-link" href="ilgialanlarim.html"><i class="fas fa-smile"></i>İlgi Alanlarım</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="iletisim.php"><i class="fas fa-headset"></i>İletişim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="panelgiris.php"><i class="fas fa-user-lock"></i>Giriş Yap</a>
                </li>
            </ul>
        </div>
    </nav>

    <section id="iletisim">
        <div class="container">
            <h3 id="h3iletisim">iletisim</h3>
            <form action="iletisim.php" method="post">

                <div id="formgroup">

                    <div id="solform">

                        <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                        <input type="email" name="mail" placeholder="Mail Adresiniz" required class="form-control">
                    </div>
                    <div id="sagform">
                        <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">
                        <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">
                    </div>
                    <textarea name="mesaj" id="" cols="30" placeholder="Mesaj Giriniz" rows="10" required class="form-control"></textarea>
                    <input type="submit" value="Gönder">


                </div>

            </form>
        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>


<?php
include("baglanti.php");
if(isset($_POST["isim"],$_POST["mail"],$_POST["tel"],$_POST["konu"],$_POST["mesaj"]))
{
    $adsoyad=$_POST["isim"];
    $email=$_POST["mail"];
    $tel=$_POST["tel"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];
    
    
    $ekle="INSERT INTO kullanici(adsoyad, email, tel, konu, mesaj) VALUES('".$adsoyad."','".$email."','".$tel."','".$konu."','".$mesaj."')";
    if($baglan->query($ekle)===TRUE)
       {
        echo"<script>alert('mesaj gönderildi')</script>";
        
    }
    else{
        echo "<script>alert('mesajınız gönderilirken bir hata oluştu.')</script>";
        
    }
}
?>