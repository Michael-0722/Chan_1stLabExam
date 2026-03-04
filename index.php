<?php
    $message = "";

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == "admin" && $password == "admin123"){
            header("Location: pages/students_lists.php");
            exit;
        }
        else{
            $message = "Invalid username or password.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Login</h2>

    <div class="login_form">
        <p><?php echo $message; ?></p>
        <form method="post">
            <div class="form_group" >
                <label>Username</label><br>
                <input type="text" name="username">
            </div>
            <div class="form_group">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>
</html>