<?php
    session_start();
    if ($_GET['submit'] == "OK")
    {
        $_SESSION["login"]=$_GET["login"];
        $_SESSION["passwd"]=$_GET["passwd"];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>index.php</title>
    <style>
        input{
            width: 200px;
            margin-left: 20px;
        }
    </style>
    </head>
    <body>
        <h1 align="center" >Login</h1>
            <hr>
        <form method="get" align=center style="marin-top: 500px">
            login:<input name="login" style="margin-top: 50px;" type="text" value="<?php echo $_SESSION['login']?>">
            <br>
            <br>
            passwd:<input name="passwd" type="text" value="<?php echo $_SESSION['passwd']?>">
            <br>
            <input name="submit" type="submit" value="OK">
        </form>
    </body>
</html>