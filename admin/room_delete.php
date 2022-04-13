<?php 
 $title =  "Delete Room";
require "include/header.php";

$id = $_GET['id'];

$del = "DELETE FROM kamar WHERE id = '$id'";
$query = mysqli_query($conn, $del);

if ($query) {
	echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."admin/rooms.php'/>";
}
 ?>