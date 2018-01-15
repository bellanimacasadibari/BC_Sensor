<html>
<head>
<title>Modifica Cliente</title>
</head>
<body link="black">
<a href="logout.php">Logout</a>
<a href="dipendentehome.php">Home</a>
<div style="text-align:center;">
<h1> Modifica dati  </h1>
<body>
<p align = center>
<div id="profile">
<b id="welcome"> DATI CLIENTE CERCATO<i> <br><br>
<tr>
<?php
$host="localhost"; // Hostname
$username="setlist"; // Mysql username
$password=""; // Mysql password
$db_name="my_setlist"; //Nome del Database
$tbl_name="members"; // Nome della Tabella
$connection = new mysqli($host, $username, $password, $db);
$db =mysql_select_db("$db_name"); 
session_start();
$user_check = $_SESSION['cerca'];
    $query1 = sprintf("SELECT * FROM $tbl_name WHERE username ='$user_check'" ,mysqli_real_escape_string($connection,$username);
$ses_sql =  mysqli_query($connection, $query1);
$row = $ses_sql->fetch_array(MYSQLI_NUM);
?></tr></i></b>
<form action="#" method="post"> 
<form action="#" method="post"> 
<b>Password<br>  
<input name="password" type="text" id="password" value="<?php echo htmlspecialchars($row['password']);?>"><br />
Cognome<br>  
<input name="Cognome" type="text" id="Cognome" value="<?php echo htmlspecialchars($row['Cognome']);?>"><br />
Nome<br>  
<input name="Nome" type="text" id="Nome" value="<?php echo htmlspecialchars($row['Nome']);?>"><br />
Indirizzo<br>  
<input name="Indirizzo" type="text" id="Indirizzo" value="<?php echo htmlspecialchars($row['Indirizzo']);?>"><br />
Telefono<br> 
<input name="NumeroTel" type="text" id="NumeroTel" value="<?php echo htmlspecialchars($row['NumeroTel']);?>"><br />
Email<br>
<input name="email" type="text" id="email" value="<?php echo htmlspecialchars($row['email']);?>"><br />
Codice Personale<br>
<input name="codloginext" type="text" id="codloginext" value="<?php echo htmlspecialchars($row['codloginext']);?>"><br />
<input name="modifica" type="submit" id="modifica" value="SALVA"> 
</b>
</form> 

<div style="text-align:center;">
<form name="indietro" action="selezionausercli.php" method="GET">
<br>
<input type="submit" style="background-color: gray" name="richiama2" value="INDIETRO" />
</form>
</div>
</form>
</div>
</body>
</div>
</body>
</html>
