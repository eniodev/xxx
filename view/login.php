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
      <h2 class="text-center text-4xl font-bold text-white">É uma honra sermos a sua escolha! <br/>Entre e os seus outdoors</h2>
    </div>
    <div class="flex-1 bg-white flex flex-col justify-center items-center px-6 py-8">
      <h1 class="text-3xl font-bold mb-6">Outdoors</h1>
      <form class="w-full max-w-sm">
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