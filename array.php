<?php

//$food=array('berry','grapes','banana','apple','grapes',55);

//echo in_array('banana', $food);
/*
if(in_array('lime', $food)){

	echo "Find successfully";
}else{

	echo "can't find";
}
*/

/*
if(in_array(55,$food,true)){

	echo "Find successfully";
}else{

	echo "can't find";
}
*/

/*
$a = array(array('p','h'),array('p','h'),'o');
if(in_array(array('p','h'),$a,true)){
	echo "find successfully";
}else{
	echo "can't find";
}
*/

//$food=array('berry','grapes','banana','apple','grapes',55);
 //echo array_search('banana', $food);

//$food = array('a' => 'orange', 'b'=>'banana', 'c'=>'apple','d'=>'grapes');

 //echo array_search('apple', $food);


//======== array_replace and array_replace_recursive====
//$fruits = ['apple','a'=>'banana','orange','grapes'];

//$veggie=['a' => 'carrot',1 =>'pea'];

//$colors = ['green','blue','red'];

$array1=array("a"=>array("green"),"b"=>array("blue","red"));
$array2=array("a"=>array("yellow"),"b"=>array("black"));
$newArray=array_replace_recursive($array1, $array2);

echo "<pre>";

print_r($newArray);

echo "</pre>"





?>