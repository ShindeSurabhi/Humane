<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "humane");
$columns = array('$name','$email','$address','$city','$state','$zipcode','$item','$pickup','$find','$interest');

$query = "SELECT * FROM donate ";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE name LIKE "%'.$_POST["search"]["value"].'%" 
 OR email LIKE "%'.$_POST["search"]["value"].'%" 
 OR address LIKE "%'.$_POST["search"]["value"].'%" 
 OR city LIKE "%'.$_POST["search"]["value"].'%"
 OR state LIKE "%'.$_POST["search"]["value"].'%"
 OR zipcode LIKE "%'.$_POST["search"]["value"].'%"
 OR item LIKE "%'.$_POST["search"]["value"].'%"
 OR pickup LIKE "%'.$_POST["search"]["value"].'%"
 OR find LIKE "%'.$_POST["search"]["value"].'%"
 OR interest LIKE "%'.$_POST["search"]["value"].'%"
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY id DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="name">' . $row["name"] .'</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="email">' . $row["email"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="address">' . $row["address"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="city">' . $row["city"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="state">' . $row["state"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="zipcode">' . $row["zipcode"] . '</div>';
   $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="item">' . $row["item"] . '</div>';
   $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="pickup">' . $row["pickup"] . '</div>';
   $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="find">' . $row["find"] . '</div>';
    $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="interest">' . $row["interest"] . '</div>';
    $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="' . $row["id"].'">Delete</button>';
    
    
 $data[] = $sub_array;

}


function get_all_data($connect)
{
 $query = "SELECT * FROM donate";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>