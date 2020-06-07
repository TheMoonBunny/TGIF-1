<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel = "stylesheet" href="../css/loginstyle.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<!--https://www.youtube.com/watch?v=1UA6vC3kRYQ-->
<?php
session_start();
$username = "user";
$password = "password";
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    header ("location: success.php");
}
if (isset($_post['username']) && isset($_POST['password'])){
    if ($_POST['username'] == $username && $_POST['password'] == $password)
    {
        $_SESSION['logged_in'] = true;
        header("location: success.php");
    }
}
?>
<body>
    <div class="login-page">
        <div class="form">
         <form action="validation.php" method="post">
            <form class="login-form">
                <input type="text" placeholder="user name" class="form-control" required/>
                <input type="password" placeholder="password" class="form-control" required/>
                <button>login</button>
                <p class="message">Not Registered?<a href="registerpage.html">Register</a></p>
                <p class="message">Return<a href="../index.html">Home</a></p>
            </form>
        </div>
    </div>
    
</body>
</html>