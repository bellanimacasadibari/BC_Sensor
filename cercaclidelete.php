 <?php
$host="localhost"; // Hostname
$username="setlist"; // Mysql username
$password=""; // Mysql password
$db_name="my_setlist"; //Nome del Database
$tbl_name="members"; // Nome della Tabella
// Procedimento per connettersi al Database
$connection = new mysqli($host, $username, $password, $db);
$db =mysql_select_db("$db_name");
// Nome utente e password inviate attraverso il form
$myusername=$_POST['myusername'];
$query1 = sprintf("SELECT * FROM $tbl_name WHERE username='$myusername' and tipo='Cliente'" ,mysqli_real_escape_string($connection,$username);
$sql= mysqli_query($connection, $query1);
$result=mysql_query($sql);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"+

//$_SESSION['myusername']="something";
//$_SESSION['mypassword']="something";
//$_SESSION['mytipo']="something";

if(isset($_POST['myusername'])){
 session_start();
 $_SESSION['cerca'] = $myusername;
 header("location:eliminacliente.php");
}
else {
echo "Attenzione username errato";
}}
?> 
