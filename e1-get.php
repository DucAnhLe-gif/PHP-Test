<?php

if(isset($_GET['sum'])){
  if(!isset($_GET['a']) && !isset($_GET['b'])){
    echo "<script> alert ('Please add a=NUMBER&b=NUMBER to the query string') </script>";
  }
  
  if(!isset($_GET['a'])){
    echo "<script> alert ('Please add a=NUMBER to the query string') </script>";
  }
  
  if(!isset($_GET['b'])){
    echo "<script> alert ('Please add b=NUMBER to the query string') </script>";
  }
  
  if(!is_numeric($_GET['a'])){
    echo "<script> alert ('Please add a=NUMBER to the query string') </script>";
  }
  
  if(!is_numeric($_GET['b'])){
    echo "<script> alert ('Please add b=NUMBER to the query string') </script>";
  }
}

if(isset($_GET['a'])){
  $a = $_GET['a'];
}

if(isset($_GET['b'])){
  $b = $_GET['b'];
}

if(isset($a) && isset($b) && is_numeric($a) && is_numeric($b)){
  $sum = $a + $b;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<div class="container">
  <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>" novalidated>
    <div class="form-group">
      <input type="text" name="a" value="<?php echo isset($a)? $a:"" ?>" placeholder="a = ">
      <button class = "btn btn-success" name ="sum" value = "sum">+</button>
      <input type="text" name="b" value="<?php echo isset($b)? $b:"" ?>" placeholder="b = ">
      =
      <!-- <input type="submit" name="submit" value="submit"> -->
      <input type="text" name="sum" value="<?php echo isset($sum)? $sum:"" ?>" placeholder="Sum = ">
    </div>
  </form>
</div>
  
</body>
</html>