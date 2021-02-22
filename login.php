

<?php session_start(); /* Starts the session */
/* Check Login form submitted */if(isset($_POST['Submit'])){
/* Define username and associated password array */
$logins = array('admin'  =>'123456','admin@pup.edu.ph' => '123456');

/* Check and assign submitted Username and Password to new variable */
$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Email = isset($_POST['Email']) ? $_POST['Email'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

/* Check Username and Password existence in defined array */
if (isset($logins[$Username]) && $logins[$Username] == $Password  && $logins[$Email] == $Password){
/* Success: Set session variables and redirect to Protected page  */
$_SESSION['UserData']['Username']=$logins[$Username];
header("location:admin.php");
exit;

}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="icon" href="img/avatar.svg">
    <title>Log In</title>
</head>
<body>
    <div class="container">
        <div class="img">
            <img src="img/image.svg">
        </div>
        <div class="login-container">
            <form action=" " method="post" name="Login_Form">
           
                <img class="avatar" src="img/avatar.svg">
                <h2>WELCOME,ADMIN</h2>
               
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Username</h5>
                        <input class="input" type="text" name="Username" required>
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h5>Email</h5>
                        <input class="input" type="email" name="Email" required>
                    </div>
                </div>
                <div class="input-div three">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Password</h5>
                        <input class="input" type="password"  name="Password" required>
                    </div>
                </div>
                <input type="submit" class="btn" name="Submit" value="Login">
            </form>
        </div>
        <script type="text/javascript" src="js//main.js"></script>
    </div>
    
</body>
</html>