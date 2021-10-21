<?php
$string = $_POST['msg'];
echo "<p>" . $string . "</p>";
$newstring = $string;
$sp = 3;
for ($i=0;$i<strlen($string);$i++) {

    $ascii = ord($string[$i]);
    for($j=0;$j<$sp;$j++){
      if($ascii == 90) { //uppercase bound
        $ascii = 65; //reset back to 'A' 
      } 
      else if($ascii == 122) { //lowercase bound
        $ascii = 97; //reset back to 'a' 
      } 
      else {
        $ascii++;
      }
    }
    $newstring[$i] = chr($ascii);
  
  }

echo "<p>" . $newstring . "</p>";


?>