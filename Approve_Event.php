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
        th
        {
            text-align: center;
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
            <li><a href="Create_New_Location.php">Create Location</a></li>
            <li><a href="Create_New_Event.php">Create Event</a></li>
            <li class="active"><a href="Approve_Event.php">Approve Event</a></li>
            <li><a href="Logout.php" tile="Logout">Logout</a></li>
        </ul>
        </div> 
    </nav>

    <center>
        <h1>Approve Events</h1>
    </center>
    <form action="New_Event_Notification.php" method="POST">
    <div class="panel panel-default">
        <div class="panel-heading col-md-10"><b>Event Information</b></div>
        <div class="panel-body">
        
        <fieldset class="col-md-10" style="display:inline-block;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table>
                        <tr><th>Select</th><th>Band/Artist(s)</th><th>Location Name</th><th>Event Date</th><th>Event Time</th><th>Status</th><th>Seating Capacity</th><th>Event Manager</th><th>Notes</th></tr>
                        <tr>
                        <td><center><input type="checkbox" name="select"></center></td>
                        <td><input type="text" name="performer" size="10"></td>
                        <td><input type="text" name="location" size="10"></td>
                        <td><input type="text" name="date" size="10"></td>
                        <td><input type="text" name="time" size="10"></td>
                        <td><input type="text" name="status" size="10"></td>
                        <td><input type="text" name="capacity" size="16"></td>
                        <td><input type="text" name="manager" size="15"></td>
                        <td><input type="text" name="notes" size="15"></td>
                        </tr>
                        <tr>
                        <td><center><input type="checkbox" name="select"></center></td>
                        <td><input type="text" name="performer" size="10"></td>
                        <td><input type="text" name="location" size="10"></td>
                        <td><input type="text" name="date" size="10"></td>
                        <td><input type="text" name="time" size="10"></td>
                        <td><input type="text" name="status" size="10"></td>
                        <td><input type="text" name="capacity" size="16"></td>
                        <td><input type="text" name="manager" size="15"></td>
                        <td><input type="text" name="notes" size="15"></td>
                        </tr>
                        <tr>
                        <td><center><input type="checkbox" name="select"></center></td>
                        <td><input type="text" name="performer" size="10"></td>
                        <td><input type="text" name="location" size="10"></td>
                        <td><input type="text" name="date" size="10"></td>
                        <td><input type="text" name="time" size="10"></td>
                        <td><input type="text" name="status" size="10"></td>
                        <td><input type="text" name="capacity" size="16"></td>
                        <td><input type="text" name="manager" size="15"></td>
                        <td><input type="text" name="notes" size="15"></td>
                        </tr>
                        <tr><td><br/></td></tr>
                    
                        <tr>
                        <td><input type="reset" value="Clear"></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                        <td style="text-align:right;"><input type="submit" value="Approve"></td>
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