
<?php

//This PHP File will Capitalize the First Word Only


//Im using a form Control to get the inputs from the user and will execute the following lines of Source Codes to Capitalize the First Word.
echo'<form name="form1" method="post"> ';

//I have write a simple input type here to get the inputs from user
echo'<input name="instring" type="text" value="the quick brown fox jump over the lazy dog" size="30">';

//This is a button to execute the Inputs from User i have include the calling of the Function here in my button.
echo'<input type="button" name="Capitalize" value="Capitalize >>" onclick="form1.outstring.value=form1.instring.value.capitalize();">';
  

//This is where the output display after user click the Button.
echo'<input name="outstring" type="text" value="" size="30">
</form>';

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 

<script>
	String.prototype.capitalize = function() {
  			return this.replace(/(^|\s)([a-z])/g, function(m, p1, p2) {
   			return p1 + p2.toUpperCase();
  	});
	};
      	
</script>		