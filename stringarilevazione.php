<html>
<head>
<title>Rilevazione</title>
</head>
<body link="black">
<a href="logout.php">Logout</a>
<a href="clientehome.php">Home</a>
<div style=text-align:center;>
<h1> Rilevamento Sensore</h1>
<body>
<p align = center>
<div id="profile">
<b id="welcome"> DATI SENSORE SELEZIONATO<i> <br><br>
<tr>
<?php
$host="localhost"; // Hostname
$username="setlist"; // Mysql username
$password="bustopabte25"; // Mysql password
$db_name="my_setlist"; //Nome del Database
$tbl_name="sensori"; // Nome della Tabella
$connection = mysql_pconnect("$host", "$username", "$password");
$db =mysql_select_db("$db_name"); 
session_start();
$user_check = $_SESSION['cerca'];
$ses_sql = mysql_query ("SELECT * FROM $tbl_name WHERE codsensore ='$user_check'" , $connection);
$row = mysql_fetch_assoc($ses_sql);

?></tr></i></b>
<form action="#" method="post"> 
<form action="#" method="post"> 
<br>Codice Sensore: 
<?php echo $row['codsensore'];?><br />
Marca:  
<?php echo $row['marca'];?><br />
Tipo:
<?php echo $row['tipo'];?><br />
Cliente Proprietario:
<?php echo $row['clienteproprietario'];?><br />
<br>



<?php
$host="localhost"; // Hostname
$username="setlist"; // Mysql username
$password=""; // Mysql password
$db_name="my_setlist"; //Nome del Database
$tbl_name="rilevazioni"; // Nome della Tabella
$connection = mysql_pconnect("$host", "$username", "$password");
$db =mysql_select_db("$db_name"); 
session_start();
$user_check = $_SESSION['cerca'];
$ses_sql = mysql_query ("SELECT * FROM $tbl_name WHERE codsensore ='$user_check'" , $connection);
$row = mysql_fetch_assoc($ses_sql);

// giorno del mese
$numero_giorno_mese = date("j");
// nome del mese in italiano
$numero_mese = date("n");
// numero dell'anno
$anno = date("Y");

$ora = date("His");

// Stampo a video

function random_string($length=32, $args = array()){

    $permit = array(); //contiene i gruppi di caratteri permessi

    //se non è stato passato alcun argomento, rendo tutti i gruppi disponibili
    //altrimenti rendo disponibili solo i gruppi abilitati in $args
    if(empty($args)){
        $permit[] = 'alfa_upper';
        $permit[] = 'alfa_lower';
        $permit[] = 'number';
        $permit[] = 'simbol';
    }else{
        $permit = $args;
    }

    $characters = '';

    if(in_array('alfa_upper', $permit)){
        $characters.= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }

    if(in_array('alfa_lower', $permit)){
        $characters.= 'abcdefghijklmnopqrstuvwxyz';
    }

    if(in_array('number', $permit)){
        $characters.= '1234567890';
    }


    //controllo di sicurezza: se è stato passato un valore errato a $length, prendo 32 come default
    if(!is_numeric($length)){
        $length = 32;
    }

    $string = '';
    for($i=0; $i<$length; $i++){
        $string = $string.substr($characters, rand(0, strlen($characters)-1), 1);
    }
    return $string;
}
function Grassetto($txtBold)
{
  $txtBold = "<b>" . $txtBold . "</b>";
  return $txtBold;
}

$random = random_string();
echo Grassetto("RILEVAZIONE OTTENUTA: "). $row['codsensore']. $row['codrilevazione']. $row['descrizione'].$numero_giorno_mese.$numero_mese.$anno.$ora. $random;



?>

<br><br>
<b>
INFO RILEVAZIONE
</b>
<br>
Codice Sensore:
<?php
echo $row['codsensore'];
?>
<br>
Marca e Tipo:
<?php
echo $row['codrilevazione'];
?>
<br>
Successo rilevazione:
<?php
echo $row['descrizione'];
?>
<br>
Data rilevazione:
<?php
echo $numero_giorno_mese."/".$numero_mese."/".$anno;
?>
<br>
Ora rilevazione:
<?php
echo $ora;
?>
<br>
Stringa ricevuta:
<?php
echo $random;
?>
</form> 
</form>
</div>
</body>
<div style="text-align:center;">
<form name="indietro" action="rilevazioni.php" method="GET">
<br>
<br>
<input type="submit" style="background-color: gray" name="richiama2" value="INDIETRO" />
</form>
</div>
</div>
</body>
</html>
