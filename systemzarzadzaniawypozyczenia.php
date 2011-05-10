<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Tytuł ; Biblioteczka MAK - System zarządzania - Biblioteka
Opis  ; Strona z modulem wypozyczen.
Dostepna dopiero po zalogowaniu do systemu.
Zawiera moduly: Znajdz czytelnika, znajdz ksiazke, wypozycz ksiazke.
Data  ; Kwiecien 2011
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
<p class="noscriptText"><b>Koniecznie włącz obsługę JavaScript.</b><a href="http://www.kropleinternetu,biz/obslugajava.php" title="Włączenie odsługi JavaScript w przeglądarkach internetowych." target="_blank" style="text-decoration:blink;"><b> Kliknij i sprawdź jak to zrobić&nbsp;&nbsp;&raquo;</b></a></p>
</noscript>
<?php	
if($_SESSION["zalogowany"]==0){echo "<div style=\"font-size:14px; text-align:center;\"><h2>Nie masz dostępu do tej części witryny.</h2> <a href='systemzarzadzania.php'>Zaloguj się</a><p>lub<br/><a href='index.php'>Przejdź do wyszukiwarki książek</a></p></div>;"; exit();}
?>
	
	<div id="header">
		<b>System zarządzania bdMAK</b>- Biblioteka Miejska nr.3 Częstochowa
		<h1>Zalogowany</h1>
		<h2><a href="systemzarzadzania.php?wyloguj=tak">
		wyloguj się</a></h2>
	</div>
	
	<div id="menu">
		<ul>
			<li><a href="systemzarzadzaniaksiazki.php">
			Książki</a></li>
			<li><a href="systemzarzadzaniaczytelnicy.php">
			Czytelnicy</a></li>
			<li class="first"><a href="systemzarzadzaniawypozyczalnia.php">
			Wypożyczalnia</a></li>
			<li><a href="systemzarzadzaniaraporty.php">
			Raporty</a></li>
			<li><a href="index.php">
			WWW</a></li>
			<li><a href="help.php" target="_blank" onclick="window.open('help.php', 'Pomoc', 'scrollbars,height=550,width=810');return false;">
			<img src="images/help.png" alt="Pomoc" title="Pomoc" style="position:relative; top:-4px; left:1px;border:0 0 0 0;"/>
			</a></li>
		</ul>
	</div>
	
	<div id="content">
		
		<div id="columnA">
			<h1>Wypożyczanie książek</h1> <a href="systemzarzadzaniazwroty.php" style="color:orange;float:right;">
			<b>kliknij aby oddać książki &raquo;</b></a>
			<h2>Wybierz czytelnika i książkę</h2>
			<p>
				
				<form method="post" action="">
					<hr style="border:1px solid #274690;"/>
					
					<table>
					<tr>
						<td>
							Wpisz<b>Id</b>czytelnika:
						</td>
						<td>
							<input type="text" name="fraza" style="background-color:#FFC9C9;border:1px solid #FFA4A4" value=2>
						</td>
					</tr>
					<tr>
						<td>
							Wpisz<b>ISBN</b>książki:
						</td>
						<td>
							<input type="text" name="fraza2" style="background-color:#FFC9C9;border:1px solid #FFA4A4" value=999966>
						</td>
					</tr>
					</table>
					
					<input type="submit" value="Szukaj"/>
					<hr style="border:1px solid #274690;"/>
				</form>
				
				<em><b>Ilość książek wypożyczonych przez tego czytelnika -</b></em><big><b>1</b></big>
				<br>
				<span style="color: #ff0000"><em><b>Ilość książek przeterminowanych -</b></em><big><b>1</b></big></span>
				<br>
				<br>
				<strong>Czytelnik:</strong>
				<br>
				
				<table cellpadding="5">
				<tr>
					<td>
						<b>Id</b>
					</td>
					<td>
						<b>Nazwisko</b>
					</td>
					<td>
						<b>Imię</b>
					</td>
					<td>
						<b>Kod</b>
					</td>
					<td>
						<b>Miasto</b>
					</td>
					<td>
						<b>Adres</b>
					</td>
					<td>
						<b>E-mail</b>
					</td>
				</tr>
				<tr>
					<td>
						<big><span style="background:#FFFF40;">2</span></big>
					</td>
					<td>
						STEPIEN
					</td>
					<td>
						AGNIESZKA
					</td>
					<td>
						20-104
					</td>
					<td>
						WARSZAWA
					</td>
					<td>
						ASNYKA 26
					</td>
					<td>
						AGUSIA.STEPIEN@WP.PL
					</td>
				</table>
				
				<br>
				<b>Książka:</b>
				<br>
				
				<table cellpadding="5">
				<tr>
					<td>
						<b>Id</b>
					</td>
					<td>
						<b>Tytuł</b>
					</td>
					<td>
						<b>Autor</b>
					</td>
					<td>
						<b>ISBN</b>
					</td>
					<td>
						<b>Rok wydania</b>
					</td>
					<td>
						<b>Wydanie</b>
					</td>
					<td>
						<b>Ilość</b>
					</td>
				</tr>
				<tr>
					<td>
						48
					</td>
					<td>
						KOMU BIJE DZWON
					</td>
					<td>
						HEMINGWAY ERNEST
					</td>
					<td>
						<big><span style="background:#FFFF40;">999966</span></big>
					</td>
					<td>
						1997
					</td>
					<td>
						4
					</td>
					<td>
						2
					</td>
				</table>
				
			</p>
		</div>
		
		<div id="columnB">
			<h2>Wypożyczenie książki</h2>
			<br>
			<p>
				
				<form method="post" action="">
					<input type="hidden" name="co" value="dodaj"/>
					
					<table>
					<tr>
						<td>
							ID czytelnika:
						</td>
						<td>
							<input type="text" name="id_czytelnik" readonly="readonly" style="width:50%;background-color:#FFFF80;border:1px solid #FFA4A4" value="2"/>
						</td>
					</tr>
					<tr>
						<td>
							ISBN książki:
						</td>
						<td>
							<input type="text" name="isbn" readonly="readonly" style="width:50%;background-color:#FFFF80;border:1px solid #FFA4A4" value="999966"/>
						</td>
					</tr>
					<tr>
						<td>
							<span style="color: #ff4040"><b>Potwierdź!</b></span>
						</td>
						<td>
							<input type="checkbox" name="zgadzasie"/>
						</td>
					</tr>
					</table>
					
					<input type="submit" value="Wypożycz"/>
				</form>
				
		</div>
		
		<div style="clear: both;">
			&nbsp;
		</div>
		
	</div>
	
	<div id="footer">
		<p> <a href="http://www.kropleinternetu.biz" class="link1">
			<b>bdMAK</b></a>Copyright &copy; 2011<a href="http://www.inf.nazwa.pl/biblioteka" class="link1">
			Biblioteka Miejska nr.3 Demo</a>
		</p>
	</div>
	
</body>
</html>