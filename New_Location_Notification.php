
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
                <li><a href="Create_New_Agent.php">Create Agent</a></li>
                <li class="active"><a href="Create_New_Location.php">Create Location</a></li>
                <li><a href="Create_New_Event.php">Create Event</a></li>
                <li><a href="Approve_Event.php">Approve Event</a></li>
                <li><a href="Logout.php" tile="Logout">Logout</a></li>
            </ul>
            </div>
        </nav>
        <center>
        <h1>New Location created</h1>
         </center>
        <?php
            require ('conn.php');
            $id = intval($_GET['id']);
            $sql = "select * from Location where Location_ID = $id";
            foreach($conn->query($sql) as $row3)
            {
                echo "The Location ".$row3['Location_Name']." has been added to the database"."</br>";
                echo "The Location Manager is ".$row3['Location_Manager']."</br>";
                echo "The managers contact information is:</br>";
                echo "Email: ".$row3['Location_M_Email']."</br>";
                echo "Office Phone: ".$row3['Location_M_Office_Phone']."</br>";
                echo "Cell Phone: ".$row3['Location_M_Cell_Phone']."</br>";
                echo "The location's Seating Capacity is: ".$row3['Location_Seating_Capacity']."</br>";
                echo "The address of the location is"."</br>";
                echo $row3['Location_Street']." ".$row3['Location_City']." ".$row3['Location_State']." ".$row3['Location_Country']." ".$row3['Location_ZIP'];
                echo "<br>Comments about the location are: ".$row3['Location_Comments'];
            }//end foreach

        ?>

        <br><br><a href="HomePage.php"><button type="submit">Return to Home Page</button></a>
        
    </body>

</html>
