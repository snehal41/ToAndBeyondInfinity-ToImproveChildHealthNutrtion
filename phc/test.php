<?php
/**
 * Created by IntelliJ IDEA.
 * User: Mayuri
 * Date: 25-02-2019
 * Time: 18:26
 */
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'shivani';
$dbName = 'sih';

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error)
    echo "Connection Failed .." . $db->connect_error;
else
    echo "<p>Connected</p>";
?>