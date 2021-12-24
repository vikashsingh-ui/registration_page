

<!DOCTYPE html>
<html >
<head>
    <title></title>
<?php include 'links/links.php'; ?>
<!-- <?php include 'style.php'; ?> -->


</head>
<body>
    
<div class = "main-div">
<h1> List of candidates for web devloper job</h1>

<div class= "center_div">
<div class = "table-responsive">
<table>

<thead>
<tr>
<th>id</th>
<th>name</th>
<th>mobile</th>
<th>email</th>
<th>degree</th>
<th>post</th>
<th>pic</th>

<th colspan="2">operation</th>
</tr>

</thead>
<tbody>
<?php

include 'connection.php';
$selectquery = "select * from registration ";
$query = mysqli_query($con, $selectquery);
$nums = mysqli_num_rows($query);
// $res = mysqli_fetch_array($query);

while ($res = mysqli_fetch_array($query) ) {
   
?>

    <tr>
    <td><?php echo $res['id'] ;  ?></td>
    <td><?php echo $res['name'] ;  ?></td>
    <td><?php echo $res['mobile'] ;  ?></td>
    <td><?php echo $res['email'] ;  ?></td>
    <td><?php echo $res['degree'] ;  ?></td>
    <td><?php echo $res['jobpost'] ;  ?></td>
    <td> <img src=" <?php echo $res['pic'] ;  ?>" width="100" height="50" </td>
    <td><a href="update.php?id=<?php echo $res['id'] ;  ?>"
     data-toggle="tooltip" data-placement="bottom"
     title="update"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
     <td><a href="delete.php?id=<?php echo $res['id'] ;  ?>"
     data-toggle="tooltip" data-placement="bottom"
     title="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
    
    </tr>
    
<?php

}
?>


</tbody>

</table>

</div>

</div>

</div>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

</body>
</html>