<html>
<head>
<title>Elimina Sensore</title>
</head>
<body link="black">
<a href="logout.php">Logout</a>
<a href="dipendentehome.php">Home</a>
<div style=text-align:center;>
<h1> Elimina Sensore</h1>
<body>
<p align = center>
<div id="profile">
<b id="welcome"> DATI SENSORE CERCATO<i> <br><br>
<tr>
<?php
$host="localhost"; // Hostname
$username="setlist"; // Mysql username
$password=""; // Mysql password
$db_name="my_setlist"; //Nome del Database
$tbl_name="sensori"; // Nome della Tabella
$connection = new mysqli($host, $username, $password, $db);
$db =mysql_select_db("$db_name"); 
session_start();
$user_check = $_SESSION['cerca'];
    $query1 = sprintf("SELECT * FROM $tbl_name WHERE codsensore ='$user_check'" ,mysqli_real_escape_string($connection,$codsensore);
$ses_sql = mysqli_query($connection, $query1);
$row = $ses_sql->fetch_array(MYSQLI_NUM);

?></tr></i></b>
<form action="#" method="post"> 
<form action="#" method="post"> 
<br>Codice Sensore: 
<?php echo htmlspecialchars($row['codsensore']);?><br />
Marca:  
<?php echo htmlspecialchars($row['marca']);?><br />
Tipo:
<?php echo htmlspecialchars($row['tipo']);?><br />
Cliente Proprietario:
<?php echo htmlspecialchars($row['clienteproprietario']);?><br />
<br>
<input name="modifica" type="submit" id="modifica" value="ELIMINA"> 

</form> 
<?php 
if(isset($_POST['modifica'])){ 
  $query1 = sprintf("DELETE * FROM $tbl_name WHERE codsensore ='$user_check'" ,mysqli_real_escape_string($connection,$codsensore);
    $ses_sql=mysqli_query($connection, $query1); 
    
    header("location:sensoreeliminato.php");
} 
//.... , 
?> 
</form>
</div>
</body>
<div style="text-align:center;">
<form name="indietro" action="selezionasensoredelete.php" method="GET">
<br>
<br>
<input type="submit" style="background-color: gray" name="richiama2" value="INDIETRO" />
</form>
</div>
</div>
</body>
</html>
