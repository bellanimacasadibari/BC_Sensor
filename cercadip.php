 <?php
$host="localhost"; // Hostname
$username="setlist"; // Mysql username
$password=""; // Mysql password
$db_name="my_setlist"; //Nome del Database
$tbl_name="members"; // Nome della Tabella
// Procedimento per connettersi al Database
mysqli_connect("$host", "$username", getPassword());
mysqli_select_db("$db_name"); 
// Nome utente e password inviate attraverso il form
$myusername=$_POST['myusername'];
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and tipo='Dipendente'";
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
 header("location:modificadipendente.php");
}
else {
echo "Attenzione username errato";
}}
?> 
