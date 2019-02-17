<?php
$user = "devdb_dev";
$pass = "devdb1234";
try {
    $dbh = new PDO('mysql:host=mysql;dbname=devdb', $user, $pass);
    foreach($dbh->query('SELECT * from FOO') as $row) {
        var_dump($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}