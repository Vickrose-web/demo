<?php

$_SESSION["Name"] = "Victor";

view("index.view.php", [
    'heading' => 'Home',
]);