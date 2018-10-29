
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
                <li class="active"><a href="#">Create Artist</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
                <li><a href="Logout.php" tile="Logout">Logout</a></li>
            </ul>
            </div>
        </nav>
        <center>
        <h1>New Artist created</h1>
         </center>
        Welcome
        <?php echo $_POST["firstname"];?> <?php echo $_POST["lastname"]; ?>
        <br> Your address is <?php echo $_POST["apt_no"];?> <?php echo $_POST["street"];?> <?php echo $_POST["city"];?> 
        <?php echo $_POST["state"];?> <?php echo $_POST["country"];?> <?php echo $_POST["zipcode"];?>
        <br> Your email address is: <?php echo $_POST["email"]; ?>

    </body>

</html>
