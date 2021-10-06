<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <form action="login.php" method="post">
            <p>
                Usuario:
            </p>
            <input type="text" name="user" id="user">
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
    </body>
</html>