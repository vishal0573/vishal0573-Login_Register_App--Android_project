<?php


define('HOST', 'localhost');
define('USER', 'id14853230_vishal');
define('PASSWORD', 'mr_B1%c>ekX5}4T~');
define('DB', 'id14853230_trices');



$con = mysqli_connect(HOST, USER, PASSWORD, DB) or die("Unable to Connect");


$query = "SELECT * FROM users";
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_array($result)) {
 
	$flag[] = $row;
}
 
print(json_encode($flag));

mysqli_close($con);
?>
