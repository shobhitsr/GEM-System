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

    <center>
        <h1>Create Artist Record</h1>
    </center>
    <?php
        require ('conn.php');
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $artist_office_phone = $_POST['officephone'];
            $artist_cphone = $_POST['cellphone'];
            $artist_rate = $_POST['concertrate'];
            $apt = $_POST['apt_no'];
            $st = $_POST['street'];
            $cty = $_POST['city'];
            $state = $_POST['state'];
            $cont = $_POST['country'];
            $zip = $_POST['zipcode'];
            $eml = $_POST['email'];
            $comments = $_POST['notes'];
            $sql="insert into Artist_Record 
                                (
                                    Artist_FName, 
                                    Artist_LName, 
                                    Artist_Office_Phone,
                                    Artist_Cell_Phone,
                                    Artist_Rate,
                                    Artist_Apt, 
                                    Artist_Street, 
                                    Artist_City, 
                                    Artist_State, 
                                    Artist_Country, 
                                    Artist_ZIP,
                                    Artist_Email,
                                    Artist_Comments
                                ) 
                                values 
                                (
                                    '$fname', 
                                    '$lname',
                                    '$artist_office_phone',
                                    '$artist_cphone',
                                    '$artist_rate', 
                                    '$apt',
                                    '$st', 
                                    '$cty', 
                                    '$state', 
                                    '$cont', 
                                    '$zip', 
                                    '$eml',
                                    '$comments'
                                )";
            
            if ($conn->query($sql) == TRUE)
            {
                $last_id = $conn->lastInsertId();
                $get_info = "?success=true&id=".$last_id;
                header("Location: New_Artist_Notification.php".$get_info);
            }
            else
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    ?>
    <form action="Create_New_Artist.php" method="POST">
    <div class="panel panel-default">
        <div class="panel-body">
        
        <center><fieldset class="col-xs-6" style="display:inline-block;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table>
                        <tr><td class="left-column">First name : </td><td><input type="text" name="firstname"></td></tr>
                        <tr><td class="left-column">Last name : </td><td><input type="text" name="lastname"></td></tr>
                        <tr><td class="left-column">E-mail : </td><td><input type="text" name="email" ></td></tr>
                        <tr><td class="left-column">Office Phone # : </td><td><input type="text" name="officephone" ></td></tr>
                        <tr><td class="left-column">Cell Phone # : </td><td><input type="text" name="cellphone" ></td></tr>
                        <tr><td class="left-column">Concert Rate Per Event : </td><td><input type="text" name="concertrate" ></td></tr>
                        <!-- figure out logo -->
                        <!--<tr><td class="left-column">Logo: </td><td><label class="btn btn-default">Browse <input type="file" hidden></label></td></tr> -->
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
                        <tr><td class="left-column">State : </td><td><input type="text" name="state"></td></tr>
                        <tr><td class="left-column">Country : </td><td><input type="text" name="country"></td></tr>
                        <tr><td class="left-column">ZIP : </td><td><input type="text" name="zipcode"></td></tr>
                        <tr><td></td></tr>
                        </table>
                    </div>
                </div>
        </fieldset>
        <br/><br/>
        <h3><b>Agent : </b></h3><?php
                            require ('conn.php');
                                echo '<form method = "GET">';
                                echo '<select name="Agent_id" id="Agent_id" style="width: 150px">';
                                $sql2 = "select * from Agent";
                                $prep = $conn->prepare($sql2);
                                $prep -> execute();
                                $files = $prep->fetchAll();
                                echo "<option value=0>None Selected</option>";
                                foreach($files as $row2)
                                {

                                     echo "<option value='";
                                     echo $row2['Agent_ID'];
                                     echo "'>";
                                     echo $row2['Agent_FName'];
                                     echo " ";
                                     echo $row2['Agent_LName'];
                                     echo "</option>";
                                }//end foreach
                                echo '</select>';
                                echo '</form>';
                ?>
        <br/><br/>
        <div class="col-xs-12 panel panel-default">
                <div class="panel-body">
                    <h4><b>Comments:</b></h4>
                    <textarea rows="2" cols="150" name="comments" ></textarea>
                </div>
        </div>
        <br/><br/>
        <!-- put dropdown for agent -->
        <input style="float:left" type="reset" value="Reset">
        <input style="float:right" type="submit" value="Submit">
    </div>
    </form>
    
    

</body>

</html>