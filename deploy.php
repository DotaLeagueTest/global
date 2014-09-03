<?php
    if (isset($_POST['user']))
        if ($_POST['user'] != "")
        {
            $user = $_POST['user'];
            echo "cd {$user}; git pull https://github.com/dotaleague/{$user}.git master 2>&1<br>";
            echo exec("cd {$user}; git pull https://github.com/dotaleague/{$user}.git master 2>&1", $output, $return_var);
            var_dump($return_var);
            echo "return_var is: $return_var" . "\n";
            var_dump($output);
            //header("Refresh:3; url={$user}");
        }