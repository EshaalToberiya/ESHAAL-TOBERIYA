<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>SongSphere</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php
    include ("config.php");
    if(isset($_GET['delete'])) {
        mysqli_query($conn , "DELETE FROM user_form WHERE id = '".$_GET['del_id']."' ") or die("error 36".mysqli_error($con));
        echo '<script>window.location="registerupdate.php"</script>';
    }
    ?>
    <?php
    $qry = mysqli_query($conn , "SELECT * FROM `user_form`")  or die("error20".mysqli_error($con)); 
    ?>
    <h1>Resister | Index</h1>
    <hr>
    <table class="  table">
        <thead>
            <tr>
              <th>ID#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Password</th>
              <th>User_Type</th>
              <th>Action</th>
            </tr>
       </thead>
       <tbody>
        <?php
        $s_no = 0;
        while ($data= mysqli_fetch_array($qry)) {
            $s_no++;       
        ?>
        <tr>
            <td><?php echo $s_no; ?></td>
            <td><?php echo $data['name']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['password']; ?></td>
            <td><?php echo $data['user_type']; ?></td>
            <td>
            <a onClick="return confirm('Are You Sure You Want To Delete This Date??');" href="registerupdate.php?delete&del_id=<?php echo $data['id'];?>" class="delete">Delete</a>                 
            </td>
            
        </tr>
        <?php } ?>
       </tbody>
</body>
</html>