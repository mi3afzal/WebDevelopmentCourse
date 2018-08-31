<?php

// variable declaration
$temp_storage = 'Hello';


// conditional statements
if($temp_storage == 'Hello') echo 'condition is true';
else echo 'condition dose not true';


// concatenation 
$v1 = "Hello"; 
$v2 = 'World';
echo $v1.' '.$v2.'<br>';


// Defined global variable
define('VAR1', 'Defined variable');
echo VAR1;


// arithmetic operators
$v1 = 5;
$v1 = $v1 + 2;
$v1 += 5;
echo $v1++;

echo --$v1;
echo $v1;


// for loop
for($i=1; $i<=100; $i+=5){  
	echo $i.'<br>'; 
} 


// while loop
$i=1; 
while($i<=100) {
	echo $i.'<br>'; 
	$i+=5;
}


// do while loop
$i = 101;	 
do{
	echo $i.'<br>'; 
	$i+=5;
} while($i<=100);


// Write a function
function add($num1, $num2){
	return $num1 + $num2;
}
$t1 = add(5, 5);
echo $t1;

echo '<br>';
echo add(15, 5);

echo '<br>';
$t3 = add(6, 9);
if($t3 != 14) echo 'variable value is not equal to 14';


?>