<?php
session_start();
require_once('model/utilisateur.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['TLogin'];
    $password = $_POST['TMdp'];

    // Vérification des identifiants
    $user = getUser($login, $password);
    
    // Ajout d'un debug
    error_log(print_r($user, true));

    if ($user) {
      // Debug avant stockage en session
      error_log("Données utilisateur avant session : " . print_r($user, true));
      
      $_SESSION['validiteConnexion'] = true;
      $_SESSION['userId'] = $user['id'];
      $_SESSION['username'] = $user['username'];
      $_SESSION['email'] = $user['email'];
      $_SESSION['full_name'] = $user['full_name'];
      $_SESSION['role'] = $user['role'];
      
      // Debug après stockage en session
      error_log("Session après stockage : " . print_r($_SESSION, true));
      
      header("Location: index.php");
      exit();
  }
    } else {
        $_SESSION["validiteConnexion"] = false;
        $_SESSION['error_message'] = "Email ou mot de passe incorrect";
        header("Location: index.php?section=login");
        exit();
    }
