<?php 

echo "Please enter a word:";
$input = rtrim(fgets(STDIN)); // getting the input
$length = strlen($input);
echo "Your word is {$length} letters long\n";

function wrd_rtrn($input){
	$length = strlen($input);
  if ($length > 5){
  echo strrev(substr($input, 0, 4))."\n";
  }
  else {
  echo "{$input}"."\n";
  }
  }

wrd_rtrn($input);



?>
