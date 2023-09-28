<?php 

//connect to the db
$db = mysqli_connect('localhost', 'root', '', 'login_register') or die($db);
if($db){
    mysqli_set_charset( $db, 'utf8');
}
 
?>