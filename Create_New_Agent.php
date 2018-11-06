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
        <div class="panel-body">
        
        <center><fieldset class="col-xs-6" style="display:inline-block;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table>
                        <tr><td class="left-column">First name : </td><td><input type="text" name="firstname"></td></tr>
                        <tr><td class="left-column">Last name : </td><td><input type="text" name="lastname"></td></tr>
                        <tr><td class="left-column">E-mail : </td><td><input type="text" name="email" ></td></tr>
                        <tr><td class="left-column">Office Phone # : </td><td><input type="text" name="officephone" ></td></tr>
                        <tr><td class="left-column">Cell Phone # : </td><td><input type="text" name="cellphone" ></td></tr>
                        <tr><td><br/></td></tr>
                        </table>
                    </div>
                </div>
        </fieldset>
        <fieldset class="col-xs-6" style="display:inline-block;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table>
                        <tr><td class="left-column">Apt. # : </td><td><input type="text" name="apt_no"></td></tr>
                        <tr><td class="left-column">Street : </td><td><input type="text" name="street"></td></tr>
                        <tr><td class="left-column">City : </td><td><input type="text" name="city"></td></tr>
                        <tr><td class="left-column">State : </td><td><input type="text" name="state"></td></tr>
                        <tr><td class="left-column">Country : </td><td><input type="text" name="country"></td></tr>
                        <tr><td class="left-column">ZIP : </td><td><input type="text" name="zipcode"></td></tr>
                        <tr><td></td></tr>
                        </table>
                    </div>
                </div>
        </fieldset>
        <br/><br/>
        <table>
            <tr><td>Notes : <input type="text" name="notes" ><td></tr>
        </table>
        <br/><br/>
        <input style="float:left" type="reset" value="Reset">
        <input style="float:right" type="submit" value="Submit">
    </div>
    </form>
    </body>

</html>