<?php
// if($_SERVER['REQUEST_METHOD']=="POST"){
//   include 'connect.php';
//   $username=$_POST['username'];
//   $password=$_POST['password'];
//   // $sql="insert into `registration`(username,password) values('$username','$password')";
//   // $execute=mysqli_query($con,$sql);
//   // if($execute){
//   //   echo "Data Base created successfully";
//   // }else{
//   //   die(mysqli_error($con));
//   // }
//   $sql="select * from `registration` where `username`='$username'";
//   $con=mysqli_query($con,$sql);
//   if($con){
//     $numRow=mysqli_num_rows($con);
//     if($numRow>0){
//       echo "User Already Exist";
//     }else{ 
//       $sql="insert into `registration`(username,password) values('$username','$password')";
//        $execute=mysqli_query($con,$sql);
//        if($execute){
//         echo "Data Base created successfully";
//       }else{
//         die(mysqli_error($con));

//     }
//   }
// }
// }




?> 



 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <!-- <title>Sign Up Form</title> -->
  </head>
  <body>
    <!-- <h1 class="text-center">Sign Up</h1>
    <div class="container mt-5">
    <form action="sign.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name Here</label>
    <input type="text" class="form-control"placeholder="Name Here" name="username">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Password Here" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary w-100">Submit</button>
</form>
    </div> -->

    
  </body>
</html>  

<!-- Next Practic -->


<?php
// if($_SERVER['REQUEST_METHOD']=="POST"){
//   include 'connect.php';
//   $username=$_POST['username'];
//   $password=$_POST['password'];
  // $sql="insert into `registration`(username,password) values('$username','$password')";
  // $execute=mysqli_query($con,$sql);
  // if($execute){
  //   echo "Data Added successfully";
  // }else{
  //   die(mysqli_error($con));
  // }

//   $sql="select * from `registration` where `username`='$username'";
//   $execute=mysqli_query($con,$sql);
//   if($execute){
//     $numRow=mysqli_num_rows($execute);
//     if($numRow>0){
//       echo "User Already Exist";
//     }else{
//         $sql="insert into `registration`(username,password) values('$username','$password')";
//   $execute=mysqli_query($con,$sql);
//    if($execute){
//     echo "Data Added successfully";
//   }else{
//     die(mysqli_error($con));
//   }
//     }
//   }
// }




?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <!-- <title>Sign up</title>
  </head>
  <body>
    <h1 class="text-center">Sign Up</h1>
    <div class="container mt-5">
    <form action="sign.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name Here</label>
    <input type="text" class="form-control" placeholder="Name Here" name="username">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Password Here" name="password">
  </div>

  <button type="submit" class="btn btn-primary w-100">Submit</button>
</form>
    </div>

    
  </body>
</html> -->


<?php
// if($_SERVER['REQUEST_METHOD']=="POST"){
//   include 'connect.php';
//   $username=$_POST['username'];
//   $password=$_POST['password'];
  // $sql="insert into `registration`(username,password) values('$username','$password')";
  // $execute=mysqli_query($con,$sql);
  // if($execute){
  //   echo "Data added successfully";
  // }else{
  //   die(mysqli_error($con));
  // }
//   $sql="select * from `registration` where `username`='$username'";
//   $execute=mysqli_query($con,$sql);
//   if($execute){
//     $numRow=mysqli_num_rows($execute);
//     if($numRow>0){
//       echo "Database Already Exist";
//     }else{
//        $sql="insert into `registration`(username,password) values('$username','$password')";
//   $execute=mysqli_query($con,$sql);
//   if($execute){
//     echo "Data added successfully";
//   }else{
//     die(mysqli_error($con));
//   }
//     }
//   }
// }










?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <!-- <title>Sign Up</title>
  </head>
  <body>
    <h1 class="text-center">Sign up</h1>
<div class="container mt-5">
<form action=sign.php method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name Here</label>
    <input type="text" class="form-control" placeholder="Name Here" name='username'>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Password Here" name='password'>
  </div>
 
  <button type="submit" class="btn btn-primary w-100">Submit</button>
</form>

</div>
  

   
  </body> -->
</html>

<?php
// if($_SERVER['REQUEST_METHOD']=="POST"){
//   include 'connect.php';
//   $username=$_POST['username'];
//   $password=$_POST['password'];
  // $sql="insert into `registration`(username,password) values ('$username','$password')";
  // $execute=mysqli_query($con,$sql);
  // if($execute){
  // echo "Data inserted successfully";
  // }else{
  //   die(mysqli_error($con));
  // }
//   $sql="select * from `registration` where `username`='$username'";
//   $execute=mysqli_query($con,$sql);
//   if($execute){
//     echo "Database already exist";
//   }else{
//     $sql="insert into `registration`(username,password) values ('$username','$password')";
//   $execute=mysqli_query($con,$sql);
//   if($execute){
//   echo "Data inserted successfully";
//   }else{
//     die(mysqli_error($con));
//   }
//   }
// }


?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <!-- <title>Sign Up Form</title>
  </head>
  <body>
    <h1 class="text-center">Sign Up form</h1>
    <div class="container mt-5">
    <form action='sign.php' method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name Here</label>
    <input type="text" class="form-control" placeholder="Name Here" name='username'>
    
  </div> -->
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Password Here" name='password'>
  </div>
  
  <button type="submit" class="btn btn-primary w-100">Submit</button>
</form>
    </div> -->

    
  </body>
</html>
<?php

// if($_SERVER['REQUEST_METHOD']=="POST"){
//   include 'connect.php';
//   $username=$_POST['username'];
//   $password=$_POST['password'];
  // $sql="insert into `registration`(username,password) values ('$username','$password')";
  // $execute=mysqli_query($con,$sql);
  // if($execute){
  //   echo "Data inserted successfully";
  // }else{
  //   die(mysqli_error($con));
  // }
  // $sql="select * from `registration` where `username`='$username'";
  // $execute=mysqli_query($con,$sql);
  // if($execute){
  //   $numRow=mysqli_num_rows($execute);
  //   if($numRow>0){
  //     echo "Data Name already inserted";
  //   }else{
  //     $sql="insert into `registration`(username,password) values ('$username','$password')";
  // $execute=mysqli_query($con,$sql);
  // if($execute){
  //   echo "Data inserted successfully";
  // }else{
  //   die(mysqli_error($con));
  // }

  //   }
  // }
    
  

// }



?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <!-- <title>Sign Up Form</title>
  </head>
  <body>
    <h1 class="text-center">Sign Up Form</h1>
    <div class="container mt-5">
    <form action="sign.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name Here</label>
    <input type="text" class="form-control" placeholder="Name Here" name="username">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Password Here" name="password">
  </div>
   
  <button type="submit" class="btn btn-primary w-100">Submit</button>
</form>
    </div>

    
  </body>
</html> -->
<?php
// if($_SERVER['REQUEST_METHOD']=="POST"){
//   include 'connect.php';
//   $username=$_POST['username'];
//   $password=$_POST['password'];
  // $sql="insert into `registration`(username,password) values('$username','$password')";
  // $execute=mysqli_query($con,$sql);
  // if($execute){
  //   echo "Database Created successfully";
  // }else{
  //   die(mysqli_error($con));
  // }
//   $sql="select * from `registration` where `username`='$username'";
//   $execute=mysqli_query($con,$sql);
//   if($execute){
//     $numRow=mysqli_num_rows($execute);
//     if($numRow>0){
//       echo "DataBase Already Exist";
//     }else{
//       $sql="insert into `registration`(username,password) values('$username','$password')";
//   $execute=mysqli_query($con,$sql);
//   if($execute){
//     echo "Database Created successfully";
//   }else{
//     die(mysqli_error($con));
//   }
//     }
//   }
// }




?>





<!doctype html>
<!-- <html lang="en">
  <head> -->
    <!-- Required meta tags -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <!-- <title>Sign Up</title>
  </head>
  <body>
    <h1 class="text-center">Sign Up</h1>
<div class="container mt-5">
<form action="sign.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name Here</label>
    <input type="text" class="form-control" placeholder="Name Here" name="username" >
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Password Here" name="password">
  </div>
 
  <button type="submit" class="btn btn-primary w-100">Submit</button>
</form>

</div>
  </body> -->
</html>
<?php
// $user=0;
// $success=0;
// if($_SERVER['REQUEST_METHOD']=="POST"){
//   include 'connect.php';
//   $username=$_POST['username'];
//   $password=$_POST['password'];
  // $sql="insert into `registration`(username,password) values ('$username','$password')";
  // $execute=mysqli_query($con,$sql);
  // if($execute){
  //   echo "Data inserted successfully";
  // }else{
  //   die(mysqli_error($con));
  // }
  // $sql="select * from `registration` where `username`='$username'";
  // $execute=mysqli_query($con,$sql);
  // if($execute){
  //   $num=mysqli_num_rows($execute);
  //   if($num>0){
      // echo "User Already Exist";
  //     $user=1;
  //   }else{
  //     $sql="insert into `registration`(username,password) values ('$username','$password')";
  // $execute=mysqli_query($con,$sql);
  // if($execute){
    // echo "Data inserted successfully";
//     $success=1;
//   }else{
//     die(mysqli_error($con));
//   }

//     }
//   }
// }

// ?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <!-- <title>Sign Up Form</title>
  </head>
  <body>
 -->

<?php
// if($user){
//   echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
//   <strong>Ooh no sorry!</strong>User Already Exist
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
// }
?>
<?php
// if($success){
//   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
//   <strong>success!</strong>You Are successfully signed up
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
// }
?>

    <!-- <h1 class="text-center">Sign Up Form</h1>
    <div class="container mt-5">
    <form action="sign.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name Here</label>
    <input type="text" class="form-control" placeholder="Name Here" name='username'>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Password Here" name='password'>
  </div>
  
  <button type="submit" class="btn btn-primary w-100">Submit</button>
</form>
    </div>

    
  </body> -->
</html>



<?php
// $user=0;
// $success=0;


// if($_SERVER['REQUEST_METHOD']=="POST"){
//   include 'connect.php';
//   $username=$_POST['username'];
//   $password=$_POST['password'];
  // $sql="insert into `registration`(username,password) values('$username','$password')";
  // $execute=mysqli_query($con,$sql);
  // if($execute){
  // echo "Data inserted successfully";
  // }else{
  //   die(mysqli_error($con));
  // }
  // $sql="select * from `registration` where `username`='$username'";
  // $execute=mysqli_query($con,$sql);
  // if($execute){
  //   $num=mysqli_num_rows($execute);
  //   if($num>0){
      // echo "Database already exist";
  //     $user=1;
  //   }else{
  //     $sql="insert into `registration`(username,password) values('$username','$password')";
  // $execute=mysqli_query($con,$sql);
  // if($execute){
  // echo "Data inserted successfully";
//   $success=1;
//   }else{
//     die(mysqli_error($con));
//   }
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

    <!-- <title>Sign Up Form</title>
  </head>
  <body> -->
<?php
// if($user){
//   echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
//   <strong>Ooh No Sorry</strong> User Already Exist
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
// }

?>
<?php
// if($success){
//   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
//   <strong>User Added</strong> User Added Successfully
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
// }

?>



    <!-- <h1 class="text-center">Sign Up Form</h1>
    <div class="container mt-5">
    <form action="sign.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name Here</label>
    <input type="text" class="form-control" placeholder="Name Here" name="username">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Password Here" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary w-100">Submit</button>
</form>


    </div>
  </body> -->
</html>

<?php
// $user=0;
// $success=0;



// if($_SERVER['REQUEST_METHOD']=="POST"){
//   include 'connect.php';
//   $username=$_POST['username'];
//   $password=$_POST['password'];
  // $sql="insert into `registration`(username,password) values('$username','$password')";
  // $execute=mysqli_query($con,$sql);
  // if($execute){
  //   echo "Data inserted successfully";
  // }else{
  //   die(mysqli_error($con));
  // }
  // $sql="select * from `registration` where `username`='$username'";
  // $execute=mysqli_query($con,$sql);
  // if($execute){
  //   $num=mysqli_num_rows($execute);
  //   if($num>0){
      // echo "DataBase Already Exist";
  //     $user=1;
  //   }else{
  //     $sql="insert into `registration`(username,password) values('$username','$password')";
  // $execute=mysqli_query($con,$sql);
  // if($execute){
    // echo "Data inserted successfully";
//     $success=1;
//   }else{
//     die(mysqli_error($con));
//   }
//     }
//   }
// }


?>





<!doctype html>
<!-- <html lang="en">
  <head> -->
    <!-- Required meta tags -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sign Up Form</title>
  </head>
  <body> -->

<?php

// if($user){
//   echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
//   <strong>Ooh No Sorry</strong> DataBase Already Exist.
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
// }

?>
<?php

// if($success){
//   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
//   <strong>Welcome</strong> Data inserted successfully.
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
// }



?>



    <!-- <h1 class="text-center">Sign Up Form</h1>
    <div class="container mt-5">
    <form action="sign.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name Here</label>
    <input type="text" class="form-control" placeholder="Name Here" name="username">
    
  </div> -->
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Password Here" name="password">
  </div>
   -->
  <!-- <button type="submit" class="btn btn-primary w-100">Sign Up</button>
</form>
    </div>

     -->
  </body>
</html>


<!-- for Practice -->

<?php
// $user=0;
// $success=0;
// if($_SERVER['REQUEST_METHOD']=="POST"){
//   include 'connect.php';
//   $username=$_POST['username'];
//   $password=$_POST['password'];
  // $sql="insert into `registration`(username,password) values('$username','$password')";
  // $execute=mysqli_query($con,$sql);
  // if($execute){
  //   echo "Data Insert successfully";
  // }else{
  //   die(mysqli_error($con));
  // }

  // $sql="select * from `registration` where `username`='$username'";
  // $execute=mysqli_query($con,$sql);
  // if($execute){
  //   $num=mysqli_num_rows($execute);
  //   if($num>0){
      // echo "DataBase already exist";
  //     $user=1;
  //   }else{
  //     $sql="insert into `registration`(username,password) values('$username','$password')";
  // $execute=mysqli_query($con,$sql);
  // if($execute){
    // echo "Data Insert successfully";
//     $success=1;
//   }else{
//     die(mysqli_error($con));
//   }
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

    <!-- <title>Sign Up Page</title>
  </head>
  <body> -->

<?php
// if($user){
//   echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
//     <strong>Ooh No Sorry</strong> DataBase Already Exist.
//     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//   </div>';
// }

?>
<?php

// if($success){
//   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
//     <strong>Welcome </strong>successfully.
//     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//   </div>';
// }
?>









    <!-- <h1 class="text-center">Sign Up Page</h1>

    <div class="container mt-5">
    <form action="sign.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name Here</label>
    <input type="text" class="form-control" placeholder="Name Here" name='username'>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Password Here" name='password'>
  </div>
  
  <button type="submit" class="btn btn-primary w-100">Submit</button>
</form>

    </div>
  </body>
</html> -->



<!-- Practice -->
<?php
// $user=0;
// $success=0;
// if($_SERVER['REQUEST_METHOD']=="POST"){
//   include 'connect.php';
//   $username=$_POST['username'];
//   $password=$_POST['password'];
  // $sql="insert into `registration`(username,password) values ('$username','$password')";
  // $execute=mysqli_query($con,$sql);
  // if($execute){
  //   echo 'Data insert successfully';
  // }else{
  //   die(mysqli_error($con));
  // }
  // $sql="select * from `registration` where `username`='$username'";
  // $execute=mysqli_query($con,$sql);
  // if($execute){
  //   $num=mysqli_num_rows($execute);
  //   if($num>0){
      // echo "User already exist";
  //     $user=1;
  //   }else{
  //     $sql="insert into `registration`(username,password) values ('$username','$password')";
  // $execute=mysqli_query($con,$sql);
  // if($execute){
    // echo 'Data insert successfully';
//     $success=1;
//   }else{
//     die(mysqli_error($con));
//   }
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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sign Up FOrm</title>
  </head>
  <body> -->
<?php
// if($user){
//   echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
//   <strong>Ooh No</strong>user already exist.
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
// }

?>

<?php

// if($success){
//   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
//   <strong>Success</strong> Data Insert successfully.
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
// }


?>






    <!-- <h1 class="text-center">Sign Up Form</h1>
    <div class="container mt-5">
    <form action="sign.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name Here</label>
    <input type="text" class="form-control" placeholder="Name Here" name='username'>

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Password Here" name='password'>
  </div>
  
  <button type="submit" class="btn btn-primary w-100">Submit</button>
</form>
    </div>

    
  </body>
</html> -->

<?php
// $user=0;
// $success=0;
// if($_SERVER['REQUEST_METHOD']=="POST"){
//   include 'connect.php';
//   $username=$_POST['username'];
//   $password=$_POST['password'];
  // $sql="insert into `registration`(username,password) values ('$username','$password')";
  // $execute=mysqli_query($con,$sql);
  // if($execute){
  //   echo "Data Insert successfully";
  // }else{
  //   die(mysqli_error($con));
  // }

  // $sql="select * from `registration` where `username`='$username'";
  // $execute=mysqli_query($con,$sql);
  // if($execute){
  //   $num=mysqli_num_rows($execute);
  //   if($num>0){
  //     // echo "Data already Exist";
  //     $user=1;
//     }else{
//       $sql="insert into `registration`(username,password) values ('$username','$password')";
//   $execute=mysqli_query($con,$sql);
//   if($execute){
//     // echo "Data Insert successfully";
//     $success=1;
//   }else{
//     die(mysqli_error($con));
//   }
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
<!-- 
    <title>Sign Up Form</title>
  </head>
  <body> -->
<?php
// if($user){
//   echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
//   <strong>Ooh No !</strong> Sorry
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
// }

?>
<?php
// if($success){
//   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
//   <strong>welcom</strong> Data added.
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
// }

?>

    <!-- <h1 class="text-center">Sign Up Form</h1>
  <div class="container mt-5">
  <form action="sign.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name Here</label>
    <input type="text" class="form-control" placeholder="Name Here" name="username">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Password Here" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary w-100">Submit</button>
</form>
  </div> -->
    
  </body>
</html>

<?php
$user=0;
$success=0;
if($_SERVER['REQUEST_METHOD']=="POST"){
  include 'connect.php';
  $username=$_POST['username'];
  $password=$_POST['password'];
  // $sql="insert into `registration`(username,password) values ('$username','$password')";
  // $execute=mysqli_query($con,$sql);
  // if($execute){
  //   echo "DataBase Added";
  // }else{
  //   die(mysqli_error($con));
  // }
  $sql="select * from `registration` where `username`='$username'";
  $execute=mysqli_query($con,$sql);
  if($execute){
    $num=mysqli_num_rows($execute);
    if($num>0){
      // echo "Data already exist";
      $user=1;
    }else{
      $sql="insert into `registration`(username,password) values ('$username','$password')";
  $execute=mysqli_query($con,$sql);
  if($execute){
    // echo "DataBase Added";
    $success=1;
  }else{
    die(mysqli_error($con));
  }
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

    <title>Sign Up Form</title>
  </head>
  <body>
<?php
if($user){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Sorry</strong> User alrady exist
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}


?>
<?php
if($success){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Yes</strong> New User Added.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}



?>





    <h1 class='text-center'>Sign Up Form</h1>
<div class="container mt-5">
<form action='sign.php' method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name Here</label>
    <input type="text" class="form-control" placeholder="Name Here" name='username'>
    
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Passeord Here" name='password'>
  </div>
  
  <button type="submit" class="btn btn-primary w-100">Submit</button>
</form>
</div>
    
  </body>
</html>