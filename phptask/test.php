 <?php
// Grab User submitted informatio
// Include config file
 $User_Name=readline("Enter User Name");
 $pass1=readline("Enter Password");
 if(isset($User_Name, $pass1)) {
include 'connect.php';
 $sql="SELECT User_Name,pass1 FROM loginusers WHERE User_Name='$User_Name' and pass1=SHA('$pass1')";
    $result=mysqli_query($conn, $sql);
$count=mysqli_num_rows($result);
    if($count==1){
    echo"You are a validated user.";
}
else{
    echo"Sorry, your credentials are not valid, Please try again.";
}
}
?>
