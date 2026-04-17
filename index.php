
<?php
//include("./templates/header.php"); //include il codice ma può essere duplicato
//include_once("./templates/header.php"); //include once incude una volta il codice, se sbagli segnala l'errore
require("./templates/header.php"); //è uguale all'include, ma segnala errore se non trova il file header
//require_once("./templates/header.php");

session_start();
session_unset(); #pulisce la struttura $SESSION
session_destroy(); # distrugge la $SESSION sia sul server che sul mio b

?>

<link rel="stylesheet" href="./css_login.css">


    <section style="text-align: center; border-style: double; width: 300px; height: 250px; margin: auto;">
        
    <!-- futente e fpsw vengono mandati a  "./php/logincheck.php" tramite metodo POST-->
        <form method="POST" action="./php/logincheck.php">
            <label for="futente">Utente:</label><br>
            <input type="text" id="futente" name="futente"><br>

            <label for="fpsw">Password:</label><br>
            <input type="password" id="fpsw" name="fpsw"><br>

            <input type="submit" value="Accedi">
        </form>

        <p>Non hai ancora un account?</p><a href="registrati.php">Registrati</a>


        <?php
            if(isset($_GET['msg']) and ($_GET['msg'] == 'errorLogin'))
                echo"<div>Nome utente o password sbagliata</div>";
        ?>

    </section>

<?php
include("./templates/footer.php");
?>
