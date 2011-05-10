<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Tytuł ; Biblioteczka MAK - System zarządzania - Biblioteka
Opis  ; Strona z mozliwoscia wydruku karty bibliotecznej.
Dostepna dopiero po zalogowaniu do systemu.
Zawiera moduly: drukuj karte, zamknij okno.
Data  ; Maj 2011
Autor ; Mariusz P., Agnieszka S., Krzysztof P.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-2" />
<title>System zarządzania - Biblioteka</title>
<meta name="Author" content="M.P., A.S., K.P." />
<meta name="Robots" content="noindex, nofollow" />
<link href="default.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="druk.css" type="text/css" media="print" >
</head>
<body style="margin:20px 20px 20px 20px;">
<?php include("plikconfig.php");?>
  <noscript>
    <p class="noscriptText"><b>Koniecznie włącz obsługę JavaScript.</b><a href="http://www.kropleinternetu,biz/obslugajava.php" title="Włączenie odsługi JavaScript w przeglądarkach internetowych." target="_blank" style="text-decoration:blink;"><b>Kliknij i sprawdź jak to zrobić&nbsp;&nbsp;&raquo;</b></a></p>
  </noscript>
  <?php	
  if($_SESSION["zalogowany"]==0){echo "<div style=\"font-size:14px; text-align:center;\"><h2>Nie masz dostępu do tej części witryny.</h2> <a href='systemzarzadzania.php'>Zaloguj się</a><p>lub<br/><a href='index.php'>Przejdź do wyszukiwarki książek</a></p></div>;"; exit();}
  ?>
<h1>Karta biblioteczna</h1>

<img src="images/0008d.jpg"><div style="width:275px;height:175px;border:1px solid #0000FF;margin:-176px 0 0 -1px;"><b>&nbsp;Biblioteka Miejska nr.3 Częstochowa</b><center><p style="font-size:26px;">Karta biblioteczna</p>&nbsp;ID czytelnika - <b>18</b><br/><big>*WILSKA&nbsp;ALICJA*</big><br/>&nbsp;UL. STROMA 9 M 45,&nbsp;34-234&nbsp;BLACHOWNIA</center><p>&nbsp;e-mail:&nbsp;ALAWI@ONET.PL</p></div><br/><br/><a href="javascript:window.print()"><b>Drukuj kartę</b></a>&nbsp;&nbsp;&nbsp;<a href="#">|</a>&nbsp;&nbsp;&nbsp;<a href="javascript:window.close()"><b>Zamknij i wróć do poprzedniej strony</b></a>
</body>
</html>