<?php
//Write a PHP function that checks whether a passed string is a palindrome or not?
function Palindrome($string){
	if (strrev($string) == $string){
		return 1;
	}
	else{
		return 0;
	}
}
$original = "Mahtab";
if(Palindrome($original)){
	echo "Palindrome";
}
else {
echo "Not a Palindrome";
}
?>