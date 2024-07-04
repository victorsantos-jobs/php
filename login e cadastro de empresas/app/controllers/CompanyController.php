<?php
require_once 'app/models/Company.php';

class CompanyController {
    public function index() {
        $company = new Company();
        $companies = $company->getAll();
        require 'app/views/company/index.php';
    }

    public function create() {
        require 'app/views/company/create.php';
    }

    public function store() {
        $data = $_POST;
        $company = new Company();
        $company->create($data);
        header('Location: /manageasy/companies');
    }

    public function edit($id) {
        $company = new Company();
        $company = $company->getById($id);
        require 'app/views/company/edit.php';
    }

    public function update($id) {
        $data = $_POST;
        $company = new Company();
        $company->update($id, $data);
        header('Location: /manageasy/companies');
    }

    public function delete($id) {
        $company = new Company();
        $company->delete($id);
        header('Location: /manageasy/companies');
    }

    public function search() {
        $query = $_GET['query'];
        $company = new Company();
        $results = $company->search($query);
        echo json_encode($results);
    }
}
?>
