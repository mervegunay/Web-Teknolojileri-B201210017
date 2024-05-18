<!DOCTYPE html>
<html>
<head>
    <style>
        #kullanici {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #kullanici td,
        #kullanici th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #kullanici tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #kullanici tr:hover {
            background-color: #ddd;
        }

        #kullanici th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }

    </style>
</head>

<body>

    <table id="kullanici">
        <tr>
            <th>Ad Soyad</th>
            <th>Email</th>
            <th>Tel</th>
            <th>Konu</th>
            <th>Mesaj</th>

        </tr>
        <?php
        session_start();
        if($_SESSION["user"]=="")
        {
            echo "<script>window.location.href='cikis.php'</script>";
        }
        else
        {
            echo"HOŞGELDİNİZ".$_SESSION['user']."<br>";
            echo"<a href='cikis.php'>ÇIKIŞ YAP</a><br> "  ;
            include("baglanti.php");

$sec="Select * From kullanici";
$sonuc=$baglan->query($sec);

if($sonuc->num_rows>0)
{
    while($cek=$sonuc->fetch_assoc())
    {
        echo "
        <tr>
            <td>".$cek['adsoyad']."</td>
            <td>".$cek['email']."</td>
            <td>".$cek['tel']."</td>
            <td>".$cek['konu']."</td>
            <td>".$cek['mesaj']."</td>
        </tr>
        
        ";
    }
}
else{
    echo"Veritabanında veri yok";
}
        }

   




?>

    </table>

</body>

</html>