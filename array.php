<?php
//multidimensional associative array
$marks = [
	"parvez"=>[
		"phy"=>85,
		"math"=>50,
		"chemestry" => 60
	],
	"hossain"=>[
		"phy"=>60,
		"math"=>70,
		"chemestry" => 30
	],
	"sado"=>[
		"phy"=>33,
		"math"=>35,
		"chemestry" => 45
	]

];
echo "<table border='2px' cellpadding='5px' cellspacing='0'>
<tr>
	<th>student name</th>
	<th>student name</th>
	<th>student name</th>
	<th>student name</th>


</tr>";

foreach($marks as $key => $v1){
	echo "<tr>

	 <td> $key <td>";

	foreach($v1 as $v2){

		echo "<td> $v2 </td>";
	}
	echo "</tr>";

}

echo "</table>";
echo "<pre>";

print_r($marks);

echo "</pre>";






?>