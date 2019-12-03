<?php

echo "Please enter a word:";
$input = rtrim(fgets(STDIN)); // getting the input
$length = count($input);
echo "Your word is {$length} letters long";

?>
