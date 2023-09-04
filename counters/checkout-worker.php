<?php
include './includes/dbconn.php';

$query=mysqli_query($con,"SELECT * from tbldomestic where remark IS NULL AND outtime IS NULL");
$count_today_workers=mysqli_num_rows($query);

echo $count_today_workers;
 ?> 