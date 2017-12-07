<?php
	$values=array('name' => 'mounika','age' => '20','lastname'=>'nuthalapati');
	 //creating contacts 
		var_dump($values);
		foreach ($values as $key => $value) {
			# code...
			echo $key . $value;
		}
		include 'connect.php';
        //Inserting data into contacts
	$result = mysql_query($SQLCommand); // This line executes the MySQL query that you typed above

$yourArray = array(); // make a new array to hold all your data


$index = 0;
while($row = mysql_fetch_assoc($result)){ // loop to store the data in an associative array.
     $yourArray[$index] = $row;
     $index++;
}
$select=" YOUR SQL QUERY GOOES HERE";
$queryResult= mysql_query($select);

//DECLARE YOUR ARRAY WHERE YOU WILL KEEP YOUR RECORD SETS
$data_array=array();

//STORE ALL THE RECORD SETS IN THAT ARRAY 
while ($row = mysql_fetch_array($queryResult, MYSQL_ASSOC)) 
{
    array_push($data_array,$row);
}


mysql_free_result($queryResult);


//TEST TO SEE THE RESULT OF THE ARRAY 
echo '<pre>';
print_r($data_array);
echo '</pre>';
?>