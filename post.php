<?php
session_start();
$user_id=$_SESSION['id'];
$user_type=$_SESSION['type'];
require 'config.php';
if (isset($_POST['post'])){
$content  = $_POST['content'];
$sql="insert into post (content,date_created,user_id,type) values ('$content','".strtotime(date("Y-m-d h:i:sa"))."','$user_id','$user_type') ";
$result=mysqli_query($conn,$sql);

?>
<script>
window.location = 'memberdashboard.php';
</script>
<?php
}
?>
