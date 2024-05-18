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
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<form action="panelgiris.php" method="post" style="max-width:500px;margin:auto">
  <h2>Kullanici Girisi</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Kullanici adi" name="usrnm">
  </div>



  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Parola" name="psw">
  </div>

  <button type="submit" class="btn">Giris yap</button>
</form>

</body>
</html>


<?php



session_start();
if(isset($_POST["usrnm"], $_POST["psw"]))
{
   if($_POST["usrnm"]=="b201210017@sakarya.edu.tr" && $_POST["psw"]=="b201210017")
   {
       $_SESSION["user"]=$_POST["usrnm"];
       header("location:panel.php");
   }
    else
    {
        echo"<script>alert('Kuallnıcı adı veya şifre hatalı')</script>";
    }
}





?>