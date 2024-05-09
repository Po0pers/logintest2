<?php 

include 'config/dbconn.php';

$arr = array();

// Count students from each course
$query = "SELECT course, COUNT(*) as count FROM t_student GROUP BY course";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)){
    $arr[] = $row;

}
$result -> close();
$conn -> close();
echo json_encode($arr);