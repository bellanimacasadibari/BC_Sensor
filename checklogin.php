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
$query1 = sprintf("SELECT * FROM 'members' WHERE  username='$myusername' and password='$mypassword'" ,mysqli_real_escape_string($connection,$username),mysqli_real_escape_string($connection,$password));
$result =  mysqli_query($connection, $query1);

// Mysql_num_row is counting table row

			while($row = $result->fetch_array(MYSQLI_NUM)){
			
				session_start();
				$_SESSION['lol'] = $row[0];
			
				}
				
				header("location: clientehome.php");	//chiama lista 
				
		} else if ($row1[ZERO] == 1){
			
			header("location: dipendentehome.php");
			
		} else if ($row1[ZERO] == DUE){
			
			header("location: amministratorehome.php");
		}

else {
echo 'Attenzione username o password errati';
}
?> 
