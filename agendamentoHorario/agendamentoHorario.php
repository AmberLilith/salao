<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.css">    
    <link rel="stylesheet" href="../css/padrao.css">    
    <title></title>
</head>
<body onload="">
  
    
    <div class="container">
        <header>
          <div class="dropdown float-left mt-1">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              OPÇÕES
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#" onclick="window.open('../horariosDoDia/horariosDoDia.php','_self')">EXIBIR HORÁRIOS DO DIA</a>
              <a class="dropdown-item" href="#" onclick="horario.ativaModoEdicaoHorario(1);">AGENDAR HORÁRIO</a>
              <a class="dropdown-item" href="#" onclick="horario.ativaModoEdicaoHorario(2);">ALTERAR AGENDAMENTO</a>
              <a class="dropdown-item" href="#" onclick="horario.ativaModoEdicaoHorario(3)">EXCLUIR AGENDAMENTO</a>
            </div>
          </div>
            <h2 id="tituloPaginaAgendamentoHorario">AGENDAR, ALTERAR OU EXCLUIR HORÁRIO(S)</h2>
        </header>

        <!-- <button onclick="exibeServicosDoProfissional('servicosDoProfissional')">teste</button>
        <button onclick="calculaValorServicosAdicionados('servicosAdicionados', 'somaDosServicosAdicionados')">teste 2</button> -->

        <div class="accordion" id="accordionCliente">
          <div class="card">
              <div class="card-header" id="headingCliente">
                  <h2 class="mb-0">                        
                      <div class="row">                           
                         <div class="col-xs-6 col-sm-6 col-md-8 col-lg-8">
                              <p>CLIENTE</p>
                         </div>                           
                         <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                              <button class="btn btn-secondary float-right mr-1 ml-1"  onclick="const modal = new ModalCadastroAlteracaoPessoa(1,2);modal.geraModalCadastroAlteracaoPessoa();modal.ativaModoTipoCadAltPessoa();modal.ativaModalCadastroAlteracaoPessoa()"><i class="fas fa-pencil-alt"></i></button>
                              <button class="btn btn-secondary float-right mr-1 ml-1" onclick="const modal = new ModalCadastroAlteracaoPessoa(1,1);modal.geraModalCadastroAlteracaoPessoa();modal.ativaModoTipoCadAltPessoa();modal.ativaModalCadastroAlteracaoPessoa()"><i class="fas fa-plus"></i></button>
                         </div>                           
                      </div>                        
                  </h2>
              </div>
              <div id="collapseCliente" class="collapse show" aria-labelledby="headingCliente" data-parent="#accordionProfissional">
                  <div class="card-body">
                      <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="DIGITE NOME OU CPF DO CLIENTE" aria-label="Recipient's username" aria-describedby="basic-addon2">
                          <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">PESQUISAR</button>
                          </div>
                        </div>
                  </div>
              </div>
          </div>
      </div>

        <div class="accordion" id="accordionProfissional">
            <div class="card">
                <div class="card-header" id="headingProfissional">
                    <h2 class="mb-0">                        
                        <div class="row">                           
                           <div class="col-xs-6 col-sm-6 col-md-9 col-lg-9">
                                <p>PROFISSIONAL</p>
                           </div>                           
                           <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <button onclick="const modal = new ModalCadastroAlteracaoPessoa(2,2);modal.geraModalCadastroAlteracaoPessoa();modal.ativaModoTipoCadAltPessoa();modal.ativaModalCadastroAlteracaoPessoa()" class="btn btn-secondary float-right mr-1 ml-1"><i class="fas fa-pencil-alt"></i></button>
                                <button onclick="const modal = new ModalCadastroAlteracaoPessoa(2,1);modal.geraModalCadastroAlteracaoPessoa();modal.ativaModoTipoCadAltPessoa();modal.ativaModalCadastroAlteracaoPessoa()" class="btn btn-secondary float-right mr-1 ml-1"><i class="fas fa-plus"></i></button>
                           </div>                           
                        </div>                        
                    </h2>
                </div>
                <div id="collapseProfissional" class="collapse show" aria-labelledby="headingProfissional" data-parent="#accordionCliente">
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="DIGITE NOME OU CPF DO PROFISIONAL" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                              <button onclick="$('#modalSelecionaPessoa').modal('show')" class="btn btn-outline-secondary" type="button">PESQUISAR</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion" id="accordionServicos">
            <div class="card">
                <div class="card-header" id="headingServicos">
                    <h2 class="mb-0">                        
                        <div class="row">                           
                           <div class="col-xs-6 col-sm-6 col-md-8 col-lg-8">
                                <p>SERVIÇOS</p>
                           </div>                           
                           <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                <button class="btn btn-secondary float-right mr-1 ml-1"  onclick="abreModalCadastroAlteracaoServico(2)"><i class="fas fa-pencil-alt"></i></button>
                                <button class="btn btn-secondary float-right mr-1 ml-1" onclick="abreModalCadastroAlteracaoServico(1)"><i class="fas fa-plus"></i></button>
                           </div>                           
                        </div>                        
                    </h2>
                </div>
                <div id="collapseServicos" class="collapse show" aria-labelledby="headingServicos" data-parent="#accordionServicos">
                    <div class="card-body overflow-auto" style="height:180px">
                        
                        <div class="row">
                            
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="overflow:scroll;">
                                <h5 class="border-bottom w-100 text-center">SERVIÇOS DISPONÍVEIS</h5>
                                <ul id="servicosDoProfissional" class="list-group">
                                    <li id="1" data_id_servico="1" class="list-group-item list-group-item-action" onclick="adicionaServico(this)">PROGRESSIVA</li>
                                    <li class="list-group-item list-group-item-action">ESCOVA</li>
                                    <li class="list-group-item list-group-item-action">Third item</li>
                                    <li class="list-group-item list-group-item-action">First item</li>
                                    <li class="list-group-item list-group-item-action">Second item</li>
                                    <li class="list-group-item list-group-item-action">Third item</li>
                                  </ul>                                  
                            </div>

                            
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <H5 class="border-bottom w-100 text-center">SERVIÇOS ADICIONADOS</H5>
                                <ul id="servicosAdicionados" class="list-group">
                                </ul>
                                  <div class="w-100"><h5 id="somaDosServicosAdicionados" class="float-right">687</h5></div>
                            </div>
                            
                            
                        </div>
                           
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion" id="accordionHorario">
            <div class="card">
                <div class="card-header" id="headingHorario">
                    <h2 class="mb-0">                        
                        <div class="row">                           
                           <div class="col-xs-6 col-sm-6 col-md-8 col-lg-8">
                                <p>DATA E HORÁRIO</p>
                           </div>                           
                           <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                <button class="btn btn-secondary float-right mr-1 ml-1" style="width: 40px;" onclick="$('#modalFormaDePagamento').modal('show')"><i class="fas fa-credit-card"></i></button>
                                <button class="btn btn-danger float-right mr-1 ml-1" style="width: 40px;"><i class="fas fa-exclamation"></i></button>
                           </div>                           
                        </div>                        
                    </h2>
                </div>
                <div id="collapseDataHorario" class="collapse show" aria-labelledby="headingHorario" data-parent="#accordionExample">
                    <div class="card-body">
                        <h4 class="w-100 text-center">DATA: <input type="date"  id="dataHorario"> - HORÁRIO: <input type="time" id="horarioHorario"></h4>
                    </div>
                </div>
            </div>
        </div>

         <div class="modal fade" id="modalCadastroAlteracaoServico" tabindex="-1" role="dialog" aria-labelledby="modalCadastroAlteracaoServicoTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalCadastroAlteracaoServicoTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="modalCadastroAlteracaoServicoBody" class="modal-body">
                  <form id="formPesquisaServico">
                      <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="DIGITE NOME DO PRODUTO" aria-label="Recipient's username" aria-describedby="basic-addon2">
                          <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">PESQUISAR</button>
                          </div>
                      </div> 
                  </form>

                  <form id="formCadastroAlteracaoServico">
                      <label for="nome">Nome:</label>
                      <input type="text" class="form-control" name="nome" placeholder="Nome Completo">
                      <label for="nome">Nome:</label>
                      <input type="text" class="form-control" name="nome" placeholder="Nome Completo">
                      <label for="nome">Nome:</label>
                      <input type="text" class="form-control" name="nome" placeholder="Nome Completo">
                  </form>
                  <div class="w-100 text-center"><button id="botaoSalvarServico" class="btn btn-secondary">SALVAR</button></div>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>        


        <div class="modal fade" id="modalFormaDePagamento" tabindex="-1" role="dialog" aria-labelledby="modalFormaDePagamentoTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalFormaDePagamentoTitle">FORMA DE PAGAMENTO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="modalFormaDePagamentoBody" class="modal-body">
                <ul class="list-group">
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#pagamentoCartao">CARTÃO DE CRÉDITO/DÉBITO</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#pagamentoDinheiro">DINHEIRO</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#pagamentoAPrazo">A PRAZO</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#pagamentoCheque">CHEQUE</a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane container active" id="pagamentoCartao">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="formaPagamento" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">CRÉDITO</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="formaPagamento" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">DÉBITO</label>
                      </div>
                    </div>
                    <div class="tab-pane container fade" id="pagamentoDinheiro">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="formaPagamento" id="inlineRadio2" value="option2" checked>
                        <label class="form-check-label" for="inlineRadio2">DINHEIRO</label>
                      </div>
                    </div>
                    <div class="tab-pane container fade" id="pagamentoAPrazo">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="formaPagamento" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">A PRAZO</label>
                      </div>
                    </div>
                    <div class="tab-pane container fade" id="pagamentoCheque">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="formaPagamento" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">CHEQUE À VISTA</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="formaPagamento" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">CHEQUE 30 DIAS</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="formaPagamento" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">CHEQUE 60 DIAS</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="formaPagamento" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">CHEQUE 90 DIAS</label>
                      </div>
                    </div>
                </div>
                </ul>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>

                
        <div class="w-100 m-2 text-center"><button class="btn btn-secondary">SALVAR</button></div>
  
        <footer></footer>
    </div>
    
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="agendamentoHorario.js"></script>  
    <script src="horario.js"></script> 
    <script src="servico.js"></script> 
    <script src="geraModalCadastroAlteracaoPessoa.js"></script>
</body>
</html>