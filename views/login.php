<?php
// Inicie a sessão no início do script
session_start();

// Include necessary files and dependencies
include_once '../controllers/user_controller.php';
include_once '../repositories/user_repository.php';
include_once '../dbconfig/dbconfig.php';

// Instantiate UserController
$user_repository = new UserRepository($DB_con);
$user_service = new UserService($user_repository);
$user_controller = new UserController($user_service);

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Call the appropriate method in the controller to authenticate the user
    $authenticated = $user_controller->authenticateUser($email, $password);

    if ($authenticated) {
       $_SESSION['user'] = $authenticated;
        echo $_SESSION['user']['id']; 

        $user = $user_controller->getUserByAccId($_SESSION['user']['id']);
        $SESSION['entity'] = $user;

        if ($_SESSION['user']['role']=== "C") {
          header('Location: client_dashboard.php');
        }
        else {
          header('Location: admin_dashboard.php');
        }

    } else {
        echo 'Invalid email or password.';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Tailwind Elements!-->
    <link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
  rel="stylesheet" />
<link rel="stylesheet" href="../content/bootstrap/css/login.css"/>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
<script src="https://cdn.tailwindcss.com/3.3.0"></script>
</head>

<body>
  <div class="flex h-screen">
    <div id="bg" class="flex-1 bg-gray-100 flex flex-col justify-center items-center px-6 py-8">
      <h2 class="text-center text-4xl font-bold text-white">É uma honra sermos a sua escolha! <br/>Entre e veja os seus outdoors</h2>
    </div>
    <div class="flex-1 bg-white flex flex-col justify-center items-center px-6 py-8">
      <h1 class="text-3xl font-bold mb-6">Outdoors</h1>
      <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" class="w-full max-w-sm">
        <div class="mb-4">
          <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
          <input type="email" id="email" name="email" placeholder="Digite seu email" class="w-full border border-gray-300 rounded py-2 px-4">
        </div>
        <div class="mb-4">
          <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Senha</label>
          <input type="password" id="password" name="password" placeholder="Digite sua senha" class="w-full border border-gray-300 rounded py-2 px-4">
        </div>
        <div class="mb-4">
          <button type="submit" class="bg-gray-900 text-white font-bold py-2 px-4 rounded w-full">Entrar</button>
        </div>
        <div class="mb-4">  
          <button type="button" onclick="location.href='signup.php'" class="border border-gray-900 font-bold py-2 px-4 rounded w-full">Criar conta</button>
        </div>
      </form>
    </div>
  </div>
</body>


</html>