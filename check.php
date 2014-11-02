<?php
$time_pre = microtime(true);
$e = exec("ping -c 2 192.168.40.99");
$time_post = microtime(true);
$exec_time = $time_post - $time_pre;
if ($exec_time<4.5) {
	echo $e;
}
else if ($exec_time<8) {
	echo "Slow connection";
}
else{
	echo "No Internet Connection";
}
?>