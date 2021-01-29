<?php 

//$color = ['red','green','blue','yellow','brown'];

//$new_array=array_slice($color,1,3);

//echo "<pre>";

//print_r($new_array);

//echo "</pre>";

//$color = ['red','green','blue','yellow','brown'];

$color = ['a' => 'red', '42'=>'green','c'=> 'blue', 'd'=>

'yellow', 'e'=>'brown'];

$new_array = array_slice($color,0,3,true);

echo "<pre>";

print_r($new_array);

echo "</pre>";









?>