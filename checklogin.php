 <?php
$host='localhost'; // Hostname
$username='setlist'; // Mysql username
$password=''; // Mysql password
$db_name='my_setlist'; //Nome del Database
$tbl_name='members'; // Nome della Tabella
// Procedimento per connettersi al Database
$connection = new mysqli($host, $username, $password, $db);
$db =mysqli_select_db('$db_name'); 
// Nome utente e password inviate attraverso il form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];
$mytipo=$_POST['mytipo'];
$query1 = sprintf("SELECT * FROM 'members' WHERE  username='$myusername' and password='$mypassword' and tipo='$mytipo'" ,mysqli_real_escape_string($connection,$username),mysqli_real_escape_string($connection,$password), mysqli_real_escape_string($connection,$tipo));
$result =  mysqli_query($connection, $query1);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"+

//$_SESSION['myusername']="something";
//$_SESSION['mypassword']="something";
//$_SESSION['mytipo']="something";

if(isset($_POST['mytipo'])){
 $mytipo=$_POST['mytipo'];
 if($mytipo == 'Amministratore') {
 session_start();
 $_SESSION['login'] = $myusername;
 header('location:amministratorehome.php');
}
 else if($mytipo == 'Dipendente') {
 session_start();
 $_SESSION['login'] = $myusername;
header('location:dipendentehome.php');
}
elseif ($mytipo == 'Cliente'){
session_start();
 $_SESSION['login'] = $myusername;
header('location:clientehome.php');}}}
else {
echo 'Attenzione username o password errati';
}
?> 
