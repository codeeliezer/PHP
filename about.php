

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php



$alert = "<script>alert('Hello Alert!');</script>";
//echo $alert;

if (array_key_exists('read',$_POST))
{
  button();
}

function button()
{
 // echo $alert;
}

//echo "<form method='post'><input type='submit' name ='read' value='click'></form>";

?>

<form method="post">
<input type="submit" value="click" name="read" value="click">
</form>
  

</body>
</html>