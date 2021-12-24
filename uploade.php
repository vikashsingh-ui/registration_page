<?php

include 'connection.php';

if (isset($_POST['submit'])) {
    
    $name =$_POST['user'];
    $mobile =$_POST['mobile'];
    $email =$_POST['email'];
    $degree =$_POST['degree'];
    $jobpost =$_POST['jobprofile'];
    $file =$_FILES['photo'];
    
    // print_r($file);
$filename = $file['name'];
$filepath = $file['tmp_name'];
$fileerror = $file['error'];

$file_ext = explode('.' , $filename);
$file_ext_check = strtolower( end($file_ext));

$valid_file_ext = array( 'png' , 'jpg', 'jpeg');


if ($fileerror == 0) {

    if (in_array($file_ext_check , $valid_file_ext)) {
   
    

   $destfile = 'images/'.$filename;

//    echo "$destfile";
move_uploaded_file($filepath, $destfile);

$insertquery = "insert into registration(name, mobile, email, degree,
 jobpost,pic
 ) value( '$name','$mobile','$email', '$degree','$jobpost', '$destfile')";

 $query = mysqli_query($con, $insertquery);
if ($query) {
   echo "inserted";
}else {
    echo "Not inserted";
}
header('location:index.php');
}else {
    ?>
<script type="text/javasript">
alert("Not valid Ext ") ;
window.location = "index.php";

</script>

    <?php
}

}
}else {
    echo "No buttn has been clicked";
}


?>