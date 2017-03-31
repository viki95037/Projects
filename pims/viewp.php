<html>
    <style>
        body{
            background-image: url(backimage.jpg);
        }
        table {
    border-collapse: collapse;
    width: 100%;
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
            <tr><th>Name</th><th>type</th><th>ROI</th><th>company name</th></tr>
            <tr>
                <td>reliance</td><td>current</td><td>12%</td><td>Reliance Inc.</td></tr>
             <tr>
                <td>birla</td><td>saving</td><td>11%</td><td>Birla Inc.</td></tr> <tr>
                <td>personal</td><td>current</td><td>10%</td><td>tata Inc.</td></tr> <tr>
                <td>relative</td><td>current</td><td>15%</td><td>HP Inc.</td></tr>
            
    </body>