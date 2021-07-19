<?php
    $t1=$_POST['t1'];
      if(strlen($t1) >0){
          if($t1==strrev($t1)){ 
          echo "<i>$t1</i> is a Palindrome ";
          }else{
           echo "<i>$t1</i> is NOT a Palindrome ";
       }
      }else{echo "Enter any string"; }



  echo '<form method=POST name=form1>';
  echo '<div>';

      echo '<table class="selection">';
           echo '<tr>
                  <th colspan="4"><input type="hidden"/><h3>' .  _('Check if the Word is Palindrome or Not').' </h3></th>
           </tr>';
  
           echo '<tr>
    
                 <td>' . _('Enter Word Here') . ':</td>
                 <td><input type=text name=t1 class="form-control" ></td>
           </tr>
      
      </table>

      <br />
      <div class="centre">
   
      <input type="submit" name="Submit" value="'. _('Click Me'). '" />
      <br />
      </div>
      </div>
      </form>';

?>

