<?php
/*$emp = [
	[1,"parvez","mana",5000],
	[2,"moyna","sales",2000],
	[3,"tada","driver",3000],
	[4,"aman","help",4000]

];
*/
$emp = [
	[
		"id"=>1,
		"name"=>"parvez",
		"designation"=>"Mana",
		"salary"=>5000
	],
	[
		"id"=>2,
		"name"=>"moyna",
		"designation"=>"sales",
		"salary"=>5000
	],
	[
		"id"=>3,
		"name"=>"tada",
		"designation"=>"driver",
		"salary"=>5000
	],
	[
		"id"=>4,
		"name"=>"aman",
		"designation"=>"help",
		"salary"=>4000
	]




];
echo  "<table border='2px' cellpadding='5px' cellspacing='0'>
<tr>
<th>emp id</th>
<th>Name</th>
<th>Designation</th>
<th>Salary</th>
</tr>

";
foreach($emp as list("id" => $id,"name" => $name,"designation"=>$designation,"salary" => $salary)){

	echo "<tr> <td>$id</td> <td>$name</td> <td>$designation </td><td>$salary</td></tr>";
}
echo "</table>";





?>