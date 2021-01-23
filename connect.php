<?php
try {
    $dbh = new PDO(
        "mysql:host=localhost;dbname=rokkenjima",
        "root",
        "sequelP@ss1"
    );
} catch (Exception $e) {
    die("ERROR: Couldn't connect. {$e->getMessage()}");
}
