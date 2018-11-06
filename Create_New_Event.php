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
            <li><a href="Create_New_Location.php">Create Location</a></li>
            <li class="active"><a href="Create_New_Event.php">Create Event</a></li>
            <li><a href="Approve_Event.php">Approve Event</a></li>
            <li><a href="Logout.php" tile="Logout">Logout</a></li>
        </ul>
        </div> 
    </nav>

    <center>
        <h1>Create New Event</h1>
    </center>
    <?php
        require ('conn.php');
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $event_name = $_POST['name'];
            $event_location = $_POST['location'];
            $event_performer = $_POST['performer'];
            $event_capacity = $_POST['capacity'];
            $event_date = $_POST['date'];
            $event_time = $_POST['time'];
            $event_notes = $_POST['notes'];
            $sql="insert into Event
                                (
                                    Event_Name,
                                    Event_Location,
                                    Event_Performer,
                                    Event_Capacity,
                                    Event_Date,
                                    Event_Time,
                                    Event_Comments
                                )
                                values
                                (
                                   '$event_name',
                                   '$event_location',
                                   '$event_performer',
                                   '$event_capacity',
                                   '$event_date',
                                   '$event_time',
                                   '$event_notes' 
                                )";
            if ($conn->query($sql) == TRUE)
            {
                $last_id = $conn->lastInsertId();
                $get_info = "?success=true&id=".$last_id;
                header("Location: New_Event_Notification.php".$get_info);
            }
            else
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    ?>
    <form action="Create_New_Event.php" method="POST">
    <div class="panel panel-default">
        <div class="panel-body">
        
        <center><fieldset class="col-xs-6" style="display:inline-block;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table>
                        <!-- make these dropdowns -->
                        <tr><td class="left-column">Event Name: </td><td style="text-align:right"><input type="text" name="name"></td></tr>
                        <tr><td class="left-column">Band/Artist(s) : </td><td style="text-align:right"><input type="text" name="performer"></td></tr>
                        <tr><td class="left-column">Location Name : </td><td style="text-align:right"><input type="text" name="location"></td></tr>
                        </table>
                    </div>
                </div>
        </fieldset>
        <fieldset class="col-xs-6" style="display:inline-block;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table>
                        <tr><td class="left-column">Event Date : </td><td style="text-align:right"><input type="text" name="date"></td></tr>
                        <tr><td class="left-column">Event Time : </td><td style="text-align:right"><input type="text" name="time"></td></tr>
                        <!-- make this dropdown -->
                        <tr><td class="left-column">Seating Capacity: </td><td style="text-align:right"><input type="text" name="capacity"></td></tr>
                        </table>
                    </div>
                </div>
        </fieldset>
        <br/><br/>
        Notes : <input type="text" name="notes" >
        <br/><br/>
        <input style="float:left" type="reset" value="Reset">
        <input style="float:right" type="submit" value="Submit">
        <div class="clearfix"></div>
        </div>
    </div>
    </form>

</body>

</html>