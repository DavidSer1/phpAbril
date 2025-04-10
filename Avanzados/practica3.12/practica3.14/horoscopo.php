<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $signo = $_POST["signo"];
    echo "Tu signo es: " . $signo . "<br>";
}
?>
