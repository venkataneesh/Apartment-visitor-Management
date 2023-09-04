<?php
include './includes/dbconn.php';

$query=mysqli_query($con,"SELECT ID from tbldomestic");
$count_total_workers=mysqli_num_rows($query);

echo $count_total_workers
?> 