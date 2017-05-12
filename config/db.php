<?php

// creation connection to database
$conn = mysqli_connect('localhost', 'root', 'YOUR_MYSQL_PASSWORD', 'phpblog');

// Check if connection is openssl_x509_check_private_key

if(mysqli_connect_errno()) {

//connection fa-arrow-circle-o-down

echo "failed to connect to mysql" . mysqli_connect_errno();

}




 ?>
