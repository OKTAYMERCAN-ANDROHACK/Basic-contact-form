<?php

touch("MDB.html"); //Dosya oluşturma silmek için unlink kullanılıyor

$ad = $_GET['ad'];
$mail = $_GET['mail'];
$konu = $_GET['konu'];
$mesaj = $_GET['mesaj'];
$dosya = fopen('MDB.html' , 'a+');

fwrite($dosya , "Adı: $ad<br> E-mail: $mail<br> Konu: $konu<br> Mesajı: $mesaj<br>--------------------------------------<br>");

echo '<b>Mesajınız başarılı bir şekilde gönderildi. <a href="iletisim.html">Otomatik yönlendirilmediyseniz bu yazıya tıklayın.</b></a>';

header('Location: iletisim.html');

/* Bulunulan dizinde başka bir sayfaya yönlendirelim */
$konak  = $_SERVER['HTTP_HOST'];
$yol   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$ek = 'iletisim.html';
header("Location: http://$konak$yol/$ek");

