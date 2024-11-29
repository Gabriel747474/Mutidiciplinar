<?php
namespace App\model;

use App\persistence\ConnectionFactory;
use PDO;
use PDOException;

class Animal{
    private $nome;
    private $raca;
    private $descricao;

   

    public function __construct($nome,  $raca, $descricao) {

        $this->nome = $nome;
        $this->raca = $raca;
        $this->descricao= $descricao;
    }

    public function cadastrar_produto() {
        try {
            $pdo = ConnectionFactory::getConnection();
            // Prepara a consulta para inserir o novo usuário
            $stmt = $pdo->prepare("INSERT INTO animal(nome, reca, descricao) VALUES (:nome, :raca, :descricao)");
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':raca', $this->raca);
            $stmt->bindParam(':descricao', $this->descricao);
            $stmt->execute();


            header("Location:principal.php");
            exit;
        } catch (PDOException $e) {
            return 'Erro ao marcar consulta: ' . $e->getMessage();
        }
    }
}