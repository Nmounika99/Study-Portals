	<?php
	system("clear");
	//if user is valid as soon as user enters to welcome page of Sugar CRM 
	echo " *************************** \033[31;47m Welcome to Sugar CRM \033[0m *****************************\n";
	echo "\033[32m Press e to go to Main Menu  \033[0m"	;
	$stdin = fopen("php://stdin","r");
	//fgetc is to read single character from the input
	$line = fgetc(STDIN);
	if(trim($line) != 'e')
	{	//this condition is to exit from the program
		echo " ABORTING! \n"; 
		exit;
    }
	else
	{
		echo "\n"; 
		mainMenu();
	} 
	while( true )
	{   // Read user choice
		$choice =  fgets(STDIN);
		if( $choice == 3 )
		{ // Exit application
			break;
		}
		switch( $choice ) 
		{// Act based on user choice
		case 1:  
		{
			echo "  \033[31;47mSugar CRM Home Page \033[0m \n";
			echo "Press e to go to Main Menu "	;
			$stdin = fopen("php://stdin","r");
			//fgetc is to read single character from the input
			$line = fgetc(STDIN);
			if(trim($line) != 'e')
			{
				echo " ABORTING!\n";
				exit;
		    }
			else
			{
				echo "\n"; 
				mainMenu();
			} 
			break;
		}
		case 2:
		{  
			echo "Press b to go  back or press any of the key"	;
			$stdin = fopen("php://stdin","r");
			//fgetc is to read single character from the input
			$line = fgetc(STDIN);	
			if(trim($line) == 'b')
			{
				echo "\n"; 
				mainMenu();
		 	}
			else
			{
				echo "\n"; 
				submainMenu();	
			} 
			break;
		}
		default:
		{

		}
		}
	}
	function mainMenu() 
	{	
		echo "************ \033[31;47m Sugar CRM \033[0m******************\n";
		echo "1 - HOME\n";
		echo "2 - Main Menu\n";
		echo "3 - Log Out\n";
		echo "\033[33mEnter your choice from 1 to 3 :: \033[1m";
	}
	function submainMenu() 
	{	
		echo "************\033[31;47m Sugar CRM \033[0m******************\n";
		echo "6 - Contacts\n";
		echo "7 - Leads\n";
		echo "8 - Cases\n";
		echo "\033[33m Enter your choice from 6 , 7 and 8 :: \033[1m\n";
		while( true )
		{   // Read user choice
			$choice =  fgets(STDIN) ;
		switch( $choice ) 
		{// Act based on user choice
		case 6: 
		{
			$modulename="Contacts";
			submodulemenu($modulename);
			break;
		}
		case 7: 
		{  
			$modulename="Leads";
			submodulemenu($modulename);
			break;
		}
		case 8: 
		{
			$modulename="Cases";
			submodulemenu($modulename);
			break;
		}	
			default:
			{

			}
	    }
	    }  
	}
	function submodulemenu($modulename){
		echo "************ \033[31;47m Sugar CRM \033[0m******************\n";
		echo "61 - Create $modulename\n";
		echo "62 - View $modulename\n";
		echo "63 - Delete $modulename\n";
		echo "64 - Edit $modulename\n";
		echo "65 -  Import $modulename\n";
		echo "Enter your choice from 61,62,63,64,65::\n"; 
		while( true )
		{   // Read user choice
			$choice =  fgets(STDIN) ;
		switch( $choice ) 
		{// Act based on user choice
		case 61: 
		{  
			create($modulename);
			break;
		}
		case 62: 
		{  
			view($modulename);
			break;
		}
		case 63: 
		{
			deleting($modulename);
			break;
		}
		case 64: //edit
		{
			edit($modulename);
			break;
		}
		case 65:
		{
			echo " Import Contacts \n";
			break;
		}
		default:
		{

		}
		}
		}  
	}
	function create($modulename)
	{  //creating contacts 
		echo "*** \033[35mCreating \033[0m ***\n" ;
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
		$sql = "SELECT * FROM $modulename where id=$ID"; 
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
	function deleting($modulename) 
	{//deleting contacts
		echo "*** \033[35mDeleting \033[0m ***" ;
		//including connections of mysql 
		include 'connect.php';
		// sql to delete a record
		$ID=readline("Enter your ID");
		//query to delete in contacts table 
		$sql = "DELETE FROM $modulename WHERE ID=$ID"; 
		if (mysqli_query($conn, $sql)) 
		{
    		
		} 
		else 
		{
    		echo "Error deleting record: " . mysqli_error($conn);
		}

	}		
	function edit($modulename) 
	{//editing contacs
		echo "*** \033[35mEditing \033[0m ***" ;
		//including connections of mysql 
		include 'connect.php';
		$ID= readline("Enter ID ");
		$Last_Name=readline("Enter Last Name");
		//updating single column by using ID as a primary key
		$sql = "UPDATE $modulename SET Last_Name='$Last_Name' WHERE id=$ID";
		if (mysqli_query($conn, $sql)) 
		{
    		
		} 
		else 
		{
			 echo "Error updating record: " . $conn->error;
		}
	}
