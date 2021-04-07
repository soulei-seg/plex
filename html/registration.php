<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body style="background-color: #15161b; font-family: sans-serif;">
    <?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . $password . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    }
    ?>

    <div style="color: orange; margin-top: 10%;  text-align: center;" id="frm">
        <h1>Register</h1>
        <form action="" method="post">
            <p style="margin-top: 2%;">
                <label>Username</label><br />
                <input style="border-radius: 10px;" type="text" id="username" name="username" />
            </p>
            <p>
                <label>Email</label><br />
                <input style="border-radius: 10px;" type="text" id="email" name="Email adress" />
            </p>
            <p>
                <label>Password</label><br />
                <input style="border-radius: 10px;" type="password" id="password" name="password" />
            </p><br />
            <p>
                <input style="font-weight: bold; border: none; color: #15161b; background-color: orange; font-size: 22px; width: 150px; height: 60px; border-radius: 10px;" type="submit" id="btn" name="submit" value="Register" /><br /><br />
                <a style="color: orange;" href="./index.php">Already registered ? Sign in now !</a>
            </p>
        </form>
    </div>
</body>

</html>