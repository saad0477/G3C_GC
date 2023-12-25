<?php
session_start();
$user_email = $_SESSION['user_email'];

// Check if the user is authenticated, redirect to login if not
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true || $user_email !== 'user1@example.com') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Management System</title>
    <link rel="icon" href="icon.png" type="image/x-icon">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            background-image: url('bg.png') ; /* Remplacez par le chemin de votre image */
            background-size:  auto;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            padding: 20px;
            width: 300px;
            text-align: center;
            transition: transform 0.3s ease;
            text-decoration: none; /* Remove underline from anchor */
            color: #333;
            display: block;
        }

        .card:hover {
            transform: scale(1.05);
        }

        h2 {
            color: #333;
        }

        p {
            line-height: 1.5;
        }
        nav {
            background-color: #333;
            overflow: hidden;
            width: 100%;
            height: 50px;
        }

        nav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 17px 16px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Optional: Add some style for a cleaner design */
        nav a.active {
            background-color: #4CAF50;
            color: white;
        }
        h2 {
            color: #4caf50;
        }

        p {
            margin-top: 10px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 5px;
        }


        .dropdown {
    float: left;
    overflow: hidden;
    margin: 0; /* Set margin to 0 */

}
/* ... Votre CSS existant ... */

.dropdown .dropbtn {
    font-size: 16px;
    border: none;
    text-align: center;
    padding: 17px 16px;

    outline: none;
    color: white;
    background-color: #333;
    font-family: inherit;
    margin: 0;
    transition: background-color 0.3s, color 0.3s;
}

.dropdown .dropbtn:hover {
    background-color: #ddd; /* Couleur de survol */
    color: black; /* Couleur de survol du texte */
}

/* ... Votre CSS existant ... */

.dropdown-content {
    max-height: 0;
    overflow: hidden;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    margin: 0;
    padding: 0;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
    transition: max-height 0.5s ease-out;

}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
    max-height: 200px; /* Adjust the value according to your content */

}


@media only screen and (max-width: 600px) {
    nav {
        display: none; /* Masquer la barre de navigation sur les petits écrans */
    }}
    </style>
</head>
<body>
    
<nav>
    <a href="Aicha_chitt_home.php" class="active">Accueil</a>
    <a href="Aicha_Chitt_view.php">Details</a>
    <a href="Aicha_Chitt.php">Générer Facture</a>


    <a href="logout.php">Logout</a>
</nav>
     

</body>

</html>
