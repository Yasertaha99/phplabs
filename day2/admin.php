<style>
    *{
        text-align: center;
    }
    .header{
        position: relative;
        top: 0;
        left: 0;
        width: 100%;
        height: 40px;
        background-color: grey;
    }
    table{
        width: 100%;
    }
    img{
        width: 100px;
        height: 50px;
    }

</style>
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
$name=strtoupper($name);
?>
<?php 
echo"<div class='header'>
    <ul><li>Welcame <a href='#'> $name /a></li>
    <li><a href='index.php'>logout</a></li>
</ul>
</div>";

echo '<table border=1px>
<tr>
<th>ID</th>
    <th>name</th>
    <th>Email</th>
    <th>About you</th>
    <th>Iour IMG</th>
    <th>Action</th>
</tr>';
?>
<?php
try
{
    $users=fopen('userslist.txt','r');
    $i=0;
    while(!feof($users))
    {
        $data=fgets($users);
        $data=preg_split('/\;/',$data); 
        // var_dump($data);
        // fullname;username;email;passwd;address;country;gender;slills;department;
        ?>
        <tr>
            <td>
                <?php echo $i; ?>
            </td>
            <td>
                <?php echo $data[0]; ?>
            </td>
            <td>
                <?php echo $data[2]; ?>
            </td>
            <td>
                <?php echo"gender=>". $data[7]."skills=>".$data[8]; ?>
            </td>
            <td>
                <img src="php-reading-file-per-line-2.png" placeholder="your imag">
            </td>
            <td>
                <button type="submit">Update</button>
                <button type="submit">Delete</button>
                <button type="submit">Show Details</button>
            </td>
        </tr>
        
        <?php
        $i++;
    }
    fclose($users);
}
catch(Exception $ex)
{
    echo 'error';
}
echo '</table>';
}
?>

