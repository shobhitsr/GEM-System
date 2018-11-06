<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">
   
   <head>
      <title>GEM Systems</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
      <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #ADABAB;
         }
         
         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
         }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }
         
         h1{
            text-align: center;
            color: #017572;
         }
         input{
             float: center;
         }
         
      </style>
      
   </head>
	
   <body>
      
      <h1>GEM System Login</h1> 
      <div class = "container-fluid form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) 
            {
				
                  if ($_POST['username'] == 'shobhit' && $_POST['password'] == '1234') 
                  {
                        $_SESSION['valid'] = true;
                        $_SESSION['timeout'] = time();
                        $_SESSION['username'] = 'shobhit';
                        
                        header("location:HomePage.php");
                  }
                  elseif ($_POST['username'] == 'vidya' && $_POST['password'] == '1234')
                  {
                        $_SESSION['valid'] = true;
                        $_SESSION['timeout'] = time();
                        $_SESSION['username'] = 'vidya';
                        
                        header("location:HomePage.php");
                  }
                  elseif ($_POST['username'] == 'COO' && $_POST['password'] == '1234')
                  {
                        $_SESSION['valid'] = true;
                        $_SESSION['timeout'] = time();
                        $_SESSION['username'] = 'COO';
                        
                        header("location:HomePage.php");
                  }
                  else 
                  {
                        $msg = 'Wrong username or password';
                  }
            }
         ?>
      </div> <!-- /container -->
      
      
      
         <form class = "form-signin container-body" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            
            <center><input type = "text" class = "form-control"
               name = "username" placeholder = "username = shobhit" 
               required autofocus></center>
            <center><input type = "password" class = "form-control"
               name = "password" placeholder = "password = 1234" required></center>
         </form>
            
			<center><button class = "btn btn-lg btn-primary btn-block" type = "submit" style="font-size:16px"
               name = "login">Login</button></center>
               
         <!--Click here to clean <a href = "Logout.php" tite = "Logout">Session.-->
         
   </body>
</html>
