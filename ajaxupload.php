<?php
 
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
$path = 'uploads/'; // upload directory
 
if(!empty($_POST['name']) || !empty($_POST['descrip']) || $_FILES['image'])
{
$img = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
 
// get uploaded file's extension
$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
 
// can upload same image using rand function
$final_image = rand(1000,1000000).$img;
 
// check's valid format
if(in_array($ext, $valid_extensions)) 
{ 
$path = $final_image; 
 
if(move_uploaded_file($tmp,$path)) 
{
echo "<img src='$path' />";
$name = $_POST['name'];
$text = $_POST['descrip'];
 
//include database configuration file
require 'config.php';
 
//insert form data in the database
$insert = $db->query("INSERT service_provided(Title,Description,Image) VALUES ('".$name."','".$text."','".$path."')");
 
//echo $insert?'ok':'err';
}
} 
else 
{
echo 'invalid';
}
}
?>