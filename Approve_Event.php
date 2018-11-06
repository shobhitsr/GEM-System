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
    <form action="Approval_Notification.php" method="POST">
    <div class="panel panel-default">
        <div class="panel-body">
        
        <center><fieldset class="col-xs-12" style="display:inline-block;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <!-- create dropdown then display info -->
                        Event : <input type="text" name="event" >
                    </div>
                </div>
            <input style="float:left" type="reset" value="Reset">
        <input style="float:right" type="submit" value="Approve">
        </fieldset>
        <br/><br/>
        
    </div>
    </form>

</body>

</html>