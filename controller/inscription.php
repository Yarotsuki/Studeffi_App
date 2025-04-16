<?php 

require_once('model/utilisateur.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $full_name = $_POST['full_name'];
    $role = 'client'; // Default role

    // Hash the password
    $motDePasseHash = password_hash($password, PASSWORD_BCRYPT);

    // Call the function to add the user
    $userId = ajouter_adherent($username, $email, $motDePasseHash, $full_name, $role);

    if ($userId) {
        echo "User added successfully with ID: " . $userId;
        // Start session and set session variables
        $_SESSION['userId'] = $userId;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['full_name'] = $full_name;
        $_SESSION['role'] = $role;
        

        $_SESSION["validiteConnexion"] = true;
    } else {
        echo "Error adding user.";
    }
}