<?php
if(
    $_SERVER["REQUEST_METHOD"] == "GET" && empty($_POST['fname'])
    && empty($_POST['lname']) && empty($_POST['address']) &&
    empty($_POST['gender']) && empty($_POST['skills']) && empty($_POST['department'])
    ){
        echo "Plese your data frist".' <a href="index.php">Register</a>' ;
    }
    else{
        
$password =$_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
//    if (password_verify($password, $hashed_password)) {
//        //if the password entered matches the hashed password, we're in
//    } else {
//        // redirect to the homepage
//    } 
/// to store in file text
$fileWr = fopen("userslist.txt", "a");
$name =$_POST['fname'].$_POST['lname'].";" ;
$address =$_POST['address'].";" ;
$country =$_POST['country'].";" ;
$gender =$_POST['gender'].";" ;
$skills =implode("+",$_POST['skills']).";" ;
$username =$_POST['username'].";" ;
$email =$_POST['email'].";" ;
// $hashed_password=$_POST['password'].";" ;
$department=$_POST['department'].";" ;
// fullname;username;email;passwd;address;country;gender;slills;department;
$data="\n".$name.$username.$email.$hashed_password.";".$password.";".
$address.$country.$gender.$skills.$department;
fwrite($fileWr, $data);
fclose($fileWr);
$welcameName=strtoupper($name);
}
?>