<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Tytuł ; Biblioteczka MAK - System zarządzania - Biblioteka
Opis  ; Strona pomocy.
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
</head>
<body style="margin:20px 20px 20px 20px;">
  <?php include("plikconfig.php");?>
  <noscript>
    <p class="noscriptText"><b>Koniecznie włącz obsługę JavaScript.</b><a href="http://www.kropleinternetu,biz/obslugajava.php" title="Włączenie odsługi JavaScript w przeglądarkach internetowych." target="_blank" style="text-decoration:blink;"><b>Kliknij i sprawdź jak to zrobić&nbsp;&nbsp;&raquo;</b></a></p>
  </noscript>
  <?php	
  if($_SESSION["zalogowany"]==0){echo "<div style=\"font-size:14px; text-align:center;\"><h2>Nie masz dostępu do tej części witryny.</h2> <a href='systemzarzadzania.php'>Zaloguj się</a><p>lub<br/><a href='index.php'>Przejdź do wyszukiwarki książek</a></p></div>;"; exit();}
  ?> <a name="pyt0"></a>
  <h1>Pomoc</h1>
  <ol>
    <li><a href="#pyt1">Dział "KSIĄŻKI"</a>
      <ol>
        <li>Dodanie nowej książki do bazy</li>
        <li>Wyszukanie książki w bazie</li>
        <li>Edycja opisu książki</li>
        <li>Kasowanie książki z bazy</li>
      </ol>
    </li>
    <li><a href="#pyt2">Dział "CZYTELNICY"</a>
      <ol>
        <li>Dodanie nowego czytelnika do bazy</li>
        <li>Wyszukanie czytelnika w bazie</li>
        <li>Edycja opisu czytelnika, zmiana danych</li>
        <li>Kasowanie czytelnika z bazy</li>
        <li>Drukowanie Karty bibliotecznej</li>
      </ol>
    </li>
    <li><a href="#pyt3">Dział "WYPOŻYCZALNIA"</a>
      <ol>
        <li><a href="#pyt4">Przejście do Działu "WYPOŻYCZANIE KSIĄŻEK"</a>
          <ol>
            <li>Wybór czytelnika</li>
            <li>Wybór książki</li>
            <li>Potwierdzenie wyboru</li>
            <li>Wypożyczenie książki</li>
          </ol>
        </li>
        <li><a href="#pyt5">Przejście do działu "ZWROT KSIĄŻEK"</a>
          <ol>
            <li>Wybór czytelnika</li>
            <li>Wyszukanie książek wypożyczonych przez czytelnika</li>
            <li>Zwrot książki</li>
            <li>Potwierdzenie zwrotu</li>
            <li>Przedłużenie okresu wypożyczenia</li>
            <li>Potwierdzenie przedłużenia</li>
          </ol>
        </li>
      </ol>
    </li>
    <li><a href="#pyt6">Dział "RAPORTY"</a>
      <ol>
        <li>Wybór raportu
          <ol>
            <li>Raport książek</li>
            <li>Raport czytelników</li>
            <li>Raport książek wypożyczonych</li>
            <li>Raport książek przeterminowanych</li>
            <li>Raport książek ze stanem 0</li>
          </ol>
        </li>
        <li>Drukowanie raportu</li>
      </ol>
    </li>
    <li><a href="#pyt7">Dział "WWW"</a></li>
    <li><a href="#pyt8"><span style="color: #ff0000">Błędy i ich najczęstsze przyczyny</span></a></li>
  </ol>
  <br /> <a name="pyt1"></a>
<h3>1. Dział "KSIĄŻKI"</h3>
<p><img src="images/ksiazki.jpg" width="80%" height="80%" border="0" alt="[Rozmiar: 41857 bajtów]" title="Dział KSIĄŻKI"></p><p style="font-weight:bold;font-size:16px;color:#C06000;">-- Dodanie nowej książki do bazy<br/><br/></p>
<p><img src="images/dodksiazki.jpg" width="268" height="339" border="0" alt="[Rozmiar: 24843 bajtów]" title="Dodanie nowej książki do bazy"></p>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Wyszukanie książki w bazie<br/><br/></p>
<p><img src="images/wyszksiazki.jpg" width="60%" height="60%" border="0" alt="[Rozmiar: 22032 bajtów]" title="Wyszukanie książki w bazie"></p>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Edycja opisu książki<br/><br/></p>
<p><img src="images/edtksiazki.jpg" width="302" height="351" border="0" alt="[Rozmiar: 25294 bajtów]" title="Edycja opisu książki"></p>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Kasowanie książki z bazy<br/><br/></p>

<img src="images/nav_up_blue.png" width="18" height="18" alt="Do góry"/>&nbsp;<a href="#pyt0">Powrót do góry</a>
<a name="pyt2"></a>
<h3>2. Dział "CZYTELNICY"</h3>
<p><img src="images/czytelnicy.jpg" width="80%" height="80%" border="0" alt="Dział CZYTELNICY" title="Dział CZYTELNICY"></p><p style="font-weight:bold;font-size:16px;color:#C06000;">-- Dodanie nowego czytelnika do bazy<br/><br/></p>
<p><img src="images/dodczytelnika.jpg" width="242" height="341" border="0" alt="[Rozmiar: 24918 bajtów]" title="Dodanie nowego czytelnika do bazy"></p><p style="font-weight:bold;font-size:16px;color:#C06000;">-- Wyszukanie czytelnika w bazie<br/><br/></p>
<p><img src="images/wyszczytelnika.jpg" width="603" height="143" border="0" alt="[Rozmiar: 24856 bajtów]" title="Wyszukanie czytelnika w bazie"></p><p style="font-weight:bold;font-size:16px;color:#C06000;">-- Edycja opisu czytelnika, zmiana danych<br/><br/></p>
<p><img src="images/edtczytelnika.jpg" width="327" height="350" border="0" alt="[Rozmiar: 26533 bajtów]" title="Edycja opisu czytelnika, zmiana danych"></p><p style="font-weight:bold;font-size:16px;color:#C06000;">-- Kasowanie czytelnika z bazy<br/><br/></p>
<p><img src="images/wyszczytelnika.jpg" width="603" height="143" border="0" alt="[Rozmiar: 24856 bajtów]" title="Kasowanie czytelnika z bazy"></p><p style="font-weight:bold;font-size:16px;color:#C06000;">-- Drukowanie Karty bibliotecznej<br/><br/></p>
<p><img src="images/kartabiblio.jpg" width="563" height="64" border="0" alt="[Rozmiar: 15523 bajtów]" title="Drukowanie Karty bibliotecznej"></p><p><img src="images/kartabiblio2.jpg" width="351" height="308" border="0" alt="[Rozmiar: 28698 bajtów]" title="Drukowanie Karty bibliotecznej"></p>
<img src="images/nav_up_blue.png" width="18" height="18" alt="Do góry"/>&nbsp;<a href="#pyt0">Powrót do góry</a>
<a name="pyt3"></a>
<h3>3. Dział "WYPOŻYCZALNIA"</h3>
<p><img src="images/wyborwypozyczalnia.jpg" width="345" height="245" border="0" alt="[Rozmiar: 18519 bajtów]" title="WYPOŻYCZALNIA"></p>
<img src="images/nav_up_blue.png" width="18" height="18" alt="Do góry"/>&nbsp;<a href="#pyt0">Powrót do góry</a>
<a name="pyt4"></a>
<h3>&nbsp;&nbsp;3.1. Przejście do Działu "WYPOŻYCZANIE KSIĄŻEK"</h3>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Wybór czytelnika<br/><br/></p>
<p><img src="images/wypozksiazek.jpg" width="80%" height="80%" border="0" alt="[Rozmiar: 30997 bajtów]"></p><p style="font-weight:bold;font-size:16px;color:#C06000;">-- Wybór książki<br/><br/></p>
<p><img src="images/wypozyczenieksiazki.jpg" width="469" height="110" border="0" alt="[Rozmiar: 18423 bajtów]" title="Wybór czytelnika"></p><p style="font-weight:bold;font-size:16px;color:#C06000;">-- Potwierdzenie wyboru<br/><br/></p><p><img src="images/wypozyczenieksiazki.jpg" width="469" height="110" border="0" alt="[Rozmiar: 18423 bajtów]" title="Wybór czytelnika"></p><p style="font-weight:bold;font-size:16px;color:#C06000;">-- Wypożyczenie książki<br/><br/></p>
<img src="images/nav_up_blue.png" width="18" height="18" alt="Do góry"/>&nbsp;<a href="#pyt0">Powrót do góry</a>
<a name="pyt5"></a>
<h3>&nbsp;&nbsp;3.2 Przejcie do działu "ZWROT KSIĄŻEK"</h3>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Zwrot książki<br/><br/></p>
<p><img src="images/zwrotksiazki.jpg" width="695" height="217" border="0" alt="[Rozmiar: 22141 bajtów]" title="Zwrot książek"></p>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Wybór czytelnika<br/><br/></p>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Wyszukanie książek wypożyczonych przez czytelnika<br/><br/></p>
<p><img src="images/zwrotwyszukanie.jpg" width="574" height="262" border="0" alt="[Rozmiar: 33030 bajtów]" title="Zwrot wyszukanie"></p>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Potwierdzenie zwrotu<br/><br/></p>
<p><img src="images/zwrotpotwierdz.jpg" width="181" height="205" border="0" alt="[Rozmiar: 14668 bajtów]" title="Zwrot potwierdzenie"></p>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Przedłużenie okresu wypożyczenia<br/><br/></p>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Potwierdzenie przedłużenia<br/><br/></p>
<p><img src="images/zwrotprzedluz.jpg" width="174" height="218" border="0" alt="[Rozmiar: 14904 bajtów]" title="Zwrot przedłużenie"></p>
<img src="images/nav_up_blue.png" width="18" height="18" alt="Do góry"/>&nbsp;<a href="#pyt0">Powrót do góry</a>
<a name="pyt6"></a>
<h3>4. Dział "REZERWACJE"</h3>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Wyszukanie rezerwacji<br/><br/></p>
<p><img src="images/rezerwksiazki.jpg" width="80%" height="80%" border="0" alt="[Rozmiar: 54954 bajtów]" title="Wyszukanie zarezerwowanej książki"></p>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Wypożyczenie zarezerwowanej książki<br/><br/></p>
<p><img src="images/rezerwksiazkiwypozycz.jpg" width="80%" height="80%" border="0" alt="[Rozmiar: 54954 bajtów]" title="Wypożyczenie zarezerwowanej książki"></p>
<img src="images/nav_up_blue.png" width="18" height="18" alt="Do góry"/>&nbsp;<a href="#pyt0">Powrót do góry</a>
<a name="pyt7"></a>
<h3>5. Dział "RAPORTY"</h3>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Wybór raportu<br/><br/></p>
<p><img src="images/dzialraporty.jpg" width="469" height="218" border="0" alt="[Rozmiar: 22463 bajtów]" title="Raporty"></p>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Raport książek<br/><br/></p>
<p><img src="images/raportksiazek.jpg" width="80%" height="80%" border="0" alt="[Rozmiar: 51893 bajtów]" title="Raport książek"></p>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Raport czytelników<br/><br/></p>
<p><img src="images/raportczytelnikow.jpg" width="80%" height="80%" border="0" alt="[Rozmiar: 58368 bajtów]" title="Raport czytelników"></p>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Raport książek wypożyczonych<br/><br/></p>
<p><img src="images/raportksiwypozycz.jpg" width="80%" height="80%" border="0" alt="[Rozmiar: 54937 bajtów]" title="Raport książek wypożyczonych"></p>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Raport książek przeterminowanych<br/><br/></p>
<p><img src="images/raportksiprzeter.jpg" width="80%" height="80%" border="0" alt="[Rozmiar: 42414 bajtów]" title="Raport książek przeterminowanych"></p>
<p><img src="images/mailprzypomn.jpg" width="80%" height="80%" border="0" alt="[Rozmiar: 30539 bajtów]" title="Raport książek przeterminowanych - mail z przypomnieniem"></p>
<p style="font-weight:bold;font-size:16px;color:#C06000;">-- Raport książek ze stanem 0<br/><br/></p>
<p><img src="images/raport0.jpg" width="90%" height="90%" border="0" alt="[Rozmiar: 25995 bajtów]" title="Raport książek ze stanem 0"></p>

<p></p>
<img src="images/nav_up_blue.png" width="18" height="18" alt="Do góry"/>&nbsp;<a href="#pyt0">Powrót do góry</a>
<a name="pyt8"></a>
<h3>6. Dział "WWW"</h3>
<p><img src="images/www.jpg" width="80%" height="80%" border="0" alt="[Rozmiar: 76013 bajtów]" title="Dział WWW"></p>
<img src="images/nav_up_blue.png" width="18" height="18" alt="Do góry"/>&nbsp;<a href="#pyt0">Powrót do góry</a>
<a name="pyt9"></a>
<h3>7. <span style="color: #ff0000">Błędy i ich najczęstsze przyczyny</span></h3>
<p><span style="color:red;font-weight:bold;">Nie zostały wypełnione wszystkie pola!</span> - Należy dokładnie wypełnić wszystkie pola formularza</p>
<p><span style="color:red;font-weight:bold;">Nie można połączyć się z bazą biblioteki</span> - Błąd sieci</p>
<p><span style="color:red;font-weight:bold;">błąd w pytaniu</span> - Błędnie zadane pytanie do bazy danych</p>
<p><span style="color:red;font-weight:bold;">Nie można połączyć się z MySQL</span> - Błąd sieci - awaria.</p>
<p><span style="color:red;font-weight:bold;">Nie dodano nowego czytelnika!</span> - Źle wypełnione pola formularza</p>
<img src="images/nav_up_blue.png" width="18" height="18" alt="Do góry"/>&nbsp;<a href="#pyt0">Powrót do góry</a>

</body>
</html>