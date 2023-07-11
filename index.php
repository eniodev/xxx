<?php session_start(); ?>
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
<script src="https://cdn.tailwindcss.com/3.3.0"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./content/bootstrap/css/index.css" />
  <title>outdoors, inc.</title>
</head>

<body>
  <header class="py-4">
    <div class="container flex items-center justify-between mx-auto">
      <h1 class="text-2xl font-bold">Outdoors</h1>
      <div>
      <?php if (!isset($_SESSION['user'])): ?>
      <!-- Sessão não iniciada: mostrar os textos "Criar conta" e "Entrar" -->
      <button onclick="location.href='views/signup.php'" class="border border-black bg-transparent  px-4 py-2 rounded-full mr-2">Criar Conta</button>
      <button onclick="location.href='views/login.php'" class="px-4 py-2 rounded-md">Entrar</button>      
      
      <!-- Outros elementos do menu para usuários logados -->
      <?php else: ?>
      <!-- Sessão iniciada: exibir o link para o perfil -->
      <button onclick="location.href='views/client_dashboard.php'" class="border border-black bg-transparent  px-4 py-2 rounded-full mr-2">Minha Conta</button>
      <?php endif; ?>
    </div>
    </div>
  </header>


  <div
  id="carouselExampleSlidesOnly"
  class="relative"
  data-te-carousel-init
  data-te-carousel-slide>
  <!--Carousel items-->
  <div
    class="relative w-full overflow-hidden after:clear-both after:block after:content-[''] ">
    <!--First item-->
    <div
      class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-te-carousel-item
      data-te-carousel-active>
      <img
        src="https://images.pexels.com/photos/6695415/pexels-photo-6695415.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
        class="block w-full"
        alt="Wild Landscape" />
    </div>
    <!--Second item-->
    <div
      class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-te-carousel-item>
      <img
        src="https://images.pexels.com/photos/3647075/pexels-photo-3647075.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
        class="block w-full"
        alt="Camera" />
    </div>
    <!--Third item-->
    <div
      class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-te-carousel-item>
      <img
        src="https://images.pexels.com/photos/13713058/pexels-photo-13713058.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
        class="block w-full"
        alt="Exotic Fruits" />
    </div>
  </div>
</div>
    <!--Call to action -->
    <div class="absolute top-20 mt-60 left-0 w-full text-center p-4 text-white">
    <h1 class="text-6xl font-bold  mb-4">Os Melhores Outdoors</h1>
    <p class="text-xl ">Alcance um público maior com nossos espaços publicitários ao ar livre.</p>
    <a href="#cards" class="mt-6 inline-block bg-gray-900 hover:bg-gray-600 text-white font-bold py-2 px-6 rounded">Ver Opções</a>
  </div>

  <!-- Status -->  
<div class="flex w-full justify-center py-10">
  <div class="max-w-lg flex grid-cols-4 gap-6">
<div class="flex items-center">
  <svg class="w-6 h-6 mr-2 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <path d="M12 2L1 21h22L12 2zm0 6l6 9H6l6-9zm0 0v9"></path>
  </svg>
  <p class="text-gray-800">18&nbsp;Províncias</p>
</div>

<div class="flex items-center">
      <svg class="w-6 h-6 mr-2 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M12 2a7 7 0 0 1 7 7c0 5.25-7 13-7 13S5 14.25 5 9a7 7 0 0 1 7-7z"></path>
        <circle cx="12" cy="9" r="2"></circle>
      </svg>
      <p class="text-gray-800">500+&nbsp;Localidades</p>
    </div>

<div class="flex items-center">
  <svg class="w-6 h-6 mr-2 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
    <circle cx="8.5" cy="8.5" r="1.5"></circle>
    <polyline points="21 15 16 10 5 21"></polyline>
  </svg>
  <p class="text-gray-800">300+&nbsp;Paisagens</p>
</div>

<div class="flex items-center w-full">
  <svg class="w-6 h-6 mr-2 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <circle cx="12" cy="12" r="10"></circle>
    <polyline points="12 6 12 12 16 14"></polyline>
  </svg>
  <p class="text-gray-800">Disponível&nbsp;24/7</p>
</div>
  </div>
</div>

<!-- Search area-->
<div class="flex flex-col items-center w-full">
<div class="flex flex-col w-[70%]">
  <h2 class="text-lg font-bold">Faça a sua escolha</h2>
  <div class="flex items-center mt-4 w-full">
    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-full rounded-l-lgx  focus:outline-none" placeholder="Digite aqui o que procura">
    <button class="px-4 py-3 bg-gray-200x rounded-r-lgx">
      <svg class="w-4 h-4 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M22 22l-6-6"></path>
        <circle cx="10" cy="10" r="7"></circle>
      </svg>
    </button>
  </div>
</div>
</div>

<!-- Cards area -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-10 px-10">
  <!-- Card 1 -->
  <div class="bg-white rounded-lg shadow-sm p-4 border border-gray-200">
    <img src="caminho/para/imagem1.jpg" alt="Imagem 1" class="w-full h-40 object-cover rounded-md">
    <h3 class="text-lg font-semibold mt-2">Nome do Card 1</h3>
    <p class="text-gray-600 mt-1">Pequena descrição do Card 1</p>
    <p class="text-gray-800 font-bold mt-1">$99.99</p>
    <button class="mt-4 bg-gray-900 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
      Alugar agora
    </button>
  </div>

  <!-- Card 2 -->
  <div class="bg-white rounded-lg shadow-sm p-4 border border-gray-200" id="cards">
    <img src="caminho/para/imagem2.jpg" alt="Imagem 2" class="w-full h-40 object-cover rounded-md">
    <h3 class="text-lg font-semibold mt-2">Nome do Card 2</h3>
    <p class="text-gray-600 mt-1">Pequena descrição do Card 2</p>
    <p class="text-gray-800 font-bold mt-1">$79.99</p>
    <button class="mt-4 bg-gray-900 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
      Alugar agora
    </button>
  </div>

  <!-- Card 3 -->
  <div class="bg-white rounded-lg shadow-sm p-4 border border-gray-200">
    <img src="caminho/para/imagem3.jpg" alt="Imagem 3" class="w-full h-40 object-cover rounded-md">
    <h3 class="text-lg font-semibold mt-2">Nome do Card 3</h3>
    <p class="text-gray-600 mt-1">Pequena descrição do Card 3</p>
    <p class="text-gray-800 font-bold mt-1">$59.99</p>
    <button class="mt-4 bg-gray-900 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
      Alugar agora
    </button>
  </div>

  <!-- Adicionar mais cards conforme necessário -->
    <!-- Card 1 -->
    <div class="bg-white rounded-lg shadow-sm p-4 border border-gray-200">
    <img src="caminho/para/imagem1.jpg" alt="Imagem 1" class="w-full h-40 object-cover rounded-md">
    <h3 class="text-lg font-semibold mt-2">Nome do Card 1</h3>
    <p class="text-gray-600 mt-1">Pequena descrição do Card 1</p>
    <p class="text-gray-800 font-bold mt-1">$99.99</p>
    <button class="mt-4 bg-gray-900 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
      Alugar agora
    </button>
  </div>

  <!-- Card 2 -->
  <div class="bg-white rounded-lg shadow-sm p-4 border border-gray-200" id="cards">
    <img src="caminho/para/imagem2.jpg" alt="Imagem 2" class="w-full h-40 object-cover rounded-md">
    <h3 class="text-lg font-semibold mt-2">Nome do Card 2</h3>
    <p class="text-gray-600 mt-1">Pequena descrição do Card 2</p>
    <p class="text-gray-800 font-bold mt-1">$79.99</p>
    <button class="mt-4 bg-gray-900 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
      Alugar agora
    </button>
  </div>

  <!-- Card 3 -->
  <div class="bg-white rounded-lg shadow-sm p-4 border border-gray-200">
    <img src="caminho/para/imagem3.jpg" alt="Imagem 3" class="w-full h-40 object-cover rounded-md">
    <h3 class="text-lg font-semibold mt-2">Nome do Card 3</h3>
    <p class="text-gray-600 mt-1">Pequena descrição do Card 3</p>
    <p class="text-gray-800 font-bold mt-1">$59.99</p>
    <button class="mt-4 bg-gray-900 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
      Alugar agora
    </button>
  </div>
</div>

<!-- Newsletter -->
<div class="w-full bg-gray-100 p-10 py-20 mt-10 flex items-center justify-around">
  <h2 class="text-gray- text-2xl">Receba nossas novidades por e-mail!</h2>
  <div class="flex">
    <input type="email" placeholder="joao@dominio.com" class="rounded-l-lg px-4 py-2 border border-gray-300 focus:outline-none" />
    <button class="bg-gray-900 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-r-lg animate-pulse-border">
      Assinar
    </button>
  </div>
</div>

<!-- Footer -->
<footer class="bg-gray-600 py-20">
  <div class="container mx-auto flex items-start justify-between">
    <div>
      <ul class="flex space-x-4">
        <li>
          <a href="#" class="text-gray-300 hover:text-white">
            <!-- Ícone do Facebook -->
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20.7 0H3.3C1.48 0 0 1.48 0 3.3V20.7C0 22.52 1.48 24 3.3 24H12v-9H9.15v-3H12V8.63c0-2.95 1.8-4.56 4.43-4.56 1.27 0 2.36.1 2.67.15v3.08h-1.82C16.25 7.3 16 7.95 16 8.63v1.96h3l-.39 3H16v9h4.7C22.52 24 24 22.52 24 20.7V3.3C24 1.48 22.52 0 20.7 0z" />
          </svg>

          </a>
        </li>
        <li>
          <a href="#" class="text-gray-300 hover:text-white">
            <!-- Ícone do Instagram -->


          </a>
        </li>
        <li>
          <a href="#" class="text-gray-300 hover:text-white">
            <!-- Ícone do Twitter -->
          </a>
        </li>
        <li>
          <a href="#" class="text-gray-300 hover:text-white">
            <!-- Ícone do Pinterest -->
          </a>
        </li>
      </ul>
      <p class="text-gray-300">&copy; outdoors - 2023</p>
    </div>
    <div class="flex space-x-8">
      <div>
        <h3 class="text-white font-bold mb-2">Empresa</h3>
        <ul>
          <li><a href="#" class="text-gray-300 hover:text-white underline">História</a></li>
          <li><a href="#" class="text-gray-300 hover:text-white underline">Sobre nós</a></li>
          <li><a href="#" class="text-gray-300 hover:text-white underline">Imprensa</a></li>
          <li><a href="#" class="text-gray-300 hover:text-white underline">Blog</a></li>
          <li><a href="#" class="text-gray-300 hover:text-white underline">Carreira</a></li>
        </ul>
      </div>
      <div>
        <h3 class="text-white font-bold mb-2">FAQ</h3>
        <ul>
          <li><a href="#" class="text-gray-300 hover:text-white underline">O que é um outdoor?</a></li>
          <li><a href="#" class="text-gray-300 hover:text-white underline">Como posso alugar um outdoor?</a></li>
          <li><a href="#" class="text-gray-300 hover:text-white underline">Quais são os outdoors disponíveis?</a></li>
          <li><a href="#" class="text-gray-300 hover:text-white underline">Preciso estar em Luanda para alugar um outdoor?</a></li>
          <li><a href="#" class="text-gray-300 hover:text-white underline">Qual é o valor mínimo de aluguer de outdoors?</a></li>
          <li><a href="#" class="text-gray-300 hover:text-white underline">Têm outdoors disponíveis?</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>




  <!-- Resto do conteúdo da página -->
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>
</html>
