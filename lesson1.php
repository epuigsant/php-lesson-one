<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Lesson One</title>
	</head>
	<body>
		
		
		<h1>Variables</h1>
		<?php 

$friday = "Friday"; //assigned value of string Friday

$todaysDate = date("Y.m.d"); //assigned value of a function

$friday = "Monday" //same variable given different value
	
		
		?>
		
		<h1>Strings</h1>
		
		<?php 
	
$stringTest = "I am assigning \"this\" string to a variable names $stringTest";
//This sentence is a string
$stringTest2 = "string"; //a string can be a word, doesn't have to be a sentence
$stringTest3 = "a 1 ewj...1/2 shsydynsknskans sjdbjdnjsdb"; //also a string

echo "This is also a string - no variable needed";
	
		?>
		
		<h1>Arrays</h1>
		
		<?php 

$dogs = array("shetland", "golden");
$animals = array($dogs, "frog", "elephant", "cat", "wolf"); //you can have an array within an array
/* 
key:value pairs

key:0
value:dog,

key:1
value:frog,

key:2
value:elephant,

key: 3
value: cat,
*/
		?>
		
		<h1>Superglobals</h1>
		
		<h1>Booleans</h1>
		
		<?php 

$areWeHavingFun = true; //boolean
$seriously = "false"; //string
		
		?>
		
		<h1>NULL</h1>
		
		<?php 

$var1 = $var2; //var1 is null because the value of var2 has not been set

$var1 = "null"; //var1 is not equal to null because it takes the value of a string

$var1 = NULL; //var1 is again equal to null;
		
		?>
		
		<h1>Constants</h1>
		
		<?php 

define("FAVORITE_ANIMAL", "Dogs");
		
		?>
		
		<h1>Numbers</h1>
		
		<?php 

$int1 = 56;

$float1 = 4.5;
		
		?>
		
		<h1>Conditional Statements</h1>
		
		<?php 

if ($var1 = $var2) {
	
	echo "these variables are the same";
}



if ($sky = "blue") {
	echo "sunny"
}	else {
	echo "Cloudy";
}	
		
		?>
		
		<?php

$number = 1; //base value of variable

while ($number <= 10) { //comparison to see if number is less than or equal to 10
	echo $number; //echo value of variable number
	$number++; //increment variable number by one
}
		
		?>
		
		<h1>Functions</h1>
		
		<?php 

//Single line comment

/* Multiline
Still a comment
..and another line

*/
		
		?>
		
		<!-- Outside of PHP Comment -->
		
	
	</body>




</html>