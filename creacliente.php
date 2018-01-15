 <?php
 
$host="localhost"; // Hostname
$username="setlist"; // Mysql username
$password=""; // Mysql password
$db_name="my_setlist"; //Nome del Database
$tbl_name="members"; // Nome della Tabella
$connection = new mysqli($host, $username, $password, $db);
$db =mysqli_select_db("$db_name"); 

$username = $_POST['username'];
$password = $_POST['password'];
$Nome = $_POST['Nome'];
$Cognome = $_POST['Cognome'];
$Indirizzo = $_POST['Indirizzo'];
$email = $_POST['email'];
$NumeroTel = $_POST['NumeroTel'];
$Codice = $_POST['Codice'];
$codloginext = $_POST['codloginext'];
$query1 = sprintf("INSERT INTO ".$tbl_name." (username,password,Nome,Cognome,Indirizzo,email,NumeroTel,Codice,Tipo,codloginext) VALUES ('$username','$password','$Nome','$Cognome','$Indirizzo','$email','$NumeroTel','$Codice','Cliente','$codloginext')");
$ses_sql =  mysqli_query($connection, $query1);

header("location:clicreato.php");

/* quindi i dati sono stati salvati nel database e l'utente è registrato */
mysql_close($db);
?> 
