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
            <a class="navbar-brand">Global Entertainment Incorporated</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="HomePage.php">Home</a></li>
            <li class="active"><a href="Create_New_Artist.php">Create Artist</a></li>
            <li><a href="Create_New_Agent.php">Create Agent</a></li>
            <li><a href="Create_New_Location.php">Create Location</a></li>
            <li><a href="Create_New_Event.php">Create Event</a></li>
            <li><a href="Approve_Event.php">Approve Event</a></li>
            <li><a href="Logout.php" tile="Logout">Logout</a></li>
        </ul>
        </div>
    </nav>

    <center>
        <h1>Generate Event Status Report</h1>
    </center>
    
    <form action="Generate_Report.php" method="POST">
    <div class="panel panel-default">
        <div class="panel-body">
        
        <center><fieldset class="col-xs-6" style="display:inline-block;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table>
                        <tr><td><br/></td></tr>
                        <tr><td class="left-column">Event Status : </td><td><input type="text" name="lastname"></td></tr>
                        <tr><td class="left-column">Report Type : </td><td><input type="text" name="email" ></td></tr>
                        <tr><td class="left-column">Sort By : </td><td><input type="text" name="officephone" ></td></tr>
                        <tr><td><br/></td></tr>
                        <!-- figure out logo -->
                        <!--<tr><td class="left-column">Logo: </td><td><label class="btn btn-default">Browse <input type="file" hidden></label></td></tr> -->
                        </table>
                    </div>
                </div>
        </fieldset>
        <fieldset class="col-xs-6" style="display:inline-block;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table>
                        <tr><td><b><u>Include:</u></b></td></tr>
                        <tr><td>
                            <input class="form-check-input" type="checkbox" value="" id="performer">
                            <label class="form-check-label" for="performer">Performer(s)&nbsp;&nbsp;</label>
                        </td>
                            <td>
                            <input class="form-check-input" type="checkbox" value="" id="location">
                            <label class="form-check-label" for="location">Location</label>
                        </td></tr>
                        <tr><td>
                            <input class="form-check-input" type="checkbox" value="" id="status">
                            <label class="form-check-label" for="status">Status</label>
                        </td>
                            <td>
                            <input class="form-check-input" type="checkbox" value="" id="capacity">
                            <label class="form-check-label" for="capacity">Seating Capacity</label>
                        </td></tr>
                        <tr><td>
                            <input class="form-check-input" type="checkbox" value="" id="date">
                            <label class="form-check-label" for="date">Event Date</label>
                        </td>
                        <td>
                            <input class="form-check-input" type="checkbox" value="" id="time">
                            <label class="form-check-label" for="time">Event Time</label>
                        </td></tr>
                        <tr/><td>
                            <input class="form-check-input" type="checkbox" value="" id="manager">
                            <label class="form-check-label" for="manager">Event Manager</label>
                        </td></tr>
                        <tr><td></td></tr>
                        </table>
                    </div>
                </div>
        </fieldset>
        <br/><br/>
        <fieldset class="col-xs-14" style="display:inline-block;">
            <div class="panel panel-default">
                <div class="panel-body">
                    
                    <b>Date Range:</b><br/><br/>
                    From <input type="text" name="date1" size="10"> To: <input type="text" name="date2" size="10">
                </div>
            </div>
        </fieldset>
        <br/><br/>
        <input style="float:left" type="reset" value="Reset">
        <input style="float:center" type="submit" value="Preview">
        <input style="float:right" type="submit" value="Submit">
    </center>
    </div>
    </form>
    
    

</body>

</html>