 <?php
 
$host="localhost"; // Hostname
$username="setlist"; // Mysql username
$password=""; // Mysql password
$db_name="my_setlist"; //Nome del Database
$tbl_nam="sensori"; // Nome della Tabella
$connection = new mysqli($host, $username, $password, $db);
$db =mysqli_select_db("$db_name"); 
$codsensore = $_POST['codsensore'];
$marca = $_POST['marca'];
$tipo = $_POST['tipo'];
$clienteproprietario=$_POST['clienteproprietario'];
$impianto= $_POST['impianto'];
$codcliente= $_POST['codcliente'];
$query1 = sprintf("INSERT INTO 'sensori' (username,password,Nome,Cognome,Indirizzo,email,NumeroTel,Codice,Tipo,codloginext) VALUES ('$username','$password','$Nome','$Cognome','$Indirizzo','$email','$NumeroTel','$Codice','Cliente','$codloginext')",
                  	mysqli_real_escape_string($connessione,$username),
					mysqli_real_escape_string($connessione,$password),
					mysqli_real_escape_string($connessione,$Nome),
					mysqli_real_escape_string($connessione,$Cognome),
                     mysqli_real_escape_string($connessione,$Indirizzo),
                  mysqli_real_escape_string($connessione,$email),
                  mysqli_real_escape_string($connessione,$NumeroTel),
                  mysqli_real_escape_string($connessione,$Codice),
                  mysqli_real_escape_string($connessione,$Tipo),
                  mysqli_real_escape_string($connessione,$codloginext),
			);
$ses_sql =  mysqli_query($connection, $query1);
header("location:sensorecreato.php");

/* quindi i dati sono stati salvati nel database e l'utente è registrato */
mysql_close($db);
?> 
