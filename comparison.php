<?php 

	//$a=10;

	//$a=20; 

	//$a =1;

	//$b=10;


	//echo $a == $b;

	//echo $a === $b;

	//echo $a != $b;

	//echo $a <> $b;

	//echo $a !== $b;

	//echo $a > $b;
	//echo $a >= $b;
	//echo $a <= $b;
	//echo $a <=> $b;
	//$a=10;
	//$b = 20;

	//if($a > $b){
	//	echo "A is greater operator";
	//}
	//$a = 20;
	//$b= 20;
	//if($a === $b):
		//echo "this is testing of colon<br>";
	//	echo "this is testing of colon<br>";
	//endif;

//logical operators

//	$age = 20;
//	if($age>=18 && $age <= 21){
//		echo "U are eligible";
//	}
	

	// $age = 20;
	// if($age>=18 and $age <= 21){
	//	 echo "U are eligible";
	// }

//$age = -1;
 //if($age>=18 || $age <= 21){
//	 echo "U are eligible";
// }

 //$age = -1;
 //if($age>=18 or $age <= 21){
//	 echo "U are eligible";
// }


//$age=25;
//if(!($age>=18)){
	//echo "You are eligible";
//}

/* $age = 2;
if($age >= 18 xor $age <= 21){
	echo "u are eligible";
}
*/
/*$x= 15;
if($x > 30){
	echo "x is greater";
}else{
	echo "x is smaller";

}
*/

/*
$x= 100;
if($x === "100"){
	echo "x is same";
}else{
	echo "x is not same";
	
}


$name = "yahoo-baba";
$gender = "female";
if($gender == "male"){
	echo "<br> hello mr". $name;
}else{
	echo "<br> hello miss". $name;
}
*/

/*
$per = 1001;
if($per >= 80 && $per <= 100){
	echo "You are merit";
}elseif ($per >=60 && $per < 80) {
	echo "you are in ist division";
}elseif ($per >= 45 && $per < 60){
	echo "you are in iist division";
}elseif ($per >=33 && $per < 45){
	echo "YOu are in iiird division";
}elseif ($per < 33){
	echo "You are fail";
}else{
	echo "Please enter valid percentage";
}
*/

//Alter native way with colon;

/*
$per = 100;
if($per >= 80 && $per <= 100):
	echo "You are merit";
elseif ($per >=60 && $per < 80) :
	echo "you are in ist division";
elseif ($per >= 45 && $per < 60):
	echo "you are in iist division";
elseif ($per >=33 && $per < 45):
	echo "You are in iiird division";
elseif ($per < 33):
	echo "You are fail";
else:
	echo "Please enter valid percentage";
endif;

*/

/*

$weekday = 1;

switch($weekday){
	case 1:

	echo "today is Monday";
	echo "<br> This is just a test";
	break;

	case 2:
	echo "today is Tuesday";
	break;
	case 3:
	echo "today is Wednesday";
	break;
	case 4:
	echo "today is Thursday";
	break;
	case 5:
	echo "today is Friday";
	break;
	case 6:
	echo "today is Saturday";
	break;
	case 7:
	echo "today is Sunday";
	break;

	default:
	echo "Please enter the valid weekday";
}
	*/

	//Alternative  way of switch case1 ,case 2,case 3 same;
/*
$weekday = 3;

switch($weekday){

	case 1: case 2: case 3:

	echo "today is Monday";
	echo "<br> This is just a test";
	break;

	case 4:
	echo "today is Thursday";
	break;

	case 5:
	echo "today is Friday";
	break;

	case 6:
	echo "today is Saturday";
	break;

	case 7:
	echo "today is Sunday";
	break;
	
	default:
	echo "Please enter the valid weekday";

}
*/
/*
$age = 50;

switch(true){

	case ( $age >= 15 && $age <= 20):

	echo "You are eligible";
	break;

	
	case ( $age >= 21 && $age <= 30):

	echo "You are not eligible";
	break;

	default:
	echo "Please enter the valid age";

}
*/
//ternery operators
/* $x= 30;

($x > 20)? $z="Greater":$z="Smaller";

echo $z;
*/
//alter native way
/*
$z = ($x > 20)? "Greater": "smaller";

echo $z;
*/

// we can try it without round braces
/*
$x =30;

$z = $x > 20 ? "Greater": "smaller";

echo $z;

*/
//we can try it with string values
$x = 31;
$z = "value is: ".($x > 30 ? "greater" : "smaller");

echo $z;




 ?>