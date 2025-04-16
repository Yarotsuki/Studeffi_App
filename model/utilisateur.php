<?php

include_once('model/connexion.php');

function ajouter_adherent($username,$email, $motDePasseHash, $full_name, $role='client') {
    global $bdd;
  
    $sql = "INSERT INTO users (username, email, password_hash, full_name, role) 
            VALUES (:username, :email, :motDePasseHash, :full_name, :role)";
  
    $stmt = $bdd->prepare($sql);
    $stmt->execute([
      ':username' => $username,
      ':email' => $email,
      ':motDePasseHash' => $motDePasseHash,
      ':full_name' => $full_name,
      ':role' => $role
   
    ]);
  
    return $bdd->lastInsertId(); 
  }

  function getUser($login, $password) {
    global $bdd;
  
    try {
        // Sélection explicite des colonnes
        $sql = "SELECT id, username, email, password_hash, full_name, role FROM users WHERE email = :login";
        $stmt = $bdd->prepare($sql);
        $stmt->execute([':login' => $login]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Debug
        error_log("Données utilisateur : " . print_r($user, true));
        
        if ($user && password_verify($password, $user['password_hash'])) {
            return $user;
        }
        return null;
    } catch(PDOException $e) {
        error_log("Erreur DB : " . $e->getMessage());
        return null;
    }
}