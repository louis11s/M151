<?php
    $username = $_GET['username'];
    
    echo "Hallo {$username}!<br />";

    if ($_GET['age']) {
        $age = $_GET['age'];
        echo "Du bist {$age} Jahre alt.";
    }
    //http://127.0.0.1:8000/index.php?username=BENUTZERNAME%20age=15
?>
