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
$connection = new mysqli($host, $username, $password, $db);
$db =mysqli_select_db("$db_name"); 
session_start();
$user_check = $_SESSION['cerca'];
$query1 = sprintf("SELECT * FROM $tbl_name WHERE codsensore ='$user_check'" ,mysqli_real_escape_string($connection,$codsensore);
$ses_sql =  mysqli_query($connection, $query1);
$row = $ses_sql->fetch_array(MYSQLI_NUM);
$cod =  htmlspecialchars($row['codsensore']);
$marca =  htmlspecialchars($row['marca']);
$tipo =  htmlspecialchars($row['tipo']);
$cliente =  htmlspecialchars($row['clienteproprietario']);
?></tr></i></b>
<form action="#" method="post"> 
<form action="#" method="post"> 
<br>Codice Sensore: 
<?php 
    echo $cod;?><br />
Marca:  
<?php echo $marca;?><br />
Tipo:
<?php echo $tipo;?><br />
Cliente Proprietario:
<?php echo $cliente ;?><br />
<br>



<?php
$host="localhost"; // Hostname
$username="setlist"; // Mysql username
$password=""; // Mysql password
$db_name="my_setlist"; //Nome del Database
$tbl_name="rilevazioni"; // Nome della Tabella
$connection = new mysqli($host, $username, $password, $db);
$db =mysqli_select_db("$db_name"); 
session_start();
$user_check = $_SESSION['cerca'];
$query1=  sprintf("SELECT * FROM $tbl_name WHERE codsensore ='$user_check'",mysqli_real_escape_string($db,$username), mysqli_real_escape_string($db,$password));
$ses_sql = mysqli_query($connection, $query1); 
$row = mysqli_fetch_assoc($ses_sql);

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
echo htmlspecialchars($row['codsensore']);
?>
<br>
Marca e Tipo:
<?php
echo htmlspecialchars($row['codrilevazione']);
?>
<br>
Successo rilevazione:
<?php
echo htmlspecialchars($row['descrizione']);
?>
<br>
Data rilevazione:
<?php
echo htmlspecialchars($numero_giorno_mese."/".$numero_mese."/".$anno);
?>
<br>
Ora rilevazione:
<?php
echo htmlspecialchars($ora);
?>
<br>
Stringa ricevuta:
<?php
echo htmlspecialchars($random);
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
