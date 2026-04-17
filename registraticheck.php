<?php

include("../conf/db_config.php");

// permete di scrivere codice html(non utile per utente e psw(ma è una prova))



// avviene la connessione con il database
// prepare -> prepara la stringa di query
$stmt = $conn->prepare("INSERT INTO (nome,cognome,user,email,codFiscaleindirizzo,password) VALUES (?,?,?,?,?,?,?,?)");// ? come placeholder
$stmt->bind_param("ssssssss",$_POST["fnome"],$_POST["fcognome"], $_POST["futente"],$_POST["femail"],$_POST["fcodFiscale"],$_POST["findirizzo"], $_POST["fpsw"]);// contro sql injection
$stmt->execute();

//salvataggio dei dati di una singola riga
$result = $stmt->get_result();
$row = $result->fetch_assoc();// struttura = a POST

print_r($row);

if (isset($row)) {// controlla se row è assegnato "is set"
    header("location:../home.php");// dove ti porta
    // echo"<div>Benvenuto ".$row["nome"]."!!</div>";
}else{
    header("location:../index.php?=msg=errorLogin");//? per aggiungere una variabile(messaggio errore)
    // echo"<div>Utente '".$_POST["futente"]."' non trovato!!</div>";

}


$stmt->close();
$conn->close();
?>