<html>
    <style>
        body{
            background-image: url(backimage.jpg);
        }
        .button 
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
    align-content: flex-start

}
        form {
    border: 3px solid #f1f1f1;
}
</style>
    <head>
                <?php include 'header.php';?>

    </head>
    <body>
        <br>
        <div style="text-align: center;">
	<button align="left" class="button button" name="portf" value="Porfolio" onclick="2.php">view portfolio</button>
	<br>
	<button class="button button" onclick="2.php" name="sec" value="Security">add portfolio</button>
    </body>