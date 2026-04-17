
<?php
//include("./templates/header.php"); //include il codice ma può essere duplicato
//include_once("./templates/header.php"); //include once incude una volta il codice, se sbagli segnala l'errore
require("./templates/header.php"); //è uguale all'include, ma segnala errore se non trova il file header
//require_once("./templates/header.php");
?>

    <section style="text-align: center; border-style: double; width: 300px; height: 480px; margin: auto;">
        
        <!-- futente e fpsw vengono mandati a  "./php/logincheck.php" tramite metodo POST-->
        <form method="POST" action="./php/registraticheck.php">
            <label for="fnome">Nome:</label><br>
            <input type="text" id="fnome" name="fnome"><br>

            <label for="fcognome">Cognome:</label><br>
            <input type="text" id="fcognome" name="fcognome"><br>

            <label for="futente">Utente:</label><br>
            <input type="text" id="futente" name="futente"><br>

            <label for="femail">Email:</label><br>
            <input type="text" id="femail" name="femail"><br>

            <label for="fcodFiscale">Codice Fiscale:</label><br>
            <input type="text" id="fcodFiscale" name="fcodFiscale"><br>

            <label for="findirizzo">Indirizzo:</label><br>
            <input type="text" id="findirizzo" name="findirizzo"><br>

            <label for="fpsw">Password:</label><br>
            <input type="password" id="fpsw" name="fpsw"><br>

            <input type="submit" value="Registrati">
        </form>


        <p>Hai già un account </p><a href="index.php">Accedi</a>

    </section>

<?php
include("./templates/footer.php");
?>