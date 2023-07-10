<?php 
//include_once "../interfaces/iclient_service.php";
include_once "../repositories/client_repository.php";

class ClientService /*implements IUserService*/ {
private $client_repository;

public function __construct(ClientRepository $client_repository) {
$this->client_repository = $client_repository;
}

public function createClient(Client $client) {
// Realizar validações ou lógica de negócio, se necessário

return $this->client_repository->createClient($client);
}
}