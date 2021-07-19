<?php
$evensum = 0; // We need to declare first a variable for getting the sum all even numbers from 1 - 10
$i = 1; // This is the variable with a vlue of 1 for determining even numbers.
		while ($i <= 10) // We will use "WHILE LOOP" to get the even numbers from 1 to 10
		{
    		if ($i % 1 == 0) // Once $i <=10 then it will execute this following line of Source Code. We will use If Statement to check if the value is true all false
    		{
        		$evensum = $evensum + $i; //Once the Value of $i is true then it will add up to the value of evensum. This will end the if statement once the value of $i is greather than 10.
    		}
    	$i=$i+2; //This will increment plus 2 on the value of $i to run the next loop
		}
		echo '<p>The Sum of all Even Numbers from 1 - 10 is ' . $evensum . '</p>'; //This is to display the output on the users screen.														//$evensum is the Value to Sum.
?>