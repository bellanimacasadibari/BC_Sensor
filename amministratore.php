<?php
$host="localhost"; // Hostname
$username="setlist"; // Mysql username
$password=""; // Mysql password
$db_name="my_setlist"; //Nome del Database
$tbl_name="members"; // Nome della Tabella
$connection = mysqli_connect("$host", "$username",  getPassword());
$db =mysql_select_db("$db_name"); 
session_start();
$user_check = $SESSION['login'];
$ses_sql = mysqli_query ("SELECT * FROM $tbl_name WHERE username =$user_check" , $connection);
$row = mysqli_fetch_row($ses_sql);
$login_session = $row['username'];
 
 if (!isset($login_session)){
    mysqli_close($connection);
    header('location:main_login.php');  
    
 }
?>
