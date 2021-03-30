<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="cadastroAlteracaoPessoa.css">
    <script src="cadastroAlteracaoPessoa.js"></script>
    <title></title>
</head>
<body>
    
    <div class="container">
        <header>
            <h4>TITULO DA PÁGINA</h4>
        </header>

        <form id="pesquisaServico">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="DIGITE NOME DO PRODUTO" aria-label="Recipient's username" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">PESQUISAR</button>
          </div>
        </div>
      </form>

        <form id="formDadosServico">
            <label for="nome">Nome do Serviço:</label>
            <input type="text" class="form-control" name="nome" placeholder="Nome do serviço">
            <label for="valor">Valor(R$):</label>
            <input type="number" class="form-control" name="valor" placeholder="Valor do serviço (R$)">
            <label for="tempo_gasto">Tempo Gasto:</label>
            <input type="time" class="form-control" name="tempo_gasto" placeholder="Tem Gasto">
        </form>
        <div class="w-100 text-center"><button class="btn">SALVAR</button></div>
        

        <footer></footer>
    </div>
    
    
</body>
</html>