
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
                <li class="active"><a href="Create_New_Location.php">Create Location</a></li>
                <li><a href="#">Page 3</a></li>
                <li><a href="Logout.php" tile="Logout">Logout</a></li>
            </ul>
            </div>
        </nav>
        <center>
        <h1>New Location created</h1>
         </center>
        Welcome
        <?php echo $_POST["name"];?> <?php echo $_POST["name"]; ?>
        <br> Your address is <?php echo $_POST["apt_no"];?> <?php echo $_POST["street"];?> <?php echo $_POST["city"];?> 
        <?php echo $_POST["state"];?> <?php echo $_POST["country"];?> <?php echo $_POST["zipcode"];?>
        <br> Your contact is <?php echo $_POST["contactname"];?>
        <br> Their email address is: <?php echo $_POST["email"]; ?>
        <br> Their office phone # is: <?php echo $_POST["officephone"]; ?>
        <br> Their cell phone # is: <?php echo $_POST["cellphone"]; ?>
        <br> The seating capacity is: <?php echo $_POST["capacity"]; ?>

        <br><br><a href="HomePage.php"><button type="submit">Return to Home Page</button></a>
        
    </body>

</html>