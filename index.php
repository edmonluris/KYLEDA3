<?php
include_once('config/setting-cofiguration.php');
if (isset($_SESSION["adminSession"])) {
    echo "<script>alert('User is Logged In.'); window.location.href = 'dashboard/admin/';</script>";
    exit;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In / Sign Up</title>
    <link rel="stylesheet" href="src/css/style.css">
    <style>
        :root {
            --primary-color: #000;
            --secondary-color: #000000;
            --secondary-color: #ffffff;
            --input-bg-color: #f0f0f0;
            --input-border-color: #686666;
            --button-bg-color: #000;
            --button-text-color: #fff;
            --button-hover-bg-color: #444;
            --background-image: url(../img/bg1.jpg);
            --font-family: 'Arial', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }



        body.body1 {
            background-image: var(--background-image);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: var(--font-family);
            color: var(--secondary-color);
        }

        body.body2 {
            background-image: var(--background-image);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: var(--font-family);
            color: var(--secondary-color);
        }


        .container,
        .container-register {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            padding: 20px;
        }

        .box,
        .box1 {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 40px;
            border-radius: 8px;
            width: 350px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        h1 {
            color: var(--secondary-color);
            margin-bottom: 20px;
        }

        .form-box input,
        .form-box1 input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            background-color: var(--input-bg-color);
            border: 1px solid var(--input-border-color);
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            width: 100%;
            background-color: var(--button-bg-color);
            color: var(--button-text-color);
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: var(--button-hover-bg-color);
        }

        button a {
            color: var(--button-text-color);
            text-decoration: none;
        }

        button a:hover {
            color: var(--button-text-color);
        }
    </style>
</head>

<body>
    <h1>Sign In</h1>
    <form action="dashboard/admin/authentication/admin-class.php" method="POST">
        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>">
        <input type="email" name="email" placeholder="Enter Email" required>
        <input type="password" name="password" placeholder="Enter Password" required>
        <button type="submit" name="btn-signin">Sign In</button>
    </form>

    <h1>Registration</h1>
    <form action="dashboard/admin/authentication/admin-class.php" method="POST">
        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>">
        <input type="text" name="username" placeholder="Enter Username" required>
        <input type="email" name="email" placeholder="Enter Email" required>
        <input type="password" name="password" placeholder="Enter Password" required>
        <button type="submit" name="btn-signup">Sign Up</button>
    </form>
</body>

</html>