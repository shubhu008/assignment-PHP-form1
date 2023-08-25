

<html>
    <head>
        <title>
            form
</title>
</head>
<body>
    <form  action="" method="post">
        <label for="value1">Value 1</label><br>
        <input type="number" id="value1" name="value1" ><br>
        <label for="value2">Value 2</label><br>
        <input type="text" id="value2" name="value2"  ><br><br>
        <button type="submit" name="add"><b>Add</b></button>
        <button type="submit" name="sub"><b>Subtract</b></button>
        <button type="submit" name="product"><b>Product</b></button>
        <button type="submit" name="divide"><b>Divide</b></button>

        </form>




<?php
if(isset($_POST["add"]))
{
  $value1=$_POST['value1'];
  $value2=$_POST['value2'];
  echo $value1+$value2;
  exit;
}
if(isset($_POST["sub"]))
{
  $value1=$_POST['value1'];
  $value2=$_POST['value2'];
  echo $value1-$value2;
  exit;
}
if(isset($_POST["product"]))
{
  $value1=$_POST['value1'];
  $value2=$_POST['value2'];
  echo $value1*$value2;
  exit;
}
if(isset($_POST["divide"]))
{
  $value1=$_POST['value1'];
  $value2=$_POST['value2'];
  echo $value1/$value2;
  exit;
}
?>
</body>
</html>