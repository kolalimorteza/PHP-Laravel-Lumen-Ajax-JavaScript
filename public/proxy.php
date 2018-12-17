<?php  
header('Content-Type: application/xml');
$url = 'http://frontend-candidate.vaimo.com/morteza.kolali/public/cart/get';
$handle = fopen($url,"r");
if ($handle){
   while (!feof(handle)) {
     $buffer = fgets($handle,4096);
     echo $buffer;
   }
   fclose($handle);
}
?>