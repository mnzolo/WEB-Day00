<?php
    $account=array();
    $account=serialize($account);
    if ($_POST["submit"] != "OK" || $_POST["passwd"] == NULL || $_POST["login"] == NULL)
    {
        echo "ERROR\n";
    }
    else
    {
        if (!file_exists("/private/passwd"))
        {
            mkdir("private", 0777);
        }
        $account=array("login"=>serialize($_POST["login"]), "passwd"=>serialize(hash($_POST["passwd"])));
        file_put_contents('/private/passwd', $acount);
        echo "OK\n";
    }
?>