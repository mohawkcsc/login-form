<?php
try {
    $dbh = new PDO(
        "mysql:host=localhost;dbname=rokkenjima",
        "root",
        ""
    );
} catch (Exception $e) {
    die("ERROR: Couldn't connect. {$e->getMessage()}");
}
