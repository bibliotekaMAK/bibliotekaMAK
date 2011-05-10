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
  <p><img src="images/ksiazki.jpg" width="80%" height="80%" border="0" alt="[Rozmiar: 41857 bajtów]" title="Dział KSIĄŻKI"></p>
  <p style="font-weight:bold;font-size:16px;color:#C06000;">-- Dodanie nowej książki do bazy<br />
  <br />
  </p>
  <p><img src="images/dodksiazki.jpg" width="268" height="339" border="0" alt="[Rozmiar: 24843 bajtów]" title="Dodanie nowej książki do bazy"></p>
  <p style="font-weight:bold;font-size:16px;color:#C06000;">-- Wyszukanie książki w bazie<br />
  <br />
  </p>
  <p><img src="images/wyszksiazki.jpg" width="60%" height="60%" border="0" alt="[Rozmiar: 22032 bajtów]" title="Wyszukanie książki w bazie"></p>
  <p style="font-weight:bold;font-size:16px;color:#C06000;">-- Edycja opisu książki<br />
  <br />
  </p>
  <p><img src="images/edtksiazki.jpg" width="302" height="351" border="0" alt="[Rozmiar: 25294 bajtów]" title="Edycja opisu książki"></p>
  <p style="font-weight:bold;font-size:16px;color:#C06000;">-- Kasowanie książki z bazy<br />
  <br />
  </p>
  <img src="images/nav_up_blue.png" width="18" height="18" alt="Do góry" />&nbsp;<a href="#pyt0">Powrót do góry</a> <a name="pyt2"></a>
  <h3>2. Dział "CZYTELNICY"</h3>
  <p>Nie. Zarządzanie stroną sprowadza się do uzupełniania treści w podobny sposób, jak w edytorze tekstów. Oferujemy naszą pomoc podczas wstawiania treści w czasie codziennego działania strony (dotyczy Pakietu Standard przez pierwszy miesiąc). Nasze działania skierowane są na Państwa sukces.</p>
  <img src="images/nav_up_blue.png" width="18" height="18" alt="Do góry" />&nbsp;<a href="#pyt0">Powrót do góry</a> <a name="pyt3"></a>
  <h3>3. Dział "WYPOŻYCZALNIA"</h3>
  <p>Tak. Do tego służy formularz zamówienia. Uzupełnienie treści na stronie zostanie wykonane przez nas zgodnie z regulaminem. Dzięki temu strona od samego początku prowadzona jest w pełni profesjonalnie.<br />
  Po uzupełnieniu treści przedstawiamy szereg wskazówek, które pozwolą utrzymać wysoką jakość prezentowanych treści.</p>
  <img src="images/nav_up_blue.png" width="18" height="18" alt="Do góry" />&nbsp;<a href="#pyt0">Powrót do góry</a> <a name="pyt4"></a>
  <h3>&nbsp;&nbsp;3.1. Przejście do Działu "WYPOŻYCZANIE KSIĄŻEK"</h3>
  <p></p>
  <img src="images/nav_up_blue.png" width="18" height="18" alt="Do góry" />&nbsp;<a href="#pyt0">Powrót do góry</a> <a name="pyt5"></a>
  <h3>&nbsp;&nbsp;3.2 Przejcie do działu "ZWROT KSIĄŻEK"</h3>
  <p><a href="http://validator.w3.org/check?uri=referer" target="_blank">Wykonane przez nas strony są technicznie oraz semantycznie zgodne ze standardami w3c</a> (html 4.01 Transitional, xhtml 1.0 strict).<br />
  Powoduje to iż z dużym prawdopodobieństwem będą dobrze zaindeksowane przez wyszukiwarki.<br />
  To, czy będą pojawiać się na szczycie zależy od konkurencyjności słów. Przy niszowych branżach z pewnością tak. Jeśli pragną Państwo aby strona pojawiała się na wysokich miejscach wyników wyszukiwania zachęcamy do wykupienia Pakietu Profesjonalnego z ofertą pozycjonowania stron.</p>
  <img src="images/nav_up_blue.png" width="18" height="18" alt="Do góry" />&nbsp;<a href="#pyt0">Powrót do góry</a> <a name="pyt6"></a>
  <h3>4. Dział "RAPORTY"</h3>
  <p><a href="http://validator.w3.org/check?uri=referer" target="_blank">Wykonane przez nas strony są technicznie oraz semantycznie zgodne ze standardami w3c</a> (html 4.01 Transitional, xhtml 1.0 strict).<br />
  Powoduje to iż z dużym prawdopodobieństwem będą dobrze zaindeksowane przez wyszukiwarki.<br />
  To, czy będą pojawiać się na szczycie zależy od konkurencyjności słów. Przy niszowych branżach z pewnością tak. Jeśli pragną Państwo aby strona pojawiała się na wysokich miejscach wyników wyszukiwania zachęcamy do wykupienia Pakietu Profesjonalnego z ofertą pozycjonowania stron.</p>
  <img src="images/nav_up_blue.png" width="18" height="18" alt="Do góry" />&nbsp;<a href="#pyt0">Powrót do góry</a> <a name="pyt7"></a>
  <h3>5. Dział "WWW"</h3>
  <p><a href="http://validator.w3.org/check?uri=referer" target="_blank">Wykonane przez nas strony są technicznie oraz semantycznie zgodne ze standardami w3c</a> (html 4.01 Transitional, xhtml 1.0 strict).<br />
  Powoduje to iż z dużym prawdopodobieństwem będą dobrze zaindeksowane przez wyszukiwarki.<br />
  To, czy będą pojawiać się na szczycie zależy od konkurencyjności słów. Przy niszowych branżach z pewnością tak. Jeśli pragną Państwo aby strona pojawiała się na wysokich miejscach wyników wyszukiwania zachęcamy do wykupienia Pakietu Profesjonalnego z ofertą pozycjonowania stron.</p>
  <img src="images/nav_up_blue.png" width="18" height="18" alt="Do góry" />&nbsp;<a href="#pyt0">Powrót do góry</a> <a name="pyt8"></a>
  <h3>6.<span style="color: #ff0000">Błędy i ich najczęstsze przyczyny</span></h3>
  <p><a href="http://validator.w3.org/check?uri=referer" target="_blank">Wykonane przez nas strony są technicznie oraz semantycznie zgodne ze standardami w3c</a> (html 4.01 Transitional, xhtml 1.0 strict).<br />
  Powoduje to iż z dużym prawdopodobieństwem będą dobrze zaindeksowane przez wyszukiwarki.<br />
  To, czy będą pojawiać się na szczycie zależy od konkurencyjności słów. Przy niszowych branżach z pewnością tak. Jeśli pragną Państwo aby strona pojawiała się na wysokich miejscach wyników wyszukiwania zachęcamy do wykupienia Pakietu Profesjonalnego z ofertą pozycjonowania stron.</p>
  <img src="images/nav_up_blue.png" width="18" height="18" alt="Do góry" />&nbsp;<a href="#pyt0">Powrót do góry</a>
</body>
</html>