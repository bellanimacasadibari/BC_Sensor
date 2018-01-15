<?php
$host='localhost'; // Hostname
$username='setlist'; // Mysql username
$password=''; // Mysql password
$db_name='my_setlist'; //Nome del Database
$tbl_name='sensori'; // Nome della Tabella
// Procedimento per connettersi al Database
$connection = new mysqli($host, $username, $password, $db);
$db =mysqli_select_db("$db_name");
// Nome utente e password inviate attraverso il form
$mysensore=$_POST['mysensore'];
$query1 = sprintf("SELECT * FROM $tbl_name WHERE codsensore ='$mysensore'" ,mysqli_real_escape_string($connection,$codsensore);
$sql="SELECT * FROM $tbl_name WHERE codsensore='$mysensore'";
$result=mysqli_query($connection, $query1);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"+

//$_SESSION['myusername']="something";
//$_SESSION['mypassword']="something";
//$_SESSION['mytipo']="something";

if(isset($_POST['mysensore'])){
 session_start();
 $_SESSION['cerca'] = $mysensore;
 header("location:modificasensore.php");
}
else {
echo "Attenzione numero sensore errato";
}}
?> 
