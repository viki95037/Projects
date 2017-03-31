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
    width: 20%;
    align-content: flex-start

}

th, td {
    text-align: left;
        vertical-align: bottom;

    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
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
        <table border="1">
            <tr><th>Name</th><th>type</th><th>Number of Transaction</th><th>Date</th></tr>
            <tr>
                <td>reliance</td><td>current</td><td>15</td><td>12/10/2015</td></tr>
             <tr>
                <td>birla</td><td>saving</td><td>11</td><td>12/05/2016</td></tr> <tr>
                <td>Airtel</td><td>current</td><td>10</td><td>05/02/2017</td></tr> <tr>
                <td>HP</td><td>current</td><td>15</td><td>30/12/2016</td></tr>
                           <tr> <td>Idea</td><td>saving</td><td>5</td><td>03/3/2017</td></tr>
        </table>
            <div style="text-align: center;">
	<button align="left" class="button button" name="portf" value="Porfolio" onclick="2.php">Add Transaction</button>
	<button class="button button" onclick="2.php" name="sec" value="Security">Delete Transaction</button>

            
            
    </body>