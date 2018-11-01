
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
                <li class="active"><a href="Create_New_Artist.php">Create Artist</a></li>
                <li><a href="Create_New_Location.php">Create Location</a></li>
                <li><a href="Create_New_Event.php">Create Event</a></li>
                <li><a href="Approve_Event.php">Approve Event</a></li>
                <li><a href="Logout.php" tile="Logout">Logout</a></li>
            </ul>
            </div>
        </nav>
        <center>
        <h1>New Artist created</h1>
        </center>

        <?php
            require ('conn.php');
            $id = intval($_GET['id']);
            $sql = "select * from Artist_Record where Artist_ID = $id";
            foreach($conn->query($sql) as $row3)
            {
                echo $row3['Artist_FName']." ".$row3['Artist_LName']." has been added to the database"."</br>";
                echo "There address is: "."</br>";
                echo $row3['Artist_Apt']." ".$row3['Artist_Street']." ".$row3['Artist_City']." ".$row3['Artist_State']." ".$row3['Artist_Country']." ".$row3['Artist_ZIP'];
                echo "<br> Your email address is: ".$row3['Artist_Email'];
            }//end foreach

        ?>

        <br><br><a href="HomePage.php"><button type="submit">Return to Home Page</button></a>
        
    </body>

</html>
