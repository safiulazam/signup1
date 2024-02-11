<?php
// $login=0;
// $invalid=0;



// if($_SERVER['REQUEST_METHOD']=="POST"){
//   include 'connect.php';
//   $username=$_POST['username'];
//   $password=$_POST['password'];
 
//   $sql="select * from `registration` where `username`='$username' and `password`='$password'";
//   $execute=mysqli_query($con,$sql);
//   if($execute){
//     $num=mysqli_num_rows($execute);
//     if($num>0){
//     $login=1;
    // echo "Login Successfully";
    // }else{
        // echo "Invalid Data";
//       $invalid=1;
//     }
//   }
// }


?>





<!-- <!doctype html> -->
<!-- <html lang="en">
  <head> -->
    <!-- Required meta tags -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login Page</title>
  </head>
  <body> -->

  <?php

// if($login){
//   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
//   <strong>Welcome</strong> sign up successfully.
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
// }
?>

<?php

// if($invalid){
//   echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
//   <strong>Error</strong> Inavalid Credential
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
// }

?>






    <!-- <h1 class="text-center">Login To Our Website</h1>
    <div class="container mt-5">
    <form action="login.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name Here</label>
    <input type="text" class="form-control" placeholder="Name Here" name="username">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Password Here" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary w-100">Login</button>
</form>
    </div>

    
  </body> -->
</html>


<!-- second practice -->





<?php
// $login=0;
// $invalid=0;



// if($_SERVER['REQUEST_METHOD']=="POST"){
//   include 'connect.php';
//   $username=$_POST['username'];
//   $password=$_POST['password'];
  
//   $sql="select * from `registration` where `username`='$username' and `password`='$password'";
//   $execute=mysqli_query($con,$sql);
//   if($execute){
//     $num=mysqli_num_rows($execute);
//     if($num>0){
//       $login=1;
//       session_start();
//       $_SESSION['username']=$username;
//       header('location:home.php');
      
//     }else{
//       $invalid=1;
//     }
//   }
// }


?>





<!-- <!doctype html>
<html lang="en">
  <head> -->
    <!-- Required meta tags -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <!-- <title>Login Form</title>
  </head>
  <body> -->

<?php

// if($login){
//   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
//   <strong>Welcome</strong> Log in successfully.
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
// }

?>
<?php

// if($invalid){
//   echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
//   <strong>Sorry</strong> Invalid Credential.
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
// }



?>



    <!-- <h1 class="text-center">Log in to Our website</h1>
    <div class="container mt-5">
    <form action="login.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name Here</label>
    <input type="text" class="form-control" placeholder="Name Here" name="username">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Password Here" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary w-100">Login</button>
</form>
    </div>

    
  </body> -->
<!-- </html> -->

<!-- Third Practice -->

<?php
// $user=0;
// $invalid=0;

// if($_SERVER['REQUEST_METHOD']=="POST"){
//   include 'connect.php';
//   $username=$_POST['username'];
//   $password=$_POST['password'];
  

//   $sql="select * from `registration` where `username`='$username' and `password`='$password'";
//   $execute=mysqli_query($con,$sql);
//   if($execute){
//     $num=mysqli_num_rows($execute);
//     if($num>0){
//       $user=1;
//       session_start();
//       $_SESSION['username']=$username;
//       header('location:home.php');
//     }else{
//       $invalid=1;
//     }
//   }
// }








?>

<!-- <!doctype html>
<html lang="en">
  <head> -->
    <!-- Required meta tags -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <!-- <title>Log in Page</title>
  </head>
  <body> -->

<?php
// if($user){
//   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
//   <strong>Welcome </strong>successfully.
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
// }
?>
<?php
// if($invalid){
//   echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
//   <strong>Sorry </strong>Invalid Credential.
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
// }

?>

<!-- <h1 class="text-center">Log In Page</h1>

<div class="container mt-5">
<form action="login.php" method="POST">
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Name Here</label>
<input type="text" class="form-control" placeholder="Name Here" name='username'>

</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Password</label>
<input type="password" class="form-control" placeholder="Password Here" name='password'>
</div>

<button type="submit" class="btn btn-primary w-100">Log In</button>
</form>

</div>
</body>
</html>


 -->

 <!-- Practice -->

 <?php
$login=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=="POST"){
  include 'connect.php';
  $username=$_POST['username'];
  $password=$_POST['password'];
  
  $sql="select * from `registration` where `username`='$username' and `password`='$password'";
  $execute=mysqli_query($con,$sql);
  if($execute){
    $num=mysqli_num_rows($execute);
    if($num>0){
      $login=1;
      session_start();
      $_SESSION['username']=$username;
      header('location:home.php');
    }else{
      $invalid=1;
    }
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login Form</title>
  </head>
  <body>
<?php
if($invalid){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Sorry</strong>Invalid Credential.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

?>

<?php

if($login){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong> Logged in.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}


?>






    <h1 class="text-center">Login Form</h1>
    <div class="container mt-5">
    <form action="login.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name Here</label>
    <input type="text" class="form-control" placeholder="Name Here" name='username'>

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Password Here" name='password'>
  </div>
  
  <button type="submit" class="btn btn-primary w-100">Login</button>
</form>
    </div>

    
  </body>
</html>










