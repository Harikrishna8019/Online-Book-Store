<?php
$server="localhost";
$username="root";
$password="";
$dbn="proproduct";
session_start();
$con = mysqli_connect($server,$username,$password,$dbn);

// Signup logic
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signup_submit"])) {
    $signup_username = $_POST["signup_username"];
    $signup_password = $_POST["signup_password"];
    $signup_phonenumber = $_POST["signup_phonenumber"];
    $signup_Email = $_POST["signup_Email"];
    $sql = "INSERT INTO Logindetails (username, pasword, phonenumber, Email) VALUES ('$signup_username', '$signup_password','$signup_phonenumber','$signup_Email')";
    $run = mysqli_query($con, $sql);

    if ($run) {
        echo "Registration successful.";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

// Login logic
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login_submit"])) {
    $signup_username = $_POST['login_username'];
    $signup_password = $_POST['login_password']; 

    $sql = "SELECT * FROM Logindetails WHERE username = '$signup_username' AND  pasword = '$signup_password'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);


   if ($count ==1 ) {
    $_SESSION['username'] = $signup_username;
    $_SESSION['pasword'] = $signup_password;


        echo 'Login successful.';
   } else {
   echo "Your Login Name or Password is invalid";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup and Login</title>
    <style>
        body {
          
            font-family: Arial, sans-serif;
            background-color: turquoise;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            width: 300px;
            box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="password"],
        input[type="phone"],
        input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

        p.error {
            color: red;
            margin-top: 10px;
        }

        p.success {
            color: green;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form">
            <h2>Signup</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="signup_username">Username:</label>
                <input type="text" name="signup_username" required><br><br>
                <label for="signup_phonenumber">Phone number:</label>
                <input type="phone" name="signup_phonenumber" required><br><br>
                <label for="signup_Email">Email:</label>
                <input type="email" name="signup_Email" required><br><br>
                <label for="signup_password">Password:</label>
                <input type="password" name="signup_password" required><br><br>
                <input type="submit" name="signup_submit" value="Signup">
            </form>

            <h2>Login</h2>
            <form action="products.php" method="post">
                <label for="login_username">Username:</label>
                <input type="text" name="login_username" required><br><br>
                <label for="login_password">Password:</label>
                <input type="password" name="login_password" required><br><br>
                <input type="submit" name="login_submit" value="Login">
                <a href="admin.php" class="btn">admin</a>


            </form>
        </div>
    </div>
</body>
</html>
