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
    <p class="noscriptText"><b>Koniecznie włącz obsługę JavaScript.</b><a href="http://www.kropleinternetu,biz/obslugajava.php" title="Włączenie odsługi JavaScript w przeglądarkach internetowych." target="_blank" style="text-decoration:blink;"><b>Kliknij i sprawdź jak to zrobić&nbsp;&nbsp;&raquo;</b></a></p>
  </noscript>
  <div id="header"><b>System zarządzania bdMAK</b>- Biblioteka Miejska nr.3 Częstochowa
    <h1>Zalogowany</h1>
    <h2><a href="systemzarzadzania.php?wyloguj=tak">wyloguj się</a></h2>
  </div>
  <div id="menu">
    <ul>
      <li><a href="systemzarzadzaniaksiazki.php">Książki</a></li>
      <li><a href="systemzarzadzaniaczytelnicy.php">Czytelnicy</a></li>
      <li><a href="systemzarzadzaniawypozyczenia.php">Wypożyczenia</a></li>
      <li class="first"><a href="systemzarzadzaniaraporty.php">Raporty</a></li>
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
      <h2><a href="javascript:window.print()" style="color:red;font-weight:bold;">DRUKUJ&nbsp;</a>raport:</h2>
      <p></p>
      <h2>wszystkie książki</h2>
      <p>
      <h2>12 sztuk</h2>
      <table cellpadding="5">
      <tr>
        <td><b>Id</b></td>
        <td><b>Tytuł</b></td>
        <td><b>Autor</b></td>
        <td><b>ISBN</b></td>
        <td><b>Rok wydania</b></td>
        <td><b>Wydanie</b></td>
        <td><b>Ilość</b></td>
      </tr>
      <tr>
        <td>1</td>
        <td>PIELGRZYM</td>
        <td>PAULO COELHO</td>
        <td>123456</td>
        <td>2007</td>
        <td>2</td>
        <td>3</td>
      </tr>
      <tr>
        <td>2</td>
        <td>KATYN</td>
        <td>A.K.KUNERT</td>
        <td>234567</td>
        <td>2003</td>
        <td>2</td>
        <td>5</td>
      </tr>
      <tr>
        <td>3</td>
        <td>OSOBA I CZYN</td>
        <td>KAROL WOJTYLA</td>
        <td>345678</td>
        <td>1998</td>
        <td>2</td>
        <td>2</td>
      </tr>
      <tr>
        <td>4</td>
        <td>KAMIENIE NA SZANIEC</td>
        <td>A. KAMINSKI</td>
        <td>837132</td>
        <td>1990</td>
        <td>1</td>
        <td>2</td>
      </tr>
      <tr>
        <td>5</td>
        <td>DOM NA SEKWANIE</td>
        <td>WHARTON WILLIAM</td>
        <td>112345</td>
        <td>2003</td>
        <td>2</td>
        <td>8</td>
      </tr>
      <tr>
        <td>7</td>
        <td>PROGRAMOWANIE PHP</td>
        <td>A. KIERKOWSKA</td>
        <td>154345</td>
        <td>2007</td>
        <td>2</td>
        <td>4</td>
      </tr>
      <tr>
        <td>8</td>
        <td>OBSESJA</td>
        <td>S.LEWIS</td>
        <td>223325</td>
        <td>2009</td>
        <td>1</td>
        <td>3</td>
      </tr>
      <tr>
        <td>10</td>
        <td>LINUX CZARNA KSIEGA</td>
        <td>H. TSUJI</td>
        <td>788987</td>
        <td>2008</td>
        <td>1</td>
        <td>4</td>
      </tr>
      <tr>
        <td>11</td>
        <td>TAJEMNICZA WYPRAWA</td>
        <td>A. SZKLARSKI</td>
        <td>230995</td>
        <td>1992</td>
        <td>3</td>
        <td>2</td>
      </tr>
      <tr>
        <td>12</td>
        <td>MESALINA</td>
        <td>GUY RACHET</td>
        <td>676554</td>
        <td>1993</td>
        <td>1</td>
        <td>2</td>
      </tr>
      <tr>
        <td>13</td>
        <td>PULAPKA DANTEGO</td>
        <td>A. DELALANDE</td>
        <td>978832</td>
        <td>2007</td>
        <td>1</td>
        <td>3</td>
      </tr>
      <tr>
        <td>14</td>
        <td>CZERWONY KAPTUREK</td>
        <td>W. WILKOWIEC</td>
        <td>234231</td>
        <td>2010</td>
        <td>1</td>
        <td>1</td>
      </tr>
      </table>
      </p>
    </div>
    <div id="columnB">
      <h2>Wyświetl raport</h2>
      <ul>
        <li><a href="systemzarzadzaniaraporty.php?co=ksiazki&amp;id_ksiazka=$id_ksiazka">Raport książki</a></li>
        <li><a href="systemzarzadzaniaraporty.php?co=czytelnicy&amp;id_czytelnik=$id_czytelnik">Raport czytelnicy</a></li>
        <li><a href="#">Raport 3</a></li>
        <li><a href="#">Raport 4</a></li>
      </ul>
    </div>
    <div style="clear: both;">&nbsp;</div>
  </div>
  <div id="footer">
    <p><a href="http://www.kropleinternetu.biz/biblioteka" class="link1"><b>bdMAK&nbsp;</b></a>Copyright &copy; 2011<a href="http://www.kropleinternetu.biz/biblioteka" class="link1">Biblioteka Miejska nr.3 Demo</a></p>
  </div>
</body>
</html>