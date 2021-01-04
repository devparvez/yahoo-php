<?php 

//while loop
/*
$a = 1;
while($a <= 10){
	echo " Happy new Year <br>";
	$a = $a + 1;
}
*/

/*
$a = 1;

while($a <= 10){

	echo $a. " ) Happy new Year <br>";

	$a++;
}
*/

/*
$a = 1;

while($a <= 10){

	echo $a. " ) Happy new Year <br>";

	$a++;
}
*/
/*
$a = 1;
echo "<ul>";
while($a <= 30){
	echo "<li>".$a.")Hello</li>";
	$a= $a+2;
echo "</ul>";
}
*/

//======= Do while loop =====//
/*

$a = 1;

do{
	echo $a ." )Hello Aman <br>";
	$a++;
}while($a <= 20);

*/
/*
$a = 10;
do{
	echo "<ul>";
	echo "<li>". $a ."Hello Aman </li>";
	echo "</ul>";
	$a--;
}while($a >= 1);
*/
/*
for($a = 1;$a <= 10; $a++){
	echo $a.")Aman <br>";
}
*/
/*
for($a = 1;$a <= 10; $a= $a +2){
	echo $a.")Aman <br>";
}
*/
/*
for($a = 10;$a >= 1; $a--){
	echo "<b>".$a.")Aman <br></b>";
}
*/
// ========== Nested Loop ========== //
/*
for($a = 1; $a <= 100 ; $a = $a + 10){
	for($b = $a;$b < $a + 10; $b++){
		echo $b." ";

	}
	echo "<br>";
	
}
for($a=1;$a<=100;$a=$a+10){
	for($b=$a;$b <= $a +10;$b++){
		echo "parvez "."  ";
	}
	echo "<br>";
}
*/

//========== continue and break statement===============

/* for($a = 1;$a < 10; $a++){
	if($a == 3){
		continue;// 3 is not printing here
	}
	echo $a." ";
 }
*/

 /*for($a = 1;$a < 10; $a++){
 	if($a == 3){
 		echo "this no:". $a."<br>";
 		continue;

 	}
 	echo "this is number:". $a ."<br>";
 }
 */

 /*for($a =1 ;$a <=10;$a++){
 	
 	if($a == 5){
 		break;
 	}
 	echo $a. "<br>";
 }
 */

 /*for($a =1 ;$a <=10;$a++){
 	
 	if($a == 5){
 		echo $a. "<br>";
 		break;
 	}
 	
 }
 */
 /*for($a = 1;$a <= 100;$a=$a+10){
 	for($b=$a;$b < $a + 10;$b++){
 		echo " * ". " ";
 	}
 	echo "<br>";
 }
 */

 //====== Goto statement =======

 echo "This is parvez<br>";
 echo "This is parvez<br>";
 echo "This is parvez<br>";

 goto abc;

 echo "This is parvez";
 echo "This is parvez";
 echo "This is parvez";

 abc:
 echo "this is Anower<br>";





?>

