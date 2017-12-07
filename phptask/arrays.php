<?php
	$values=array(0=>'mounika',1=>'nuthalapati');
	 //creating contacts 
		echo $values [1];
		$values=array('name' => 'mounika','age' => '20','lastname'=>'nuthalapati');
	 //creating contacts 
		var_dump($values);
		foreach ($values as $key => $value) {
			# code...
			echo $key . $value;
		}
	
?>