
<html>
    <head>
        <title>GEM Systems</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Global Entertainment Incorporated</a>
            </div>
            <ul class="nav navbar-nav">
                <li ><a href="HomePage.php">Home</a></li>
                <li><a href="Create_New_Artist.php">Create Artist</a></li>
                <li><a href="Create_New_Location.php">Create Location</a></li>
                <li class="active"><a href="Create_New_Event.php">Create Event</a></li>
                <li><a href="Approve_Event.php">Approve Event</a></li>
                <li><a href="Logout.php" tile="Logout">Logout</a></li>
            </ul>
            </div>
        </nav>
        <center>
        <h1>New Event created</h1>
         </center>
        Welcome
        <br>Your performer(s) is/are: <?php echo $_POST["performer"]; ?>
        <br> Your location is: <?php echo $_POST["location"];?>
        <br> Your date is: <?php echo $_POST["date"];?>
        <br> Your time is: <?php echo $_POST["time"]; ?>
        <br> Your status is: <?php echo $_POST["status"]; ?>
        <br> Your seating capacity is: <?php echo $_POST["capacity"]; ?>
        <br> The event manager is: <?php echo $_POST["manager"]; ?>
        <br> Here are your notes: <?php echo $_POST["notes"]; ?>

        <br><br><a href="HomePage.php"><button type="submit">Return to Home Page</button></a>
        
    </body>

</html>
