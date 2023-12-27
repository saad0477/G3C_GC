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
            /* height: 100vh; */
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


.gradient-custom-3 {
/* fallback for old browsers */
background: #84fab0;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
}
.gradient-custom-4 {
/* fallback for old browsers */
background: #84fab0;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
}
    </style>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"  >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-GLhlTQ8iKDEr9QvC6H/t6U/b1/RR63lSFuheT4" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 -->
<!-- Bootstrap CSS -->
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"   crossorigin="anonymous">

<!-- Bootstrap JS (optional, but may be needed for certain components) -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  ></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"   crossorigin="anonymous">

</head>



<!-- <body> -->
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

    <section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp'); width:100%">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3"  >
    <div class="container h-100"  >
      <div class="row d-flex justify-content-center align-items-center h-100" style="width:100%; ">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6" style="width:100%; ">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5" style="width:100%; ">Create an account</h2>

              <form method="post">
              <label class="form-label" for="form3Example1cg">Choisir l'élement</label>
<br>
 
                <select id="id_e"  class="form-select form-select-lg mb-3" width="600px" name="id_e" required>
                        <option value="1">Achats</option>
                        <option value="2">Prêt de MO</option>
                        <option value="3">Gardiennage</option>
                        <option value="4">Prestation Métallique</option>
                        <option value="5">Location de Matériel Roulant</option>
                        <option value="6">Location de Grues</option>
                        <option value="7">Location Coffrage</option>
                        <option value="8">Prestation Ferraillage</option>
                        <option value="9">Achat/Location Outillage</option>
                        <option value="10">Prestation Transport</option>
                        <option value="11">Loation Parc Auto</option>
                        <option value="12">Gasoil</option>
                        <option value="13">Assurance</option>
                        <option value="14">Fournitures de Bureau</option>
                        <option value="15">Autres Frais Généraux</option>
                        <option value="16">Expertise Technique et Optimisation</option>
                        <option value="17">Cloture Annuelle</option>

</select> 
<br>
<br>
<br>
                

                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" name="email" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cdg" name="password" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                </div>

               

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>
                <?php
// Include your database connection file or establish a connection here
include ("config.php");
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Retrieve form data
    $selectedElement = $_POST['id_e'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform validation as needed

    // Hash the password (make sure to use a secure hashing algorithm)
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Your database query to insert data into the "users" table
    $sql = "INSERT INTO users (id_e, email, hashed_password) VALUES (?, ?, ?)";
    
    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iss", $selectedElement, $email, $hashedPassword);

    // Execute the query
    if ($stmt->execute()) {
        // Insertion successful
       
    } else {
        // Insertion failed
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
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

<!-- </body> -->
</html>
