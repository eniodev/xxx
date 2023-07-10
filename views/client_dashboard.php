<?php
session_start();

// Verificar se a variável de sessão 'user_id' está definida
if (!isset($_SESSION['user'])) {
    // Redirecionar para a página de login ou outra página adequada
    header('Location: login.php');
    exit;
}
else {
    $user_info = implode(', ', $_SESSION['user']);
    $user_type = substr($user_info, -1);
    if($user_type !== "C") {
        header('Location: login.php');
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
</head>

<body >

  <!-- Barra de navegação -->
  <header class="py-4">
    <div class="container flex items-center justify-between mx-auto">
      <h1 class="text-2xl font-bold">Outdoors</h1>
      <div>
        <button onclick="location.href='views/signup.php'" class="border border-black bg-transparent  px-4 py-2 rounded-full mr-2">Editar Perfil</button>
        <button onclick="location.href='views/login.php'" class="px-4 py-2 rounded-md">Sair</button>
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
            Meus Pedidos
          </a>
        </li>
        <li class="mr-1">
          <a href="#" class="bg-white inline-block py-2 px-4 font-semibold tab-link" data-tab="perfil">
            Perfil
          </a>
        </li>
        <li class="mr-1">
          <a href="#" class="bg-white inline-block py-2 px-4 font-semibold tab-link" data-tab="estatisticas">
            Estatísticas
          </a>
        </li>
      </ul>
    </div>

    <!-- Seção de Meus Pedidos -->
    <div class="tab-content" id="meus-pedidos">
      <div class="bg-white rounded-lg shadow p-4">
        <h2 class="text-lg font-semibold mb-4">Meus Pedidos</h2>
        <!-- Coloque aqui a estrutura do conteúdo dos pedidos -->
      </div>
    </div>

    <!-- Seção de Perfil -->
    <div class="tab-content hidden" id="perfil">
      <div class="bg-white rounded-lg shadow p-4">
        <h2 class="text-lg font-semibold mb-4">Perfil</h2>
        <!-- Coloque aqui a estrutura do conteúdo do perfil -->
      </div>
    </div>

    <!-- Seção de Estatísticas -->
    <div class="tab-content hidden" id="estatisticas">
      <div class="bg-white rounded-lg shadow p-4">
        <h2 class="text-lg font-semibold mb-4">Estatísticas</h2>
        <!-- Coloque aqui a estrutura do conteúdo das estatísticas -->
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
