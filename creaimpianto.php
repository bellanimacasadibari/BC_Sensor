<?php
 
$host='localhost'; // Hostname
$username='setlist'; // Mysql username
$password=''; // Mysql password
$db_name='my_setlist'; //Nome del Database
$tbl_nam='impianti'; // Nome della Tabella
$connection = new mysqli($host, $username, $password, $db);
$db =mysqli_select_db("$db_name"); 
$numeroimpianto = $_POST['numeroimpianto'];
$indirizzo = $_POST['indirizzo'];
$clienteproprietario=$_POST['clienteproprietario'];
$codcliente= $_POST['codloginext'];
$query1 = sprintf("INSERT INTO 'impianti' (numeroimpianto,indirizzo,clienteproprietario,codloginext) VALUES ('$numeroimpianto','$indirizzo','$clienteproprietario','$codcliente')",
                      mysqli_real_escape_string($connessione,$numeroimpianto),
                  mysqli_real_escape_string($connessione,$indirizzo),
                  mysqli_real_escape_string($connessione,$clienteproprietario),
                  mysqli_real_escape_string($connessione,$codloginext)
			);
$ses_sql =  mysqli_query($connection, $query1);
header("location:impiantocreato.php");

/* quindi i dati sono stati salvati nel database e l'utente è registrato */
mysql_close($db);
?> 
