<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Tytuł ; Biblioteczka MAK - System zarządzania - Biblioteka
Opis  ; Strona, na ktorej pracownicy zajmuja sie obsluga i zarzadzaniem baza czytelnikow.
Dostepna dopiero po zalogowaniu do systemu.
Zawiera moduly: Dodaj czytelnika, skasuj czytelnika, edytuj czytelnika, a takze szukaj czytelnika.			
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
    <p class="noscriptText"><b>Koniecznie włącz obsługę JavaScript.</b><a href="http://www.kropleinternetu,biz/obslugajava.php" title="Włączenie odsługi JavaScript w przeglądarkach internetowych." target="_blank" style="text-decoration:blink;"><b>Kliknij i sprawdź jak to zrobić&nbsp;&nbsp;&raquo;</b></a></p>
  </noscript>
  <div id="header"><b>System zarządzania bdMAK</b>- Biblioteka Miejska nr.3 Częstochowa
    <h1>Zalogowany</h1>
    <h2><a href="systemzarzadzania.php?wyloguj=tak">wyloguj się</a></h2>
  </div>
  <div id="menu">
    <ul>
      <li><a href="systemzarzadzaniaksiazki.php">Książki</a></li>
      <li class="first"><a href="systemzarzadzaniaczytelnicy.php">Czytelnicy</a></li>
      <li><a href="systemzarzadzaniawypozyczenia.php">Wypożyczenia</a></li>
      <li><a href="systemzarzadzaniaraporty.php">Raporty</a></li>
      <li><a href="index.php">WWW</a></li>
    </ul>
  </div>
  <div id="content">
    <div id="columnA">
	 <?php // Odczyt z bazy danych składa się z przyłączenia się do MySQL,
       // wybrania bazy danych, zadania pytania SQL i przetworzenia wyników.
 
 $link = mysql_connect ("$dbhost", "$dblogi", "$dbpass") or 
 die ("Nie można połączyć się z MySQL");
 mysql_select_db ("$dbname") or 
 die ("Nie można połączyć się z bazą biblioteki");
 ?>
      <h2>Czytelnicy</h2>
      <p>
      <form method="post">
        Poprawa rekordu:
        <input type="hidden" name="co" value="popraw" />
        <input type="hidden" name="id_czytelnik" value="1" />
        <table>
        <tr>
          <td>Imię:</td>
          <td>
          <input type="text" name="imie" value="MARIUSZ" /></td>
        </tr>
        <tr>
          <td>Nazwisko:</td>
          <td>
          <input type="text" name='nazwisko"value="PURGAL' /></td>
        </tr>
        <tr>
          <td>Kod pocztowy:</td>
          <td>
          <input type='text"name="kod_pocztowy' value="56-135" /></td>
        </tr>
        <tr>
          <td>Miasto:</td>
          <td>
          <input type="text" name="miasto" value="CZESTOCHOWA" /></td>
        </tr>
        <tr>
          <td>Adres:</td>
          <td>
          <input type="text" name='adres"value="PILSUDZKIEGO 6' /></td>
        </tr>
        <tr>
          <td>E-mail:</td>
          <td>
          <input type='text"name="email' value="RAFAMP@COMLI.COM" /></td>
        </tr>
        </table>
        <input type="submit" value="Popraw" />
      </form>
      <form method="post" action="">
        <hr style="border:1px solid #274690;" />
        Szukaj:
        <input type="text" name="fraza" value="marIUSZ">
        <input type="submit" value="Szukaj" /><a href="systemzarzadzaniaczytelnicy.php">Powrót do wyszukiwarki czytelników</a>
        <hr style="border:1px solid #274690;" />
      </form>
      <table cellpadding="5">
      <tr>
        <td><b>Id</b></td>
        <td><b>Nazwisko</b></td>
        <td><b>Imię</b></td>
        <td><b>Kod</b></td>
        <td><b>Miasto</b></td>
        <td><b>Adres</b></td>
        <td><b>E-mail</b></td>
      </tr>
      <tr>
        <td>1</td>
        <td>PURGAL</td>
        <td>MARIUSZ</td>
        <td>56-135</td>
        <td>CZESTOCHOWA</td>
        <td>PILSUDZKIEGO 6</td>
        <td>RAFAMP@COMLI.COM</td>
        <td><a href="systemzarzadzaniaczytelnicy.php?co=skasuj&amp;id_czytelnik=1" style="color: red;">kasuj</a></td>
        <td><a href="systemzarzadzaniaczytelnicy.php?co=edytuj&amp;id_czytelnik=1" style="color: green;">edytuj</a></td>
      </tr>
      </table>
      </p>
    </div>
    <div id="columnB">
      <h2>Dodawanie czytelnika</h2>
      <p>
      <form method="post">
        Nowy rekord:
        <input type="hidden" name="co" value="dodaj" />
        <table>
        <tr>
          <td>Imię:</td>
          <td>
          <input type="text" name="imie" /></td>
        </tr>
        <tr>
          <td>Nazwisko:</td>
          <td>
          <input type="text" name="nazwisko" /></td>
        </tr>
        <tr>
          <td>Kod pocztowy:</td>
          <td>
          <input type="text" name="kod_pocztowy" /></td>
        </tr>
        <tr>
          <td>Miasto:</td>
          <td>
          <input type="text" name="miasto" /></td>
        </tr>
        <tr>
          <td>Adres:</td>
          <td>
          <input type="text" name="adres" /></td>
        </tr>
        <tr>
          <td>E-mail:</td>
          <td>
          <input type="text" name="email" /></td>
        </tr>
        </table>
        <input type="submit" value="Dodaj" />
      </form>
      </p>
      <h2>Ilość czytelników w bazie</h2>
      <h2>12 os.</h2>
    </div>
    <div style="clear: both;">&nbsp;</div>
  </div>
  <div id="footer">
    <p><a href="http://www.kropleinternetu.biz/biblioteka" class="link1"><b>bdMAK&nbsp;</b></a>Copyright &copy; 2011<a href="http://www.kropleinternetu.biz/biblioteka" class="link1">Biblioteka Miejska nr.3 Demo</a></p>
  </div>
</body>
</html>