<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Create Artist Record</title>
    <style>
        .left-column
        {
            text-align: right;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <center>
        <h1>Create Artist Record</h1>
    </center>
    <form action="/~z1808617/CSCI467/New_Artist_Notification.php" method="POST">
    <div class="panel panel-default">
        <div class="panel-heading"><b>Artist Information</b></div>
        <div class="panel-body">
        
        <fieldset class="col-md-4" style="display:inline-block;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table>
                        <tr><td class="left-column">First name : </td><td style="text-align:right"><input type="text" size="23" name="firstname"></td></tr>
                        <tr><td class="left-column">Last name : </td><td style="text-align:right"><input type="text" size="23" name="lastname"></td></tr>
                        <tr><td><br/></td></tr>
                        <tr><td class="left-column">Address : </td><td class="left-column">Apt. # : <input type="text" name="apt_no"></td></tr>
                        <tr><td></td><td class="left-column">Street : <input type="text" name="street"></td></tr>
                        <tr><td></td><td class="left-column">City : <input type="text" name="city"></td></tr>
                        <tr><td></td><td class="left-column">State : <input type="text" name="state"></td></tr>
                        <tr><td></td><td class="left-column">Country : <input type="text" name="country"></td></tr>
                        <tr><td></td><td class="left-column">ZIP : <input type="text" name="zipcode"></td></tr>
                        <tr><td><br/></td></tr>
                        <tr><td class="left-column">E-mail : </td><td style="text-align:right"><input type="text" name="email" size="23"></td></tr>
                        <tr><td><br/></td></tr>
                    
                        <tr>
                        <td><input type="reset" value="Reset"></td>
                        <td style="text-align:right;"><input type="submit" value="Submit"></td>
                        </tr>
                    
                        </table>
                    </div>
                </div>
            
        </fieldset>
        <br/><br/>
        
        <div class="clearfix"></div>
        </div>
    </div>
    </form>

</body>

</html>