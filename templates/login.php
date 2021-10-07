<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <?php
        include '../css/styles.php';
        ?>
    </head>
    <body>
    <?php
include 'header.php';

$dni = $_POST['dni'];
function validar_dni($dni){
	$letra = substr($dni, -1);
	$numeros = substr($dni, 0, -1);
	if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){ // dni argentina  8 caracteres
		echo 'valido';
	}else{
		echo 'no valido';
	}
}
?>
<div class="loginForm">
        <form action="login.php" method="post">
            <label for="user">Username</label>
            <input type="text" name="user" id="user">
            <label for="dni">DNI</label>
            <input type="text" name="dni" id="dni">
            <button type="submit">Login</button>
            <?php
                if (isset($_POST['user']) ) {
                    if ($_POST['user'] != "") {
                        header("Location: index.php");
                    } else {
                        echo '<br><p style="color: red;">Debes rellenar el campo.</p>';                        
                    }
                } else {
                    echo '<br><p style="color: red;">Debes rellenar el campo.</p>';
                }
            ?>
        </form>
            </div>
        <?php
include 'footer.php';
?>
    </body>
</html>

