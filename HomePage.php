<?php
    session_start();

    if(!$_SESSION['valid'] )
    {
        echo 'Invalid Login';
        header("location:Login.php");
    // session is true and equals to string
    }
    require ('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
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
            <li class="active"><a href="#">Home</a></li>
            <li><a href="Create_New_Artist.php">Create Artist</a></li>
            <li><a href="Create_New_Agent.php">Create Agent</a></li>
            <li><a href="Create_New_Location.php">Create Location</a></li>
            <li><a href="Create_New_Event.php">Create Event</a></li>
            <li><a href="Approve_Event.php">Approve Event</a></li>
            <li><a href="Logout.php" tile="Logout">Logout</a></li>
        </ul>
        </div>
    </nav>
    <center>
        <h1>Home Page</h1>
        <br/>
    </center>
    
    <form action="HomePage.php" method="post">
    </form>
    
            <center><fieldset class="col-xs-6" style="display:inline-block;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <br/>
                        <a href="Generate_Report.php"><h3>Generate a Report</h3></a>
                        <br/>
                    </div>
                </div>
        </fieldset>
        <fieldset class="col-xs-6" style="display:inline-block;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <!-- create dropdown then display info -->
                        <h3>Approve Event:</h3> <br/>
                        <?php
                            
                                echo '<form method = "POST">';
                                echo '<select name="event_id" id="event_id">';
                                $sql2 = "select * from Event";
                                $prep = $conn->prepare($sql2);
                                $prep -> execute();
                                $files = $prep->fetchAll();
                                foreach($files as $row2)
                                {

                                    echo "<option value='";
                                    echo $row2['Event_ID'];
                                    echo "'>";
                                    echo $row2['Event_Name'];
                                    echo "</option>";
                                }
                                echo '</select>';
                                echo '</form>';

                            ?><button><a href="Approve_Event.php".$_POST['event_id']>Go</a></button>
                    </div>
                </div>
        </fieldset></center>

</body>
</html>