<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Tytuł ; Biblioteczka MAK - System zarządzania - Biblioteka
Opis  ; Strona glowna Systemu Zarzadzania, a jednoczesnie strona,
na ktorej pracownicy zajmuja sie obsluga i zarzadzaniem baza ksiazek.
Dostepna dopiero po zalogowaniu.
Zawiera moduly: Dodaj ksiazke, skasuj ksiazke, edytuj ksiazke, a takze szukaj ksiazke.				 	
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
  <?php	
if($_SESSION["zalogowany"]==0){echo "<div style=\"font-size:14px; text-align:center;\"><h2>Nie masz dostępu do tej części witryny.</h2> <a href='systemzarzadzania.php'>Zaloguj się</a><p>lub<br/><a href='index.php'>Przejdź do wyszukiwarki książek</a></p></div>;"; exit();}
?>
  <div id="header"><b>System zarządzania bdMAK</b>- Biblioteka Miejska nr.3 Częstochowa
    <h1>Zalogowany</h1>
    <h2><a href="systemzarzadzania.php?wyloguj=tak">wyloguj się</a></h2>
  </div>
  <div id="menu">
    <ul>
      <li class="first"><a href="systemzarzadzaniaksiazki.php">Książki</a></li>
      <li><a href="systemzarzadzaniaczytelnicy.php">Czytelnicy</a></li>
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
      <h2>Książki</h2>
      <p>
      <form method="post" action="">
        <hr style="border:1px solid #274690;" />
        Szukaj:
        <input type="text" name="fraza" value="200">
        <input type="submit" value="Szukaj" /><a href="systemzarzadzaniaksiazki.php">Powrót do wyszukiwarki książek</a>
        <hr style="border:1px solid #274690;" />
      </form>
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
        <td>5</td>
        <td>DOM NA SEKWANIE</td>
        <td>WHARTON WILLIAM</td>
        <td>112345</td>
        <td>2003</td>
        <td>2</td>
        <td>8</td>
        <td><a href="systemzarzadzaniaksiazki.php?co=skasuj&amp;id_ksiazka=5" style="color: red;">kasuj</a></td>
        <td><a href="systemzarzadzaniaksiazki.php?co=edytuj&amp;id_ksiazka=5" style="color: green;">edytuj</a></td>
      </tr>
      <tr>
        <td>2</td>
        <td>KATYN</td>
        <td>A.K.KUNERT</td>
        <td>234567</td>
        <td>2003</td>
        <td>2</td>
        <td>5</td>
        <td><a href="systemzarzadzaniaksiazki.php?co=skasuj&amp;id_ksiazka=2" style="color: red;">kasuj</a></td>
        <td><a href="systemzarzadzaniaksiazki.php?co=edytuj&amp;id_ksiazka=2" style="color: green;">edytuj</a></td>
      </tr>
      <tr>
        <td>10</td>
        <td>LINUX CZARNA KSIEGA</td>
        <td>H. TSUJI</td>
        <td>788987</td>
        <td>2008</td>
        <td>1</td>
        <td>4</td>
        <td><a href="systemzarzadzaniaksiazki.php?co=skasuj&amp;id_ksiazka=10" style="color: red;">kasuj</a></td>
        <td><a href="systemzarzadzaniaksiazki.php?co=edytuj&amp;id_ksiazka=10" style="color: green;">edytuj</a></td>
      </tr>
      <tr>
        <td>8</td>
        <td>OBSESJA</td>
        <td>S.LEWIS</td>
        <td>223325</td>
        <td>2009</td>
        <td>1</td>
        <td>3</td>
        <td><a href="systemzarzadzaniaksiazki.php?co=skasuj&amp;id_ksiazka=8" style="color: red;">kasuj</a></td>
        <td><a href="systemzarzadzaniaksiazki.php?co=edytuj&amp;id_ksiazka=8" style="color: green;">edytuj</a></td>
      </tr>
      <tr>
        <td>1</td>
        <td>PIELGRZYM</td>
        <td>PAULO COELHO</td>
        <td>123456</td>
        <td>2007</td>
        <td>2</td>
        <td>3</td>
        <td><a href="systemzarzadzaniaksiazki.php?co=skasuj&amp;id_ksiazka=1" style="color: red;">kasuj</a></td>
        <td><a href="systemzarzadzaniaksiazki.php?co=edytuj&amp;id_ksiazka=1" style="color: green;">edytuj</a></td>
      </tr>
      <tr>
        <td>7</td>
        <td>PROGRAMOWANIE PHP</td>
        <td>A. KIERKOWSKA</td>
        <td>154345</td>
        <td>2007</td>
        <td>2</td>
        <td>4</td>
        <td><a href="systemzarzadzaniaksiazki.php?co=skasuj&amp;id_ksiazka=7" style="color: red;">kasuj</a></td>
        <td><a href="systemzarzadzaniaksiazki.php?co=edytuj&amp;id_ksiazka=7" style="color: green;">edytuj</a></td>
      </tr>
      <tr>
        <td>13</td>
        <td>PULAPKA DANTEGO</td>
        <td>A. DELALANDE</td>
        <td>978832</td>
        <td>2007</td>
        <td>1</td>
        <td>3</td>
        <td><a href="systemzarzadzaniaksiazki.php?co=skasuj&amp;id_ksiazka=13" style="color: red;">kasuj</a></td>
        <td><a href="systemzarzadzaniaksiazki.php?co=edytuj&amp;id_ksiazka=13" style="color: green;">edytuj</a></td>
      </tr>
      </table>
      </p>
    </div>
    <div id="columnB">
      <h2>Dodawanie książki</h2>
      <p>
      <form method="post" action="">
        Nowy rekord:
        <input type="hidden" name="co" value="dodaj" />
        <table>
        <tr>
          <td>Tytuł:</td>
          <td>
          <input type="text" name="tytul" /></td>
        </tr>
        <tr>
          <td>Autor:</td>
          <td>
          <input type="text" name="autor" /></td>
        </tr>
        <tr>
          <td>ISBN:</td>
          <td>
          <input type="text" name="isbn" /></td>
        </tr>
        <tr>
          <td>Rok wydania:</td>
          <td>
          <input type="text" name="rok_wydania" /></td>
        </tr>
        <tr>
          <td>Wydanie:</td>
          <td>
          <input type="text" name="wydanie" /></td>
        </tr>
        <tr>
          <td>Ilość:</td>
          <td>
          <input type="text" name="ilosc" /></td>
        </tr>
        </table>
        <input type="submit" value="Dodaj" />
      </form>
      </p>
      <h2>Ilość książek w bazie</h2>
      <h2>12 szt.</h2>
    </div>
    <div style="clear: both;">&nbsp;</div>
  </div>
  <div id="footer">
    <p><a href="http://www.kropleinternetu.biz/biblioteka" class="link1"><b>bdMAK</b></a>Copyright &copy; 2011<a href="http://www.kropleinternetu.biz/biblioteka" class="link1">Biblioteka Miejska nr.3 Demo</a></p>
  </div>
</body>
</html>