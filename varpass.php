<html>
<body>
<body style="background-color:black;"> <form action="/index.php" Name="home">
<input type="Submit" value="Return Home">
<br><br>
 

<?php
$result = $_GET['newTime'];

system('sudo timedatectl set-ntp false');
echo 'Time is set to: ';
$output = system("sudo date -s'$result' 2>&1");

//echo "result is ";
//echo $result;


?>

</body>
</html>
