
<?php 

/*function name(){
	echo "my name is parvez ok<br>";
}

name();
name();
name();
echo "this is my ('') income<br>";
name();
name();
name();
*/
/*function hello($name){
	echo "My name is ".$name ."<br>";
}
hello("parvez");
hello("Aman");
*/

/*
function fullName($fname="aman",$lname="ahmed"){
echo "Hello $fname $lname.<br>";

}
fullName("Parvez","mahmud");
fullName("Bill","Gates");
fullName();
fullName("tum");
fullName("tum","hello");


function sum($a,$b){
	echo $a + $b;
}
//sum(30,20.33);
$one =40;
$two = 40;
sum($one,$two);
*/
/*
function hello($first,$last){
	$v = "$first $last";
	return $v;
}

 //echo hello("parvez","mahmud");
 $name = hello("parv","mahmud");
 echo $name;
 */

 /*
 function sum($math,$eng,$phy){
 	$s = $math + $eng + $phy;
 	return $s;
 }
 $total = sum(30,49,56);
 //echo $total;
 function percentage($st){
 	$per = $st/3;
 	echo $per."%";

 }
 percentage($total);
 //echo $total;
 */

 //=====functions as reference=====

/*
 function testing(&$string){

 	$string .= "And something extra";

 }
 $str = "this is string";
 testing($str);
 echo $str;
*/
 /*
 function first($num){
 	$num +=5;
 }
 function second(&$num){
 	$num += 3;
 }
 $number=10;
 first($number);
 echo $number;
 second($number);
 echo $number;
 */
 // ========= variables functions==========

 /*function wow(){

 	echo "Hello";
 }
 $func = "wow";
 $func();
 */

  function wow($name){

 	echo "Hello $name";
 }
 $func = "wow";
 $func("parvez mahmud");
//annonymous function
 $sayHello = function($name){
 	echo "Hello $name";
 };
 $sayHello("parvez");









 ?>
