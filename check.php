<?php
<<<<<<< HEAD
if(PHP_OS=="Linux") $e = exec("ping -c 2 192.168.40.99", $a, $b);
else $e = exec("ping 192.168.40.99", $a, $b);
if ($b==1) {echo "No Internet Connection";}
else{echo $e;} 
?>
=======
if(PHP_OS == "Linux") $e = exec("ping -c 2 192.168.40.99", $a, $b);
else $e = exec("ping 192.168.40.99", $a, $b);
if($b == 1) {echo "No Internet  Connection";}
else {echo $e;}
?>
>>>>>>> c96a0dd389470305dd1ee9b605ccd696efa335e5
