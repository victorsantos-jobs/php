<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <title>Empresas</title>
    <link rel="stylesheet" href="/app/public/style.css">
    <script src="/public/js/search.js"></script>
</head>
<body>


<br>
<a href="/manageasy/company/create"><button>Adicione uma nova empresa. </button></a>
<br>
    <div class="container">
       
 
      <!-- <div class="busca">
        <input type="text" id="search" placeholder="Buscar...">
        <div  id="results"></div>
        </div> -->
        
        <?php if (!empty($companies)): ?>
            <table class="box1">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Telefone 1</th>
                        <th>Telefone 2</th>
                        <th>CEP</th>
                        <th>CNPJ</th>
                        <th>Email</th>
                        <th>Rua</th>
                        <th>Número</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>Complemento</th>
                        <th>Facebook</th>
                        <th>Instagram</th>
                        <th>Site</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($companies as $company): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($company['name'] ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($company['phone1'] ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($company['phone2'] ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($company['cep'] ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($company['cnpj'] ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($company['email'] ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($company['street'] ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($company['number'] ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($company['neighborhood'] ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($company['city'] ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($company['state'] ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($company['complement'] ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($company['facebook'] ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($company['instagram'] ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($company['wesite'] ?? ''); ?></td>
                            <td>
                                <a class="button-edit" href="/manageasy/company/edit/<?php echo $company['id']; ?>">Editar</a>
                                <a class="button-delete" href="/manageasy/company/delete/<?php echo $company['id']; ?>" onclick="return confirm('A empresa será apagada. Deseja continuar?');">Deletar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br>
        <?php else: ?>
            <p>Cadastre sua primeira empresa.</p>
        <?php endif; ?>
    </div>

    <script>
        document.getElementById('search').addEventListener('input', function() {
            const query = this.value;
            fetch(`/manageasy/company/search?query=${query}`)
                .then(response => response.json())
                .then(data => {
                    let resultsDiv = document.getElementById('results');
                    resultsDiv.innerHTML = '';
                    data.forEach(company => {
                        let div = document.createElement('div');
                        div.textContent = `${company.name} - ${company.cnpj}`;
                        resultsDiv.appendChild(div);
                    });
                });
        });
    </script>
</body>
</html>
