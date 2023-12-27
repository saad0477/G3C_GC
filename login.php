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
            /* background-image: url('bg.png'); */
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
        .bg-image-vertical {
position: relative;
overflow: hidden;
background-repeat: no-repeat;
background-position: right center;
background-size: auto 100%;
}

@media (min-width: 1025px) {
.h-custom-2 {
height: 100%;
}
}
    </style>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="...">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-GLhlTQ8iKDEr9QvC6H/t6U/b1/RR63lSFuheT4" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 -->
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="...">

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>

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
            header("Location: Aicha_chitt.php");
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
<!-- <div class="container">
<h1>Login</h1> -->
    <?php if (isset($error_message)) : ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php endif; ?>
    <!-- <form method="post">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form> -->

    <section class="vh-100 vw-100" style="width:100%">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
        <!-- <img src="LOGO.png" width="100" height="80"> -->
          
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;" method="post">
          <img src="LOGO.png" width="150" height="130">
            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"></h3>      


            <div class="form-outline mb-4">
              <input type="email" id="form2Example18" name="email" placeholder="Email address" class="form-control form-control-lg"  />
              <!-- <label class="form-label" for="form2Example18">Email address</label> -->
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="form2Example28" name="password" placeholder="Password" class="form-control form-control-lg" />
              <!-- <label class="form-label" for="form2Example28">Password</label> -->
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
            </div>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
            <p>Don't have an account? <a href="#!" class="link-info">Register here</a></p>

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="Login.webp"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>  
    </div>
  </div>
  <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
</section>
<!-- </div> -->

</body>
</html>
