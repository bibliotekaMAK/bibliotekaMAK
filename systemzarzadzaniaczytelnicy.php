<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Tytu� ; Biblioteczka MAK - System zarz�dzania - Biblioteka
Opis  ; Strona, na ktorej pracownicy zajmuja sie obsluga i zarzadzaniem baza czytelnikow.
Dostepna dopiero po zalogowaniu do systemu.
Zawiera moduly: Dodaj czytelnika, skasuj czytelnika, edytuj czytelnika, szukaj czytelnika,
a takze drukuj karte biblioteczna.			
Data  ; Marzec 2011
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
  <?php include("plikconfig.php");?>
  <noscript>
    <p class="noscriptText"><b>Koniecznie w��cz obs�ug� JavaScript.</b><a href="http://www.kropleinternetu,biz/obslugajava.php" title="W��czenie ods�ugi JavaScript w przegl�darkach internetowych." target="_blank" style="text-decoration:blink;"><b>Kliknij i sprawd� jak to zrobi�&nbsp;&nbsp;&raquo;</b></a></p>
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
      <li class="first"><a href="systemzarzadzaniaczytelnicy.php">Czytelnicy</a></li>
      <li><a href="systemzarzadzaniawypozyczenia.php">Wypo�yczenia</a></li>
      <li><a href="systemzarzadzaniaraporty.php">Raporty</a></li>
      <li><a href="index.php">WWW</a></li>
		<li><a href="help.php" target="_blank" onclick="window.open('help.php', 'Pomoc', 'scrollbars,height=550,width=810');return false;"><img src="images/help.png" alt="Pomoc" title="Pomoc" style="position:relative; top:-4px; left:1px;border:0 0 0 0;"/></a></li>
    </ul>
  </div>
  <div id="content">
    <div id="columnA"><?php // Odczyt z bazy danych sk�ada si� z przy��czenia si� do MySQL,
      // wybrania bazy danych, zadania pytania SQL i przetworzenia wynik�w.
      
      $link = mysql_connect ("$dbhost", "$dblogi", "$dbpass") or 
      die ("Nie mo�na po��czy� si� z MySQL");
      mysql_select_db ("$dbname") or 
      die ("Nie mo�na po��czy� si� z baz� biblioteki");
      ?>
      <h2>Czytelnicy</h2>
      <p>
      <form method="post" action="">
        <hr style="border:1px solid #274690;" />
        Szukaj:
        <input type="text" name="fraza" value="mar">
        <input type="submit" value="Szukaj" /><a href="systemzarzadzaniaczytelnicy.php">Powr�t do wyszukiwarki czytelnik�w</a>
        <hr style="border:1px solid #274690;" />
      </form>
      <table cellpadding="5">
      <tr>
        <td><b>Id</b></td>
        <td><b>Nazwisko</b></td>
        <td><b>Imi�</b></td>
        <td><b>Kod</b></td>
        <td><b>Miasto</b></td>
        <td><b>Adres</b></td>
        <td><b>E-mail</b></td>
      </tr>
      <tr>
        <td>4</td>
        <td>KOWALSKI</td>
        <td>MARCIN</td>
        <td>35-200</td>
        <td>OPOLE</td>
        <td>DAMROTA 12</td>
        <td>MARKO@GMAIL.COM</td>
        <td><a href="systemzarzadzaniaczytelnicy.php?co=skasuj&amp;id_czytelnik=4" style="color: red;">kasuj</a></td>
        <td><a href="systemzarzadzaniaczytelnicy.php?co=edytuj&amp;id_czytelnik=4" style="color: green;">edytuj</a></td>
        <td><a href="kartabiblioteczna.php?co=drukujkarte&amp;id_czytelnik=4" style="color: #9F009F;" target="_blank">KARTA</a></td>
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
        <td><a href="kartabiblioteczna.php?co=drukujkarte&amp;id_czytelnik=1" style="color: #9F009F;" target="_blank">KARTA</a></td>
      </tr>
      </table>
      </p>
    </div>
    <div id="columnB">
      <h2>Dodawanie czytelnika</h2>
      <p>
      <form method="post">
        <span style="color: #FF4040;">Wype�nij wszystkie pola.</span>
        <input type="hidden" name="co" value="dodaj" />
        <table>
        <tr>
          <td>Imi�:</td>
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
      <h2>Ilo�� czytelnik�w w bazie</h2>
      <h2>14 os.</h2>
    </div>
    <div style="clear: both;">&nbsp;</div>
  </div>
  <div id="footer">
    <p><a href="http://www.kropleinternetu.biz/biblioteka" class="link1"><b>bdMAK&nbsp;</b></a>Copyright &copy; 2011<a href="http://www.kropleinternetu.biz/biblioteka" class="link1">Biblioteka Miejska nr.3 Demo</a></p>
  </div>
</body>
</html>