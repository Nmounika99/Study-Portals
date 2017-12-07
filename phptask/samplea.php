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

          function createcasesMenu()
	{ //creating cases 
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
		//including connections of mysql 
		include 'connect.php';
        //Inserting data into cases
        $mysql_cols = implode(“, “,array_keys($template));
        $mysql_values = array_map(‘mysql_real_escape_string’, array_values($template));
        $mysql_values  = implode(“, “, $mysql_values );
        $sql = “INSERT INTO 'Cases'($mysql_cols ) VALUES ($mysql_values)”;
		if (mysqli_query($conn, $sql)) 
		{

		} 
		else 
		{

		}
		echo "\033[32mPress press b to go back to sub contacts menu \033[0m";
		$stdin = fopen("php://stdin","r");
		//fgetc is to read single character from the input
		$line = fgetc(STDIN);
		if(trim($line) != 'b')
		{
			echo " ABORTING!  \n";
			exit;
		}
		else
		{
			echo "\n"; 
			subcasesMenu();
		}  
	}


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


		$sql = "INSERT INTO  Contacts VALUES 
		('$First_Name', '$Last_Name', '$ID', '$Title', '$Department',  '$Account_Name', '$Mobile_Phone', '$Office_Phone', '$Home_Phone', '$Other_Phone', '$Fax', '$Primary_AddressStreet', '$Primary_AddressCity', '$Primary_AddressState', '$Primary_AddressPostalCode',   '$Primary_AddressCountry', '$Alternate_AddressStreet', '$Alternate_AddressCity', '$Alternate_AddressState',  '$Alternate_AddressPostalCode', '$Alternate_AddressCountry', '$Description', '$Birthdate', '$Assigned_UserName','$Full_Name', '$Facebook_Account', '$Twitter_Account', '$Google_PlusID', '$Email')";


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


		$sql = "INSERT INTO Leads VALUES ('$First_Name', '$Last_Name', '$ID', '$Title', '$Department', '$Account_Name', '$Mobile_Phone', '$Office_Phone', '$Home_Phone', '$Other_Phone', '$Fax', 'Primary_AddressStreet', '$Primary_AddressCity', '$Primary_AddressState', '$Primary_AddressPostalCode', '$Primary_AddressCountry', '$Status', '$Portal_Name', '$Alternate_AddressStreet', '$Alternate_AddressCity', '$Alternate_AddressState', '$Alternate_AddressPostalCode', '$Alternate_AddressCountry', '$Description', '$Birthdate', '$Assigned_UserName','$Full_Name', '$Facebook_Account', '$Twitter_Account', '$Google_PlusID', '$Email')";


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





    array_push($contactinsert, "Last_Name","ID","Title","Department","Account_Name",
      "Mobile_Phone","Office_Phone","Home_Phone","Other_Phone","Fax","Primary_AddressStreet",
      "Primary_AddressCity","Primary_AddressState","Primary_AddressPostalCode",
      "Primary_AddressCountry","Alternate_AddressStreet","Alternate_AddressCity",
      "Alternate_AddressState","Alternate_AddressPostalCode","Alternate_AddressCountry",
      "Description","Birthdate","Assigned_UserName","Full_Name","Facebook_Account",
      "Twitter_Account", "Google_PlusID", "Email");
    foreach ( $contactinsert as $insert ) 
    {
      echo "Enter the value $insert";
      $contactvalue=readline();
    }







    $User_Name=readline("Enter User Name");
    $pass1=readline("Enter Password");
$msg ='';
if(isset($User_Name, $pass1)) {
    include 'connect.php'; //Initiate the MySQL connection
    // To protect MySQL injection (more detail about MySQL injection)
    $User_Name = stripslashes($User_Name);
    $pass1 = stripslashes($pass1);
    $User_Name = mysqli_real_escape_string($conn, $User_Name);
    $pass1 = mysqli_real_escape_string($conn, $pass1);
    $sql="SELECT * FROM loginusers WHERE User_Name='$User_Name' and pass1=SHA('$pass1')";
    $result=mysqli_query($conn, $sql);
    // Mysql_num_row is counting table row
   

    $count=mysqli_num_rows($result);
    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count==1){
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
    }
    else
    {
      echo"fail";
    }
}
?>


 <table align="center" width="860" border="0" cellspacing="0" cellpadding="0" class="data">
    <tr><td colspan="5" style="height:25px; line-height:25px; text-align:left; padding:0px; background:#fff url('/.UserReg/_UserRegistration/jsp/html/images/title_bg.jpg') repeat-x;" >
     <font family="Arial" color="#4f63a3"><b>&nbsp;User Registration Form</b></font></td></tr>

    <tr><td colspan="5" class="label1">&nbsp;</td></tr>
    
    <tr>
    
    </tr>
    
    <tr>
      <td class="label" valign="top">Name <font color="red"><b>*</b></font> :</td>
          <td class="value">
      <div><input type="text" style="text-transform: capitalize;" onClick="fieldFocus(this.id, 'ErrFName','First Name')" name="fName" id="FName" class="longInput" value="" onkeypress="return isTextKey(event)" maxlength="30"></div>
      <div id="ErrFName">First Name</div>
      </td>
      <td class="value" >
      <div>&nbsp;&nbsp;<input type="text" name="mName" id="MName" style="text-transform: capitalize;" class="longInput" value="" onkeypress="return isTextKey(event)" maxlength="30"></div>
      <div id="ErrMName">&nbsp;&nbsp;&nbsp;Middle Name</div>
      </td>
      <td class="value">
      <div><input type="text" onClick="fieldFocus(this.id, 'ErrLName','Last Name')" style="text-transform: capitalize;" name="lName" id="LName" class="longInput" value="" onkeypress="return isTextKey(event)" maxlength="30"></div>
      <div id="ErrLName">Last Name(Surname)</div>
      </td>
        </tr>
    
    <tr>
          <td class="label">Customer Code <font color="red"><b></b></font> :</td>
          <td class="value" colspan="4"><input type="text" name="custCode" id="textfield2" style="text-transform: uppercase;" class="longInput" value="" maxlength="8"></td>
        </tr>
    
        <tr>
      <td class="label" valign="top">Date Of Birth <font color="red"><b>*</b></font> :</td>
            <td class="value" colspan="4">
      <div>
        
        <input readonly class="inputDate" name="inputDate" size="8" style=" padding:4px;  border:1px solid #aaaaaa;" id="inputDate" />&nbsp;
        <!--<script>
        var dt=new Date(); 
        dt=dt.getDate()+'/'+(parseInt(dt.getMonth())+1)+'/'+ dt.getFullYear(); 
        document.getElementById('inputDate').value=dt;
      </script> -->
        <img src="/.UserReg/_UserRegistration/jsp/html/images/calender.png" width="20" height="20"  onClick="fieldFocus('inputDate','ErrDate',' '); setYears(1912); showCalender(this, 'inputDate');"/>&nbsp;&nbsp;(DD/MM/YYYY)
        <!-- <input type="text" name="DOBDay" id="DOBDay" size="1" class="normalInput" value="" onkeypress="return isNumberKey(event)" maxlength="2">&nbsp;&nbsp;
        <input type="text" name="DOBMonth" id="DOBMonth" size="1" class="normalInput" value="" onkeypress="return isNumberKey(event)" maxlength="2">&nbsp;&nbsp;
        <input type="text" name="DOBYear" id="DOBYear" size="5" class="normalInput" value="" onkeypress="return isNumberKey(event)" maxlength="4"> -->
      </div>
      
      <div id="ErrDate"></div>
      </td>
        </tr>
    
    <tr>
          <td class="label" >Mobile No. <font color="red"><b>*</b></font> :</td>
          <td class="value" colspan="4" >
            <input onClick="fieldFocus(this.id, 'ErrMobile','')" type="text" name="mobNo" onkeyup="changeOfMob()" onkeypress="return isNumberKey(event)" id="mobNo" maxlength="10" class="longInput" value="" />
            <span id="msgVerify" style="display:none;color:green;"><img src="/.UserReg/_UserRegistration/jsp/html/images/yes.jpg" width="10" height="10"/>&nbsp;Mobile Number Matching With Our Database!</span>
      <span id="msgNonVerify" style="display:none;color:red;"><img src="/.UserReg/_UserRegistration/jsp/html/images/no.jpg" width="10" height="10"/>&nbsp;Mobile Number Not Matching With Our Database!</span>
            <div style="display:inline;" id="ErrMobile"></div>
          </td>
    </tr>

<!--    <tr> -->
<!--           <td class="label" >Mobile No. <font color="red"><b>*</b></font> :</td> -->
<!--           <td class="value" colspan="4" > -->
<!--            <input onClick="fieldFocus(this.id, 'ErrMobile','')" type="text" name="mobNo" onkeypress="return isNumberKey(event)" id="mobNo" maxlength="10" class="longInput" value="" /> -->
<!--            <div style="display:inline;" id="ErrMobile"></div> -->
<!--           </td> -->
<!--    </tr> -->
    
    <tr>
          <td class="label">PAN No. :</td>
          <td class="value" colspan="4"><input onClick="fieldFocus(this.id, 'ErrPan','')" type="text" name="panNo" id="PanNo" style="text-transform: uppercase;" class="longInput" value="" maxlength="10"><div style="display:inline;" id="ErrPan"></div></td>
        </tr>

  <input type="hidden"  name="verHide" id="verHide" value=""/>
  <script type="text/javascript">
    function setStyle()
    {
      var verCode = document.getElementById("verHide").value;
      if(document.getElementById("verCode").value.length=="4" && document.getElementById("verCode").value==verCode)
      {
         document.getElementById("t1").style.display="block";
         document.getElementById("t2").style.display="none";

      }
      if(document.getElementById("verCode").value.length!="4")
      {
        document.getElementById("t1").style.display="none";
        document.getElementById("t2").style.display="none";
      }
      else if(document.getElementById("verCode").value!=verCode)
      {
        document.getElementById("t2").style.display="block";
        document.getElementById("t1").style.display="none";
      }

    }
  </script>
        <tr>
          <td class="label">Email ID <font color="red"><b>*</b></font> :</td>
          <td class="value" colspan="1">
            <input type="text" onClick="fieldFocus(this.id, 'ErrMail','')" name="email" id="EmailId" class="EmailInput" value="" onkeyup="changeOfEmail()" style="text-transform: lowercase;" maxlength="60" />
            <span id="msgVerifyEmail" style="display:none;color:green;"><img src="/.UserReg/_UserRegistration/jsp/html/images/yes.jpg" width="10" height="10"/>&nbsp;Email Address Matching With Our Database!</span>
      <span id="msgNonVerifyEmail" style="display:none;color:red;"><img src="/.UserReg/_UserRegistration/jsp/html/images/no.jpg" width="10" height="10"/>&nbsp;Email Address Not Matching With Our Database!</span>
            <div id="ErrMail"><style>document.getElementById(field).style.borderColor='red';</style><b style='color:#FF0000'></b>
</div>
          </td>
          <td class="value" style="border-left:0px; text-align:left;"><img src="/.UserReg/_UserRegistration/jsp/html/images/Verify.JPG" onclick="getVerifyCode()" id="verImg"/> </td>
          <td class="value"><b class="label2" >Verification Code<font color="red"><b>*</b></font> : </b>&nbsp;&nbsp;<input type="text" onKeyup="setStyle()"  onClick="fieldFocus(this.id, 'ErrVer','')" name="verCode" id="verCode" class="normalInput1" value=""  maxlength="4"><div id="ErrVer"><style>document.getElementById(field).style.borderColor='red';</style><b style='color:#FF0000'></b>
</div>
    <span id="t1" style="display:none;color:green;"><img src="/.UserReg/_UserRegistration/jsp/html/images/yes.jpg" width="10" height="10"/>&nbsp;Verified</span><span id="t2" style="display:none;color:red;"><img src="/.UserReg/_UserRegistration/jsp/html/images/no.jpg" width="10" height="10"/>&nbsp;Non-Verified</span>
     </td>
        </tr>

<!--    <tr> -->
<!--           <td class="label">Email ID <font color="red"><b>*</b></font> :</td> -->
<!--           <td class="value" colspan="1"> -->
<!--            <input type="text" onClick="fieldFocus(this.id, 'ErrMail','')" name="email" id="EmailId" class="EmailInput" value="" style="text-transform: lowercase;" maxlength="60" /> -->

<!--           </td> -->



<!--        </td> -->
<!--        </tr> -->

    <tr>
          <td class="value" colspan="4">
      <div><span style="color:red;"><b>Kindly enter your personal E-Mail ID.</b></span><b> The E-mail addresss is not made public and will only be used if you wish to receive a new password or wish to receive certain news or notifications by E-mail.</b></div>
      </td>
        </tr>
    <tr>
          <td class="label" >Loan Code <font color="red"><b>*</b></font> :</td>
          <td class="value" colspan="4" ><input onClick="fieldFocus(this.id, 'ErrLoanCode','')" type="text" name="loanCode" id="loanCode" maxlength="10" class="longInput" value="" style="text-transform: uppercase;" onKeyup="checkEmailMob();" /><div style="display:inline;" id="ErrLoanCode"><style>document.getElementById(field).style.borderColor='red';</style><b style='color:#FF0000'></b>
</div></td>

    </tr>
        <tr>
          <td class="label">Property Address Line 1 :</td>
          <td class="value" colspan="4"><input type="text" name="add1" id="addr1" class="AddrInput" value="" maxlength="40" style="text-transform: capitalize;"></td>
        </tr>
    
    <tr>
          <td class="label">Property Address Line 2 :</td>
          <td class="value" colspan="4"><input type="text" name="add2" id="addr2" class="AddrInput" value="" maxlength="40" style="text-transform: capitalize;"></td>
        </tr>
    
        <tr>
          <td class="label">Property Address Line 3 :</td>
          <td class="value" colspan="4"><input type="text" name="add3" id="addr3" class="AddrInput" value="" maxlength="40" style="text-transform: capitalize;"></td>
        </tr>
    
        <tr>
          <td class="label">City :</td>
          <td class="value" colspan="1"><input type="text" name="city" id="city" class="longInput1" value="" onkeypress="return isTextKey(event)" maxlength="30" style="text-transform: capitalize;"></td>
        <!--</tr>
    <tr>-->
          <td class="label" style="border-right:0px; text-align:right;">Pin Code :</td>
          <td class="value" style="text-align:center;" colspan="1"><input type="text" size=7 name="pinCode" id="pincode" class="normalInput" onkeypress="return isNumberKey(event)" value="" maxlength="6"></td>
        </tr>
        <tr>
          <td class="label">Relationship with DHFL ?</td>
          <td class="value" colspan="4">
        <Select name="relDhfl" id="relDhfl" class="normalInput" style="height:22px;">
          <option value="Borrower">Borrower</option>
          <option value="Depositor">Depositor</option>
          <option value="Both">Both</option>
        </select>
      </td>
        </tr>
     <tr>
          <td class="label">Have you taken Disbursement ?</td>
          <td class="value" colspan="4">
        <Select name="loanTaken" id="loanTaken" class="normalInput" style="height:22px;">
          <option value="Yes">Yes</option>
          <option value="No">No</option>
        </select>
      </td>
        </tr>
        <tr>
          <td class="label">Additional Information :</td>
          <td class="value" colspan="4"><textarea rows="3" cols="25" name="addInfo" id="addInfo" value="" maxlength="100" style="text-transform: capitalize;"></textarea></td>
        </tr>
    <tr>
          <td class="label">&nbsp;</td>
          <td class="value" colspan="4">
    <div class="Label1"><input type="checkbox" name="termselect"> &nbsp;&nbsp;I acknowledge and accept all <a href="/.UserReg/_UserRegistration/jsp/html/dhflTC.pdf" target="_blank">Terms & Conditions</a></input></div>
     <div style="color:red;"><i><font size="1">* In order to use our services, you must agree to DHFL's Terms of Service</font></i></div>
            <img  src="/.UserReg/_UserRegistration/jsp/html/images/Register.JPG" onclick="submitUserRegForm()"/> &nbsp;&nbsp;&nbsp;
          <a href="/wps/portal"><img  src="/.UserReg/_UserRegistration/jsp/html/images/Cancel.JPG"></img></a>
          </td>
        </tr>
    <tr><td colspan="5" class="label1">&nbsp;</td></tr>
      </table>
    <div style="text-align:center;">
    <img  src="/.UserReg/_UserRegistration/jsp/html/images/bottom-shadow.png" width="855"/>
    </div>
</div>
<!-- Calender Script  --> 

    <table id="calenderTable" cellspacing="0" cellpadding="0">
        <tbody id="calenderTableHead">
          <tr>
            <td colspan="3" align="center">
            <select style="width:80px;" onChange="showCalenderBody(createCalender(document.getElementById('selectYear').value,
             this.selectedIndex, false));" id="selectMonth">
                <option value="0">Jan</option>
                <option value="1">Feb</option>
                <option value="2">Mar</option>
                <option value="3">Apr</option>
                <option value="4">May</option>
                <option value="5">Jun</option>
                <option value="6">Jul</option>
                <option value="7">Aug</option>
                <option value="8">Sep</option>
                <option value="9">Oct</option>
                <option value="10">Nov</option>
                <option value="11">Dec</option>
            </select>
            </td>
            <td colspan="3" align="center" >
          <select style="width:80px;" onChange="showCalenderBody(createCalender(this.value, 
        document.getElementById('selectMonth').selectedIndex, false));" id="selectYear">
        </select>
      </td>
            <td valign="middle" align="center">
          <a href="#" onClick="closeCalender();"><font color="#003333" size="+1">x</font></a>
      </td>
      </tr>
       </tbody>
       <tbody id="calenderTableDays">
         <tr style="">
           <td>Sun</td><td>Mon</td><td>Tue</td><td>Wed</td><td>Thu</td><td>Fri</td><td>Sat</td>
         </tr>
       </tbody>
       <tbody id="calender"></tbody>
    </table>

<!-- End Calender Script  --> 
