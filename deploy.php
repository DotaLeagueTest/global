<?php
    if (isset($_POST['user']))
        if ($_POST['user'] != "")
        {
            $user = $_POST['user'];
            exec("cd {$user}; git pull https://github.com/dotaleague/{$user}.git master");
            header("Refresh:3; url={$user}");
        }