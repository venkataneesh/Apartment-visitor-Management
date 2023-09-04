<?php
include './includes/dbconn.php';

$query=mysqli_query($con,"SELECT ID from tbldomestic where date(enterTime)=CURDATE();");
$count_today_workers=mysqli_num_rows($query);

echo $count_today_workers;
 ?> 