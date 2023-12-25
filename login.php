<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('bg.png');
            background-size: cover;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>





<?php
session_start();


// Check submitted credentials
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate credentials (this is a basic example, use a database for production)
    if (
        ($email === 'user1@example.com' && $password === 'password1') ||
        ($email === 'user2@example.com' && $password === 'password2') ||
        ($email === 'user3@example.com' && $password === 'password3') ||
        ($email === 'user1@example.com' && $password === 'password1') ||
        ($email === 'user2@example.com' && $password === 'password2') ||
        ($email === 'user3@example.com' && $password === 'password3') ||
        ($email === 'user3@example.com' && $password === 'password3') ||
        ($email === 'user1@example.com' && $password === 'password1') ||
        ($email === 'user2@example.com' && $password === 'password2') ||
        ($email === 'user3@example.com' && $password === 'password3') ||
        ($email === 'user3@example.com' && $password === 'password3') ||
        ($email === 'user1@example.com' && $password === 'password1') ||
        ($email === 'user2@example.com' && $password === 'password2') 
    ) {
        // Authentication successful, create a session
        $_SESSION['authenticated'] = true;
        $_SESSION['user_email'] = $email;

        // Redirect based on the user
        if ($email === 'user1@example.com') {
            header("Location: Aicha_chitt_home.php");
            exit();
        } elseif ($email === 'user2@example.com') {
            header("Location: page2.php");
            exit();
        } elseif ($email === 'user3@example.com') {
            header("Location: page3.php");
            exit();
        }
    } else {
        $error_message = "Invalid credentials";
    }
}
?>
<body>
<div class="container">
<h1>Login</h1>
    <?php if (isset($error_message)) : ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php endif; ?>
    <form method="post">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>


</div>

</body>
</html>
