<html>
<head>
  <title>Rooms script</title>
</head>
<body>
<?php 

require("connection.php");

if(isset($_POST['submit']))
{
 $id=$_POST['hotelid'];
 $roomsinput=$_POST['rooms'];

 $query="select * from rooms where id={$id}";
 $getRowUserId=mysqli_query($connection,$query);
 $resUserId=mysqli_fetch_assoc($getRowUserId);
$rooms=$resUserId['rooms'];
$totalrooms=$rooms-$roomsinput;
echo $totalrooms;
}


?>

<form action="pushscript.php" method="post">
  hotel id:<input type="text" name="hotelid"><br/>
  no of rooms:<input type="text" name="rooms"><br/>
  <input type="submit" name="submit" value="submit"><br/>
</form>

</body>
</html>