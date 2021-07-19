<?php
    //PHP Program that will Check if the Input String is a PALINDROME or NOT.
    $t1=$_POST['t1']; //After Clicking the Button the value from the Text Field will transfer to "$t1".
      if(strlen($t1) >0){ //Will check first the length of the Input String.
          if($t1==strrev($t1)){ //After checking the Lenght of the String it will now execute the Process which it will reverse the word.
          echo "<i>$t1</i> is a Palindrome "; //Once Input is a Palindrome it will display on the screen this Phrase.
          }else{ //Else if the decision is wrong. Means the String is not a PALINDROME.
           echo "<i>$t1</i> is NOT a Palindrome "; //This will Display on the Screen once input string is not a PALINDROME.
       }
      }else{echo "Enter any string"; } //Once user run the Program this will display on the Screen.



  echo '<form method=POST name=form1>'; //I'm using the Form Methods here to execute the said sequence.
  echo '<div>';

      echo '<table class="selection">';
           echo '<tr>
                  <th colspan="4"><input type="hidden"/><h3>' .  _('Check if the Word is Palindrome or Not').' </h3></th>';
                  //This is a simple title to be displayed on the User's Insterface.
           
           echo'</tr>';
  
           echo '<tr>';
    
                 echo'<td>' . _('Enter Word Here') . ':</td>' //This is a simple title to be displayed on the User's Insterface.
                 echo'<td><input type=text name=t1 class="form-control" ></td>'; //This is where the user's input a String.
           echo'</tr>
      
      </table>

      <br />
      <div class="centre">
   
      <input type="submit" name="Submit" value="'. _('Click Me'). '" />
      <br />
      </div>
      </div>
      </form>';

?>

