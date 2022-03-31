<?php

if(isset($_POST['sum'])){
  if(!isset($_POST['a']) && !isset($_POST['b'])){
    echo "<script> alert ('Please add a=NUMBER&b=NUMBER to the query string') </script>";
  }
  
  if(!isset($_POST['a'])){
    echo "<script> alert ('Please add a=NUMBER to the query string') </script>";
  }
  
  if(!isset($_POST['b'])){
    echo "<script> alert ('Please add b=NUMBER to the query string') </script>";
  }

  if(!is_numeric($_POST['a']) && !is_numeric($_POST['b'])){
    echo "<script> alert ('" . $_POST['a'] . " is not a number". '\n' . $_POST['b'] . " is not a number') </script>";
  }else if(!is_numeric($_POST['a']) or !is_numeric($_POST['b'])){
    echo is_numeric($_POST['a'])? null: "<script> alert (' " . $_POST['a'] . " is not a number') </script>";
    echo is_numeric($_POST['b'])? null: "<script> alert (' " . $_POST['b'] . " is not a number') </script>";
  }
}

if(isset($_POST['a'])){
  $a = $_POST['a'];
}

if(isset($_POST['b'])){
  $b = $_POST['b'];
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
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" novalidated>
    <div class="form-group">
      <input type="text" name="a" value="<?php echo isset($a)? $a:"" ?>" placeholder="first number ">
      <button class = "btn btn-success" name ="sum" value = "sum">+</button>
      <input type="text" name="b" value="<?php echo isset($b)? $b:"" ?>" placeholder="seccond number ">
      =
      <!-- <input type="submit" name="submit" value="submit"> -->
      <input type="text" name="sum" value="<?php echo isset($sum)? $sum:"" ?>" placeholder="">
    </div>
  </form>
</div>
  
</body>
</html>