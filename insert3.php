<?php

$name = $_POST['username'];
$email = $_POST['email'];
$issues = $_POST['issues'];

$con = mysqli_connect('localhost','root','');

if(!$con)
{
echo 'Not Connected To Server';
}
if(!mysqli_select_db($con,'issue'))
{
echo 'Database not Connected';
}


$sql = "INSERT INTO js_issues (name,email,issues) VALUES ('$name','$email','$issues')";

if(!mysqli_query($con,$sql))
{
echo 'Not Inserted';
}
else
{
echo 'Inserted';
}

header("refresh:2; url=js_issues.html");

?>