<?php
session_start();
?>
<?php include("plikkonfigbaza.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Tytu� ; Biblioteczka MAK - System zarz�dzania - Biblioteka
Opis  ; Strona z modulem zwrotow przeterminowanych rezerwacji.
Dostepna dopiero po zalogowaniu do systemu.
Zawiera moduly: Poka� przeterminowane rezerwacje, usu� przeterminowane rezerwacje.
Data  ; Czerwiec 2011
Autor ; Mariusz P., Agnieszka S., Krzysztof P.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-2" />
<title>System zarz�dzania - Biblioteka</title>
<meta name="Author" content="M.P., A.S., K.P." />
<meta name="Robots" content="noindex, nofollow" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<noscript>
<p class="noscriptText"><b>Koniecznie w��cz obs�ug� JavaScript.</b><a href="http://www.kropleinternetu,biz/obslugajava.php" title="W��czenie ods�ugi JavaScript w przegl�darkach internetowych." target="_blank" style="text-decoration:blink;"><b> Kliknij i sprawd� jak to zrobi�&nbsp;&nbsp;&raquo;</b></a></p>
</noscript>
<?php
if($_SESSION["zalogowany"]==0){echo "<div style=\"font-size:14px; text-align:center;\"><h2>Nie masz dost�pu do tej cz�ci witryny.</h2> <a href='systemzarzadzania.php'>Zaloguj si�</a><p>lub<br/><a href='index.php'>Przejd� do wyszukiwarki ksi��ek</a></p></div>;"; exit();}
?>
<div id="header"><b>System zarz�dzania bdMAK</b>- Biblioteka Miejska nr.3 Cz�stochowa
<h1>Zalogowany</h1>

<h2><a href="systemzarzadzania.php?wyloguj=tak">wyloguj si�</a></h2>
</div>
<div id="menu">
<ul>
<li><a href="systemzarzadzaniaksiazki.php">Ksi��ki</a></li>
<li><a href="systemzarzadzaniaczytelnicy.php">Czytelnicy</a></li>
<li><a href="systemzarzadzaniawypozyczalnia.php">Wypo�yczalnia</a></li>
<li><a href="rezerwacje.php">Rezerwacje</a></li>
<li><a href="systemzarzadzaniaraporty.php">Raporty</a></li>
<li><a href="index.php">WWW</a></li>

<li><a href="help.php" target="_blank" onclick="window.open('help.php', 'Pomoc', 'scrollbars,height=550,width=810');return false;"><img src="images/help.png" alt="Pomoc" title="Pomoc" style="position:relative; top:-4px; left:1px;border:0 0 0 0;"/></a></li>
</ul>
</div>
<div id="content">
<div id="columnA">
<h1>Usu� przeterminowane rezerwacje</h1><a href="javascript:history.back()" style="color:orange;float:right;"><b>kliknij aby wr�ci� &raquo;</b></a><br /><a href="systemzarzadzaniawypozyczenia.php" style="color:orange;float:right;"><b>kliknij aby wypo�ycza� ksi��ki &raquo;</b></a>
<h2>

<h2>sztuk 1 </h2></p> 
<table cellpadding="5"><tr><td><b>Id rezer.</b></td><td><b>ID czyt.</b></td><td><b>ISBN ksi��ki</b></td><td><b>Data rezerwacji</b></td><td><b>Kod karty</b></td><td><b>Nazwisko</b></td><td><b>E-mail</b></td></tr>

<tr><td>31</td><td>3</td><td>999985</td><td>2011-06-06</td><td>165652223333</td><td>PIETRZAK</td><td>KRISwPI@WP.PL</td><td><a href="zwrot_rezerwacji.php?co=wybierz_rezerw&amp;isbn=999985" style="color: red;">Usu� rezerwacj�</a></td></tr>
</table></p></div><div id="columnB"></div><div style="clear: both;">&nbsp;</div> 
</div>
<div id="footer">
<p><a href="http://www.kropleinternetu.biz" class="link1"><b>bdMAK</b></a>Copyright &copy; 2011<a href="http://www.inf.nazwa.pl/biblioteka" class="link1">Biblioteka Miejska nr.3 Demo</a></p>

</div>
</body>
</html>