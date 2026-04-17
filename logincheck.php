<!-- Qui non sarà presente l'html ma solo il controllo dell'user e della password -->

<?php

include("../conf/db_config.php");

// print_r($_POST);

// permete di scrivere codice html(non utile per utente e psw(ma è una prova))

// avviene la connessione con il database
// prepare -> prepara la stringa di query
$stmt = $conn->prepare("SELECT * FROM utenti WHERE user = ? AND password = ?");// ? come placeholder
$stmt->bind_param("ss", $_POST["futente"], $_POST["fpsw"]);// contro sql injection
$stmt->execute();

//salvataggio dei dati di una singola riga
$result = $stmt->get_result();
$row = $result->fetch_assoc();// struttura = a POST

// print_r($row);

// if ($row['user']==) anti sql injection

if (isset($row)) {// controlla se row è assegnato "is set"

    session_start(); //serve per creare e avviare la sessione -> Crea un legame tra pc e server
    $_SESSION['login']='ok'; //array creato quando creo la sessione(var globale)
    $_SESSION['idutente']=$row['id'];
    $_SESSION['nomeutente']=$row['nome']; // per scrivere in ogni pagina ciao "nome utente"

    header("location:../home.php");// dove ti porta
    // echo"<div>Benvenuto ".$row["nome"]."!!</div>";
}else{
    header("location:../index.php?msg=errorLogin");//? per aggiungere una variabile(messaggio errore)
    // echo"<div>Utente '".$_POST["futente"]."' non trovato!!</div>";

}

$stmt->close();
$conn->close();
?>

<!-- // $_POST["futente"];
// $_POST["fpsw"]; 
ricevo tramite dizionario, dizionario["chiave"]
-->