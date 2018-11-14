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
    <script language="javascript" type="text/javascript">
        function save() 
        { 
        //val = Produce_Detail_Report.php; 
        //mydoc = document.open(); 
        //mydoc.write(val); 
        //mydoc.execCommand("saveAs",true,".pdf"); //you can change the .txt to your extention
        //history.go(-1);
            if (document.execCommand){
            document.execCommand("SaveAs")
            }
            else {
                alert("Save-feature available only in Internet Explorer 5.x.")
            }
        } 
        function printWithSpecialFileName(){
            var tempTitle = document.title;
            document.title = "report.pdf";
            window.print();
            document.title = tempTitle;
        }
    </script> 
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
        <h1>GEMS Event Detail Report</h1>
    </center>
    <form name="x">
    <div class="panel panel-default">
        <div class="panel-body">
        
        <center><fieldset class="col-xs-12" style="display:inline-block;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <legend>GEMS System<br/>1425 W. Lincoln Hwy<br/>Dekalb, IL 60115</legend>
                    
                        <center><fieldset class="col-xs-6" style="display:inline-block;">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                    <legend>Event Details</legend>
                                        <table>
                                        <tr><td class="left-column">Event Name : </td><td>AFI Concert</td></tr>
                                        <tr><td class="left-column">Event Date : </td><td>2018-11-08</td></tr>
                                        <tr><td class="left-column">Event Time : </td><td>09:00</td></tr>
                                        <tr><td class="left-column">Event Status : </td><td>Approved</td></tr>
                                        <tr><td class="left-column">Event Comments : </td><td></td></tr>
                                        <tr><td class="left-column">Tickets Sold : </td><td>115</td></tr>
                                        </table>
                                    </div>
                                </div>
                        </fieldset>
                        <?php 
                        if(isset($_POST['performer']) && $_POST['performer'] == "Yes")
                        {
                            echo '<fieldset class="col-xs-6" style="display:inline-block;">';
                            echo '<div class="panel panel-default">';
                            echo '<div class="panel-body">';
                            echo '<legend>Event Location</legend>';
                            echo '<table>';
                            echo '<tr><td><br/></td></tr>';
                            echo '<tr><td class="left-column">Location Name : </td><td>Arena</td></tr>';
                            echo '<tr><td class="left-column">Location Address : </td><td>150 Straight Ln,Dekalb,IL,USA,60115</td></tr>';
                            echo '<tr><td class="left-column">Location Capacity : </td><td>150</td></tr>';
                            echo '<tr><td class="left-column">Location Comments : </td><td></td></tr>';
                            echo '<tr><td><br/></td></tr>';
                            echo '</table>';
                            echo '</div>';
                            echo '</div>';
                            echo '</fieldset>';
                            echo '<br/>';
                        }?>
                        <?php 
                        if(isset($_POST['performer']) && $_POST['performer'] == "Yes")
                        {
                            echo '<fieldset class="col-xs-6" style="display:inline-block;">';
                            echo '<div class="panel panel-default">';
                            echo '<div class="panel-body">';
                            echo '<legend>Performing Artist</legend>';
                            echo ' <table>';
                            echo ' <tr><td class="left-column">Artist Name : </td><td>AFI</td></tr>';
                            echo '<tr><td class="left-column">Artist Address : </td><td>#3 123 Rock Blvd,Dekalb,IL,USA,60115</td></tr>';
                            echo '<tr><td class="left-column">Artist Rate : </td><td>$150.00</td></tr>';
                            echo '<tr><td class="left-column">Artist Phone : </td><td>1234567890</td></tr>';
                            echo '<tr><td class="left-column">Artist Email : </td><td>afi@afi.com</td></tr>';
                            echo '<tr><td class="left-column">Artist Comments : </td><td></td></tr>';
                            echo '</table>';
                            echo '</div>';
                            echo '</div>';
                            echo '</fieldset>';
                        }?>
                        <fieldset class="col-xs-6" style="display:inline-block;">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                    <legend>Artist's Agent</legend>
                                        <table>
                                        <tr><td><br/></td></tr>
                                        <tr><td class="left-column">Agent's Name : </td><td>James Bond</td></tr>
                                        <tr><td class="left-column">Agent Phone : </td><td>1234567890</td></tr>
                                        <tr><td class="left-column">Agent Address : </td><td>123 Ace Ln,Dekalb,IL,USA,60115</td></tr>
                                        <tr><td class="left-column">Agent Comments : </td><td></td></tr>
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
                                        <tr><td class="left-column">Vendor Name : </td><td>Rental Company</td></tr>
                                        <tr><td class="left-column">Vendor Category : </td><td>rental</td></tr>
                                        <tr><td class="left-column">Vendor Email : </td><td>rentalcompany@gmail.com</td></tr>
                                        <tr><td class="left-column">Vendor Comments : </td><td>Good Vendor</td></tr>
                                        <!-- repeat the above 4 for all vendors? -->
                                        </table>
                                    </div>
                                </div>
                        </fieldset>
                        </center>
                    </div>
                </div>
            <button style="float:left; color:black;"><a href="HomePage.php">Exit</a></button>
            <button style="float:center"><a href="/files/adlafjlxjewfasd89asd8f.pdf" download="DetailReport.pdf">Save</a></button>
            <button style="float:right" onclick="window.print();return false;" >Print</button>
        </fieldset>
        </form>
        <br/><br/>
        
    </div>

</body>

</html>