<?php
//insert.php
if(isset($_POST["subject"]))
{
 include("connect.php");
 $Fname=mysqli_real_escape_string($con, $_POST["subject"]);
 $catagory=mysqli_real_escape_string($con, $_POST["catagory"]);
 $comment=mysqli_real_escape_string($con, $_POST["comment"]);
 $mobile_No=mysqli_real_escape_string($con, $_POST["mobile_No"]);
 $comment_status=0;
 $query = "
 INSERT INTO order_Eq(Fname,catagory,comment_text,mobile_No,comment_status)
 VALUES ('$Fname','$catagory','$comment','$mobile_No','$comment_status')
 ";
 mysqli_query($con, $query);
}
?>