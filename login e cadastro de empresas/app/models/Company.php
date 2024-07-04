<?php
require_once 'config/database.php';

class Company {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function getAll() {
        $stmt = $this->pdo->query('SELECT * FROM companies');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->pdo->prepare('INSERT INTO companies (user_id, name, phone1, phone2, cep, cnpj, email, street, number, neighborhood, city, state, complement, facebook, instagram, website) VALUES (:user_id, :name, :phone1, :phone2, :cep, :cnpj, :email, :street, :number, :neighborhood, :city, :state, :complement, :facebook, :instagram, :website)');
        $stmt->execute([
            'user_id' => $_SESSION['user_id'],
            'name' => $data['name'],
            'phone1' => $data['phone1'],
            'phone2' => $data['phone2'],
            'cep' => $data['cep'],
            'cnpj' => $data['cnpj'],
            'email' => $data['email'],
            'street' => $data['street'],
            'number' => $data['number'],
            'neighborhood' => $data['neighborhood'],
            'city' => $data['city'],
            'state' => $data['state'],
            'complement' => $data['complement'],
            'facebook' => $data['facebook'],
            'instagram' => $data['instagram'],
            'website' => $data['website']
        ]);
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare('SELECT * FROM companies WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $data) {
        $stmt = $this->pdo->prepare('UPDATE companies SET name = :name, phone1 = :phone1, phone2 = :phone2, cep = :cep, cnpj = :cnpj, email = :email, street = :street, number = :number, neighborhood = :neighborhood, city = :city, state = :state, complement = :complement, facebook = :facebook, instagram = :instagram, website = :website WHERE id = :id');
        $stmt->execute([
            'name' => $data['name'],
            'phone1' => $data['phone1'],
            'phone2' => $data['phone2'],
            'cep' => $data['cep'],
            'cnpj' => $data['cnpj'],
            'email' => $data['email'],
            'street' => $data['street'],
            'number' => $data['number'],
            'neighborhood' => $data['neighborhood'],
            'city' => $data['city'],
            'state' => $data['state'],
            'complement' => $data['complement'],
            'facebook' => $data['facebook'],
            'instagram' => $data['instagram'],
            'website' => $data['website'],
            'id' => $id
        ]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare('DELETE FROM companies WHERE id = :id');
        $stmt->execute(['id' => $id]);
    }

    public function search($query) {
        $stmt = $this->pdo->prepare('SELECT * FROM companies WHERE name LIKE :query OR cnpj LIKE :query');
        $stmt->execute(['query' => '%' . $query . '%']);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
