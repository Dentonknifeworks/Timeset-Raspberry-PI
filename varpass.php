<html>
<body>

<?php
$result = $_GET['newTime'];

system('sudo timedatectl set-ntp false');

$output = system("sudo date -s'$result' 2>&1", $retCode);

//echo "result is ";
//echo $result;


?>

</body>
</html>
