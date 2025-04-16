<?php
session_start();

include_once('model/utilisateur.php');

$okConnexion = isset($_SESSION['validiteConnexion']) && $_SESSION['validiteConnexion'] == true;
if ($okConnexion)
{
  $id = $_SESSION['userId'];
  $username = $_SESSION['username'];
  $email = $_SESSION['email'];
  $full_name = $_SESSION['full_name'];
  $role = $_SESSION['role'];

}


if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('controller/accueil.php');
   


}
else{

  if ($_GET['section'] == 'login')
  {
    include_once('controller/login.php');
  }
  if ($_GET['section'] == 'register')
  {
    include_once('controller/register.php');
  }
  if ($_GET['section'] == 'inscription')
  {
    include_once('controller/inscription.php');
  }
  if ($_GET['section'] == 'deconnexion')
  {
    include_once('controller/deconnexion.php');
  }
  if ($_GET['section'] == 'verifConnexion')
  {
    include_once('controller/verifConnexion.php');
  }
  if($_GET['section'] == 'Ajoutercompteur')
  {
    include_once('controller/ajouterCompteur.php');
  }
  if($_GET['section'] == 'validerAjoutCompteur')
  {
    include_once('controller/validerAjoutCompteur.php');
  }
  if($_GET['section'] == 'adminCompteur')
  {
    include_once('controller/adminCompteur.php');
  }
  if($_GET['section'] == 'modifierCompteur')
  {
    include_once('controller/modifierCompteur.php');
  }
  if($_GET['section'] == 'validerModifCompteur')
  {
    include_once('controller/confirmerModifCompteur.php');
  }
  if($_GET['section'] == 'supprimerCompteur')
  {
    include_once('controller/supprimerCompteur.php');
  }




}
