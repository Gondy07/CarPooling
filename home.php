<?php

include("./templates/header_riservato.php");

include("./conf/db_config.php");


$stmt = $conn->prepare("SELECT COUNT(*) AS numero_assenze FROM assenze WHERE id_utente = ?");// ? come placeholder
$stmt->bind_param("s", $_SESSION["idutente"]);// contro sql injection
$stmt->execute();

$result = $stmt->get_result();
$row = $result->fetch_assoc();


// print_r($row);

echo "<div>Ciao ".$_SESSION["nomeutente"].", il numero dei tuoi giorni di assenza è ".$row["numero_assenze"]."</div>";


    include("./templates/footer.php");
?>