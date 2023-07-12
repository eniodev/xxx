<?php
include_once '../controllers/user_controller.php';
include_once '../repositories/user_repository.php';
include_once '../dbconfig/dbconfig.php';
session_start();
// Instantiate UserController
$user_repository = new UserRepository($DB_con);
$user_service = new UserService($user_repository);
$user_controller = new UserController($user_service);


// Verificar se a variável de sessão 'user_id' está definida
if (!isset($_SESSION['user'])) {
    // Redirecionar para a página de login ou outra página adequada
    header('Location: login.php');
    exit;
}
else {
    if($_SESSION['user']['role'] == "C") {
        header('Location: client_dashboard.php');
    }
}

if (isset($_POST['logout'])) {
    session_start();
    $_SESSION = array();
    session_destroy();
    header("Location: ../index.php");
    exit;
}
//Adicionar Usuário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $user = new User($email, $password, "M");        
  $user_id = $user_controller->createUser($user); 

  if ($user_id) {
    $to_email = "enioblvck@gmail.com";
    $subject = "Gestor de Aplicação";
    $body = "Saudações, \n 
    Uma nova conta foi criada para si como gestor do sistema, 
    por favor aceda ao painel para proceder à editação do seu perfil.";
    $headers = "From: Outdoors, inc.";

    mail($to_email, $subject, $body, $headers);
  } else {
    //echo "Erro ao adicionar gestor.";
  }

  

  
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
  <!-- Link para o arquivo CSS do Tailwind -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../content/bootstrap/css/admin.css">
  <script src="../content/bootstrap/js/admin.js"></script>
</head>

<body >
  <!-- Barra de navegação -->
  <header class="py-4">
    <div class="container flex items-center justify-between mx-auto">
      <h1 class="text-2xl font-bold">Outdoors</h1>
      <div class="flex flex-row">
        <button onclick="location.href='views/signup.php'" class="border border-black bg-transparent  px-4 py-2 rounded-full mr-2">Editar Perfil</button>
        <form  action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <button type="submit" name="logout" class="px-4 py-2 rounded-md">Sair</button>
        </form>
      </div>
    </div>
  </header>

  <!-- Conteúdo da dashboard -->
  <div class="container mx-auto px-4 py-8">
    <!-- Tabs -->
    <div class="mb-8">
      <ul class="flex border-b border-gray-300">
        <li class="-mb-px mr-1">
          <a href="#" class="bg-white inline-block py-2 px-4 font-semibold border-l border-t border-r rounded-t tab-link"
            data-tab="meus-pedidos">
            Pedidos
          </a>
        </li>
        <li class="-mb-px mr-1">
          <a href="#" class="bg-white inline-block py-2 px-4 font-semibold tab-link"
            data-tab="meus-outdoors">
            Outdoors
          </a>
        </li>
        <li class="mr-1">
          <a href="#" class="bg-white inline-block py-2 px-4 font-semibold tab-link" data-tab="perfil">
            Clientes
          </a>
        </li>
        <li class="mr-1">
          <a href="#" class="bg-white inline-block py-2 px-4 font-semibold tab-link" data-tab="estatisticas">
            Gestores
          </a>
        </li>
      </ul>
    </div>

    <!-- Seção de Meus Pedidos -->
    <div class="tab-content" id="meus-pedidos">
      <div class="bg-white rounded-lg shadow p-4">
        <!-- Coloque aqui a estrutura do conteúdo dos pedidos -->
        <div class="flex items-center justify-between mb-4">
          <h2 class="text-lg font-semibold">Total</h2>
        </div>
        <div class="w-full">
          <!-- Cards de Pedidos -->
          <div class="border border-gray-100 rounded-lg shadow p-4 mb-4">
            <!-- Conteúdo do card do pedido -->
            <!-- Botões para aprovar, ver comprovativo e remover o pedido -->
            <div class="flex justify-end space-x-2 gap-2">
              <button class="text-green-500">Aprovar</button>
              <button class="text-gray-500 underline">Comprovativo</button>
              <button class="text-red-500">Remover</button>
            </div>
          </div>
          <div class="border border-gray-100 rounded-lg shadow p-4 mb-4">
            <!-- Conteúdo do card do pedido -->
            <!-- Botões para aprovar, ver comprovativo e remover o pedido -->
            <div class="flex justify-end space-x-2 gap-2">
              <button class="text-green-500">Aprovar</button>
              <button class="text-gray-500 underline">Comprovativo</button>
              <button class="text-red-500">Remover</button>
            </div>
          </div>
          <!-- E assim por diante para cada card de pedido -->
        </div>
        <!-- Coloque a estrutura da modal após o conteúdo da tab -->
      </div>
    </div>

    <!-- Seção de Perfil -->
    <div class="tab-content hidden" id="perfil">
      <div class="bg-white rounded-lg shadow p-4">
        <!-- Coloque aqui a estrutura do conteúdo do perfil -->
        <div class="flex items-center justify-between mb-4">
          <h2 class="text-lg font-semibold">Total</h2>
        </div>
        <div class="w-full">
          <!-- Cards de Clientes -->
          <div class="border border-gray-100 rounded-lg p-4 mb-4">
            <!-- Conteúdo do card do cliente -->
            <!-- Botões para ativar, bloquear e remover o cliente -->
            <div class="flex justify-end space-x-2 gap-2">
              <button class="text-green-500">Ativar</button>
              <button class="text-red-500">Bloquear</button>
              <button class="text-red-500">Remover</button>
            </div>
          </div>
          <div class=" border border-gray-100 rounded-lg p-4 mb-4">
            <!-- Conteúdo do card do cliente -->
            <!-- Botões para ativar, bloquear e remover o cliente -->
            <div class="flex justify-end space-x-2 gap-2">
              <button class="text-green-500">Ativar</button>
              <button class="text-red-500">Bloquear</button>
              <button class="text-red-500">Remover</button>
            </div>
          </div>
          <!-- E assim por diante para cada card de cliente -->
        </div>
      </div>
    </div>

    <!-- Seção de Perfil -->
    <div class="tab-content hidden" id="meus-outdoors">
      <div class="bg-white rounded-lg shadow p-4">
        <!-- Coloque aqui a estrutura do conteúdo do perfil -->
        <div class="flex items-center justify-between mb-4">
      <h2 class="text-lg font-semibold">Total</h2>
        <button class="bg-green-500 text-white px-4 py-2 rounded" >Adicionar Outdoor</button>
        </div>
        <div class="w-full">
          <!-- Cards de Outdoors -->
          <div class="border border-gray-100 rounded-lg p-4 mb-4">
            <!-- Conteúdo do card do outdoor -->
            <!-- Botões para editar e remover o outdoor -->
            <div class="flex justify-end space-x-2">
              <button class="text-gray-700">Editar</button>
              <button class="text-red-500">Remover</button>
            </div>
          </div>
          <div class="border border-gray-100 rounded-lg p-4 mb-4">
            <!-- Conteúdo do card do outdoor -->
            <!-- Botões para editar e remover o outdoor -->
            <div class="flex justify-end space-x-2">
              <button class="text-gray-700">Editar</button>
              <button class="text-red-500">Remover</button>
            </div>
          </div>
          <!-- E assim por diante para cada card de outdoor -->
        </div>
      </div>

    </div>

    <!-- Seção de Estatísticas -->
    <div class="tab-content hidden" id="estatisticas">
      <div class="bg-white rounded-lg shadow p-4">
        <!-- Coloque aqui a estrutura do conteúdo das estatísticas -->
        <div class="flex items-center justify-between mb-4">
          <h2 class="text-lg font-semibold">Total</h2>
          <button class="bg-green-500 text-white px-4 py-2 rounded" onclick="AddManager()">Adicionar Gestor</button>
        </div>
        <div class="w-full">
          <!-- Cards de Gestores -->
          <div class="border border-gray-100 rounded-lg p-4 mb-4">
            <!-- Conteúdo do card do gestor -->
            <!-- Botão para remover o gestor -->
            <button class="text-red-500">Remover</button>
          </div>
          <div class="border border-gray-100 rounded-lg p-4 mb-4">
            <!-- Conteúdo do card do gestor -->
            <!-- Botão para remover o gestor -->
            <button class="text-red-500">Remover</button>
          </div>
          <!-- E assim por diante para cada card de gestor -->
        </div>
      </div>


<!-- Coloque a estrutura da modal após o conteúdo da tab -->
<div id="myModal" class="fixed inset-0 flex items-center justify-center z-10 hidden">
  <div class="bg-gray-900 bg-opacity-50 absolute inset-0"></div>
  <div class="bg-white p-4 rounded-lg z-20">
    <div class="flex justify-between mb-4">
      <h3 class="text-lg font-semibold">Adicionar Gestor</h3>
      <button class="text-gray-500" onclick="closeModal()">&times;</button>
    </div>
    <!-- Restante do conteúdo da modal -->
    <form  action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" class="w-full max-w-sm overflow-auto">
        <div class="mb-4">
          <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
          <input type="email" id="email" name="email" placeholder="Digite seu email" class="w-full border border-gray-300 rounded py-2 px-4">
        </div>
        <div class="mb-4">
          <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Senha</label>
          <input type="password" id="password" name="password" placeholder="Digite sua senha" class="w-full border border-gray-300 rounded py-2 px-4">
        </div>
        <div class="mb-4">
          <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Confirmar senha</label>
          <input type="password" id="passwordx" name="passwordx" placeholder="Digite novamente sua senha" class="w-full border border-gray-300 rounded py-2 px-4">
        </div>
        <div class="mb-4">
          <button type="submit" class="bg-gray-900 text-white font-bold py-2 px-4 rounded w-full">Criar conta</button>
        </div>
      </form>
    
  </div>
  </div>
    </div>

  </div>

  <!-- Scripts -->
  <script>
    // Função para alternar entre as tabs
    function toggleTab(tabId) {
      // Ocultar todas as tabs
      let tabs = document.getElementsByClassName("tab-content");
      for (let i = 0; i < tabs.length; i++) {
        tabs[i].classList.add("hidden");
      }

      // Exibir a tab selecionada
      let selectedTab = document.getElementById(tabId);
      if (selectedTab) {
        selectedTab.classList.remove("hidden");
      }
    }

    // Adicionar evento de clique nos links das tabs
    let tabLinks = document.getElementsByClassName("tab-link");
    for (let i = 0; i < tabLinks.length; i++) {
      tabLinks[i].addEventListener("click", function (event) {
        event.preventDefault();
        let tabId = this.getAttribute("data-tab");
        toggleTab(tabId);
      });
    }
  </script>

</body>

</html>
