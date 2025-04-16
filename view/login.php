<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Ajout de SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Connexion</title>
</head>
<body>

  <?php
  // Démarrage de la session
  session_start();
  include_once('view/entetes.php');
  
  if(isset($_SESSION['error_message'])) {
    echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Erreur de connexion',
            text: '".htmlspecialchars($_SESSION['error_message'])."',
            confirmButtonColor: '#576805'
        });
    </script>";
    // On supprime le message d'erreur de la session
    unset($_SESSION['error_message']);
}
?>
  
<body class="bg-yellow-50">
    <div class="flex flex-col md:flex-row h-screen">

        <!-- Formulaire à gauche -->
        <div class="w-full md:w-1/2 p-8 overflow-y-auto">


            

            <h1 class="text-3xl text-gray-800 flex justify-center font-bold m-20">Connexion</h1>

         


            <form action="index.php?section=verifConnexion" method="POST"
                class="max-w-lg mx-auto bg-[#576805]/30 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email" name="TLogin" type="email" placeholder="Votre email" required>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Mot de passe
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" name="TMdp" type="password" placeholder="******************" required>
                </div>

                <div class="flex items-center justify-between">
                    <button
                        class="bg-yellow-50 hover:bg-yellow-100 hover:duration-300 text-gray-700 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Se connecter
                    </button>
                    <a class="inline-block align-baseline font-bold text-sm text-gray-700 hover:text-yellow-50 hover:duration-300"
                        href="index.php?section=inscription">
                        Pas de compte ?
                    </a>
                </div>
            </form>

        </div>




    </div>

</body>
</body>
</html>