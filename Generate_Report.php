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
            <li><a href="Create_New_Artist.php">Create Artist</a></li>
            <li><a href="Create_New_Agent.php">Create Agent</a></li>
            <li><a href="Create_New_Location.php">Create Location</a></li>
            <li><a href="Create_New_Event.php">Create Event</a></li>
            <li><a href="Logout.php" tile="Logout">Logout</a></li>
        </ul>
        </div>
    </nav>

    <!--copied below from create_new_location for your convenience?-->
    <?php
        require ('conn.php');

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            //insert stuff here
            
            
            if ($conn->query($sql) == TRUE)
            {
                
                //$last_id = $conn->lastInsertId();
                //$get_info = "?success=true&id=".$last_id;
                //header("Location: New_Location_Notification.php".$get_info);
            }
            else
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    ?>
    
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
                        <tr><td><br/><br/></td></tr>
                        <tr><td class="left-column">Event Status : </td><td><select style="width:175px"><option>Created</option><option>Approved</option><option>Advertised</option><option>Sold Out</option><option>Cancelled</option><option>Completed</option></select></td></tr>
                        <tr><td><br/></td></tr>
                        <tr><td class="left-column">Report Type : </td><td><select style="width:175px"><option>Summary</option><option>Detailed</option></select><br/></td></tr>
                        <tr><td><br/></td></tr>
                        <tr><td class="left-column">Sort By : </td><td><select style="width:175px"><option>Performer</option><option>Location</option><option>Status</option><option>Seating Capacity</option><option selected="selected">Event Date</option><option>Event Time</option><option>Vendors</option></select></td></tr>
                        <tr><td><br/></td></tr>
                        </table>
                    </div>
                </div>
        </fieldset>
        <fieldset class="col-xs-6" style="display:inline-block;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table>
                        <tr><td><h4><b><u>Include:</u></b></h4></td></tr>
                        <tr><td>
                            <input class="form-check-input" type="checkbox" value="" id="performer" checked>
                            <label class="form-check-label" for="performer">Performer(s)&nbsp;&nbsp;</label>
                        </td>
                            <td>
                            <input class="form-check-input" type="checkbox" value="" id="location" checked>
                            <label class="form-check-label" for="location">Location</label>
                        </td></tr>
                        <tr><td>
                            <input class="form-check-input" type="checkbox" value="" id="status" checked>
                            <label class="form-check-label" for="status">Status</label>
                        </td>
                            <td>
                            <input class="form-check-input" type="checkbox" value="" id="capacity" checked>
                            <label class="form-check-label" for="capacity">Seating Capacity</label>
                        </td></tr>
                        <tr><td>
                            <input class="form-check-input" type="checkbox" value="" id="date" checked>
                            <label class="form-check-label" for="date">Event Date</label>
                        </td>
                        <td>
                            <input class="form-check-input" type="checkbox" value="" id="time" checked>
                            <label class="form-check-label" for="time">Event Time</label>
                        </td></tr>
                        <tr><td>
                            <input class="form-check-input" type="checkbox" value="" id="manager" checked>
                            <label class="form-check-label" for="manager">Event Manager&nbsp;&nbsp;</label>
                        </td>
                        <td>
                            <input class="form-check-input" type="checkbox" value="" id="vendor" checked>
                            <label class="form-check-label" for="vendor">Event Vendors</label>
                        </td></tr>
                        <tr><td><br/></td></tr>
                        </table>
                    </div>
                </div>
        </fieldset>
        <br/><br/>
        <fieldset class="col-xs-14" style="display:inline-block;">
            <div class="panel panel-default">
                <div class="panel-body">
                    
                    <h4><b>Date Range:</b></h4>
                    From <input type="date" name="date1" size="10"> To: <input type="date" name="date2" size="10">
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