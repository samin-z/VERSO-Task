<?php

/* Task 1
* Given an array, find the integer that appears an odd number of times.
* There will always be only one integer that appears an odd number of times.
*/

$array = [21,5, 5, 21, 8,8, 7,7,21];

$array_count = array_count_values($array);

foreach($array_count as $k=>$count)
{
	if(!is_numeric($k)) continue ; 
  
	if($count % 2 != 0)
		echo('integer at odd number of times =>'.$k.'<br/>');
	
}



/* Task 2
* Given the string representations of two integers, return the string representation of the sum of those integers.
* For example:
*   sumStrings('1','2') // => '3'
*
* A string representation of an integer will contain no characters besides the ten numerals "0" to "9".
*/
$first = '8';
$second = '4';
echo("sum of $first and $second equals =>".strval(array_sum([$first,$second])));

