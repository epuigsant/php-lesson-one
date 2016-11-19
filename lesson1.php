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
	
$stringTest = "I am assigning this string to a variable names $stringTest";
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
	
	
	</body>




</html>