<?php
session_start();
$user_id=$_SESSION['id'];
$user_type=$_SESSION['type'];
require "config.php";

echo $_POST['comment'];
if (isset($_POST['comment'])){
$comment = $_POST['content'];
$pid=$_POST['qid'];
echo $_POST['content'];
echo $_POST['qid'];
echo $_SESSION['id'];
//echo strtotime(date("Y-m-d h:i:sa"));
echo $_SESSION['type'];

$sql="insert into comment (content,user_id,post_id,type,date_posted) values ('$comment','$user_id','$pid','$user_type','".strtotime(date("Y-m-d h:i:sa"))."')";
$result=mysqli_query($conn,$sql);
print_r($result);
?>
<script>
window.location = 'memberdashboard.php';
</script>

<?php
}
?>