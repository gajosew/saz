<?php

$data = "1992/11/19";

$zdanie=explode("/",$data);  // explode dzieli  ten ciag znakow 
for($x=0;$x<count($zdanie);$x++){  // pętelka ...
   print $zdanie[$x]." ";  // wywal to co wyszło  :ok: ;)
}
?>