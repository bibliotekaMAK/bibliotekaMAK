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
  <p><img src="images/ksiazki.jpg" width="80%" height="80%" border="0" alt="[Rozmiar: 41857 bajt�w]" title="Dzia� KSI��KI"></p>
  <p style="font-weight:bold;font-size:16px;color:#C06000;">-- Dodanie nowej ksi��ki do bazy<br />
  <br />
  </p>
  <p><img src="images/dodksiazki.jpg" width="268" height="339" border="0" alt="[Rozmiar: 24843 bajt�w]" title="Dodanie nowej ksi��ki do bazy"></p>
  <p style="font-weight:bold;font-size:16px;color:#C06000;">-- Wyszukanie ksi��ki w bazie<br />
  <br />
  </p>
  <p><img src="images/wyszksiazki.jpg" width="60%" height="60%" border="0" alt="[Rozmiar: 22032 bajt�w]" title="Wyszukanie ksi��ki w bazie"></p>
  <p style="font-weight:bold;font-size:16px;color:#C06000;">-- Edycja opisu ksi��ki<br />
  <br />
  </p>
  <p><img src="images/edtksiazki.jpg" width="302" height="351" border="0" alt="[Rozmiar: 25294 bajt�w]" title="Edycja opisu ksi��ki"></p>
  <p style="font-weight:bold;font-size:16px;color:#C06000;">-- Kasowanie ksi��ki z bazy<br />
  <br />
  </p>
  <img src="images/nav_up_blue.png" width="18" height="18" alt="Do g�ry" />&nbsp;<a href="#pyt0">Powr�t do g�ry</a> <a name="pyt2"></a>
  <h3>2. Dzia� "CZYTELNICY"</h3>
  <p>Nie. Zarz�dzanie stron� sprowadza si� do uzupe�niania tre�ci w podobny spos�b, jak w edytorze tekst�w. Oferujemy nasz� pomoc podczas wstawiania tre�ci w czasie codziennego dzia�ania strony (dotyczy Pakietu Standard przez pierwszy miesi�c). Nasze dzia�ania skierowane s� na Pa�stwa sukces.</p>
  <img src="images/nav_up_blue.png" width="18" height="18" alt="Do g�ry" />&nbsp;<a href="#pyt0">Powr�t do g�ry</a> <a name="pyt3"></a>
  <h3>3. Dzia� "WYPO�YCZALNIA"</h3>
  <p>Tak. Do tego s�u�y formularz zam�wienia. Uzupe�nienie tre�ci na stronie zostanie wykonane przez nas zgodnie z regulaminem. Dzi�ki temu strona od samego pocz�tku prowadzona jest w pe�ni profesjonalnie.<br />
  Po uzupe�nieniu tre�ci przedstawiamy szereg wskaz�wek, kt�re pozwol� utrzyma� wysok� jako�� prezentowanych tre�ci.</p>
  <img src="images/nav_up_blue.png" width="18" height="18" alt="Do g�ry" />&nbsp;<a href="#pyt0">Powr�t do g�ry</a> <a name="pyt4"></a>
  <h3>&nbsp;&nbsp;3.1. Przej�cie do Dzia�u "WYPO�YCZANIE KSI��EK"</h3>
  <p></p>
  <img src="images/nav_up_blue.png" width="18" height="18" alt="Do g�ry" />&nbsp;<a href="#pyt0">Powr�t do g�ry</a> <a name="pyt5"></a>
  <h3>&nbsp;&nbsp;3.2 Przejcie do dzia�u "ZWROT KSI��EK"</h3>
  <p><a href="http://validator.w3.org/check?uri=referer" target="_blank">Wykonane przez nas strony s� technicznie oraz semantycznie zgodne ze standardami w3c</a> (html 4.01 Transitional, xhtml 1.0 strict).<br />
  Powoduje to i� z du�ym prawdopodobie�stwem b�d� dobrze zaindeksowane przez wyszukiwarki.<br />
  To, czy b�d� pojawia� si� na szczycie zale�y od konkurencyjno�ci s��w. Przy niszowych bran�ach z pewno�ci� tak. Je�li pragn� Pa�stwo aby strona pojawia�a si� na wysokich miejscach wynik�w wyszukiwania zach�camy do wykupienia Pakietu Profesjonalnego z ofert� pozycjonowania stron.</p>
  <img src="images/nav_up_blue.png" width="18" height="18" alt="Do g�ry" />&nbsp;<a href="#pyt0">Powr�t do g�ry</a> <a name="pyt6"></a>
  <h3>4. Dzia� "RAPORTY"</h3>
  <p><a href="http://validator.w3.org/check?uri=referer" target="_blank">Wykonane przez nas strony s� technicznie oraz semantycznie zgodne ze standardami w3c</a> (html 4.01 Transitional, xhtml 1.0 strict).<br />
  Powoduje to i� z du�ym prawdopodobie�stwem b�d� dobrze zaindeksowane przez wyszukiwarki.<br />
  To, czy b�d� pojawia� si� na szczycie zale�y od konkurencyjno�ci s��w. Przy niszowych bran�ach z pewno�ci� tak. Je�li pragn� Pa�stwo aby strona pojawia�a si� na wysokich miejscach wynik�w wyszukiwania zach�camy do wykupienia Pakietu Profesjonalnego z ofert� pozycjonowania stron.</p>
  <img src="images/nav_up_blue.png" width="18" height="18" alt="Do g�ry" />&nbsp;<a href="#pyt0">Powr�t do g�ry</a> <a name="pyt7"></a>
  <h3>5. Dzia� "WWW"</h3>
  <p><a href="http://validator.w3.org/check?uri=referer" target="_blank">Wykonane przez nas strony s� technicznie oraz semantycznie zgodne ze standardami w3c</a> (html 4.01 Transitional, xhtml 1.0 strict).<br />
  Powoduje to i� z du�ym prawdopodobie�stwem b�d� dobrze zaindeksowane przez wyszukiwarki.<br />
  To, czy b�d� pojawia� si� na szczycie zale�y od konkurencyjno�ci s��w. Przy niszowych bran�ach z pewno�ci� tak. Je�li pragn� Pa�stwo aby strona pojawia�a si� na wysokich miejscach wynik�w wyszukiwania zach�camy do wykupienia Pakietu Profesjonalnego z ofert� pozycjonowania stron.</p>
  <img src="images/nav_up_blue.png" width="18" height="18" alt="Do g�ry" />&nbsp;<a href="#pyt0">Powr�t do g�ry</a> <a name="pyt8"></a>
  <h3>6.<span style="color: #ff0000">B��dy i ich najcz�stsze przyczyny</span></h3>
  <p><a href="http://validator.w3.org/check?uri=referer" target="_blank">Wykonane przez nas strony s� technicznie oraz semantycznie zgodne ze standardami w3c</a> (html 4.01 Transitional, xhtml 1.0 strict).<br />
  Powoduje to i� z du�ym prawdopodobie�stwem b�d� dobrze zaindeksowane przez wyszukiwarki.<br />
  To, czy b�d� pojawia� si� na szczycie zale�y od konkurencyjno�ci s��w. Przy niszowych bran�ach z pewno�ci� tak. Je�li pragn� Pa�stwo aby strona pojawia�a si� na wysokich miejscach wynik�w wyszukiwania zach�camy do wykupienia Pakietu Profesjonalnego z ofert� pozycjonowania stron.</p>
  <img src="images/nav_up_blue.png" width="18" height="18" alt="Do g�ry" />&nbsp;<a href="#pyt0">Powr�t do g�ry</a>
</body>
</html>