<?php
include_once '../services/client_service.php';
class ClientController {
    private $client_service;

    public function __construct(ClientService $client_service) {
        $this->client_service = $client_service;
    }

    public function createClient(Client $client) {
        $new_client_id = $this->client_service->createClient($client);

        if ($new_client_id) {
            $to_email = "enioblvck@gmail.com";
            $subject = "Activação de Conta";
            $body = "Saudações Admin, \n\n 
            Uma nova conta foi criada, por favor aceda ao painel para proceder à activação.
            \nConta nº $new_client_id";
            $headers = "From: Outdoors, inc.";

            mail($to_email, $subject, $body, $headers);
            echo "Novo cliente criado com o ID: " . $new_client_id;
        } else {
            echo "Erro ao criar o cliente.";
        }
    }
}