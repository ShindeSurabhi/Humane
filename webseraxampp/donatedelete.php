<?php
$connect = mysqli_connect("localhost", "root", "", "humane");
echo "string";
if(isset($_POST["id"]))
{echo "string";
 $query = "DELETE FROM donate WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>