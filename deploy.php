<?php
    if (isset($_POST['user']))
        if ($_POST['user'] != "")
        {
            $user = $_POST['user'];
            echo exec("cd {$user}; git pull https://github.com/dotaleague/{$user}.git master 2>&1", $output, $return_var);
            header("Refresh:3; url={$user}");
        }