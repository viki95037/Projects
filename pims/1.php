<html>
    <style>
        body{
            background-image: url(backimage.jpg);
        }
        form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
#but
        {
           background-color: #1D8AA2; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
   /* display: inline-block; */
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px;
    width: 20%; 
        }
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    height: 12%;
    width: 50%;
    align-content:center;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
    </style>
    <head>
        <?php include 'header.php';?>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       $user_name = 'root';
       $password = '';
       $database = 'pims';
       $server = 'localhost';

       $conn = new mysqli($server, $user_name, $password, $database);
       if($conn)
		{
		}
        if(isset($_POST['submit']))
        {
        $name=$_POST['name'];
        $pass=$_POST['pass'];
		
		$sql1 = "SELECT username FROM login where user='$name' AND pass='$pass'";
		$result1 = mysqli_query($conn,$sql1);
		$row = mysqli_fetch_row($result1);
		$namedb = $row[0];
		echo "<br><br> Welcome " . $namedb;

		if($namedb==$name)
		{
			echo "<br><br> PHPlogin successful!!" ;
		}
		else
		{
			echo "<br><br> Incorrect password or username!";
		}
        }
        ?>
        <form action="logged.php">
  <div class="imgcontainer">
    <img align="centre" src="download.png" alt="Avatar" class="avatar">
  </div>
<br><br><br><br><br><br><br><br><br>
           
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="name" >

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" >
      <br>
        
    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
              <input type="button" value="Register" id="but" onclick="window.location.href='registration.php'"></button>

        




    </body>
</html>
