<?php
//PHP Simple Program to check the Date Difference.
$date1 = "2019-05-31"; //First Date Value
$date2 = "2018-04-05"; //Second Date Value

$diff = abs(strtotime($date2) - strtotime($date1)); //We will use this PHP Function to Check the Difference of the two dates.

$years = floor($diff / (365*60*60*24)); //Once we have determine the Difference of the two dates we will now calculate for the Years first.
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); //After Calculating the Years we will proceed on the months.
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24)); //Once we are done on the Calculating of the Months we will proceed on the Calculation of the days.

printf("%d years, %d months, %d days\n", $years, $months, $days);  //After the above calculation we will not Display the output on the Users Interface.

?>