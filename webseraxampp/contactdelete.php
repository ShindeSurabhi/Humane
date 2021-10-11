<?php
$connect = mysqli_connect("localhost", "root", "", "humane");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM contact WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>