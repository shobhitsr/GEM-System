<?php
    session_start();

    if(!$_SESSION['valid'] )
    {
        echo 'Invalid Login';
        header("location:HomePage.php");
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
            <li><a href="Create_New_Location.php">Create Location</a></li>
            <li><a href="Create_New_Event.php">Create Event</a></li>
            <li><a href="Approve_Event.php">Approve Event</a></li>
            <li><a href="Logout.php" tile="Logout">Logout</a></li>
        </ul>
        </div>
    </nav>
    <center>
        <h1>Home Page</h1>
    </center>
<!--   
<div class="container">
  <h3>Basic Navbar Example</h3>
  <p>A navigation bar is a navigation header that is placed at the top of the page.</p>
</div>
-->
    <form action="HomePage.php" method="post">
        <?php
            $sql1 = "select Artist_FName, Artist_LName from Artist_Record order by Artist_LName";
            echo "<br><b> NAME OF ALL THE ARTISTS : </b><br><br>";
            foreach($conn->query($sql1) as $row1 )
            {
                echo $row1['Artist_FName'];
                echo " ";
                echo $row1['Artist_LName'];
                echo '<br>';
            }
            echo '<br>';
        ?>
    </form>

</body>
</html>