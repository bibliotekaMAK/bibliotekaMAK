<?php
session_start();
session_register("zalogowany");
if(empty($_SESSION["zalogowany"]))$_SESSION["zalogowany"]=0;
mysql_connect ("$dbhost", "$dblogi", "$dbpass") or 
die ("Nie mo¿na po³±czyæ siê z MySQL");
mysql_select_db ("$dbname") or 
die ("Nie mo¿na po³±czyæ siê z baz± biblioteki");
function ShowLogin($komunikat=""){
echo "$komunikat<br/>";
echo "<form action='systemzarzadzania.php' method='post'>";
echo "Login: <input type='text' name='login'/><br/>";
echo "Has³o: <input type='password' name='haslo'/><br/>";
echo "<input type='submit' value='Zaloguj!'/>";
echo "</form>";
echo "<br/><a href='index.php'>Przejd¼ do wyszukiwarki ksi±¿ek</a>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Tytu³ ; Biblioteczka MAK - System zarz±dzania - Biblioteka
Opis  ; Strona z formularzem logowania do Systemu Zarzadzania
dla pracowników biblioteki.	
Data  ; Marzec 2011
Autor ; Mariusz P., Agnieszka S., Krzysztof P.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-2" />
  <title>System zarz±dzania - Biblioteka</title>
  <meta name="Author" content="M.P., A.S., K.P." />
  <meta name="Robots" content="noindex, nofollow" />
  <link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <noscript>
    <p class="noscriptText"><b>Koniecznie w³±cz obs³ugê JavaScript.</b><a href="http://www.kropleinternetu,biz/obslugajava.php" title="W³±czenie ods³ugi JavaScript w przegl±darkach internetowych." target="_blank" style="text-decoration:blink;"><b>Kliknij i sprawd¼ jak to zrobiæ&nbsp;&nbsp;&raquo;</b></a></p>
  </noscript>
  <div style="font-size:14px; text-align:center;">
    <h2><br />
    <form action="systemzarzadzania.php" method="post">
      Login:
      <input type="text" name="login" /><br />
      Has³o:
      <input type="password" name="haslo" /><br />
      <input type="submit" value="Zaloguj!" />
    </form>
    <br /> <a href="index.php">Przejd¼ do wyszukiwarki ksi±¿ek</a></h2>
  </div>
</body>
</html>