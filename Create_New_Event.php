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
        }
        td
        {
            font-size:20px;
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
            <li><a href="Create_New_Agent.php">Create Agent</a></li>
            <li><a href="Create_New_Location.php">Create Location</a></li>
            <li class="active"><a href="Create_New_Event.php">Create Event</a></li>
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
            $loc_id = $_POST['loc_id'];
            $event_location = "";
            if($_POST['loc_id'])
            {
                $loc_id = $_POST['loc_id'];
                $sqlloc = "select * from Location where Location_Id = $loc_id";
                foreach($conn->query($sqlloc) as $fileloc)
                {
                    $event_location = $fileloc['Location_Name'];
                }
            }
            $Art_id = $_POST['artist_id'];
            $event_performer = "";
            // $sqlperform= "select * from Artist_Record where Artist_ID = $Art_id";
            if($_POST['artist_id'])
            {
                $sqlperform= "select * from Artist_Record where Artist_ID = $Art_id";
                foreach($conn->query($sqlperform) as $fileperform)
                {
                    $event_performer = $fileperform['Artist_FName']." ".$fileperform['Artist_LName'];
                }
            }
            $ven_id = $_POST['vendor_id'];
            $event_vendor = "";
            // $sqlperform= "select * from Artist_Record where Artist_ID = $Art_id";
            if($_POST['vendor_id'])
            {
                $sqlven= "select * from Vendor where Vendor_ID = $ven_id";
                foreach($conn->query($sqlven) as $fileven)
                {
                    $event_vendor = $fileven['Vendor_Name'];
                }
            }
            
            $event_capacity = $_POST['capacity'];
            $event_date = $_POST['date'];
            $event_time = $_POST['starttime'];
            $event_notes = $_POST['comments'];
            $sql="insert into Event
                                (
                                    Event_Name,
                                    Event_Location_ID,
                                    Event_Location,
                                    Event_Performer_ID,
                                    Event_Performer,
                                    Event_Vendor_ID,
                                    Event_Vendor,
                                    Event_Capacity,
                                    Event_Date,
                                    Event_Time,
                                    Event_Comments
                                )
                                values
                                (
                                   '$event_name',
                                   '$loc_id',
                                   '$event_location',
                                   '$Art_id',
                                   '$event_performer',
                                   '$ven_id',
                                   '$event_vendor',
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
                        <tr><td><br/></td></tr>
                        <tr><td class="left-column">Event Name: </td><td style="text-align:right"><input type="text" name="name" style="width: 150px;"></td></tr>
                        <tr><td class="left-column">Band/Artist(s) : </td><td style="text-align:right">
                            
                            <?php
                            
                                echo '<form method = "POST">';
                                echo '<select name="artist_id" id="artist_id" style="width: 150px;">';
                                $sql2 = "select * from Artist_Record order by Artist_FName";
                                $prep = $conn->prepare($sql2);
                                $prep -> execute();
                                $files = $prep->fetchAll();
                                echo "<option value=0>None Selected</option>";
                                foreach($files as $row2)
                                {

                                     echo "<option value='";
                                     echo $row2['Artist_ID'];
                                     echo "'>";
                                     echo $row2['Artist_FName'];
                                     echo " ";
                                     echo $row2['Artist_LName'];
                                     echo "</option>";
                                }
                                echo '</select>';
                                

                            ?>
                        </td></tr>
                        <tr><td class="left-column">Location Name : </td><td style="text-align:right">
                            
                            <?php
                                
                                    
                                    echo '<select name="loc_id" id="loc_id" style="width: 150px;">';
                                    $sql3 = "select * from Location order by Location_Name";
                                    $prep1 = $conn->prepare($sql3);
                                    $prep1 -> execute();
                                    $files1 = $prep1->fetchAll();
                                    echo "<option value=0>None Selected</option>";
                                    foreach($files1 as $row3)
                                    {
                                        echo "<option value='";
                                        echo $row3['Location_ID'];
                                        echo "'>";
                                        echo $row3['Location_Name'];
                                        echo "</option>";
                                    }
                                    echo '</select>';
                            ?>
                        </td></tr>
                        <tr><td class="left-column">Vendor: </td><td style="text-align:right">
                                <?php
                                    echo '<select name="vendor_id" id="loc_id" style="width: 150px;">';
                                            $sql4 = "select * from Vendor order by Vendor_Name";
                                            $prep2 = $conn->prepare($sql4);
                                            $prep2 -> execute();
                                            $files2 = $prep2->fetchAll();
                                            echo "<option value=0>None Selected</option>";
                                            foreach($files2 as $row4)
                                            {
                                                echo "<option value='";
                                                echo $row4['Vendor_ID'];
                                                echo "'>";
                                                echo $row4['Vendor_Name'];
                                                echo "</option>";
                                            }
                                            echo '</select>';
                                            echo '</form>';
                                ?>
                        </td></tr>
                        </table>
                    </div>
                </div>
        </fieldset>
        <fieldset class="col-xs-6" style="display:inline-block;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table>
                        <tr><td class="left-column">Event Date : </td><td><input type="date" name="date" style="width: 150px"></td></tr>
                        <tr><td class="left-column">Event Start Time : </td><td><input type="time" name="starttime" style="width: 150px"></td></tr>
                        <tr><td class="left-column">Event End Time : </td><td><input type="time" name="endtime" style="width: 150px"></td></tr>
                        <!-- make this dropdown -->
                        <tr><td class="left-column">Seating Capacity: </td><td style="text-align:right"><input type="text" name="capacity" style="width: 150px"></td></tr>
                        </table>
                    </div>
                </div>
        </fieldset>
        <br/><br/>
        <div class="col-xs-12 panel panel-default">
                <div class="panel-body">
                    <h4 style="font-size: 24px;"><b>Comments:</b></h4>
                    <textarea rows="2" cols="150" name="comments" ></textarea>
                </div>
        </div></center>
        <br/><br/>
        <input style="float:left; font-size: 20px;" type="reset" value="Reset">
        <input style="float:right; font-size: 20px;" type="submit" value="Submit">
        <div class="clearfix"></div>
        </div>
    </div>
    </form>

</body>

</html>