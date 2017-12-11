<?php
$dbc = mysqli_connect('localhost', 'bartuser', 'bartuser', 'instaclone') or die ('Error!');
$query = "INSERT INTO instaclone VALUES (0,now(),'henk','harry','ruud')";
$result = mysqli_query($dbc,$query) or die ('Error querying');
mysqli_close($dbc);
?>