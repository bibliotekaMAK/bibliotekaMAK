<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Tytuł ; Biblioteczka MAK - System zarządzania - Biblioteka
Opis  ; Strona, na ktorej pracownicy moga generowac  i drukowac raporty.
Dostepna dopiero po zalogowaniu do systemu.
Data  ; Marzec 2011
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
<li><a href="systemzarzadzaniawypozyczalnia.php">Wypożyczalnia</a></li>
<li class="first"><a href="systemzarzadzaniaraporty.php">Raporty</a></li>
<li><a href="index.php">WWW</a></li>
<li><a href="help.php" target="_blank" onclick="window.open('help.php', 'Pomoc', 'scrollbars,height=550,width=810');return false;"><img src="images/help.png" alt="Pomoc" title="Pomoc" style="position:relative; top:-4px; left:1px;border:0 0 0 0;"/></a></li>
</ul>

</div>
<div id="content">
<div id="columnA">
<h2><a href="javascript:window.print()" style="color:red;font-weight:bold;">DRUKUJ&nbsp;</a>raport:</h2>
<p></p><h2>książki wypożyczone</h2><p><h2>18 sztuk</h2> 
<table cellpadding="5"><tr><td><b>Id wypożycz.</b></td><td><b>Data wypożycz.</b></td><td><b>ID czytelnika</b></td><td><b>ISBN książki</b></td></tr>
<tr><td>35</td><td>2011-05-10</td><td>18&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujczytelnika&amp;id_czytelnik=18" style="color: green;">szczegóły</a></td><td>837132&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujksiazke&amp;isbn=837132" style="color: green;">szczegóły</a></td></tr>

<tr><td>34</td><td>2011-05-10</td><td>9&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujczytelnika&amp;id_czytelnik=9" style="color: green;">szczegóły</a></td><td>999964&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujksiazke&amp;isbn=999964" style="color: green;">szczegóły</a></td></tr>
<tr><td>33</td><td>2011-05-10</td><td>6&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujczytelnika&amp;id_czytelnik=6" style="color: green;">szczegóły</a></td><td>999961&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujksiazke&amp;isbn=999961" style="color: green;">szczegóły</a></td></tr>

<tr><td>30</td><td>2011-05-08</td><td>17&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujczytelnika&amp;id_czytelnik=17" style="color: green;">szczegóły</a></td><td>345678&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujksiazke&amp;isbn=345678" style="color: green;">szczegóły</a></td></tr>
<tr><td>26</td><td>2011-05-08</td><td>12&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujczytelnika&amp;id_czytelnik=12" style="color: green;">szczegóły</a></td><td>999991&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujksiazke&amp;isbn=999991" style="color: green;">szczegóły</a></td></tr>

<tr><td>29</td><td>2011-05-08</td><td>10&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujczytelnika&amp;id_czytelnik=10" style="color: green;">szczegóły</a></td><td>999959&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujksiazke&amp;isbn=999959" style="color: green;">szczegóły</a></td></tr>
<tr><td>32</td><td>2011-05-08</td><td>6&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujczytelnika&amp;id_czytelnik=6" style="color: green;">szczegóły</a></td><td>999968&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujksiazke&amp;isbn=999968" style="color: green;">szczegóły</a></td></tr>

<tr><td>12</td><td>2011-05-07</td><td>12&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujczytelnika&amp;id_czytelnik=12" style="color: green;">szczegóły</a></td><td>999974&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujksiazke&amp;isbn=999974" style="color: green;">szczegóły</a></td></tr>
<tr><td>11</td><td>2011-05-07</td><td>10&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujczytelnika&amp;id_czytelnik=10" style="color: green;">szczegóły</a></td><td>223325&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujksiazke&amp;isbn=223325" style="color: green;">szczegóły</a></td></tr>

<tr><td>9</td><td>2011-05-07</td><td>8&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujczytelnika&amp;id_czytelnik=8" style="color: green;">szczegóły</a></td><td>999965&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujksiazke&amp;isbn=999965" style="color: green;">szczegóły</a></td></tr>
<tr><td>21</td><td>2011-05-07</td><td>1&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujczytelnika&amp;id_czytelnik=1" style="color: green;">szczegóły</a></td><td>999959&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujksiazke&amp;isbn=999959" style="color: green;">szczegóły</a></td></tr>

<tr><td>25</td><td>2011-05-07</td><td>1&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujczytelnika&amp;id_czytelnik=1" style="color: green;">szczegóły</a></td><td>999964&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujksiazke&amp;isbn=999964" style="color: green;">szczegóły</a></td></tr>
<tr><td>7</td><td>2011-05-03</td><td>9&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujczytelnika&amp;id_czytelnik=9" style="color: green;">szczegóły</a></td><td>345678&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujksiazke&amp;isbn=345678" style="color: green;">szczegóły</a></td></tr>

<tr><td>4</td><td>2011-05-03</td><td>3&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujczytelnika&amp;id_czytelnik=3" style="color: green;">szczegóły</a></td><td>123456&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujksiazke&amp;isbn=123456" style="color: green;">szczegóły</a></td></tr>
<tr><td>3</td><td>2011-05-03</td><td>1&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujczytelnika&amp;id_czytelnik=1" style="color: green;">szczegóły</a></td><td>999990&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujksiazke&amp;isbn=999990" style="color: green;">szczegóły</a></td></tr>

<tr><td>27</td><td>2011-04-08</td><td>4&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujczytelnika&amp;id_czytelnik=4" style="color: green;">szczegóły</a></td><td>123456&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujksiazke&amp;isbn=123456" style="color: green;">szczegóły</a></td></tr>
<tr><td>24</td><td>2011-04-07</td><td>8&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujczytelnika&amp;id_czytelnik=8" style="color: green;">szczegóły</a></td><td>999995&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujksiazke&amp;isbn=999995" style="color: green;">szczegóły</a></td></tr>

<tr><td>31</td><td>2011-04-02</td><td>2&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujczytelnika&amp;id_czytelnik=2" style="color: green;">szczegóły</a></td><td>999958&nbsp;-&nbsp;<a href="systemzarzadzaniaraporty.php?co=edytujksiazke&amp;isbn=999958" style="color: green;">szczegóły</a></td></tr>
</table></p>
</div>
<div id="columnB">
<h2>Wyświetl raport</h2>
<ul>
<li><a href="systemzarzadzaniaraporty.php?co=ksiazki&amp;id_ksiazka=$id_ksiazka">Raport książek</a></li>

<li><a href="systemzarzadzaniaraporty.php?co=czytelnicy&amp;id_czytelnik=$id_czytelnik">Raport czytelników</a></li>
<li><a href="systemzarzadzaniaraporty.php?co=wypozyczoneksiazki&amp;id_wypozyczenia=$id_wypozyczenia">Raport książek wypożyczonych</a></li>
<li><a href="systemzarzadzaniaraporty.php?co=przeterminowanewypozyczenia&amp;id_wypozyczenia=$id_wypozyczenia">Raport książek przeterminowanych</a></li>
<li><a href="systemzarzadzaniaraporty.php?co=ksiazkistan0&amp;id_ksiazka=$id_ksiazka">Raport książek ze stanem <b>0</b></a></li>
<li><a href="#">Raport 4</a></li>
</ul>
</div>
<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer">
<p><a href="http://www.kropleinternetu.biz" class="link1"><b>bdMAK&nbsp;</b></a>Copyright &copy; 2011<a href="http://www.inf.nazwa.pl/biblioteka" class="link1">Biblioteka Miejska nr.3 Demo</a></p>

</div>
</body>
</html>