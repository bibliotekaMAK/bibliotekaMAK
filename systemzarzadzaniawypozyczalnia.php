<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Tytuł ; Biblioteczka MAK - System zarządzania - Biblioteka
Opis  ; Strona z wyborem opcji dzialania.
Dostepna dopiero po zalogowaniu do systemu.
Zawiera moduly: oddaj ksiazke, wypozycz ksiazke.
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
</head>
<body>
<?php include("plikconfig.php");?>
<noscript>
<p class="noscriptText"><b>Koniecznie włącz obsługę JavaScript.</b><a href="http://www.kropleinternetu,biz/obslugajava.php" title="Włączenie odsługi JavaScript w przeglądarkach internetowych." target="_blank" style="text-decoration:blink;"><b> Kliknij i sprawdź jak to zrobić&nbsp;&nbsp;&raquo;</b></a></p>
</noscript>
<?php	
if($_SESSION["zalogowany"]==0){echo "<div style=\"font-size:14px; text-align:center;\"><h2>Nie masz dostępu do tej części witryny.</h2> <a href='systemzarzadzania.php'>Zaloguj się</a><p>lub<br/><a href='index.php'>Przejdź do wyszukiwarki książek</a></p></div>;"; exit();}
?>
<div id="header"><b>System zarządzania bdMAK</b>- Biblioteka Miejska nr.3 Częstochowa
<h1>Zalogowany</h1>

<h2><a href="systemzarzadzania.php?wyloguj=tak">wyloguj się</a></h2>
</div>
<div id="menu">
<ul>
<li><a href="systemzarzadzaniaksiazki.php">Książki</a></li>
<li><a href="systemzarzadzaniaczytelnicy.php">Czytelnicy</a></li>
<li class="first"><a href="systemzarzadzaniawypozyczalnia.php">Wypożyczalnia</a></li>
<li><a href="systemzarzadzaniaraporty.php">Raporty</a></li>
<li><a href="index.php">WWW</a></li>
<li><a href="help.php" target="_blank" onclick="window.open('help.php', 'Pomoc', 'scrollbars,height=550,width=810');return false;"><img src="images/help.png" alt="Pomoc" title="Pomoc" style="position:relative; top:-4px; left:1px;border:0 0 0 0;"/></a></li>
</ul>

</div>
<div id="content">
<div id="columnA">
<h1>Wybierz opcję:</h1>
<a href="systemzarzadzaniawypozyczenia.php" class="link1"><h2>Wypożyczenie książki</h2></a>
<a href="systemzarzadzaniazwroty.php" class="link1"><h2>Zwrot książki</h2></a>
<p>&nbsp;
</p>
 
</div>
<div id="columnB">
 
<p>&nbsp;
</p>

<p><br />
<h2>Kontakt</h2>
<ul>
<li>Biblioteka Miejska nr.3</li>
<li>123-321 Częstochowa</li>
<li>Ul. Korfantego 34a</li>
<li>Tel. +48 123-456-789</li>
</ul>
</p>
</div>
<div style="clear: both;">&nbsp;</div>
</div>

<div id="footer">
<p><a href="http://www.kropleinternetu.biz" class="link1"><b>bdMAK</b></a>Copyright &copy; 2011<a href="http://www.inf.nazwa.pl/biblioteka" class="link1">Biblioteka Miejska nr.3 Demo</a></p>
</div>
</body>
</html>