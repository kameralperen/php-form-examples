<!DOCTYPE html>
<html lang="tr-TR" lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-language" content="tr" />
<title>Başlık</title>
</head>

<body>
    <?php
    if (!$_GET) {
    ?>
        <form action="index.php" method="get">
        Adınız soyadınız: <input type="text" name="Adsoyad"><br/>
        E-Mail adresiniz: <input type="email" name="Email"><br/>
        Telefon numaranız: <input type="text" name ="Telefonno"><br/>
        Mesajınız: <textarea name="mesaj"></textarea><br/>
        <br/><input type="submit" value="Formu Gönder">
        </form>
        <?php
	}else {
            $GelenAdSoaydDegeri          =       $_GET["Adsoyad"];
            $GelenEmailDegeri            =       $_GET["Email"];
            $GelenTelefonDegeri          =       $_GET["Telefonno"];
            $GelenMesajDegeri            =       $_GET["mesaj"];

            echo "Ad ve Soyad: " . $GelenAdSoaydDegeri . "<br/>";
            echo "E-mail: " . $GelenEmailDegeri . "<br/>";
            echo "Telefon Numarası: " . $GelenTelefonDegeri . "<br/>";
            echo "Mesajınız: " . $GelenMesajDegeri;
        }
        ?>
    
</body>
</html>