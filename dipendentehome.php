<html>
<head>
<title>Dipendente</title>
</head>
<body link="black">
<a href="logout.php">Logout</a>
<div style="text-align:center;">
<h1> Dipendente </h1>
<body>
<div id="profile">
<b id="welcome"> DATI PERSONALI<i> <br>
<tr>
<?php
$host="localhost"; // Hostname
$username="setlist"; // Mysql username
$password=""; // Mysql password
$db_name="my_setlist"; //Nome del Database
$tbl_name="members"; // Nome della Tabella
$ses_sql =  mysqli_query($connection, $query1);
session_start();
$user_check = $_SESSION['login'];
 $query1 = sprintf("SELECT * FROM $tbl_name WHERE username ='$user_check'" ,mysqli_real_escape_string($connection,$username);
$ses_sql =  mysqli_query($connection, $query1);
$row = $ses_sql->fetch_array(MYSQLI_NUM);
 $str = <<<HTML "Username: ". $row['username']. "<br>";
 "Cognome: ". $row['Cognome']. "<br>";
 "Nome: ". $row['Nome']. "<br>";
 "Indirizzo: ". $row['Indirizzo']. "<br>";
 "Telefono: ". $row['NumeroTel']. "<br>";
 "Email: ". $row['email']. "<br>";
 "Codice Personale: ". $row['codloginext']. "<br>";
HTML;
 
   echo $str;
?></tr></i></b>

<form name="gestisci" action="gestionecliente.php" method="GET">
<br>
<br>
<input type="submit" name="richiama1" value="GESTISCI CLIENTE" />
</form>
<form name="gestisci2" action="gestionesensori.php" method="GET">
<br>
<input type="submit" name="richiama" value="GESTISCI SENSORI" />
</form>
</div>
</body>
</div>
</body>
</html>
