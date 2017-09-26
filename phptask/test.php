 <?php
// Grab User submitted information
menu();
echo " press 1 or 2\n";
               while( true )
	              {
		              $choice =  fgets(STDIN) ;// Read user choice
		             switch( $choice ) 
		               {// Act based on user choice
								case 1:
								{
									
									echo "Press c to continue or press b to go back to sub main menu";
									 $stdin = fopen("php://stdin","r");
									 $line = fgetc(STDIN);//fgetc is to read single character from the input
									 if(trim($line) != 'c')
									 {
									    echo "ABORTING!\n";
									    exit;
									 }
									 else{
									 echo "\n"; 
									
						             }  
									break;
								}
								case 2:
								{  
									$modulename="Contacts";
									create($modulename);
					                break;
								}
						}
					}		
					
          					
					function menu(){
						echo "1- contacts\n";
						echo "2-vie\n";
					}	
    function create($modulename)
	{  //creating contacts 
		echo "*** \033[35mCreating \033[0m ***\nfv" ;
		$recordinsert = array("First_Name","Last_Name","ID","Title","Department","Account_Name",
      "Mobile_Phone","Office_Phone","Home_Phone","Other_Phone","Fax","Primary_AddressStreet",
      "Primary_AddressCity","Primary_AddressState","Primary_AddressPostalCode",
      "Primary_AddressCountry","Alternate_AddressStreet","Alternate_AddressCity",
      "Alternate_AddressState","Alternate_AddressPostalCode","Alternate_AddressCountry",
      "Description","Birthdate","Assigned_UserName","Full_Name","Facebook_Account",
      "Twitter_Account", "Google_PlusID", "Email");
		$insertvalues=array();
		foreach ($recordinsert as $insert) 
		{  
			echo "Enter the value $insert";
			 $insertvalue=readline();
			 array_push($insertvalues, $insertvalue);
		}
		//including connections of mysql 
		include 'connect.php';
        //Inserting data into contacts
    	$s = implode("','", $insertvalues);
		$sql = "INSERT INTO $modulename values('$s')";
      
    	if (mysqli_query($conn, $sql)) 
		{
        
		} 
		else 
		{
		 echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	function view($modulename)
	{ 
		 //viewing contacts
		echo "*** \033[35mViewing \033[0m ***\n";
		//including connections of mysql
		include 'connect.php';
         // query to get specific result from the table 
		$ID=readline("Enter your ID");
		$sql = "SELECT * FROM $modulename "; 
		$result = mysqli_query($conn, $sql);
		$info =array();
		if (mysqli_num_rows($result) > 0) 
		{
		    // output data of each row
			while($row = mysqli_fetch_assoc($result)) 
			{ //fetching data and printing result
				$info[] = $row;
				print_r($info);
			}
		} 
		else 
		{
		
		}  	
		
	}
?>

