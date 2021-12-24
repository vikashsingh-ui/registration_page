<?php

$username = "root";
$password = "";
$server = 'localhost';
$database = 'youtubregistration';

$con = mysqli_connect($server, $username, $password,$database);
if ($con) {
    // echo "connection successful";
    ?>
<script>
alert('connection successful');
</script>
    <?php
}else{
    die ( "no connection" . mysqli_connect_error());

}

?>