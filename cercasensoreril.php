 <?php
$host='localhost'; // Hostname
$username='setlist'; // Mysql username
$password=''; // Mysql password
$db_name='my_setlist'; //Nome del Database
$tbl_name='sensori'; // Nome della Tabella
// Procedimento per connettersi al Database
$connection = new mysqli($host, $username, $password, $db); 
// Nome utente e password inviate attraverso il form
$db =mysqli_select_db('$db_name'); 
$query1 = sprintf("SELECT * FROM $tbl_name WHERE codsensore ='$mycodsensore'" ,mysqli_real_escape_string($connection,$codsensore);
$result= mysqli_query($connection, $query1);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"+

//$_SESSION['myusername']="something";
//$_SESSION['mypassword']="something";
//$_SESSION['mytipo']="something";

if(isset($_POST['mycodsensore'])){
 session_start();
 $_SESSION['cerca'] = $mycodsensore;
 header("location:stringarilevazione.php");
}
else {
echo "Attenzione codice errato";
}}
?> 
