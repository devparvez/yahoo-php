<?php  
//Multidimentional array

/*$emp = [
	[1,"parvez","manager",50000],
	[2,"Hossain","salesman",2000],
	[1,"Saddam","cleaner",1000],
	[1,"laila","driver",500],
];
*/
/*

echo $emp [0][1]."<br>";
echo $emp [3][1]."<br>";
echo "<br>";
echo $emp[0][0]."   ";
echo $emp[0][1]."   ";
echo $emp[0][2]."   ";
echo $emp[0][3]."   ";

echo "<br>";

echo $emp[1][0]."   ";
echo $emp[1][1]."   ";
echo $emp[1][2]."   ";
echo $emp[1][3]."   ";


echo "<pre>";

print_r($emp);

echo "</pre>";
*/
$emp = [
	[1,"parvez","manager",50000],
	[2,"Hossain","salesman",2000],
	[1,"Saddam","cleaner",1000],
	[1,"laila","driver",500],
];
//using for loop to echo multidimentional array
for($row=0;$row<4;$row++){
	for($cols = 0; $cols < 4; $cols++){
		echo $emp[$row][$cols]." ";
	}
	echo "<br>";
};
//using foreach loop to echo multidimentional array

echo "<table border='2px' cellpadding='10px' cellspacing='10px'>";
echo "<tr>

	<th>Emp id</th>
	<th>Emp Name</th>
	<th>Designation</th>
	<th>Salary</th>

 </tr>";

foreach($emp as $v1){

	echo "<tr>";

foreach($v1 as $v2){
	echo "<td> $v2 </td> ";
}
echo "</tr>";
}
echo "</table>";

?>