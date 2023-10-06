<html>
<body>
<form action="string.php" method="post">
Enter the string:
<input type="text" name="n1"/><br><br>
<input type="submit" name="submit" value="Check ">
</form>
<?php
if(isset($_POST['submit']))
{
  $n= $_POST['n1'];
  $y=strrev($n);
  $x=strlen($n);
 echo"Reverse:<input type='text' value='$y'/><br>";
 echo"length:<input type='text' value='$x'/><br>";
}
?>
</body>
</html>
