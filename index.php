<? 
$isup = file_get_contents('http://isup.me/0-chanru.net');
$up = (strpos($isup, "looks down from here") == false);
if($up) include('up.php');
else include('down.php');
?>
