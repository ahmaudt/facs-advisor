<?php

    $host = 'localhost';
    $username = 'facsDev';
    $password = 'changeme';
    $dbname = 'facs_dev';
    $dsn = "mysql:host=$host;dbname=$dbname";
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    );

    $pdo = new PDO($dsn, $username, $password, $options);



