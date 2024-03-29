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
            <li class="active"><a href="Create_New_Location.php">Create Location</a></li>
            <li><a href="Create_New_Event.php">Create Event</a></li>
            <li><a href="Logout.php" tile="Logout">Logout</a></li>
        </ul>
        </div> 
    </nav>

    <center>
        <h1>Create New Location</h1>
    </center>
    <?php
        require ('conn.php');

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $loc_name = $_POST['name'];
            $loc_man = $_POST['contactname'];
            $loc_man_email = $_POST['email'];
            $loc_office_phone = $_POST['officephone'];
            $loc_man_cphone = $_POST['cellphone'];
            $loc_capacity = $_POST['capacity'];
            $loc_street = $_POST['street'];
            $loc_city = $_POST['city'];
            $loc_state = $_POST['state'];
            $loc_country = $_POST['country'];
            $loc_zip = $_POST['zipcode'];
            $loc_comment = $_POST['notes'];
            $sql="insert into Location 
                                (
                                    Location_Name, 
                                    Location_Manager,
                                    Location_M_Email, 
                                    Location_M_Office_Phone,
                                    Location_M_Cell_Phone,
                                    Location_Seating_Capacity,
                                    Location_Street,
                                    Location_City,
                                    Location_State,
                                    Location_Country,
                                    Location_ZIP,
                                    Location_Comments
                                )
                                values
                                (
                                    '$loc_name',
                                    '$loc_man',
                                    '$loc_man_email',
                                    '$loc_office_phone',
                                    '$loc_man_cphone',
                                    '$loc_capacity',
                                    '$loc_street',
                                    '$loc_city',
                                    '$loc_state',
                                    '$loc_country',
                                    '$loc_zip',
                                    '$loc_comment'
                                )";
            if ($conn->query($sql) == TRUE)
            {
                $last_id = $conn->lastInsertId();
                $get_info = "?success=true&id=".$last_id;
                header("Location: New_Location_Notification.php".$get_info);
            }
            else
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    ?>
    <form action="Create_New_Location.php" method="POST">
    <div class="panel panel-default">
        <div class="panel-body">
        
        <center><fieldset class="col-xs-6" style="display:inline-block;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table>
                        <tr><td class="left-column">Location Name : </td><td style="text-align:right"><input type="text" name="name"></td></tr>
                        <tr><td class="left-column">Contact name : </td><td style="text-align:right"><input type="text" name="contactname"></td></tr>
                        <tr><td class="left-column">E-mail : </td><td style="text-align:right"><input type="text" name="email" placeholder="xxx@xxx.xxx"></td></tr>
                        <tr><td class="left-column">Office Phone # : </td><td style="text-align:right"><input type="text" name="officephone" placeholder="###-###-####"></td></tr>
                        <tr><td class="left-column">Cell Phone # : </td><td style="text-align:right"><input type="text" name="cellphone" placeholder="###-###-####"></td></tr>
                        <tr><td class="left-column">Seating Capacity: </td><td style="text-align:right"><input type="text" name="capacity"></td></tr>
                        </table>
                    </div>
                </div>
        </fieldset>
        <fieldset class="col-xs-6" style="display:inline-block;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table>
                        <tr><td class="left-column">Apt. # : </td><td><input type="text" name="apt_no"></td></tr>
                        <tr><td class="left-column">Street : </td><td><input type="text" name="street"></td></tr>
                        <tr><td class="left-column">City : </td><td><input type="text" name="city"></td></tr>
                        <tr><td class="left-column">State : </td><td><select name="state" style="width:175px"><option>Alabama</option><option>Alaska</option><option>Arizona</option><option>Arkansas</option><option>California</option><option>Colorado</option><option>Connecticut</option><option>Delaware</option><option>Florida</option><option>Georgia</option><option>Hawaii</option><option>Idaho</option><option>Illinois</option><option>Indiana</option><option>Iowa</option><option>Kansas</option><option>Kentucky</option><option>Louisiana</option><option>Maine</option><option>Maryland</option><option>Massachusetts</option><option>Michigan</option><option>Minnesota</option><option>Mississippi</option><option>Missouri</option><option>Montana</option><option>Nebraska</option><option>Nevada</option><option>New Hampshire</option><option>New Jersey</option><option>New Mexico</option><option>New York</option><option>North Carolina</option><option>North Dakota</option><option>Ohio</option><option>Oklahoma</option><option>Oregon</option><option>Pennsylvania</option><option>Rhode Island</option><option>South Carolina</option><option>South Dakota</option><option>Tennessee</option><option>Texas</option><option>Utah</option><option>Vermont</option><option>Virginia</option><option>Washington</option><option>West Virginia</option><option>Wisconsin</option><option>Wyoming</option></select></td></tr>
                        <tr><td class="left-column">Country: </td><td><input type="text" value="United States" name="country"></td></tr>
                        <tr><td class="left-column">ZIP : </td><td><input type="text" name="zipcode" placeholder="#####"></td></tr>
                        </table>
                    </div>
                </div>
        </fieldset>
        <br/><br/>
        <div class="col-xs-12 panel panel-default">
                <div class="panel-body">
                    <h4 style="font-size:24px;"><b>Comments:</b></h4>
                    <textarea rows="2" cols="150" name="comments" ></textarea>
                </div>
        </div>
        <br/><br/>
        <input style="float:left; font-size:20px;" type="reset" value="Reset">
        <input style="float:right; font-size: 20px;" type="submit" value="Submit">
        
    </div>
    </form>

</body>

</html>