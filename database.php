<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "theblam4_iai";

// Create connection
   $conn = mysql_connect($servername, $username, $password);
         
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         echo 'Connected successfully';
         mysql_select_db( 'theblam4_iai' );
         

?>

