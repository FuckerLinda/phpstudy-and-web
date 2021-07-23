<?php



$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "haha";
 
// 创建连接 create connection
$con = new mysqli($servername, $username, $password ,$dbname);
// 检测连接 detect connection
if ($con->connect_error) {
    die("连接失败: " . $con->connect_error);
} else{

}



 $user=$_POST['user'];
 $pwd=$_POST['pwd'];



//查select
$sql = "SELECT * FROM table1 WHERE username = \"$user \" and password = \"$pwd\"";


if($con->query($sql)->num_rows>0){
    echo '<h1>Login success!!!!!Welcome my master!</h1>';

    echo '<form action="./test/chuli.php" method="post" enctype="multipart/form-data">
        <label>load file here:</label>
        <br/>
    <input type="file" name="wenjian" />
    <br/>
    <input type="submit" name="submit" value="click on here and load your file"/>
        
    </form>';

}else{
    echo '<h1>haha you fool pig!</h1>';
    echo "<p style=\"color:brown\">3 seconds,and you will go to home</style>";
header("Refresh:3;url=../index.php");

}






$con->close();


?>