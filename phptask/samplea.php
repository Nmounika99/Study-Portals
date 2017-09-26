<?php
echo "Are you sure you want to do this?  Type 'e' to continue: ";
$stdin = fopen("php://stdin","r");
$line = fgetc($stdin);
if(trim($line) != 'e'){
    echo "ABORTING!\n";
    exit;
}
echo "\n"; 

echo "Thank you, continuing...\n";
?>
------------------------------------------
<?php
echo "Enter your name\n"; // Output - prompt user
$name = fgets(STDIN);     // Read the input
echo "Hello $name";       // Output - Some text   
exit(0);                  // Script ran OK
?>


     int ShowMainMenu();
    int ShowRhymeMenu();
    int ShowRhymeSubMenu();
    int ShowFairyMenu();
    int ShowFairySubMenu();
     
    void PrintZub();
    void PrintBigFatGit();
    void PrintAliens();
     
    void PrintMary();
    void PrintJack();
    void PrintLittleBoPeep();
     
    int main(void)
    {
       int 
          nChoice = 0;
     
       do
       {
          nChoice = ShowMainMenu ();
          switch (nChoice)
          {
             case 1:
             {
                ShowRhymeMenu ();            
             }
             break;
     
             case 2: 
             {
                ShowFairyMenu ();
             }
             break;
     
             case 3: 
             {
                printf ("Bye Bye\n\n");
             }
             break;
          }
       }
       while (nChoice != 3);
       system ("Pause");
       return 0;
    } 
     
    /* ************************************************** ******************* */
     
    int ShowMainMenu ()
    {
       int 
          nSelected = 0;
     
       do
       {
          printf ("This is a nursery rhyme and fairy stories program\n");
          printf ("You can choose to display a number of different nursery rhymes and fairy stories\n\n");
     
          printf ("(1) Nursery rhymes\n(2) Fairy stories\n(3) Quit\n\n");
     
          printf ("Enter a number that corresponds to your choice > ");
          scanf ("%d", &nSelected);
          printf("\n");
     
          if (( nSelected < 1 ) || ( nSelected > 3))
          {
             printf("You have entered an invalid choice. Please try again\n\n\n");
          }
       }
       while (( nSelected < 1) || ( nSelected > 3));
     
       return nSelected;
    }
     
    /* ************************************************** ************************** */
    int ShowRhymeMenu ()
    {   
       int 
          nChoice = 0;   
       do
       {
          nChoice = ShowRhymeSubMenu();
          switch (nChoice)
          {
     
             case 1:
             {
                PrintMary ();
             }
             break;
     
             case 2: 
             {
                PrintJack ();
             }
             break;
     
             case 3: 
             {
                PrintLittleBoPeep ();
             }
             break;
     
             case 4: 
             {
                printf ("Bye Bye\n\n");
             }
             break;
          }
       }
       while (nChoice != 4);
     
       return nChoice;
    }
     
    /* ************************************************** ******************* */
    int ShowRhymeSubMenu() 
    {
       int 
          nSelected = 0;
     
       do
       {
     
          printf ("(1) Mary had a little lamb\n(2) Jack and Jill\n(3) Little Bo Peep\n(4) Quit\n\n");
     
          printf ("Enter a number that corresponds to your choice > ");
          scanf ("%d", &nSelected);
          printf("\n");
     
          if (( nSelected < 1 ) || ( nSelected > 4))
          {
             printf("You have entered an invalid choice. Please try again\n\n\n");
          }
       }
       while (( nSelected < 1) || ( nSelected > 4));
     
       return nSelected;
    }
     
    /* ************************************************** ************************** */
    int ShowFairyMenu ()
    {
       int 
          nChoice = 0;
     
       do
       {
          nChoice = ShowFairySubMenu ();
          switch (nChoice)
          {
             case 1:
             { 
                PrintZub ();
             }
             break;
     
             case 2:
             { 
                PrintBigFatGit ();
             }
             break;
     
             case 3:          
             {             
                PrintAliens ();
             }
             break;
     
             case 4:
             { 
                printf ("Bye Bye\n\n");
             }
             break;
          }
       }
       while (nChoice != 4);
     
       return nChoice;
    }
     
    /* ************************************************** ******************* */
    int ShowFairySubMenu ()
    {
       int 
          nSelected = 0;
     
       do
       {
     
          printf ("(1) The zub zubs\n(2) The BFG\n(3) PrintAliens\n(4) Quit\n\n");
     
          printf ("Enter a number that corresponds to your choice > ");
          scanf ("%d", &nSelected);
          printf("\n");
     
          if (( nSelected < 1 ) || ( nSelected > 4))
          {
             printf("You have entered an invalid choice. Please try again\n\n\n");
          }
       }
       while (( nSelected < 1) || ( nSelected > 4));
     
       return nSelected;
    }
     
    /* ************************************************** ************************** */
    void PrintMary ()
    {
       printf("Mary had a little lamb\n fleese white as snow\n\n\n");
    }
     
    /* ************************************************** ************************** */
    void PrintJack ()
    {
       printf("Jack and jill went up the hill to fetch water\nThen they fell down\n\n\n");
    }
     
    /* ************************************************** ************************** */
    void PrintLittleBoPeep()
    {
       printf("Little bo peep had sheep\nthen they came home\n\n\n");
    }
     
    /* ************************************************** ************************** */
    void PrintZub ()
    {
       printf("zub zub zub zub zub zub zub zub\n\n\n");
    }
     
    /* ************************************************** ************************** */
    void PrintBigFatGit ()
    {
       printf("im big and fat and a git\n\n\n");
    }
    /* ************************************************** ************************** */
     
    void PrintAliens ()
    {
       printf("take us to your leader\n\n\n");
    }
     
     

Regards,
 echo " *************************** \033[31mWelcome to Sugar CRM \033[0m *****************************\n";//if user is valid as soon as user enter to welcome page of Sugar CRM 
            
             echo "\033[32mPress e to go to Main Menu  \033[0m"	;



             echo "Enter your choice from 211 to 215 ::\n";
				echo "Press b to go to Contacts  Menu "	;
	             $stdin = fopen("php://stdin","r");
				 $line = fgetc(STDIN);//fgetc is to read single character from the input
				 if(trim($line) != 'b')
				 {
				    echo "ABORTING!\n";
				    exit;
				 }
				 else{
				 echo "\n"; 
				 createContacts();
	             }  



if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}
$sql = "CREATE TABLE Contacts (
First_Name varchar(100), Last_Name varchar(100) NOT NULL, ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Title varchar(100), Department varchar(100), Account_Name varchar(100), Mobile_Phone INT(15), Office_Phone INT(15), Home_Phone INT(15),	Other_Phone INT(15), Fax INT(20), Primary_AddressStreet varchar(100), Primary_AddressCity varchar(100), Primary_AddressState varchar(100),	Primary_AddressPostalCode INT(10), Primary_AddressCountry varchar(100), Alternate_AddressStreet varchar(100), Alternate_AddressCity varchar(100), Alternate_AddressState varchar(100),	Alternate_AddressPostalCode varchar(100), Alternate_AddressCountry varchar(100), Description varchar(512), Birthdate date, Assigned_UserName varchar(100),Full_Name varchar(100), Facebook_Account varchar(100), Twitter_Account varchar(100), Google_PlusID varchar(100), Email varchar(50)
)"

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}







$sql = "INSERT INTO Contacts 
				VALUES ('John', 'Mark', 101, 'Executive', 'Management', 'Airtel', 9878478947, 6789478978, 9876784678, 9878647789, 180098786477, 'Cupirtino', 'Texas', 'New York', 67867, 'USA','Cupirtino', 'Texas', 'New York', 67867, 'USA', 'Phones and emails', 08-06-1994,'John Mark', 'keerhan', 'John', 'Mark', 'john','john@gmail.com' )";













				function viewcontactsMenu()
			{
				
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

				$sql = "SELECT First_Name,Last_Name FROM Contacts";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				    while($row = mysqli_fetch_assoc($result)) {
				      echo " First Name:  $row['First_Name']<br/>";
					    echo " Last Name: $row['Last_Name']<br />";
					  
					 
									    }
				} 
				else {
				    echo "0 results";
							}
          }						