<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script  src="cadastroAlteracaoPessoa.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.css">    
    <link rel="stylesheet" href="../css/padrao.css">    
    <title></title>
</head>
<body onload="">
<header class="fixed-top">
            <h4 id="h4TituloPagina">TITULO DA PÁGINA</h4>
        </header>
    
    <div class="container" style="margin-top:50px">   
      <form id="formPesquisaPessoa" style="display: none;">
      <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="DIGITE NOME DO PRODUTO" aria-label="Recipient's username" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">PESQUISAR</button>
          </div>
        </div>    
      </form>

        <form id="formDadosBasicos">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" placeholder="Nome Completo">
            <div class="row">            
              <div class="col-sm-9">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" name="cpf" placeholder="CPF">
              </div>
              <div class="col-sm-3">
                <label for="nascimento">DATA NASC.:</label>
                <input type="text" class="form-control" name="nascimento" placeholder="DATA NASCIMENTO">
              </div>
            </div>
        </form>

        <form id="formTelefones">
          <label for="telefone1">TELEFONE 1:</label>
          <input type="text" class="form-control" name="telefone1" placeholder="TELEFONE 1">

          <label for="telefone2">TELEFONE 2</label>
          <input type="text" class="form-control" name="telefone2" placeholder="TELEFONE 2">
          
          <label for="telefone3">TELEFONE 3</label>
          <input type="text" class="form-control" name="telefone3" placeholder="TELEFONE 3">
      </form>

      <form id="formEndereco">
        <div class="row">            
          <div class="col-sm-2">
            <label for="cep">CEP:</label>
            <input type="text" class="form-control" name="cep" placeholder="CEP">
          </div>
          <div class="col-sm-8">
            <label for="logradouro">LOGRADOURO:</label>
            <input type="text" class="form-control" name="logradouro" placeholder="LOGRADOURO(RUA, AVENIDA, ETC)">
          </div>
          <div class="col-sm-2">
            <label for="numero">NÚMERO:</label>
            <input type="text" class="form-control" name="numero" placeholder="NÚMERO">
          </div>
        </div>

        <div class="row">            
          <div class="col-sm-6">
            <label for="complemento">COMPLEMENTO:</label>
            <input type="text" class="form-control" name="complemento" placeholder="COMPLEMENTO">
          </div>
          <div class="col-sm-6">
            <label for="pontoReferencia">PONTO DE REFERÊNCIA:</label>
            <input type="text" class="form-control" name="pontoReferencia" placeholder="PONTO REFERÊNCIA">
          </div>
        </div>

        <div class="row">            
          <div class="col-sm-4">
            <label for="bairro">BAIRRO:</label>
            <input type="text" class="form-control" name="bairro" placeholder="BAIRRO">
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label for="cidade">CIDADE:</label>
              <select class="form-control" id="cidade">
                <option>1</option>
              </select>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label for="estado">ESTADO:</label>
              <select class="form-control" id="estado">
                <option>1</option>
              </select>
            </div>
          </div>
        </div>
      </form>

      
      <form id="servicosPrestados"  style="display: none;">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="DIGITE NOME DO PRODUTO" aria-label="Recipient's username" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">PESQUISAR</button>
          </div>
        </div>
        <ul class="list-group">
          <li class="list-group-item">
            <div style="width: 100%;">
              <span>EXEMPLO DE ITEM</span>
              <button type="button" class="float-right">EXCLUIR</button>
            </div>
          </li>
        </ul>
      </form>
      
      <div class="w-100 text-center"><button id="botaoSalvar" class="btn btn-secondary">SALVAR</button></div>

        <footer></footer>
    </div>
    
    
</body>
</html>