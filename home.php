<?php
// session_start();
// if(!isset($_SESSION['username'])){
// header('location:login.php');
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

    <!-- <title>Welcome</title>
  </head>
  <body>
    <h1>Welcome  </h1>

    
  </body>
</html> -->


<!-- Practice -->
<?php
// session_start();
// if(!isset($_SESSION['username'])){
//   header('location:login.php');
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

    <!-- <title>Home</title>
  </head>
  <body>
    <h1>welcome </h1> -->

    
  </body>
</html>
<!-- Practice -->

<?php
// session_start();
// if(!isset($_SESSION['username'])){
//   header('location:login.php');
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

    <!-- <title>Home</title>
  </head>
  <body>
    <h1>Welcome </h1>

   
  </body>
</html>
<?php
// session_start();
// if(!isset($_SESSION['username'])){
//   header('location:login.php');
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

    <!-- <title>Hello, world!</title>
  </head>
  <body>
    <h1 class="text-center text-warning mt-5">Hello <?php echo $_SESSION['username']?></h1>
    <div class="container mt-5">
      <a href="logout.php" class="btn btn-primary mt-5">Logout</a>
    </div>

    
  </body>
</html> -->
<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:login.php');
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

    <title>Home</title>
  </head>
  <body>
    <h1 class="text-center text-warning mt-5">Hello <?php echo $_SESSION['username'];?></h1>
    <div class="container mt-5">
      <a href="logout.php" class="btn btn-primary mt-5">Logout</a>
    </div>

    
  </body>
</html>