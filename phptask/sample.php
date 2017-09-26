	<?php
	system("clear");
	//if user is valid as soon as user enter to welcome page of Sugar CRM 
	echo " *************************** \033[31;47m Welcome to Sugar CRM \033[0m 
	*****************************\n";
	echo "\033[32m Press e to go to Main Menu  \033[0m"	;
	$stdin = fopen("php://stdin","r");
	$line = fgetc(STDIN);//fgetc is to read single character from the input

	if(trim($line) != 'e')
	{	
		echo " ABORTING! \n"; //this condition is to exit from the pro
		exit;
    }

	else
	{
		echo "\n"; 
		mainMenu();
	} 

	while( true )
	{
		$choice =  fgets(STDIN) ;// Read user choice

		if( $choice == 3 )
		{ 		// Exit application
			break;
		}

		switch( $choice ) 
		{// Act based on user choice
		case 1:  //home page
		{
			echo "  \033[31;47mSugar CRM Home Page \033[0m \n";
			echo "Press e to go to Main Menu "	;
			$stdin = fopen("php://stdin","r");
			$line = fgetc(STDIN);//fgetc is to read single character from the input

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
			submainMenu(); //Modules menu
			echo "\133[33mPress b to go  back \133[1m"	;
			$stdin = fopen("php://stdin","r");
			$line = fgetc(STDIN);//fgetc is to read single character from the input
			
			if(trim($line) != 'b')
			{
				echo "ABORTING! \n";
				exit;
		 	}

			else
			{
				echo "\n"; 
				mainMenu();
			} 

			break;
		}

		case 3: //logout
		{
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
		{
			$choice =  fgets(STDIN) ;// Read user choice

		switch( $choice ) 
		{// Act based on user choice
		case 6: //contacts module menu
		{

			echo "\033[32mPress e to go to contacts sub menu or press b to go back to sub main menu \033[0m";
			$stdin = fopen("php://stdin","r");
			$line = fgetc(STDIN);//fgetc is to read single character from the input

			if(trim($line) != 'e')
			{
				echo "ABORTING!  \n";
				exit;
			}

			else
			{
				echo "\n"; 
				subcontactsMenu();
			}  

			break;
		}

		case 7: //leads module menu
		{  
			echo "\033[32mPress e to go to leads sub menu or press b to go back to sub main menu \033[0m";
			$stdin = fopen("php://stdin","r");
			$line = fgetc(STDIN);//fgetc is to read single character from the input

			if(trim($line) != 'e')
			{
				echo "ABORTING!  \n";
				exit;
			}

			else
			{
				echo "\n"; 
				subleadsMenu();
			} 

			break;
		}

		case 8: //cases module menu
		{
			echo "\033[32mPress e to go to cases sub menu or press b to go back to sub main menu \033[0m";
			$stdin = fopen("php://stdin","r");
			$line = fgetc(STDIN);//fgetc is to read single character from the input

			if(trim($line) != 'e')
			{
				echo " ABORTING!  \n";
				exit;
			}

			else
			{
				echo "\n"; 
				subcasesMenu();
			}  
			break;
			}

			default:
			{

			}
	    }
	    }  
	}
	function subcontactsMenu()
	{
		echo "************ \033[31;47m Sugar CRM \033[0m******************\n";
		echo "61 - Create Contacts\n";
		echo "62 - View Contacts\n";
		echo "63 - Delete Contacts\n";
		echo "64 - Edit Contacts\n";
		echo "65 - Create Contact From vCard\n";
		echo "66 - View Contact Report\n";
		echo "67 -  Import Contacts\n";
		echo "Enter your choice from 61,62,63,64,65,66 and 67::\n";  

		while( true )
		{
			$choice =  fgets(STDIN) ;// Read user choice

		switch( $choice ) 
		{// Act based on user choice
		case 61: //create contacts menu
		{
			echo "\033[32mPress c to continue or press b to go back to sub main menu \033[0m";
			$stdin = fopen("php://stdin","r");
			$line = fgetc(STDIN);//fgetc is to read single character from the input

			if(trim($line) != 'c')
			{
				echo " ABORTING!  \n";
				exit;
			}

			else
			{
				echo "\n"; 
				createcontactsMenu();
			}  

			break;
		}

		case 62: //view
		{  
			echo "\033[32mPress c to continue or press b to go back to sub main menu \033[0m";
			$stdin = fopen("php://stdin","r");
			$line = fgetc(STDIN);//fgetc is to read single character from the input

			if(trim($line) != 'c')
			{
				echo " ABORTING!  \n";
				exit;
			}

			else
			{
				echo "\n"; 
				viewcontactsMenu();
			} 

			break;
		}

		case 63: //delete
		{
			echo "\033[32mPress c to continue or press b to go back to sub main menu \033[0m";
			$stdin = fopen("php://stdin","r");
			$line = fgetc(STDIN);//fgetc is to read single character from the input

			if(trim($line) != 'c')
			{
				echo " ABORTING!  \n";
				exit;
			}

			else
			{
				echo "\n"; 
				deletecontactsMenu();
			}  
			break;
		}

		case 64: //edit
		{
			echo "\033[32mPress c to continue or press b to go back to sub main menu \033[0m";
			$stdin = fopen("php://stdin","r");
			$line = fgetc(STDIN);//fgetc is to read single character from the input

			if(trim($line) != 'c')
			{
				echo " ABORTING!  \n";
				exit;
			}

			else
			{
				echo "\n"; 
				editcontactsMenu();
			} 

			break;
		}

		case 65:
		{
			echo " Create Vcard \n";
			break;
		}

		case 66:
		{
			echo " view Contacts Report \n";
			break;
		}

		case 67:
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
	function subleadsMenu()
	{
		echo "************ \033[31;47m Sugar CRM \033[0m******************\n";
		echo "71 - Create Leads\n";
		echo "72 - View Leads\n";
		echo "73 - Delete Leads\n";
		echo "74 - Edit Leads\n";
		echo "75 - Create Leads From vCard\n";
		echo "76 - View Lead Reports\n";
		echo "77 -  Import Leads\n";
		echo "Enter your choice from 71,72,73,74,75,76 and 77 ::\n";   

		while( true )
		{
			$choice =  fgets(STDIN) ;// Read user choice

		switch( $choice ) 
		{// Act based on user choice
		case 71:
		{
			echo "\033[32mPress c to continue or press b to go back to sub main menu \033[0m";
			$stdin = fopen("php://stdin","r");
			$line = fgetc(STDIN);//fgetc is to read single character from the input

			if(trim($line) != 'c')
			{
				echo " ABORTING!\n";
				exit;
			}

			else
			{
				echo "\n"; 
				createleadsMenu();
			}  

			break;
		}

		case 72:
		{  
			echo "\033[32mPress c to continue or press b to go back to sub main menu \033[0m";
			$stdin = fopen("php://stdin","r");
			$line = fgetc(STDIN);//fgetc is to read single character from the input

			if(trim($line) != 'c')
			{
				echo " ABORTING! \n";
				exit;
			}

			else
			{
				echo "\n"; 
				viewleadsMenu();
			} 

			break;
		}
		case 73:
		{
			echo "\033[32mPress c to continue or press b to go back to sub main menu \033[0m";
			$stdin = fopen("php://stdin","r");
			$line = fgetc(STDIN);//fgetc is to read single character from the input

			if(trim($line) != 'c')
			{
				echo " ABORTING!  \n";
				exit;
			}

			else
			{
				echo "\n"; 
				deleteleadsMenu();
			}  

			break;
		}

		case 74:
		{
			echo "\033[32mPress c to continue or press b to go back to sub main menu \033[0m";
			$stdin = fopen("php://stdin","r");
			$line = fgetc(STDIN);//fgetc is to read single character from the input

			if(trim($line) != 'c')
			{
				echo " ABORTING!\n";
				exit;
			}

			else
			{
				echo "\n"; 
				deletecontactsMenu();
			}  

			break;
		}

		case 75:
		{
			echo "Create vCard";
			break;
		}

		case 76:
		{
			echo " View Leads Reports \n";
			break;
		}

		case 77:
		{
			echo " Import Leads \n";
			break;
		}

		default:
		{

		}

		}
		}  

	}
	function subcasesMenu()
	{
		echo "************ \033[31;47m Sugar CRM \033[0m******************\n";
		echo "81 - Create Cases\n";
		echo "82 - View Cases\n";
		echo "83 - Delete Cases\n";
		echo "84 - Edit Cases\n";
		echo "85 - View Case Reports\n";
		echo "86 -  Import Cases\n";
		echo "Enter your choice from 81,82,83,84,85 and 86::\n"; 

		while( true )
		{
			$choice =  fgets(STDIN) ;// Read user choice

		switch( $choice ) 
		{// Act based on user choice
		case 81:
		{

			echo "\033[32mPress c to continue or press b to go back to sub main menu \033[0m";
			$stdin = fopen("php://stdin","r");
			$line = fgetc(STDIN);//fgetc is to read single character from the input

			if(trim($line) != 'c')
			{
				echo " ABORTING! \n";
				exit;
			}

			else
			{
				echo "\n"; 
				createcasesMenu();
			} 

			break;
		}

		case 82:
		{  
			echo "\033[32mPress c to continue or press b to go back to sub main menu \033[0m";
			$stdin = fopen("php://stdin","r");
			$line = fgetc(STDIN);//fgetc is to read single character from the input

			if(trim($line) != 'c')
			{
				echo " ABORTING! \n";
				exit;
			}

			else
			{
				echo "\n"; 
				viewcasesMenu();
			} 

			break;
		}

		case 83:
		{
			echo "\033[32mPress c to continue or press b to go back to sub main menu \033[0m";
			$stdin = fopen("php://stdin","r");
			$line = fgetc(STDIN);//fgetc is to read single character from the input

			if(trim($line) != 'c')
			{
				echo "ABORTING! \n";
				exit;
			}

			else
			{
				echo "\n"; 
				deletecasesMenu();
			} 

			break;
		}
		case 84:
		{
			echo "\033[32mPress c to continue or press b to go back to sub main menu \033[0m";
			$stdin = fopen("php://stdin","r");
			$line = fgetc(STDIN);//fgetc is to read single character from the input

			if(trim($line) != 'c')
			{
				echo " ABORTING!  \n";
				exit;
			}
			else
			{
				echo "\n"; 
				editcasesMenu();
			}  
			break;
		}
		case 85:
		{
			echo " View Cases Reports \n";
			break;
		}
		case 86:
		{
			echo "Import Cases";
			break;
		}
		default:
		{

		}
		}
		}  

	}
	function createcontactsMenu()
	{  //creating contacts 
		echo "*** \033[35mCreating \033[0m ***" ;
		$First_Name=readline("Enter your First Name");
		$Last_Name=readline("Enter your Last Name");
		$ID=readline("Enter your ID");
		$Title=readline("Enter your Title");
		$Department=readline("Enter your Department");
		$Account_Name=readline("Enter your Account Name");
		$Mobile_Phone=readline("Enter your Mobile_Phone");
		$Office_Phone=readline("Enter your Office_Phone");
		$Home_Phone=readline("Enter your Home_Phone");
		$Other_Phone=readline("Enter your Other_Phone");
		$Fax=readline("Enter your Fax");
		$Primary_AddressStreet=readline("Enter your Primary_AddressStreet");
		$Primary_AddressCity=readline("Enter your Primary_AddressCity");
		$Primary_AddressState=readline("Enter your Primary_AddressState");
		$Primary_AddressPostalCode=readline("Enter your Primary_AddressPostalCode");
		$Primary_AddressCountry=readline("Enter your Primary_AddressCountry");
		$Alternate_AddressStreet=readline("Enter your Alternate_AddressStreet");
		$Alternate_AddressCity=readline("Enter your Alternate_AddressCity");
		$Alternate_AddressState=readline("Enter your Alternate_AddressState");
		$Alternate_AddressPostalCode=readline("Enter your Alternate_AddressPostalCode");
		$Alternate_AddressCountry=readline("Enter your Alternate_AddressCountry");
		$Description=readline("Enter your Description");
		$Birthdate=readline("Enter your Birthdate");
		$Assigned_UserName=readline("Enter your Assigned_UserName");
		$Full_Name=readline("Enter your Full Name");
		$Facebook_Account=readline("Enter your Facebook_Account");
		$Twitter_Account=readline("Enter your Twitter_Account");
		$Google_PlusID=readline("Enter your Google_PlusID");
		$Email=readline("Enter your Email");
		$servername = "localhost";
		$username = "root";
		$password = "Root@123";
		$dbname = "phpdb";
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		if (!$conn) 
		{
			die("Connection failed: " . mysql_connect_error());
		}

		$sql = "INSERT INTO  Contacts VALUES 
		('$First_Name', '$Last_Name', '$ID', '$Title', '$Department',  '$Account_Name', '$Mobile_Phone', '$Office_Phone', '$Home_Phone', '$Other_Phone', '$Fax', '$Primary_AddressStreet', '$Primary_AddressCity', '$Primary_AddressState', '$Primary_AddressPostalCode',   '$Primary_AddressCountry', '$Alternate_AddressStreet', '$Alternate_AddressCity', '$Alternate_AddressState',  '$Alternate_AddressPostalCode', '$Alternate_AddressCountry', '$Description', '$Birthdate', '$Assigned_UserName','$Full_Name', '$Facebook_Account', '$Twitter_Account', '$Google_PlusID', '$Email')";

		if (mysqli_query($conn, $sql)) 
		{

		} 
		else 
		{
		
		}
		echo "\033[32mPress press b to go back to sub contacts menu \033[0m";
		$stdin = fopen("php://stdin","r");
		$line = fgetc(STDIN);//fgetc is to read single character from the input

		if(trim($line) != 'c')
		{
			echo " ABORTING!  \n";
			exit;
		}

		else
		{
			echo "\n"; 
			subcontactsMenu();
		}  
	}
	function createleadsMenu(){ //creating leads 
	echo "*** \033[35mCreating \033[0m ***" ;
	$First_Name=readline("Enter your First Name");
	$Last_Name=readline("Enter your Last Name");
	$ID=readline("Enter your ID");
	$Title=readline("Enter your Title");
	$Department=readline("Enter your Department");
	$Account_Name=readline("Enter your Account Name");
	$Mobile_Phone=readline("Enter your Mobile_Phone");
	$Office_Phone=readline("Enter your Office_Phone");
	$Home_Phone=readline("Enter your Home_Phone");
	$Other_Phone=readline("Enter your Other_Phone");
	$Fax=readline("Enter your Fax");
	$Primary_AddressStreet=readline("Enter your Primary_AddressStreet");
	$Primary_AddressCity=readline("Enter your Primary_AddressCity");
	$Primary_AddressState=readline("Enter your Primary_AddressState");
	$Primary_AddressPostalCode=readline("Enter your Primary_AddressPostalCode");
	$Primary_AddressCountry=readline("Enter your Primary_AddressCountry");
	$Alternate_AddressStreet=readline("Enter your Alternate_AddressStreet");
	$Alternate_AddressCity=readline("Enter your Alternate_AddressCity");
	$Alternate_AddressState=readline("Enter your Alternate_AddressState");
	$Alternate_AddressPostalCode=readline("Enter your Alternate_AddressPostalCode");
	$Alternate_AddressCountry=readline("Enter your Alternate_AddressCountry");
	$Status=readline("Enter your Leads Status");
	$Portal_Name=readline("Enter Protal Name or Website Name ");
	$Description=readline("Enter your Description");
	$Birthdate=readline("Enter your Birthdate");
	$Assigned_UserName=readline("Enter your Assigned_UserName");
	$Full_Name=readline("Enter your Full Name");
	$Facebook_Account=readline("Enter your Facebook_Account");
	$Twitter_Account=readline("Enter your Twitter_Account");
	$Google_PlusID=readline("Enter your Google_PlusID");
	$Email=readline("Enter your Email");
	$servername = "localhost";
	$username = "root";
	$password = "Root@123";
	$dbname = "phpdb";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
	die("Connection failed: " . mysql_connect_error());
	}
	$sql = "INSERT INTO Leads VALUES ('$First_Name', '$Last_Name', '$ID', '$Title', '$Department', '$Account_Name', '$Mobile_Phone', '$Office_Phone', '$Home_Phone', '$Other_Phone', '$Fax', 'Primary_AddressStreet', '$Primary_AddressCity', '$Primary_AddressState', '$Primary_AddressPostalCode', '$Primary_AddressCountry', '$Status', '$Portal_Name', '$Alternate_AddressStreet', '$Alternate_AddressCity', '$Alternate_AddressState', '$Alternate_AddressPostalCode', '$Alternate_AddressCountry', '$Description', '$Birthdate', '$Assigned_UserName','$Full_Name', '$Facebook_Account', '$Twitter_Account', '$Google_PlusID', '$Email')";

	if (mysqli_query($conn, $sql)) {

	} else {

	}
	echo "\033[32mPress press b to go back to sub contacts menu \033[0m";
	$stdin = fopen("php://stdin","r");
	$line = fgetc(STDIN);//fgetc is to read single character from the input
	if(trim($line) != 'c')
	{
	echo " ABORTING!  \n";
	exit;
	}
	else{
	echo "\n"; 
	subleadsMenu();
	}  
	}
	function createcasesMenu(){ //creating cases 
	echo "*** \033[35mCreating \033[0m ***" ;
	$Number=readline("Enter Number of the Issue");
	$ID=readline("Enter ID");
	$Subject=readline("Enter Subject of the  Issue");
	$Department=readline("Enter your Department"); 
	$Type=readline("Enter Type of the Case");
	$Priority=readline("Enter Priority of the case");
	$Account_Name=readline("Enter Name of the Account");
	$Account_ID=readline("Enter ID of the Account");
	$Assigned_UserName=readline("Enter your Assigned_UserName");
	$Description=readline("Enter your Description");
	$servername = "localhost"; //database connections
	$username = "root";
	$password = "Root@123";
	$dbname = "phpdb";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
	die("Connection failed: " . mysql_connect_error());
	}
	$sql = "INSERT INTO  Cases VALUES ( '$Number', '$ID', '$Subject', '$Department','$Type', '$Priority', '$Account_Name', '$Account_ID', '$Assigned_UserName', '$Description')";

	if (mysqli_query($conn, $sql)) {

	} else {

	}
	echo "\033[32mPress press b to go back to sub contacts menu \033[0m";
	$stdin = fopen("php://stdin","r");
	$line = fgetc(STDIN);//fgetc is to read single character from the input
	if(trim($line) != 'c')
	{
	echo " ABORTING!  \n";
	exit;
	}
	else{
	echo "\n"; 
	subcasesMenu();
	}  

	}

	function viewcontactsMenu() //viewing contacts
	{
	echo "*** \033[35mViewing \033[0m ***" ;
	$servername = "localhost";
	$username = "root";
	$password = "Root@123";
	$dbname = "phpdb";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT First_Name,Last_Name,ID,Title,Department FROM Contacts"; // query to get specific result from the table 
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
	// output data of each row
	while($row = mysqli_fetch_assoc($result)) { //fetching data and printing result
	echo   $row['First_Name'];
	echo "\n";
	echo    $row['Last_Name'];
	echo "\n";
	echo  $row['ID'];
	echo "\n";
	echo $row['Title'];
	echo "\n";
	echo $row['Department'] ;


	}
	} 
	else {

	}
	echo "\033[32mPress press b to go back to sub contacts menu \033[0m";
	$stdin = fopen("php://stdin","r");
	$line = fgetc(STDIN);//fgetc is to read single character from the input
	if(trim($line) != 'c')
	{
	echo " ABORTING!  \n";
	exit;
	}
	else{
	echo "\n"; 
	subcontactsMenu();
	}  
	}
	function viewleadssMenu() //viewing leads
	{
	echo "*** \033[35mViewing \033[0m ***" ;
	$servername = "localhost";
	$username = "root";
	$password = "Root@123";
	$dbname = "phpdb";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT First_Name,Last_Name FROM Leads";// query to get specific result from the table 
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) { 
	// output data of each row
	while($row = mysqli_fetch_assoc($result)) { //fetching data and printing result
	echo   $row['First_Name'];
	echo    $row['Last_Name'];


	}
	} 
	else {

	}
	echo "\033[32mPress press b to go back to sub contacts menu \033[0m";
	$stdin = fopen("php://stdin","r");
	$line = fgetc(STDIN);//fgetc is to read single character from the input
	if(trim($line) != 'c')
	{
	echo " ABORTING!  \n";
	exit;
	}
	else{
	echo "\n"; 
	subleadsMenu();
	}  
	}	

	function viewcasesMenu() //viewing cases
	{
	echo "*** \033[35mViewing \033[0m ***" ;
	$servername = "localhost";
	$username = "root";
	$password = "Root@123";
	$dbname = "phpdb";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT First_Name,Last_Name FROM Cases"; // query to get specific result from the table 
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
	// output data of each row
	while($row = mysqli_fetch_assoc($result)) { //fetching data and printing result
	echo   $row['First_Name'];
	echo    $row['Last_Name'];


	}
	} 
	else {

	}
	echo "\033[32mPress press b to go back to sub contacts menu \033[0m";
	$stdin = fopen("php://stdin","r");
	$line = fgetc(STDIN);//fgetc is to read single character from the input
	if(trim($line) != 'c')
	{
	echo " ABORTING!  \n";
	exit;
	}
	else{
	echo "\n"; 
	subcasesMenu();
	}  
	}													
	function deletecontactsMenu() //deleting contacts
	{
	echo "*** \033[35mDeleting \033[0m ***" ;
	$servername = "localhost";
	$username = "root";
	$password = "Root@123";
	$dbname = "phpdb";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}

	// sql to delete a record
	$ID=readline("Enter your ID");
	$sql = "DELETE FROM Contacts WHERE id=$ID"; //query to delete in contacts table 

	if (mysqli_query($conn, $sql)) {

	} 
	else {

	}
	echo "\033[32mPress press b to go back to sub contacts menu \033[0m";
	$stdin = fopen("php://stdin","r");
	$line = fgetc(STDIN);//fgetc is to read single character from the input
	if(trim($line) != 'c')
	{
	echo " ABORTING!  \n";
	exit;
	}
	else{
	echo "\n"; 
	subcontactsMenu();
	}  

	}	
	function deleteleadsMenu() //deleting leads
	{
	echo "*** \033[35mDeleting \033[0m ***" ;
	$servername = "localhost";
	$username = "root";
	$password = "Root@123";
	$dbname = "phpdb";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}

	// sql to delete a record
	$ID=readline("Enter your ID");
	$sql = "DELETE FROM Leads WHERE id=$ID"; //query to delete in Leads table

	if (mysqli_query($conn, $sql)) {

	} 
	else {

	}

	echo "\033[32mPress press b to go back to sub contacts menu \033[0m";
	$stdin = fopen("php://stdin","r");
	$line = fgetc(STDIN);//fgetc is to read single character from the input
	if(trim($line) != 'c')
	{
	echo " ABORTING!  \n";
	exit;
	}
	else{
	echo "\n"; 
	subleadsMenu();
	}  
	}	
	function deletecasesMenu() //deleting cases
	{
	echo "*** \033[35mDeleting \033[0m ***" ;
	$servername = "localhost";
	$username = "root";
	$password = "Root@123";
	$dbname = "phpdb";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}

	// sql to delete a record
	$ID=readline("Enter your ID");
	$sql = "DELETE FROM Cases WHERE id=$ID"; //query to delete in cases table 

	if (mysqli_query($conn, $sql)) {

	} 
	else {

	}

	echo "\033[32mPress press b to go back to sub contacts menu \033[0m";
	$stdin = fopen("php://stdin","r");
	$line = fgetc(STDIN);//fgetc is to read single character from the input
	if(trim($line) != 'c')
	{
	echo " ABORTING!  \n";
	exit;
	}
	else{
	echo "\n"; 
	subcasesMenu();
	}  
	}	
	function editcontactsMenu() //editing contacs
	{
	echo "*** \033[35mEditing \033[0m ***" ;
	$servername = "localhost";
	$username = "root";
	$password = "Root@123";
	$dbname = "phpdb";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}
	$ID= readline("Enter ID ");
	$Last_Name=readline("Enter Last Name");
	$sql = "UPDATE Contacts SET Last_Name='$Last_Name' WHERE id=$ID";//updating single column by using ID as a primary key

	if (mysqli_query($conn, $sql)) {

	} else {

	}
	echo "\033[32mPress press b to go back to sub contacts menu \033[0m";
	$stdin = fopen("php://stdin","r");
	$line = fgetc(STDIN);//fgetc is to read single character from the input
	if(trim($line) != 'c')
	{
	echo " ABORTING!  \n";
	exit;
	}
	else{
	echo "\n"; 
	subcontactsMenu();
	}  
	}
	function editleadsMenu() //editing contacs
	{
	echo "*** \033[35mEditing \033[0m ***" ;
	$servername = "localhost";
	$username = "root";
	$password = "Root@123";
	$dbname = "phpdb";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}
	$ID= readline("Enter ID ");
	$Last_Name=readline("Enter Last Name");
	$sql = "UPDATE Leads SET Last_Name='$Last_Name' WHERE id=$ID";//updating single column by using ID as a primary key

	if (mysqli_query($conn, $sql)) {

	} else {

	}
	echo "\033[32mPress press b to go back to sub contacts menu \033[0m";
	$stdin = fopen("php://stdin","r");
	$line = fgetc(STDIN);//fgetc is to read single character from the input
	if(trim($line) != 'c')
	{
	echo " ABORTING!  \n";
	exit;
	}
	else{
	echo "\n"; 
	subleadsMenu();
	}  
	}
	function editcasesMenu() //editing contacs
	{
	echo "*** \033[35mEditing \033[0m ***" ;
	$servername = "localhost";
	$username = "root";
	$password = "Root@123";
	$dbname = "phpdb";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}
	$ID= readline("Enter ID ");
	$Last_Name=readline("Enter Last Name");
	$sql = "UPDATE Cases SET Last_Name='$Last_Name' WHERE id=$ID";//updating single column by using ID as a primary key

	if (mysqli_query($conn, $sql)) {

	} else {  echo "Error updating record: " . mysqli_error($conn);
	}

	}
	echo "\033[32mPress press b to go back to sub contacts menu \033[0m";
	$stdin = fopen("php://stdin","r");
	$line = fgetc(STDIN);//fgetc is to read single character from the input
	if(trim($line) != 'c')
	{
	echo " ABORTING!  \n";
	exit;
	}
	else{
	echo "\n"; 
	subcasesMenu();
	}  
	?>
