<?php 

// echo date("l, d-M-Y");

// echo date("d M Y", time()-60*60*24*100);

echo date("l", mktime(0,0,0,1,8,2000));
echo date("l", strtotime("8 jan 2000"));

?>