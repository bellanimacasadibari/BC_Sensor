<html>
<head>
<title>Elimina Cliente</title>
</head>
<body link="black">
<a href="logout.php">Logout</a>
<a href="dipendentehome.php">Home</a>
<div style=text-align:center;>
<h1> Elimina Cliente</h1>
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
$ses_sql = mysqli_query($connection, $query1);
$row =  $ses_sql->fetch_array(MYSQLI_NUM);

?></tr></i></b>
<form action="#" method="post"> 
<form action="#" method="post"> 
<br>Cognome: 
<?php echo  htmlspecialchars($row['Cognome']);?><br />
Nome:  
<?php echo htmlspecialchars($row['Nome']);?><br />
Indirizzo: 
<?php echo htmlspecialchars($row['Indirizzo']);?><br />
Telefono:
<?php echo htmlspecialchars($row['NumeroTel']);?><br />
Email:
<?php echo htmlspecialchars($row['email']);?><br />
Codice Personale:
<?php echo htmlspecialchars($row['codloginext']);?><br />
<br>
<input name="modifica" type="submit" id="modifica" value="ELIMINA"> 

</form> 
<?php 
if(isset($_POST['modifica'])){ 
    $ses_sql=mysql_query("DELETE FROM $tbl_name WHERE username ='$user_check'" , $connection); 
    
    header("location:clienteeliminato.php");
} 
//.... , 
?> 
</form>
</div>
</body>
<div style="text-align:center;">
<form name="indietro" action="selezionauserclidelete.php" method="GET">
<br>
<br>
<input type="submit" style="background-color: gray" name="richiama2" value="INDIETRO" />
</form>
</div>
</div>
</body>
</html>
