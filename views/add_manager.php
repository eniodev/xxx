<?php
// Include necessary files and dependencies
require_once '../controllers/ManagerController.php';
require_once '../Repositories/ManagerRepository/managerRepository.php';
require_once '../dbconfig/dbconfig.php';

// Instantiate ManagerController
$managerRepository = new ManagerRepository($DB_con);
$managerService = new ManagerService($managerRepository);
$managerController = new ManagerController($managerService);

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $fullName = $_POST['full_name'];
    $email = $_POST['email'];
    // Get other form fields

    // Call the appropriate method in the controller to add the manager
    $manager = new Manager();
    $manager->setFullName($fullName);
    $manager->setEmail($email);

        
    $managerController->createManager($manager); 
    
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Formulário de Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="flex items-center justify-center h-screen">
        <div class="w-1/2 bg-white p-8 rounded-md shadow-md mx-auto my-auto">
            <h1 class="text-2xl font-bold mb-6 text-center">Adicionar Gestor</h1>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="full_name" class="block font-medium mb-1">Nome Completo:</label>
                        <input type="text" class="border border-gray-300 px-4 py-2 rounded-md w-full" id="full_name"
                            name="full_name" required>
                    </div>
                    <div>
                        <label for="email" class="block font-medium mb-1">E-mail:</label>
                        <input type="email" class="border border-gray-300 px-4 py-2 rounded-md w-full" id="email"
                            name="email" required>
                    </div>
                    <div>
                        <label for="province_id" class="block font-medium mb-1">Província:</label>
                        <select class="border border-gray-300 px-4 py-2 rounded-md w-full" id="province_id"
                            name="province_id" required>
                            <option value="">Selecione a Província</option>
                            <option value="1">Província 1</option>
                            <option value="2">Província 2</option>
                            <option value="3">Província 3</option>
                        </select>
                    </div>
                    <div>
                        <label for="municipality_id" class="block font-medium mb-1">Município:</label>
                        <select class="border border-gray-300 px-4 py-2 rounded-md w-full" id="province_id"
                            name="province_id" required>
                            <option value="">Selecione o Município</option>
                            <option value="1">Província 1</option>
                            <option value="2">Província 2</option>
                            <option value="3">Província 3</option>
                        </select>
                    </div>
                    <div>
                        <label for="comune_id" class="block font-medium mb-1">Comuna:</label>
                        <select class="border border-gray-300 px-4 py-2 rounded-md w-full" id="province_id"
                            name="province_id" required>
                            <option value="">Selecione a Comuna</option>
                            <option value="1">Província 1</option>
                            <option value="2">Província 2</option>
                            <option value="3">Província 3</option>
                        </select>
                    </div>
                    <div>
                        <label for="address" class="block font-medium mb-1">Endereço:</label>
                        <input type="text" class="border border-gray-300 px-4 py-2 rounded-md w-full" id="address"
                            name="address" required>
                    </div>
                    <div>
                        <label for="phone" class="block font-medium mb-1">Telefone:</label>
                        <input type="text" class="border border-gray-300 px-4 py-2 rounded-md w-full" id="phone"
                            name="phone" required>
                    </div>
                    <div>
                        <label for="username" class="block font-medium mb-1">Nome de Usuário:</label>
                        <input type="text" class="border border-gray-300 px-4 py-2 rounded-md w-full" id="username"
                            name="username" required>
                    </div>
                    <div>
                        <label for="password" class="block font-medium mb-1">Senha:</label>
                        <input type="password" class="border border-gray-300 px-4 py-2 rounded-md w-full" id="password"
                            name="password" required>
                    </div>
                    <div>
                        <label for="password" class="block font-medium mb-1">Confirmar senha:</label>
                        <input type="password" class="border border-gray-300 px-4 py-2 rounded-md w-full" id="password"
                            name="password" required>
                    </div>
                    <div class="col-span-2 flex justify-center center">

                        <input type="checkbox" class="form-checkbox" id="is_admin" name="is_admin">
                        <label class="ml-2" for="is_admin">Administrador</label>
                    </div>
                </div>
                <div class="flex justify-center mt-8">


                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>