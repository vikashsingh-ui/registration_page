<!DOCTYPE html>
<html lang="en">
<head>
  <title>CURD tutorial</title>
  <?php   include 'links/links.php' ?>
</head>
<body>

<div class="container register">

<div class ="row">
<div class ="col-md-3 register-left">
<img src="crud.svg" alt="">
<h3>Welcome</h3>
<p>please fill all the details carefully . This form can change your life</p>
<a href="display.php">Check form</a> <br/>
</div>
<div class ="colo-md-9 register-right">
<div class ="tab-content" id="mytabcontent">
<div class ="tab-pan fad show activ" id ="home" role="tabpanel" aria-labelledby="home-tab">
<h3 class ='registration-heading'>Apply for web devloper post</h3>

<form action="uploade.php" method="POST" enctype="multipart/form-data">
<div class="row registration-form">
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="enter your name*" name="user" value="" required/>

</div>
<div class="form-group">
<input type="tel" class="form-control" placeholder="mobile number*" name="mobile" value="" required/>
</div>

<div class="form-group">
<input type="file" class="form-control"  name="photo" value="" required/>

</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="enter your qualification*" name="degree" value="" required/>

</div>
<div class="form-group">
<input type="email" class="form-control" placeholder="email id*" name="email" value="" required/>

</div>
<div class="form-group">
<input type="text" class="form-control" placeholder="web devloper post*" name="jobprofile" value="Webdevloper" required/>

</div>
<input type="submit" class="btnregister" name="submit" value="register"/>
</div>

</div>


</form>

</div>

</div>

</div>

</div>


</div>

</body>
</html>
<?php
include 'connection.php' ;

if (isset($_POST['submit'])) {
  $name = $_POST['user'];
  $degree = $_POST['degree'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $refer = $_POST['refer'];
  $jobprofile = $_POST['jobprofile'];

$insertquery = "insert into jobregistration(name, degree, mobile, email,
refral, jobpost
 ) value( '$name', '$degree','$mobile','$email','$refer','$jobprofile')";


 $res = mysqli_query($con, $insertquery);

if ($res) {
  ?>
<script>
alert("data inserted properly");
</script>
  <?php

}
else{
?>
<script>
alert("data not inserted properly");
</script>
<?php

}
}

?>