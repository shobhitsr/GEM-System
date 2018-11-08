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
            $id = $_POST['event_id'];
            $sqlApproved = "update Event Set Event_Approval_Status = 'YES' where Event_ID = $id";
            
            if ($conn->query($sqlApproved) == TRUE)
            {                
                $get_info = "?success=true&id=".$id;
                header("Location: Event_Approved_Notification.php".$get_info);
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
    <form action="Approve_Event.php" method="POST">
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
                                        <tr><td class="left-column">Event Name : </td><td>
                                        <?php
                                            echo '<form method = "POST">';
                                            $id = intval($_GET['evt_id']);
                                            $sql2 = "select Event_Name from Event where Event_ID = $id";
                                            $prep = $conn->prepare($sql2);
                                            $prep -> execute();
                                            $files = $prep->fetchAll();
                                            foreach($files as $row2)
                                            {
                                                echo $row2['Event_Name'];
                                            }
                                        ?>
                                        </td></tr>
                                        <tr><td class="left-column">Event Date : </td><td>
                                        <?php
                                            echo '<form method = "POST">';
                                            $id = intval($_GET['evt_id']);
                                            $sql2 = "select Event_Date from Event where Event_ID = $id";
                                            $prep = $conn->prepare($sql2);
                                            $prep -> execute();
                                            $files = $prep->fetchAll();
                                            foreach($files as $row2)
                                            {
                                                echo $row2['Event_Date'];
                                            }
                                        ?>
                                        </td></tr>
                                        <tr><td class="left-column">Event Time : </td><td>
                                        <?php
                                            echo '<form method = "POST">';
                                            $id = intval($_GET['evt_id']);
                                            $sql2 = "select Event_Time from Event where Event_ID = $id";
                                            $prep = $conn->prepare($sql2);
                                            $prep -> execute();
                                            $files = $prep->fetchAll();
                                            foreach($files as $row2)
                                            {
                                                echo $row2['Event_Time'];
                                            }
                                        ?>
                                        </td></tr>
                                        <tr><td class="left-column">Event Comments : </td><td>
                                        <?php
                                            echo '<form method = "POST">';
                                            $id = intval($_GET['evt_id']);
                                            $sql2 = "select Event_Comments from Event where Event_ID = $id";
                                            $prep = $conn->prepare($sql2);
                                            $prep -> execute();
                                            $files = $prep->fetchAll();
                                            foreach($files as $row2)
                                            {
                                                echo $row2['Event_Comments'];
                                            }
                                        ?>
                                        </td></tr>
                                        </table>
                                    </div>
                                </div>
                        </fieldset>
                        <fieldset class="col-xs-6" style="display:inline-block;">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                    <legend>Event Location</legend>
                                        <table>
                                        <tr><td class="left-column">Location Name : </td><td>
                                        <?php
                                            echo '<form method = "POST">';
                                            $id = intval($_GET['evt_id']);
                                            $sql2 = "select Location_Name from Location where Location_ID = (select Event_Location_ID from Event where Event_ID = $id)";
                                            $prep = $conn->prepare($sql2);
                                            $prep -> execute();
                                            $files = $prep->fetchAll();
                                            foreach($files as $row2)
                                            {
                                                echo $row2['Location_Name'];
                                            }
                                        ?>
                                        </td></tr>
                                        <tr><td class="left-column">Location Address : </td><td>
                                        <?php
                                            echo '<form method = "POST">';
                                            $id = intval($_GET['evt_id']);
                                            $sql2 = "select Location_Street, Location_City, Location_State, Location_Country, Location_ZIP from Location where Location_ID = (select Event_Location_ID from Event where Event_ID = $id)";
                                            $prep = $conn->prepare($sql2);
                                            $prep -> execute();
                                            $files = $prep->fetchAll();
                                            foreach($files as $row2)
                                            {
                                                echo $row2['Location_Street'].",".$row2['Location_City'].",".$row2['Location_State'].",".$row2['Location_Country'].",".$row2['Location_ZIP'];
                                            }
                                        ?>
                                        </td></tr>
                                        <tr><td class="left-column">Location Capacity : </td><td>
                                        <?php
                                            echo '<form method = "POST">';
                                            $id = intval($_GET['evt_id']);
                                            $sql2 = "select Location_Seating_Capacity from Location where Location_ID = (select Event_Location_ID from Event where Event_ID = $id)";
                                            $prep = $conn->prepare($sql2);
                                            $prep -> execute();
                                            $files = $prep->fetchAll();
                                            foreach($files as $row2)
                                            {
                                                echo $row2['Location_Seating_Capacity'];
                                            }
                                        ?>
                                        </td></tr>
                                        <tr><td class="left-column">Location Comments : </td><td>
                                        <?php
                                            echo '<form method = "POST">';
                                            $id = intval($_GET['evt_id']);
                                            $sql2 = "select Location_Comments from Location where Location_ID = (select Event_Location_ID from Event where Event_ID = $id)";
                                            $prep = $conn->prepare($sql2);
                                            $prep -> execute();
                                            $files = $prep->fetchAll();
                                            foreach($files as $row2)
                                            {
                                                echo $row2['Location_Comments'];
                                            }
                                        ?>
                                        </td></tr>
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
                                        <tr><td class="left-column">Artist Name : </td><td>
                                        <?php
                                            echo '<form method = "POST">';
                                            $id = intval($_GET['evt_id']);
                                            $sql2 = "select Artist_FName, Artist_LName from Artist_Record where Artist_ID = (select Event_Performer_ID from Event where Event_ID = $id)";
                                            $prep = $conn->prepare($sql2);
                                            $prep -> execute();
                                            $files = $prep->fetchAll();
                                            foreach($files as $row2)
                                            {
                                                echo $row2['Artist_FName']." ". $row2['Artist_LName'];
                                            }
                                        ?>
                                        </td></tr>
                                        <tr><td class="left-column">Artist Address : </td><td>
                                        <?php
                                            echo '<form method = "POST">';
                                            $id = intval($_GET['evt_id']);
                                            $sql2 = "select Artist_Apt, Artist_Street, Artist_City, Artist_State, Artist_Country, Artist_ZIP from Artist_Record where Artist_ID = (select Event_Performer_ID from Event where Event_ID = $id)";
                                            $prep = $conn->prepare($sql2);
                                            $prep -> execute();
                                            $files = $prep->fetchAll();
                                            foreach($files as $row2)
                                            {
                                                echo $row2['Artist_Apt'].",".$row2['Artist_Street'].",".$row2['Artist_City'].",".$row2['Artist_State'].",".$row2['Artist_Country'].",".$row2['Artist_ZIP'];
                                            }
                                        ?>
                                        </td></tr>
                                        <tr><td class="left-column">Artist Rate : </td><td>
                                        <?php
                                            echo '<form method = "POST">';
                                            $id = intval($_GET['evt_id']);
                                            $sql2 = "select Artist_Rate from Artist_Record where Artist_ID = (select Event_Performer_ID from Event where Event_ID = $id)";
                                            $prep = $conn->prepare($sql2);
                                            $prep -> execute();
                                            $files = $prep->fetchAll();
                                            foreach($files as $row2)
                                            {
                                                echo "$".$row2['Artist_Rate'];
                                            }
                                        ?>
                                        </td></tr>
                                        <tr><td class="left-column">Artist Phone : </td><td>
                                        <?php
                                            echo '<form method = "POST">';
                                            $id = intval($_GET['evt_id']);
                                            $sql2 = "select Artist_Office_Phone from Artist_Record where Artist_ID = (select Event_Performer_ID from Event where Event_ID = $id)";
                                            $prep = $conn->prepare($sql2);
                                            $prep -> execute();
                                            $files = $prep->fetchAll();
                                            foreach($files as $row2)
                                            {
                                                echo $row2['Artist_Office_Phone'];
                                            }
                                        ?>
                                        </td></tr>
                                        <tr><td class="left-column">Artist Email : </td><td>
                                        <?php
                                            echo '<form method = "POST">';
                                            $id = intval($_GET['evt_id']);
                                            $sql2 = "select Artist_Email from Artist_Record where Artist_ID = (select Event_Performer_ID from Event where Event_ID = $id)";
                                            $prep = $conn->prepare($sql2);
                                            $prep -> execute();
                                            $files = $prep->fetchAll();
                                            foreach($files as $row2)
                                            {
                                                echo $row2['Artist_Email'];
                                            }
                                        ?>
                                        </td></tr>
                                        <tr><td class="left-column">Artist Comments : </td><td>
                                        <?php
                                            echo '<form method = "POST">';
                                            $id = intval($_GET['evt_id']);
                                            $sql2 = "select Artist_Comments from Artist_Record where Artist_ID = (select Event_Performer_ID from Event where Event_ID = $id)";
                                            $prep = $conn->prepare($sql2);
                                            $prep -> execute();
                                            $files = $prep->fetchAll();
                                            foreach($files as $row2)
                                            {
                                                echo $row2['Artist_Comments'];
                                            }
                                        ?>
                                        </td></tr>
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
                                        <tr><td class="left-column">Agent's Name : </td><td>
                                        <?php
                                            echo '<form method = "POST">';
                                            $id = intval($_GET['evt_id']);
                                            $sql2 = "select Agent_FName,Agent_LName from Agent where Agent_ID =(select Artist_Agent_ID from Artist_Record where Artist_ID = (select Event_Performer_ID from Event where Event_ID = $id))";
                                            $prep = $conn->prepare($sql2);
                                            $prep -> execute();
                                            $files = $prep->fetchAll();
                                            foreach($files as $row2)
                                            {
                                                echo $row2['Agent_FName']." ".$row2['Agent_LName'];
                                            }
                                        ?>
                                        </td></tr>
                                        <tr><td class="left-column">Agent Phone : </td><td>
                                        <?php
                                            echo '<form method = "POST">';
                                            $id = intval($_GET['evt_id']);
                                            $sql2 = "select Agent_Office_Phone from Agent where Agent_ID =(select Artist_Agent_ID from Artist_Record where Artist_ID = (select Event_Performer_ID from Event where Event_ID = $id))";
                                            $prep = $conn->prepare($sql2);
                                            $prep -> execute();
                                            $files = $prep->fetchAll();
                                            foreach($files as $row2)
                                            {
                                                echo $row2['Agent_Office_Phone'];
                                            }
                                        ?>
                                        </td></tr>
                                        <tr><td class="left-column">Agent Address : </td><td>
                                        <?php
                                            echo '<form method = "POST">';
                                            $id = intval($_GET['evt_id']);
                                            $sql2 = "select Agent_Apt, Agent_Street, Agent_City, Agent_State, Agent_Country, Agent_ZIP from Agent where Agent_ID =(select Artist_Agent_ID from Artist_Record where Artist_ID = (select Event_Performer_ID from Event where Event_ID = $id))";
                                            $prep = $conn->prepare($sql2);
                                            $prep -> execute();
                                            $files = $prep->fetchAll();
                                            foreach($files as $row2)
                                            {
                                                echo $row2['Agent_Apt'].",".$row2['Agent_Street'].",".$row2['Agent_City'].",".$row2['Agent_State'].",".$row2['Agent_Country'].",".$row2['Agent_ZIP'];
                                            }
                                        ?>
                                        </td></tr>
                                        <tr><td class="left-column">Agent Comments : </td><td>
                                        <?php
                                            echo '<form method = "POST">';
                                            $id = intval($_GET['evt_id']);
                                            $sql2 = "select Agent_Comments from Agent where Agent_ID =(select Artist_Agent_ID from Artist_Record where Artist_ID = (select Event_Performer_ID from Event where Event_ID = $id))";
                                            $prep = $conn->prepare($sql2);
                                            $prep -> execute();
                                            $files = $prep->fetchAll();
                                            foreach($files as $row2)
                                            {
                                                echo $row2['Agent_Comments'];
                                            }
                                        ?>
                                        </td></tr>
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
                                        <tr><td class="left-column">Vendor Name : </td><td>
                                        <?php
                                            echo '<form method = "POST">';
                                            $id = intval($_GET['evt_id']);
                                            $sql2 = "select Vendor_Name from Vendor where Vendor_ID = (select Event_Vendor_ID from Event where Event_ID = $id)";
                                            $prep = $conn->prepare($sql2);
                                            $prep -> execute();
                                            $files = $prep->fetchAll();
                                            foreach($files as $row2)
                                            {
                                                echo $row2['Vendor_Name'];
                                            }
                                        ?>
                                        </td></tr>
                                        <tr><td class="left-column">Vendor Category : </td><td>
                                        <?php
                                            echo '<form method = "POST">';
                                            $id = intval($_GET['evt_id']);
                                            $sql2 = "select Vendor_Category from Vendor where Vendor_ID = (select Event_Vendor_ID from Event where Event_ID = $id)";
                                            $prep = $conn->prepare($sql2);
                                            $prep -> execute();
                                            $files = $prep->fetchAll();
                                            foreach($files as $row2)
                                            {
                                                echo $row2['Vendor_Category'];
                                            }
                                        ?>
                                        </td></tr>
                                        <tr><td class="left-column">Vendor Email : </td><td>
                                        <?php
                                            echo '<form method = "POST">';
                                            $id = intval($_GET['evt_id']);
                                            $sql2 = "select Vendor_Email from Vendor where Vendor_ID = (select Event_Vendor_ID from Event where Event_ID = $id)";
                                            $prep = $conn->prepare($sql2);
                                            $prep -> execute();
                                            $files = $prep->fetchAll();
                                            foreach($files as $row2)
                                            {
                                                echo $row2['Vendor_Email'];
                                            }
                                        ?>
                                        </td></tr>
                                        <tr><td class="left-column">Vendor Comments : </td><td>Good Vendor<?php echo '</form>'?></td></tr>
                                        <!-- repeat the above 4 for all vendors? -->
                                        </table>
                                    </div>
                                </div>
                        </fieldset>
                        </center>
                    </div>
                </div>
            <!--<a href="HomePage.php"><button style="float:left">Exit</button></a>-->
            <form method="get" action="HomePage.php">
                <button type="submit">Exit</button>
            </form>
            <?php 
                $id = intval($_GET['evt_id']);
                echo '<input type="hidden" name="event_id" value="';
                echo $id;
                echo '" />';
            ?>
        <input style="float:right" type="submit" value="Approve">
        </fieldset>
        <br/><br/>
        
    </div>
    </form>

</body>

</html>