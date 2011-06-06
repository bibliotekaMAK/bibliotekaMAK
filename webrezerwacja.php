<?php include("plikkonfigbaza.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Tytuł ; Biblioteczka MAK - System zarządzania - Biblioteka
Opis  ; Strona rezerwacji dla internautow.
Data  ; Maj 2011
Autor ; Mariusz P., Agnieszka S., Krzysztof P.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-2" />
<title>System zarządzania - Biblioteka REZERWACJA</title>
<meta name="Author" content="M.P., A.S., K.P." />
<meta name="Robots" content="noindex, nofollow" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body style="margin:20px 20px 20px 20px;">
<noscript>
<p class="noscriptText"><b>Koniecznie włącz obsługę JavaScript.</b><a href="http://www.kropleinternetu,biz/obslugajava.php" title="Włączenie odsługi JavaScript w przeglądarkach internetowych." target="_blank" style="text-decoration:blink;"><b> Kliknij i sprawdź jak to zrobić&nbsp;&nbsp;&raquo;</b></a></p>
</noscript>
<h1>Strona rezerwacji</h1>
<br/>

<h3>Wprowadź dane:</h3>
<p>
<span style="color:red;font-weight:bold;">ID czytelnika musi mieć od 1 do 6 znaków!</span><br/><span style="color:red;font-weight:bold;">ISBN książki musi mieć 6 znaków!</span><br/><span style="color:red;font-weight:bold;">Kod karty musi mieć od 9 do 14 znaków!</span><br/><span style="color:red;font-weight:bold;">Nazwisko czytelnika musi mieć więcej niż 3 znaki!</span><br/><span style="color:red;font-weight:bold;">E-mail nie został podany prawidłowo!</span><br/>      <br><p>
      <form method="post" action="">
		<input type="hidden" name="co" value="zarezerwuj"/>
		* - Wszystkie pola wymagane
		<table>

      <tr><td>ID czytelnika:</td>
		<td>*<input type="text" name="id_czytelnik" value="" style="background-color:#FFFF80;border:1px solid #FFA4A4"/></td></tr>
		<tr><td>ISBN książki:</td>
      <td>*<input type="text" name="isbn2" value="" style="background-color:#FFFF80;border:1px solid #FFA4A4"/></td></tr>
		<tr><td>Kod karty:</td>
		<td>*<input type="text" name="kod_karty" value="" style="background-color:#FFFF80;border:1px solid #FFA4A4"/></td></tr>

		<tr><td>Nazwisko:</td>
		<td>*<input type="text" name="nazwisko2" value="" style="background-color:#FFFF80;border:1px solid #FFA4A4"/></td></tr>
		<tr><td>E-mail:</td>
		<td>*<input type="text" name="email" value="" style="background-color:#FFFF80;border:1px solid #FFA4A4"/></td></tr>
     </table><input type="submit" value="Zarezerwuj"/>
      </form>
</p>

 


</body>
</html>