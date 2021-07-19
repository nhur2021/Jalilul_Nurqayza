<?php
	$addtonumbers = 0; //This is to be used to add value to the "$numbers"
	$number = 1; //This is the value of numbers to be use to display for FIBONACCI SEQUENCE. i have assign the value of "1"

	for($limit=1;$limit<=10;$limit++)    //Using "FOR LOOP" we will determine if the Sequence is less than or equal to the value of 10.
		{    
    		$fibonacci = $addtonumbers + $number;  // We will simply  "$addtonumbers + $number" to get the vaslue of "$fibonacci"
    		
    		echo $fibonacci."<br />";  //After getting the value "$fibonacci" we will display it on Users Screen.       
    		
    		$addtonumbers=$number;  //We wiil transfer the value of "$addtonumbers" to "$number"     
    		
    		$number=$fibonacci; //We will transfer the value of "$fibonacci" to "$number". 

    		//Example   
    		// $addtonumbers=$number ($addtonumbers=1)
    		// $number=$fibonacci ($number=1)
    		// $fibonacci=1
    		//This will add to the next LOOP

		}  
?>