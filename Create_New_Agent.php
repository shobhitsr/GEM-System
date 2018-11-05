<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>GEM Systems</title>
    <style>
        .left-column
        {
            text-align: right;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Global Entertainment Incorporated</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="HomePage.php">Home</a></li>
            <li><a href="Create_New_Artist.php">Create Artist</a></li>
            <li class="active"><a href="Create_New_Agent.php">Create Agent</a></li>
            <li><a href="Create_New_Location.php">Create Location</a></li>
            <li><a href="Create_New_Event.php">Create Event</a></li>
            <li><a href="Approve_Event.php">Approve Event</a></li>
            <li><a href="Logout.php" tile="Logout">Logout</a></li>
        </ul>
        </div>
    </nav>

    <center>
        <h1>Create New Agent</h1>
    </center>
    <form action="Create_New_Artist.php" method="POST">
    <div class="panel panel-default">
        <div class="panel-heading"><b>Artist Information</b></div>
        <div class="panel-body">
        
        <fieldset class="col-md-4" style="display:inline-block;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table>
                        <tr><td class="left-column">First name : </td><td style="text-align:right"><input type="text" size="23" name="firstname" id="firstname"></td></tr>
                        <tr><td class="left-column">Last name : </td><td style="text-align:right"><input type="text" size="23" name="lastname" id="lastname"></td></tr>
                        <tr><td><br/></td></tr>
                        <tr><td class="left-column">Address : </td><td class="left-column">Apt. # : <input type="text" name="apt_no" id="apt_no"></td></tr>
                        <tr><td></td><td class="left-column">Street : <input type="text" name="street" id="street"></td></tr>
                        <tr><td></td><td class="left-column">City : <input type="text" name="city" id="city"></td></tr>
                        <tr><td></td><td class="left-column">State : <input type="text" name="state" id="state"></td></tr>
                        <tr><td></td><td class="left-column">Country : <input type="text" name="country" id="country"></td></tr>
                        <tr><td></td><td class="left-column">ZIP : <input type="text" name="zipcode" id="zipcode"></td></tr>
                        <tr><td></td><td class="left-column">Concert Rate:  <input type="text" name="rate" id="rate"></td></tr>
                        <tr><td><br/></td></tr>
                        <tr><td class="left-column">E-mail : </td><td style="text-align:right"><input type="text" name="email" id="email" size="23"></td></tr>
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