<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Tytuł ; Biblioteczka MAK - System zarządzania - Biblioteka
Opis  ; Strona z modulem rezerwacji.
Dostepna dopiero po zalogowaniu do systemu.
Zawiera moduly: Znajdz czytelnika, znajdz ksiazke, wypożycz.
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
<noscript>
<p class="noscriptText"><b>Koniecznie włącz obsługę JavaScript.</b><a href="http://www.kropleinternetu,biz/obslugajava.php" title="Włączenie odsługi JavaScript w przeglądarkach internetowych." target="_blank" style="text-decoration:blink;"><b> Kliknij i sprawdź jak to zrobić&nbsp;&nbsp;&raquo;</b></a></p>
</noscript>
<div id="header"><b>System zarządzania bdMAK</b>- Biblioteka Miejska nr.3 Częstochowa
<h1>Zalogowany</h1>
<h2><a href="systemzarzadzania.php?wyloguj=tak">wyloguj się</a></h2>
</div>
<div id="menu">
<ul>
<li><a href="systemzarzadzaniaksiazki.php">Książki</a></li>
<li><a href="systemzarzadzaniaczytelnicy.php">Czytelnicy</a></li>
<li><a href="systemzarzadzaniawypozyczalnia.php">Wypożyczalnia</a></li>
<li class="first"><a href="rezerwacje.php">Rezerwacje</a></li>
<li><a href="systemzarzadzaniaraporty.php">Raporty</a></li>
<li><a href="index.php">WWW</a></li>
<li><a href="help.php" target="_blank" onclick="window.open('help.php', 'Pomoc', 'scrollbars,height=550,width=810');return false;"><img src="images/help.png" alt="Pomoc" title="Pomoc" style="position:relative; top:-4px; left:1px;border:0 0 0 0;"/></a></li>
</ul>
</div>
<div id="content">
<div id="columnA">
<h1>Rezerwacje książek</h1><a href="javascript:history.back()" style="color:orange;float:right;"><b>kliknij aby wrócić &raquo;</b></a></a>
<h2>Wyszukaj rezerwację</h2>
<p><form method="post" action=""><hr style="border:1px solid #274690;"/><table><tr><td>Wpisz <b>Kod</b> karty:</td><td> <input type="text" name="fraza" style="background-color:#FFC9C9;border:1px solid #FFA4A4" value=150520122></td></tr></table><input type="submit" value="Szukaj"/><hr style="border:1px solid #274690;"/></form><strong>Rezerwacja na:</strong><br><table cellpadding="5"><tr><td><b>Id rezer.</b></td><td><b>IP komputera</b></td><td><b>ID czytelnika</b></td><td><b>ISBN książki</b></td><td><b>Data rezerwacji</b></td><td><b>Kod karty</b></td><td><b>Nazwisko</b></td></tr>
</table></p></div><div id="columnB"><em><b>Wypożyczonych -</b></em> <big><b>0</b></big><br><span style="color: #ff0000"><em><b>Przeterminowanych -</b></em> <big><b>0</b></big></span><br><br><form method="post" ><b>CZYTELNIK:</b><input type="hidden" name="co" value="wypozyczrezerw"/><input type="hidden" name="id_czytelnik" value=""/><table><tr><td>ID czytel.:</td><td><input type="text" name="id" readonly="readonly" style="background-color:#FF8080;border:1px solid #FFA4A4" value=""/></td></tr><tr><td>Imię:</td><td><input type="text" name="imie" readonly="readonly" style="background-color:#FFFF80;border:1px solid #FFA4A4" value=""/></td></tr><tr><td>Nazwisko:</td><td><input type="text" name="nazwisko" readonly="readonly" style="background-color:#FFFF80;border:1px solid #FFA4A4"value=""/></td></tr><tr><td>Kod pocztowy:</td><td><input type="text"name="kod_pocztowy" readonly="readonly" style="background-color:#FFFF80;border:1px solid #FFA4A4" value=""/></td></tr><tr><td>Miasto:</td><td><input type="text" name="miasto" readonly="readonly" style="background-color:#FFFF80;border:1px solid #FFA4A4" value=""/></td></tr><tr><td>Adres:</td><td><input type="text" name="adres" readonly="readonly" style="background-color:#FFFF80;border:1px solid #FFA4A4"value=""/></td></tr><tr><td>E-mail:</td><td><input type="text"name="email" readonly="readonly" style="background-color:#FFFF80;border:1px solid #FFA4A4" value=""/></td></tr><tr><td><b>KSIĄŻKA:</b></td><td></td><td></td></tr><input type="hidden" name="isbn" value=""/><tr><td>Tytuł:</td><td><input type="text" name="tytul" readonly="readonly" style="background-color:#FFFF80;border:1px solid #FFA4A4" value=""/></td></tr><tr><td>Autor:</td><td><input type="text" name="autor" readonly="readonly" style="background-color:#FFFF80;border:1px solid #FFA4A4"value=""/></td></tr><tr><td>ISBN:</td><td><input type="text"name="isbn" readonly="readonly" style="background-color:#FF8080;border:1px solid #FFA4A4" value=""/></td></tr><tr><td>Rok wydania:</td><td><input type="text" name="rok_wydania" readonly="readonly" style="background-color:#FFFF80;border:1px solid #FFA4A4" value=""/></td></tr><tr><td>Wydanie:</td><td><input type="text" name="wydanie" readonly="readonly" style="background-color:#FFFF80;border:1px solid #FFA4A4"value=""/></td></tr><tr><td>Ilość:</td><td><input type="text"name="ilosc" readonly="readonly" style="background-color:#FFFF80;border:1px solid #FFA4A4" value=""/></td></tr><tr><td><span style="color: #ff4040;"><b>Potwierdź!</b></span></td><td><input type="checkbox" name="zgadzasie"/></td></tr></table><input type="submit" value="Wypożycz rezerwację"/></form></div><div style="clear: both;">&nbsp;</div> 
</div>
<div id="footer">
<p><a href="http://www.kropleinternetu.biz" class="link1"><b>bdMAK</b></a>Copyright &copy; 2011<a href="http://www.inf.nazwa.pl/biblioteka" class="link1">Biblioteka Miejska nr.3 Demo</a></p>
</div>
</body>
</html>