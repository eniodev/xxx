<?php include_once "../dbconfig/dbconfig.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Tailwind Elements!-->
    <link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
  rel="stylesheet" />
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
<link rel="stylesheet" href="../content/bootstrap/css/signup.css"/>
<script src="https://cdn.tailwindcss.com/3.3.0"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../content/bootstrap/js/signup.js"></script>

</head>

<body>
  <div class="flex h-screen">
    <div id="bg" class="flex-1 bg-gray-100 flex flex-col justify-center items-center px-6 py-8">
      <h2 class="text-center text-4xl font-bold text-white">É uma honra sermos a sua escolha! <br/>Cria a tua conta e publicita sem parar.</h2>
    </div>
    <div class="flex-1 bg-white flex flex-col justify-center items-center px-6 py-8">
      <h1 class="text-3xl font-bold mb-6">Outdoors</h1>
      <form class="w-full max-w-sm overflow-auto">

        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nome</label>
            <input type="text" id="name" name="name" placeholder="Digite seu nome" class="w-full border border-gray-300 rounded py-2 px-4">
        </div>
        <div class="mb-4">
            <label for="activity" class="block text-gray-700 text-sm font-bold mb-2">Atividade</label>
            <input type="text" id="activity" name="activity" placeholder="Digite sua atividade" class="w-full border border-gray-300 rounded py-2 px-4">
        </div>
        <div class="mb-4">
            <label for="province" class="block text-gray-700 text-sm font-bold mb-2">Província</label>
            <select id="province" name="province" class="w-full border border-gray-300 rounded py-2 px-4">
            <option value="">Selecione a província</option>
            <!-- Opções de províncias -->
            </select>
        </div>
        <div class="mb-4">
            <label for="municipality" class="block text-gray-700 text-sm font-bold mb-2">Município</label>
            <select id="municipality" name="municipality" class="w-full border border-gray-300 rounded py-2 px-4">
            <option value="">Selecione o município</option>
            <!-- Opções de municípios -->
            </select>
        </div>
        <div class="mb-4">
            <label for="commune" class="block text-gray-700 text-sm font-bold mb-2">Comuna</label>
            <select id="commune" name="commune" class="w-full border border-gray-300 rounded py-2 px-4">
            <option value="">Selecione a comuna</option>
            <!-- Opções de comunas -->
            </select>
        </div>
        <div class="mb-4">
            <label for="country" class="block text-gray-700 text-sm font-bold mb-2">País</label>
            <select id="country" name="country" class="w-full border border-gray-300 rounded py-2 px-4">
            <option value="">Selecione o país</option>
            <!-- Opções de países -->
            </select>
        </div>
        <div class="mb-4">
            <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Endereço</label>
            <input type="text" id="address" name="address" placeholder="Digite seu endereço" class="w-full border border-gray-300 rounded py-2 px-4">
        </div>
        <div class="mb-4">
            <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Telefone</label>
            <input type="tel" id="phone" name="phone" placeholder="Digite seu telefone" class="w-full border border-gray-300 rounded py-2 px-4">
        </div>
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
          <input type="password" id="password" name="password" placeholder="Digite novamente sua senha" class="w-full border border-gray-300 rounded py-2 px-4">
        </div>
        <div class="mb-4">
          <button type="submit" class="bg-gray-900 text-white font-bold py-2 px-4 rounded w-full">Criar conta</button>
        </div>
        <div class="mb-4">  
          <button type="button" onclick="location.href='login.php'" class="border border-gray-900 font-bold py-2 px-4 rounded w-full">Entrar</button>
        </div>
      </form>
    </div>
  </div>
</body>


</html>