<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Tytuł ; Biblioteczka MAK - System zarządzania - Biblioteka
Opis  ; Strona główna dostępna dla internautów, na której każdy może przejrzeć
zawartość bazy, korzystając z wyszukiwarki. Jest tutaj też informacja
o nowościach, a także ilość książek w bazie.	
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
  <div id="header"><b>System zarządzania bdMAK</b>
    <h1 style="text-transform:none;">Biblioteka Miejska nr.3 w Demo</h1>
    <h2>zapraszamy</h2>
  </div>
  <div id="menu">&nbsp;</div>
  <div id="content">
    <div id="columnA"><?php // Odczyt z bazy danych składa się z przyłączenia się do MySQL,
      // wybrania bazy danych, zadania pytania SQL i przetworzenia wyników.
      
      $link = mysql_connect ("$dbhost", "$dblogi", "$dbpass") or 
      die ("Nie można połączyć się z MySQL");
      mysql_select_db ("$dbname") or 
      die ("Nie można połączyć się z bazą biblioteki");
      
      
      ?>
      <h2>Wyszukaj książki</h2>
      <p>
      <form method="post" action="index.php">
        <hr style="border:1px solid #274690;" />
        Szukaj:
        <input type="text" name="fraza" style="color:green;" value="2000">
        <input type="submit" value="Szukaj" /><a href="./">Powrót do wyszukiwarki</a>
        <hr style="border:1px solid #274690;" />
      </form>
      <table>
      <tr>
        <td><b>Id</b></td>
        <td><b>Tytuł</b></td>
        <td><b>Autor</b></td>
        <td><b>ISBN</b></td>
        <td><b>Rok wydania</b></td>
      </tr>
      <tr>
        <td>56</td>
        <td>DEWAJTIS</td>
        <td>RODZIEWICZOWNA MARIA</td>
        <td>999958</td>
        <td><span style="background:#FFFF80;">2000</span></td>
      </tr>
      <tr>
        <td>20</td>
        <td>DISNEYLAND</td>
        <td>DYGAT STANIS?AW</td>
        <td>999994</td>
        <td><span style="background:#FFFF80;">2000</span></td>
      </tr>
      <tr>
        <td>30</td>
        <td>MODLITWA ZABY</td>
        <td>ANTHONY DE MELLO</td>
        <td>999984</td>
        <td><span style="background:#FFFF80;">2000</span></td>
      </tr>
      <tr>
        <td>41</td>
        <td>POTOP</td>
        <td>SIENKIEWICZ HENRYK</td>
        <td>999973</td>
        <td><span style="background:#FFFF80;">2000</span></td>
      </tr>
      </table>
      </p>
      <h2>~ Nowości w bibliotece ~ ostatnie 10</h2>
      <p>
      <table class="columnC">
      <tr>
        <td><b>Lp</b></td>
        <td><b>Id</b></td>
        <td><b>Tytuł</b></td>
        <td><b>Autor</b></td>
        <td><b>ISBN</b></td>
        <td><b>Rok wydania</b></td>
        <td><b>Wydanie</b></td>
        <td><b>Ilość</b></td>
      </tr>
      <tr>
        <td><b>1.</b></td>
        <td>57</td>
        <td>OGROD WEZA</td>
        <td>JUDITH MERKLE RILEY</td>
        <td>837132</td>
        <td>1998</td>
        <td>1</td>
        <td>1</td>
      </tr>
      <tr>
        <td><b>2.</b></td>
        <td>56</td>
        <td>DEWAJTIS</td>
        <td>RODZIEWICZOWNA MARIA</td>
        <td>999958</td>
        <td>2000</td>
        <td>3</td>
        <td>2</td>
      </tr>
      <tr>
        <td><b>3.</b></td>
        <td>55</td>
        <td>PAN TADEUSZ</td>
        <td>MICKIEWICZ ADAM</td>
        <td>999959</td>
        <td>1993</td>
        <td>4</td>
        <td>0</td>
      </tr>
      <tr>
        <td><b>4.</b></td>
        <td>54</td>
        <td>LUDZIE BEZDOMNI</td>
        <td>ZEROMSKI STEFAN</td>
        <td>999960</td>
        <td>1992</td>
        <td>3</td>
        <td>2</td>
      </tr>
      <tr>
        <td><b>5.</b></td>
        <td>53</td>
        <td>POLSKIE PANSTWO PODZIEMNE</td>
        <td>KORBONSKI STEFAN</td>
        <td>999961</td>
        <td>2008</td>
        <td>1</td>
        <td>1</td>
      </tr>
      <tr>
        <td><b>6.</b></td>
        <td>52</td>
        <td>CZERWONE I CZARNE</td>
        <td>STENDHALL</td>
        <td>999962</td>
        <td>2009</td>
        <td>5</td>
        <td>3</td>
      </tr>
      <tr>
        <td><b>7.</b></td>
        <td>51</td>
        <td>PLACOWKA</td>
        <td>PRUS BOLESLAW</td>
        <td>999963</td>
        <td>1989</td>
        <td>2</td>
        <td>4</td>
      </tr>
      <tr>
        <td><b>8.</b></td>
        <td>50</td>
        <td>WESELE</td>
        <td>WYSPIANSKI STANISLAW</td>
        <td>999964</td>
        <td>1991</td>
        <td>4</td>
        <td>6</td>
      </tr>
      <tr>
        <td><b>9.</b></td>
        <td>49</td>
        <td>STARY CZLOWIEK I MORZE</td>
        <td>HEMINGWAY ERNEST</td>
        <td>999965</td>
        <td>1990</td>
        <td>3</td>
        <td>2</td>
      </tr>
      <tr>
        <td><b>10.</b></td>
        <td>48</td>
        <td>KOMU BIJE DZWON</td>
        <td>HEMINGWAY ERNEST</td>
        <td>999966</td>
        <td>1997</td>
        <td>4</td>
        <td>2</td>
      </tr>
      </table>
      </p>
    </div>
    <?php   echo '<div id="columnB">';
    print "<h2>Ilość książek w bazie</h2>";
    print "<p>";
    while ($rekord = mysql_fetch_array ($iloscksiazek)) {
    $id_ksiazka = $rekord[0];
    print "<h2>$id_ksiazka szt.</h2> \n";
    }
    
    mysql_close ($link);
    ?></p>
    <p><br />
    <h2>Kontakt</h2>
    <ul>
      <li>Biblioteka Miejska nr.3</a></li>
      <li>123-321 Częstochowa</li>
      <li>Ul. Korfantego 34a</a></li>
      <li>Tel. +48 123-456-789</li>
    </ul>
    </p>
  </div>
  <div style="clear: both;">&nbsp;</div>
  </div>
  <div id="footer">
    <p><a href="http://www.kropleinternetu.biz/biblioteka" class="link1"><b>bdMAK</b></a>Copyright &copy; 2011<a href="http://www.kropleinternetu.biz/biblioteka" class="link1">Biblioteka Miejska nr.3 Demo</a></p>
  </div>
</body>
</html>