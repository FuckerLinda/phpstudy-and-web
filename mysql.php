<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "haha";
 
// create connection
$con = new mysqli($servername, $username, $password ,$dbname);
// detect connection
if ($con->connect_error) {
    die("fail to connect: " . $con->connect_error);
} else{

}



 $user=$_POST['user'];
 $pwd=$_POST['pwd'];



//select
$sql = "SELECT * FROM table1 WHERE username = \"$user \" ";

//do $sql,return $result
$result = $con->query($sql);

//whether result has data
if($result->num_rows>0){
    //send date in $result to $row
    echo "sorry,same user!";
}else{


//insert
$sql = "INSERT INTO table1(username,password) VALUES(\"$user\",\"$pwd\")";

if($con->query($sql)===TRUE){
    echo '<h1>register success!!!!!</h1>';
}else{
    echo '<h1>fail to register:'.$con->error."</h1>";
}


echo "<p style=\"color:brown\">3 seconds,and you will go to home</style>";
header("Refresh:3;url=../index.php");

}


$con->close();


?>