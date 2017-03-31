<html>
    <style>
        body{
            background-image: url(backimage.jpg);
        }
        table {
    border-collapse: collapse;
    width: 100%;
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
    width: 70%;
    align-content: flex-start

}

 td {
    text-align: left;
        vertical-align: bottom;

    padding: 8px;
}
         td {
    text-align: centre;
        vertical-align: bottom;

    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
    <head>
                <?php include 'header.php';?>

    </head>
    <body>
        <br>
        <table >
        <tr><th colspan="3">Transactions</th><th colspan="3">Portfolio</th></tr><tr><br></tr>
            <tr colspan="3"><td><button align="left" class="button button" name="portf" value="Porfolio" onclick="2.php">Add security for transaction</button></td><td><button class="button button" onclick="2.php" name="sec" value="Security">Delete security for transaction</button></td><td><button class="button button" onclick="2.php" name="sec" value="Security">Add Alert for transaction</button></td>
            <td><button align="left" class="button button" name="portf" value="Porfolio" onclick="2.php">Add security for Portfolio</button></td><td><button class="button button" onclick="2.php" name="sec" value="Security">Delete security for Portfolio</button></td><td><button class="button button" onclick="2.php" name="sec" value="Security">Add Alert for Portfolio</button></td></tr>
        </table>
        <div style="text-align: center;">
	
	<br>
	
    </body>