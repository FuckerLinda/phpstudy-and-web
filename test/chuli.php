<?php



//接收来的文件 the file received
$fileinfo = $_FILES['wenjian'];

//第二种写法获得文件名 another way to get filename
//echo $_FILES['wenjian']['name'];

//查看文件信息 print fileinfo
//print_r($fileinfo);

//获取文件名 get filename
$filename = $fileinfo["name"];
//获取文件临时路径 get temporary file_path
$filetmp_path = $fileinfo["tmp_name"];
//echo $filetmp_path;

//把文件从临时路径移动到正经路径 move file to your target_path
move_uploaded_file($filetmp_path,"./pic/".$filename);

?>

