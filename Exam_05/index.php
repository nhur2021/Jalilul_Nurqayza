<?php
// PHP function to reverse a simple string
// without using library functions
  
function Reverse($str){
    for($i=strlen($str)-1, $j=0; $j<$i; $i--, $j++) 
    {
        $temp = $str[$i];
        $str[$i] = $str[$j];
        $str[$j] = $temp;
    }
    return $str;
}
  
// Driver Code
$str = "Car";
print_r(Reverse($str));
?>