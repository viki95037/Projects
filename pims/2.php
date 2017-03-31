<html>
<form method="post">
<br>

Name:<input type="text" name="name">
<br><br>
Age:<input type="number" name="age">
<br><br>
Gender:
<input type="radio" name="gender" value="male">Male
<br><br><input type="radio" name="gender" value="female">Female
<br><br>Email<input type="email" name="email">
<br><br><input type="submit" name="submit" value="Submit">




<?php
$user_name = "root";
$password = "";
$database = "seit";
$server = "localhost";
$conn = new mysqli($server, $user_name, $password, $database);

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$email=$_POST['email'];
$sql= "insert into seit2 values('$name','$gender','$age','$email')";
$result = mysqli_query($conn,$sql);
if($result)
{
echo "Executed!";
}

}

?>
</form>
</html>
