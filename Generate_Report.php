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
            font-size: 20px;
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
    
    
    <center>
        <h1>Generate Event Status Report</h1>
    </center>
    <?php
        require ('conn.php');
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            header("Location: Produce_Detail_Report.php");
        }
    ?>
    
    <form action="Produce_Detail_Report.php" method="POST">
    <div class="panel panel-default">
        <div class="panel-body">
        
        <center>
        <fieldset class="col-xs-6" style="display:inline-block;">
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
                        <tr><td class="left-column">Approved Event : </td><td>
                        <?php
                                echo '<form method = "POST">';
                                echo '<select name="event_id" id="event_id">';
                                $sql2 = "select * from Event where Event_Approval_Status = 'YES' order by Event_Name";
                                $prep = $conn->prepare($sql2);
                                $prep -> execute();
                                $files = $prep->fetchAll();
                                echo "<option value=0>None Selected</option>";
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
                            ?>
                        <br/></td></tr>
                        <tr><td><br/></td></tr>
                        </table>
                    </div>
                </div>
        </fieldset>
        <fieldset class="col-xs-6" style="display:inline-block;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table>
                        <tr><td><br/><br/><br/></td></tr>
                        <tr><td><h4><b><u><font size="5">Include:</font></u></b></h4></td></tr>
                        <tr><td>
                            <input class="form-check-input" type="checkbox" value="Yes" name="performer" id="performer" checked>
                            <label class="form-check-label" for="performer">Performer(s)&nbsp;&nbsp;</label>
                        </td>
                            <td>
                            <input class="form-check-input" type="checkbox" value="Yes" name="location" id="location" checked>
                            <label class="form-check-label" for="location">Location</label>
                        </td></tr>
                        <tr><td>
                            <input class="form-check-input" type="checkbox" value="Yes" name="agent" id="agent" checked>
                            <label class="form-check-label" for="status">Agent</label>
                        </td>
                            <td>
                            <input class="form-check-input" type="checkbox" value="Yes" name="vendor" id="vendor" checked>
                            <label class="form-check-label" for="vendor">Event Vendors</label>

                        </td></tr>
                        <tr><td>
                            <input class="form-check-input" type="checkbox" value="Yes" name="manager" id="manager" checked>
                            <label class="form-check-label" for="manager">Event Manager&nbsp;&nbsp;</label>
                        </td>
                        <td>
                            <input class="form-check-input" type="checkbox" value="Yes" name="capacity" id="capacity" checked>
                            <label class="form-check-label" for="capacity">Seating Capacity</label>
                        </td></tr>
                        <tr><td><br/><br/></td></tr>
                        <!-- <tr><td><br/></td></tr> -->
                        </table>
                    </div>
                </div>
        </fieldset>
        <br/><br/>
        <fieldset class="col-xs-14" style="display:inline-block;">
            <div class="panel panel-default">
                <div class="panel-body">
                    
                    <h4 style="font-size: 24px;"><b>Date Range:</b></h4>
                    From: <input type="date" name="date1" size="10"> To: <input type="date" name="date2" size="10">
                </div>
            </div>
        </fieldset>
        <br/><br/>
        
        <input style="float:left; font-size: 20px;" type="reset" value="Reset">
        <input style="float:center; font-size: 20px;" type="submit" value="Preview">
        <!--<button style="float:center" onclick="window.location.href='Produce_Detail_Report.php'">Preview</button>-->
        <input style="float:right; font-size: 20px;" type="submit" value="Submit">
        <!--<button style="float:right" onclick="window.location.href='Produce_Detail_Report.php'">Submit</button>-->
    </center>
    </div>
    </form>
    
    

</body>

</html>