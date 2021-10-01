<?php
    const DBDRIVE= 'mysql';
    const DBHOST= 'localhost';
    const DBNAME= 'katchau';
    const DBUSER= 'root';
    const DBPASS= '';

    $conn= new PDO(DBDRIVE.":host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);

    
?>