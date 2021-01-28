<?php
session_start();{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $Zutaten = $_POST['Zutat'];
    }
    echo "Deine Pizza besteht aus folgenden Toppings: {$Zutaten}";
}

?>
<form method="POST" action="?">
    <input type="text" name="Zutat" placeholder="Zutat"/>
    <input type="submit" value="Hinzufügen" /><br>
</form>