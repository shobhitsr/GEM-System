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
        h4
        {
            text-align: center;
        }
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
            <li><a href="Create_New_Agent.php">Create Agent</a></li>
            <li><a href="Create_New_Location.php">Create Location</a></li>
            <li><a href="Create_New_Event.php">Create Event</a></li>
            <li><a href="Logout.php" tile="Logout">Logout</a></li>
        </ul>
        </div> 
    </nav>

    <!--copied below from create_new_location for your convenience?-->
    <?php
        require ('conn.php');

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            //insert stuff here
            
            
            if ($conn->query($sql) == TRUE)
            {
                
                //$last_id = $conn->lastInsertId();
                //$get_info = "?success=true&id=".$last_id;
                //header("Location: New_Location_Notification.php".$get_info);
            }
            else
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    ?>
    
    
    <center>
        <h1>Approve Event</h1>
    </center>
    <form action="Approval_Notification.php" method="POST">
    <div class="panel panel-default">
        <div class="panel-body">
        
        <center><fieldset class="col-xs-12" style="display:inline-block;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <center><fieldset class="col-xs-6" style="display:inline-block;">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                    <legend>Event Details</legend>
                                        <table>
                                        <tr><td class="left-column">Event Name : </td><td>insert event name<!--$_POST['eventname']?--></td></tr>
                                        <tr><td class="left-column">Event Date : </td><td>insert event date</td></tr>
                                        <tr><td class="left-column">Event Time : </td><td>insert event time</td></tr>
                                        <tr><td class="left-column">Event Comments : </td><td>insert event comments</td></tr>
                                        </table>
                                    </div>
                                </div>
                        </fieldset>
                        <fieldset class="col-xs-6" style="display:inline-block;">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                    <legend>Event Location</legend>
                                        <table>
                                        <tr><td class="left-column">Location Name : </td><td>insert location name</td></tr>
                                        <tr><td class="left-column">Location Address : </td><td>insert location address</td></tr>
                                        <tr><td class="left-column">Location Capacity : </td><td>insert location capacity</td></tr>
                                        <tr><td class="left-column">Location Comments : </td><td>insert location comments</td></tr>
                                        </table>
                                    </div>
                                </div>
                        </fieldset>
                        <br/>
                        <fieldset class="col-xs-6" style="display:inline-block;">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                    <legend>Performing Artist</legend>
                                        <table>
                                        <tr><td class="left-column">Artist Name : </td><td>insert artist name</td></tr>
                                        <tr><td class="left-column">Artist Address : </td><td>insert artist address</td></tr>
                                        <tr><td class="left-column">Artist Rate : </td><td>insert artist rate</td></tr>
                                        <tr><td class="left-column">Artist Phone : </td><td>insert artist phone</td></tr>
                                        <tr><td class="left-column">Artist Email : </td><td>insert artist email</td></tr>
                                        <tr><td class="left-column">Artist Comments : </td><td>insert artist comments</td></tr>
                                        </table>
                                    </div>
                                </div>
                        </fieldset>
                        <fieldset class="col-xs-6" style="display:inline-block;">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                    <legend>Artist's Agent</legend>
                                        <table>
                                        <tr><td><br/></td></tr>
                                        <tr><td class="left-column">Agent's Name : </td><td>insert agent name</td></tr>
                                        <tr><td class="left-column">Agent Phone : </td><td>insert agent phone</td></tr>
                                        <tr><td class="left-column">Agent Address : </td><td>insert agent address</td></tr>
                                        <tr><td class="left-column">Agent Comments : </td><td>insert agent comments</td></tr>
                                        <tr><td><br/></td></tr>
                                        </table>
                                    </div>
                                </div>
                        </fieldset>
                        <br/><br/>
                        <fieldset class="col-xs-6" style="display:inline-block;">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                    <legend>Event Vendors</legend>
                                        <table>
                                        <tr><td class="left-column">Vendor Name : </td><td>insert vendor name<!--insert vendor name--></td></tr>
                                        <tr><td class="left-column">Vendor Category : </td><td>insert vendor category<!-- insert vendor category --></td></tr>
                                        <tr><td class="left-column">Vendor Email : </td><td>insert vendor email<!-- insert vendor email --></td></tr>
                                        <tr><td class="left-column">Vendor Comments : </td><td>insert vendor comments<!-- insert vendor comments --></td></tr>
                                        <!-- repeat the above 4 for all vendors? -->
                                        </table>
                                    </div>
                                </div>
                        </fieldset>
                        </center>
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