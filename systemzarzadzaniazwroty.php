<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Tytu� ; Biblioteczka MAK - System zarz�dzania - Biblioteka
Opis  ; Strona z modulem zwrotow.
Dostepna dopiero po zalogowaniu do systemu.
Zawiera moduly: Znajdz czytelnika, znajdz ksiazke, zwroc ksiazke.
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
      <li><a href="systemzarzadzaniaczytelnicy.php">Czytelnicy</a></li>
      <li class="first"><a href="systemzarzadzaniawypozyczalnia.php">Wypo�yczalnia</a></li>
      <li><a href="systemzarzadzaniaraporty.php">Raporty</a></li>
      <li><a href="index.php">WWW</a></li>
      <li><a href="help.php" target="_blank" onclick="window.open('help.php', 'Pomoc', 'scrollbars,height=550,width=810');return false;"><img src="images/help.png" alt="Pomoc" title="Pomoc" style="position:relative; top:-4px; left:1px;border:0 0 0 0;" /></a></li>
    </ul>
  </div>
  <div id="content">
    <div id="columnA">
      <h1>Zwrot ksi��ek</h1> <a href="systemzarzadzaniawypozyczenia.php" style="color:orange;float:right;"><b>kliknij aby wypo�ycza� ksi��ki &raquo;</b></a>
      <h2>Wybierz czytelnika i ksi��k�</h2>
      <p>
      <form method="post" action="">
        <hr style="border:1px solid #274690;" />
        <table>
        <tr>
          <td>Wpisz<b>Id</b>czytelnika:</td>
          <td>
          <input type="text" name="fraza" style="background-color:#FFC9C9;border:1px solid #FFA4A4" value="8"></td>
        </tr>
        </table>
        <input type="submit" value="Szukaj" />
        <hr style="border:1px solid #274690;" />
      </form>
      <strong>Czytelnik:</strong><br>
      <table cellpadding="5">
      <tr>
        <td><b>Id wypo�ycz.</b></td>
        <td><b>Data wypo�ycz.</b></td>
        <td><b>ID czytelnika</b></td>
        <td><b>ISBN ksi��ki</b></td>
      </tr>
      <tr>
        <td>9</td>
        <td>2011-05-07</td>
        <td><span style="background:#FFFF40;">8</span></td>
        <td>999965</td>
        <td><a href="systemzarzadzaniazwroty.php?co=wybierz&amp;isbn=999965" style="color: red;">Wybierz aby odda�</a></td>
        <td><a href="systemzarzadzaniazwroty.php?co=przedluz&amp;isbn=999965" style="color: green;">Przed�u� o 30 dni</a></td>
      </tr>
      <tr>
        <td>24</td>
        <td>2011-04-07</td>
        <td><span style="background:#FFFF40;">8</span></td>
        <td>999995</td>
        <td><a href="systemzarzadzaniazwroty.php?co=wybierz&amp;isbn=999995" style="color: red;">Wybierz aby odda�</a></td>
        <td><a href="systemzarzadzaniazwroty.php?co=przedluz&amp;isbn=999995" style="color: green;">Przed�u� o 30 dni</a></td>
      </tr>
      </table>
      </p>
    </div>
    <div id="columnB">
      <h2>Zwrot ksi��ki</h2>
      <br>
      <p>
      <form method="post" action="">
        <input type="hidden" name="isbn" value="999965" />
        <input type="hidden" name="co" value="ododaj" />
        <table>
        <tr>
          <td>ID wyp�yczenia:</td>
          <td>
          <input type="text" name="id_wypozyczenie" readonly="readonly" style="width:50%;background-color:#FFFF80;border:1px solid #FFA4A4" value="9" /></td>
        </tr>
        <tr>
          <td>ID czytelnika:</td>
          <td>
          <input type="text" name="id_czytelnik" readonly="readonly" style="width:50%;background-color:#FFFF80;border:1px solid #FFA4A4" value="8" /></td>
        </tr>
        <tr>
          <td>ISBN ksi��ki:</td>
          <td>
          <input type="text" name="isbn" readonly="readonly" style="width:50%;background-color:#FFFF80;border:1px solid #FFA4A4" value="999965" /></td>
        </tr>
        <tr>
          <td><span style="color: #ff4040"><b>Potwierd�!</b></span></td>
          <td>
          <input type="checkbox" name="zgadzasie" /></td>
        </tr>
        </table>
        <input type="submit" value="Oddaj - Zwr��" />
      </form>
    </div>
    <div style="clear: both;">&nbsp;</div>
  </div>
  <div id="footer">
    <p><a href="http://www.kropleinternetu.biz" class="link1"><b>bdMAK</b></a>Copyright &copy; 2011<a href="http://www.inf.nazwa.pl/biblioteka" class="link1">Biblioteka Miejska nr.3 Demo</a></p>
  </div>
</body>
</html>