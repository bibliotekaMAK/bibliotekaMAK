<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Tytu� ; Biblioteczka MAK - System zarz�dzania - Biblioteka
Opis  ; Strona pomocy.
Dostepna dopiero po zalogowaniu do systemu.
Zawiera moduly: drukuj karte, zamknij okno.
Data  ; Maj 2011
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
<body style="margin:20px 20px 20px 20px;">
  <?php include("plikconfig.php");?>
  <noscript>
    <p class="noscriptText"><b>Koniecznie w��cz obs�ug� JavaScript.</b><a href="http://www.kropleinternetu,biz/obslugajava.php" title="W��czenie ods�ugi JavaScript w przegl�darkach internetowych." target="_blank" style="text-decoration:blink;"><b>Kliknij i sprawd� jak to zrobi�&nbsp;&nbsp;&raquo;</b></a></p>
  </noscript>
  <?php	
  if($_SESSION["zalogowany"]==0){echo "<div style=\"font-size:14px; text-align:center;\"><h2>Nie masz dost�pu do tej cz�ci witryny.</h2> <a href='systemzarzadzania.php'>Zaloguj si�</a><p>lub<br/><a href='index.php'>Przejd� do wyszukiwarki ksi��ek</a></p></div>;"; exit();}
  ?> <a name="pyt0"></a>
  <h1>Pomoc</h1>
  <ol>
    <li><a href="#pyt1">Dzia� "KSI��KI"</a>
      <ol>
        <li>Dodanie nowej ksi��ki do bazy</li>
        <li>Wyszukanie ksi��ki w bazie</li>
        <li>Edycja opisu ksi��ki</li>
        <li>Kasowanie ksi��ki z bazy</li>
      </ol>
    </li>
    <li><a href="#pyt2">Dzia� "CZYTELNICY"</a>
      <ol>
        <li>Dodanie nowego czytelnika do bazy</li>
        <li>Wyszukanie czytelnika w bazie</li>
        <li>Edycja opisu czytelnika, zmiana danych</li>
        <li>Kasowanie czytelnika z bazy</li>
        <li>Drukowanie Karty bibliotecznej</li>
      </ol>
    </li>
    <li><a href="#pyt3">Dzia� "WYPO�YCZALNIA"</a>
      <ol>
        <li><a href="#pyt4">Przej�cie do Dzia�u "WYPO�YCZANIE KSI��EK"</a>
          <ol>
            <li>Wyb�r czytelnika</li>
            <li>Wyb�r ksi��ki</li>
            <li>Potwierdzenie wyboru</li>
            <li>Wypo�yczenie ksi��ki</li>
          </ol>
        </li>
        <li><a href="#pyt5">Przej�cie do dzia�u "ZWROT KSI��EK"</a>
          <ol>
            <li>Wyb�r czytelnika</li>
            <li>Wyszukanie ksi��ek wypo�yczonych przez czytelnika</li>
            <li>Zwrot ksi��ki</li>
            <li>Potwierdzenie zwrotu</li>
            <li>Przed�u�enie okresu wypo�yczenia</li>
            <li>Potwierdzenie przed�u�enia</li>
          </ol>
        </li>
      </ol>
    </li>
    <li><a href="#pyt6">Dzia� "RAPORTY"</a>
      <ol>
        <li>Wyb�r raportu
          <ol>
            <li>Raport ksi��ek</li>
            <li>Raport czytelnik�w</li>
            <li>Raport ksi��ek wypo�yczonych</li>
            <li>Raport ksi��ek przeterminowanych</li>
            <li>Raport ksi��ek ze stanem 0</li>
          </ol>
        </li>
        <li>Drukowanie raportu</li>
      </ol>
    </li>
    <li><a href="#pyt7">Dzia� "WWW"</a></li>
    <li><a href="#pyt8"><span style="color: #ff0000">B��dy i ich najcz�stsze przyczyny</span></a></li>
  </ol>
  <br /> <a name="pyt1"></a>
<h3>1. Dzia� "KSI��KI"</h3>
<p><img src="images/ksiazki.jpg" width="80%" height="80%" border="0" alt="[Rozmiar: 41857 bajt�w]" title="Dzia� KSI��KI"></p><p style="font-weight:bold;font-size:16px;color:#C06000;">-- Dodanie nowej ksi��ki do bazy<br/><br/></p>
<p><img src="images/dodksiazki.jpg" width="268" height="339" border="0" alt="[Rozmiar: 24843 bajt�w]" title="Dodanie nowej ksi��ki do bazy"></p>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Wyszukanie ksi��ki w bazie<br/><br/></p>
<p><img src="images/wyszksiazki.jpg" width="60%" height="60%" border="0" alt="[Rozmiar: 22032 bajt�w]" title="Wyszukanie ksi��ki w bazie"></p>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Edycja opisu ksi��ki<br/><br/></p>
<p><img src="images/edtksiazki.jpg" width="302" height="351" border="0" alt="[Rozmiar: 25294 bajt�w]" title="Edycja opisu ksi��ki"></p>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Kasowanie ksi��ki z bazy<br/><br/></p>

<img src="images/nav_up_blue.png" width="18" height="18" alt="Do g�ry"/>&nbsp;<a href="#pyt0">Powr�t do g�ry</a>
<a name="pyt2"></a>
<h3>2. Dzia� "CZYTELNICY"</h3>
<p><img src="images/czytelnicy.jpg" width="80%" height="80%" border="0" alt="Dzia� CZYTELNICY" title="Dzia� CZYTELNICY"></p><p style="font-weight:bold;font-size:16px;color:#C06000;">-- Dodanie nowego czytelnika do bazy<br/><br/></p>
<p><img src="images/dodczytelnika.jpg" width="242" height="341" border="0" alt="[Rozmiar: 24918 bajt�w]" title="Dodanie nowego czytelnika do bazy"></p><p style="font-weight:bold;font-size:16px;color:#C06000;">-- Wyszukanie czytelnika w bazie<br/><br/></p>
<p><img src="images/wyszczytelnika.jpg" width="603" height="143" border="0" alt="[Rozmiar: 24856 bajt�w]" title="Wyszukanie czytelnika w bazie"></p><p style="font-weight:bold;font-size:16px;color:#C06000;">-- Edycja opisu czytelnika, zmiana danych<br/><br/></p>
<p><img src="images/edtczytelnika.jpg" width="327" height="350" border="0" alt="[Rozmiar: 26533 bajt�w]" title="Edycja opisu czytelnika, zmiana danych"></p><p style="font-weight:bold;font-size:16px;color:#C06000;">-- Kasowanie czytelnika z bazy<br/><br/></p>
<p><img src="images/wyszczytelnika.jpg" width="603" height="143" border="0" alt="[Rozmiar: 24856 bajt�w]" title="Kasowanie czytelnika z bazy"></p><p style="font-weight:bold;font-size:16px;color:#C06000;">-- Drukowanie Karty bibliotecznej<br/><br/></p>
<p><img src="images/kartabiblio.jpg" width="563" height="64" border="0" alt="[Rozmiar: 15523 bajt�w]" title="Drukowanie Karty bibliotecznej"></p><p><img src="images/kartabiblio2.jpg" width="351" height="308" border="0" alt="[Rozmiar: 28698 bajt�w]" title="Drukowanie Karty bibliotecznej"></p>
<img src="images/nav_up_blue.png" width="18" height="18" alt="Do g�ry"/>&nbsp;<a href="#pyt0">Powr�t do g�ry</a>
<a name="pyt3"></a>
<h3>3. Dzia� "WYPO�YCZALNIA"</h3>
<p><img src="images/wyborwypozyczalnia.jpg" width="345" height="245" border="0" alt="[Rozmiar: 18519 bajt�w]" title="WYPO�YCZALNIA"></p>
<img src="images/nav_up_blue.png" width="18" height="18" alt="Do g�ry"/>&nbsp;<a href="#pyt0">Powr�t do g�ry</a>
<a name="pyt4"></a>
<h3>&nbsp;&nbsp;3.1. Przej�cie do Dzia�u "WYPO�YCZANIE KSI��EK"</h3>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Wyb�r czytelnika<br/><br/></p>
<p><img src="images/wypozksiazek.jpg" width="80%" height="80%" border="0" alt="[Rozmiar: 30997 bajt�w]"></p><p style="font-weight:bold;font-size:16px;color:#C06000;">-- Wyb�r ksi��ki<br/><br/></p>
<p><img src="images/wypozyczenieksiazki.jpg" width="469" height="110" border="0" alt="[Rozmiar: 18423 bajt�w]" title="Wyb�r czytelnika"></p><p style="font-weight:bold;font-size:16px;color:#C06000;">-- Potwierdzenie wyboru<br/><br/></p><p><img src="images/wypozyczenieksiazki.jpg" width="469" height="110" border="0" alt="[Rozmiar: 18423 bajt�w]" title="Wyb�r czytelnika"></p><p style="font-weight:bold;font-size:16px;color:#C06000;">-- Wypo�yczenie ksi��ki<br/><br/></p>
<img src="images/nav_up_blue.png" width="18" height="18" alt="Do g�ry"/>&nbsp;<a href="#pyt0">Powr�t do g�ry</a>
<a name="pyt5"></a>
<h3>&nbsp;&nbsp;3.2 Przejcie do dzia�u "ZWROT KSI��EK"</h3>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Zwrot ksi��ki<br/><br/></p>
<p><img src="images/zwrotksiazki.jpg" width="695" height="217" border="0" alt="[Rozmiar: 22141 bajt�w]" title="Zwrot ksi��ek"></p>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Wyb�r czytelnika<br/><br/></p>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Wyszukanie ksi��ek wypo�yczonych przez czytelnika<br/><br/></p>
<p><img src="images/zwrotwyszukanie.jpg" width="574" height="262" border="0" alt="[Rozmiar: 33030 bajt�w]" title="Zwrot wyszukanie"></p>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Potwierdzenie zwrotu<br/><br/></p>
<p><img src="images/zwrotpotwierdz.jpg" width="181" height="205" border="0" alt="[Rozmiar: 14668 bajt�w]" title="Zwrot potwierdzenie"></p>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Przed�u�enie okresu wypo�yczenia<br/><br/></p>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Potwierdzenie przed�u�enia<br/><br/></p>
<p><img src="images/zwrotprzedluz.jpg" width="174" height="218" border="0" alt="[Rozmiar: 14904 bajt�w]" title="Zwrot przed�u�enie"></p>
<img src="images/nav_up_blue.png" width="18" height="18" alt="Do g�ry"/>&nbsp;<a href="#pyt0">Powr�t do g�ry</a>
<a name="pyt6"></a>
<h3>4. Dzia� "REZERWACJE"</h3>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Wyszukanie rezerwacji<br/><br/></p>
<p><img src="images/rezerwksiazki.jpg" width="80%" height="80%" border="0" alt="[Rozmiar: 54954 bajt�w]" title="Wyszukanie zarezerwowanej ksi��ki"></p>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Wypo�yczenie zarezerwowanej ksi��ki<br/><br/></p>
<p><img src="images/rezerwksiazkiwypozycz.jpg" width="80%" height="80%" border="0" alt="[Rozmiar: 54954 bajt�w]" title="Wypo�yczenie zarezerwowanej ksi��ki"></p>
<img src="images/nav_up_blue.png" width="18" height="18" alt="Do g�ry"/>&nbsp;<a href="#pyt0">Powr�t do g�ry</a>
<a name="pyt7"></a>
<h3>5. Dzia� "RAPORTY"</h3>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Wyb�r raportu<br/><br/></p>
<p><img src="images/dzialraporty.jpg" width="469" height="218" border="0" alt="[Rozmiar: 22463 bajt�w]" title="Raporty"></p>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Raport ksi��ek<br/><br/></p>
<p><img src="images/raportksiazek.jpg" width="80%" height="80%" border="0" alt="[Rozmiar: 51893 bajt�w]" title="Raport ksi��ek"></p>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Raport czytelnik�w<br/><br/></p>
<p><img src="images/raportczytelnikow.jpg" width="80%" height="80%" border="0" alt="[Rozmiar: 58368 bajt�w]" title="Raport czytelnik�w"></p>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Raport ksi��ek wypo�yczonych<br/><br/></p>
<p><img src="images/raportksiwypozycz.jpg" width="80%" height="80%" border="0" alt="[Rozmiar: 54937 bajt�w]" title="Raport ksi��ek wypo�yczonych"></p>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Raport ksi��ek przeterminowanych<br/><br/></p>
<p><img src="images/raportksiprzeter.jpg" width="80%" height="80%" border="0" alt="[Rozmiar: 42414 bajt�w]" title="Raport ksi��ek przeterminowanych"></p>
<p><img src="images/mailprzypomn.jpg" width="80%" height="80%" border="0" alt="[Rozmiar: 30539 bajt�w]" title="Raport ksi��ek przeterminowanych - mail z przypomnieniem"></p>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Raport ksi��ek ze stanem 0<br/><br/></p>
<p><img src="images/raport0.jpg" width="90%" height="90%" border="0" alt="[Rozmiar: 25995 bajt�w]" title="Raport ksi��ek ze stanem 0"></p>

<p></p>
<img src="images/nav_up_blue.png" width="18" height="18" alt="Do g�ry"/>&nbsp;<a href="#pyt0">Powr�t do g�ry</a>
<a name="pyt8"></a>
<h3>6. Dzia� "WWW"</h3>
<p><img src="images/www.jpg" width="80%" height="80%" border="0" alt="[Rozmiar: 76013 bajt�w]" title="Dzia� WWW"></p>
<img src="images/nav_up_blue.png" width="18" height="18" alt="Do g�ry"/>&nbsp;<a href="#pyt0">Powr�t do g�ry</a>
<a name="pyt9"></a>
<h3>7. <span style="color: #ff0000">B��dy i ich najcz�stsze przyczyny</span></h3>
<p><span style="color:red;font-weight:bold;">Nie zosta�y wype�nione wszystkie pola!</span> - Nale�y dok�adnie wype�ni� wszystkie pola formularza</p>
<p><span style="color:red;font-weight:bold;">Nie mo�na po��czy� si� z baz� biblioteki</span> - B��d sieci</p>
<p><span style="color:red;font-weight:bold;">b��d w pytaniu</span> - B��dnie zadane pytanie do bazy danych</p>
<p><span style="color:red;font-weight:bold;">Nie mo�na po��czy� si� z MySQL</span> - B��d sieci - awaria.</p>
<p><span style="color:red;font-weight:bold;">Nie dodano nowego czytelnika!</span> - �le wype�nione pola formularza</p>
<img src="images/nav_up_blue.png" width="18" height="18" alt="Do g�ry"/>&nbsp;<a href="#pyt0">Powr�t do g�ry</a>

</body>
</html>