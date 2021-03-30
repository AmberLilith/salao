<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="horariosDoDia.js"></script>    
    <script src="../agendamentoHorario/agendamentoHorario.js"></script>
    <script src="../agendamentoHorario/horario.js"></script>
    <script src="../relatorios/relatorios.js"></script>
    <script src="../js/utilitarios.js"></script>
    <link href="../fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.css"> 
    <link rel="stylesheet" href="../css/padrao.css"> 
    <title></title>
</head>
<body onload="exibeHorariosdoDia('divHorariosdoDia')">
    <div class="container">
        <header >
          <div class="dropdown float-left mt-1">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              OPÇÕES
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#" onclick="abrePaginaAgendarAlterarHorario(1)">AGENDAR, ALTERAR OU EXCLUIR HORÁRIO</a>
              <a class="dropdown-item" href="#" onclick="$('#modalRelatorios').modal('show')">RELATÓRIOS</a>
            </div>
          </div>
            <h2 id="tituloHorariosDoDia">HORÁRIOS DO DIA</h2>
        </header>
        <button onclick="">teste</button>
        <div id="divHorariosdoDia">      
        </div>

<!-- ************************ INICIO MODAL modalSelecaoExclusaoHorario **************************************** -->
        <div class="modal fade" id="modalSelecaoExclusaoHorario" tabindex="-1" role="dialog" aria-labelledby="tituloModalSelecaoExclusaoHorario" aria-hidden="true"  data-backdrop="static">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="tituloModalSelecaoExclusaoHorario">PESQUISAR HORÁRIO PARA ALTERAÇÃO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!-- ####################### INÍCIO NAV TABS RELATORIOS ################################ -->
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#horarioPorCliente">Sel. Horário Por Cliente</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#horarioPorData">Sel. Horário Por Data</a>
                  </li>
                </ul>
                <!-- ####################### FINAL NAV TABS RELATORIOS ################################ -->

 
                <!-- ####################### INÍCIO TAB CONTENT RELATORIOS ################################ -->
                <div class="tab-content">
                  <!-- ####################### INÍCIO TAB PANE CONTAINER HORARIOS POR CLIENTE ################################ -->
                  <div class="tab-pane active container" id="horarioPorCliente">
                    <div  id="inputGroupPesquisaClienteParaRelatorio" class="input-group mt-1 mb-3">
                      <input type="text" class="form-control" placeholder="Digite Nome o CPF do cliente" aria-label="Recipient's username" aria-describedby="">
                      <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="botaoPesquisaClienteParaExibirHorario" onclick="$('#selecionaClienteParaPesquisarHorario').modal('show')"><i class="m-1 fas fa-search"></i>PESQUISAR</button>
                      </div>
                    </div>
                    <ul id="listaDeHorariosPorCliente" class="list-group">
                      <li class="list-group-item list-group-item-action w-100">
                        PROGRESSIVA
                        <button class="btn btn-secondary float-right" data_id_servico="1" onclick="this.parentNode.remove()">
                          <i class="fas fa-check"></i>
                        </button>
                      </li>
                    </ul>
                  </div>
                  <!-- ####################### FINAL TAB PANE CONTAINER HORARIOS POR CLIENTE ################################ -->

                  <!-- ####################### INÍCIO TAB PANE CONTAINER HORARIOS POR DATA ################################ -->
                  <div class="tab-pane container" id="tabPanehorarioPorData">                    
                    <div class="input-group mt-1 mb-3">
                      <input type="date" id="inputDataHorarioSelecaoExclusao" class="form-control"  aria-label="Recipient's username" aria-describedby="">
                      <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="botaoPesquisaHorarioPorData" onclick="$('#selecionaClienteParaPesquisarHorario').modal('show')"><i class="m-1 fas fa-search"></i>PESQUISAR</button>
                      </div>
                    </div>
                    <ul  id="listaDeHorariosPorData" class="list-group">
                      <li class="list-group-item list-group-item-action w-100">
                        PROGRESSIVA
                        <button class="btn btn-secondary float-right" data_id_servico="1" onclick="this.parentNode.remove()">
                          <i class="fas fa-check"></i>
                        </button>
                      </li>
                    </ul>
                  </div>
                  <!-- ####################### FINAL TAB PANE CONTAINER HORARIOS POR DATA ################################ -->

                </div>
                <!-- ####################### FINAL TAB CONTENT RELATORIOS ################################ -->

              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>

        <!-- ########################### INÍCIO MODAL selecionaClienteParaPesquisarHorario ########################### -->
          <div class="modal fade" id="selecionaClienteParaPesquisarHorario" tabindex="-1" aria-labelledby="selecionaClienteParaPesquisarHorarioLabel" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="selecionaClienteParaPesquisarHorarioLabel">SELECIONE O CLIENTE</h5>      
                  <button type="button" class="close" data-dismiss="" aria-label="Close" onclick="$('#selecionaClienteParaPesquisarHorario').modal('hide')">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Item</a>
                  </div>
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
          </div>
        <!-- ########################### FINAL MODAL selecionaClienteParaPesquisarHorario ########################### -->
        </div>
<!-- ************************ FINAL MODAL modalSelecaoExclusaoHorario **************************************** -->

<!-- ************************ INICIO MODAL modalRelatorios **************************************** -->
        <div class="modal fade" id="modalRelatorios" tabindex="-1" aria-labelledby="tituloModalRelatorios" aria-hidden="true" data-backdrop="static">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="tituloModalRelatorios">RELATÓRIOS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>                
              </div>
              <div class="modal-body" style="height: 500px;">
                <div id="menuOpcoesRelatorios" class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    RELATÓRIOS
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#" onclick="relatorio.ativaTipoRelatorio(1)">DE ATENDIMENTO</a>
                    <a class="dropdown-item" href="#" onclick="relatorio.ativaTipoRelatorio(2)">DE PAGAMENTO A PRAZO</a>
                    <a class="dropdown-item" href="#" onclick="relatorio.ativaTipoRelatorio(3)">SERVIÇOS POR PERÍODO</a>
                  </div>
                </div>

                <h4 id="tituloTipoRelatorio" class="w-100 text-center mt-2">SELECIONE ACIMA O TIPO DE RELATÓRIO</h4>

                <ul id="tabOpcoesRelatorios" class="nav nav-tabs m-2">
                  <li id="opcaoRelatorioPorCliente" class="nav-item invisible">
                    <a id="linkOpcaoRelatorioPorCliente" class="nav-link" data-toggle="tab" href="#tabRelatorioPorCliente">Relatório Por Cliente</a>
                  </li>
                  <li id="opcaoRelatorioPorData" class="nav-item invisible">
                    <a id="linkOpcaoRelatorioPorData" class="nav-link" data-toggle="tab" href="#tabRelatorioPorData">Relatório Por Data</a>
                  </li>
                </ul>
                
                <div id="tabRelatorios" class="tab-content">
                  <div class="tab-pane container" id="tabRelatorioPorCliente">
                    <div id="inputGroupPesquisaClienteParaRelatorio" class="input-group mt-1 mb-3">
                      <input type="text" id="inputPesquisaClienteParaRelatorio" class="form-control" placeholder="Digite Nome o CPF do cliente" aria-label="Recipient's username" aria-describedby="">
                      <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="botaoPesquisaClienteParaRelatorio" onclick="relatorio.exibeClientesPesquisados();$('#modalSelecionaClienteParaRelatorio').modal('show')"><i class="m-1 fas fa-search"></i>PESQUISAR</button>
                      </div>
                    </div>
                    <div class="input-group mt-1 mb-3">
                      <input type="date" id="inputDataInicialRelatorioPorCliente" class="form-control"  aria-label="Recipient's username" aria-describedby="">
                      <input type="date"  id="inputDataFinalRelatorioPorCliente" class="form-control"  aria-label="Recipient's username" aria-describedby="">
                      <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="botaoRelatorioPorData" onclick=""><i class="m-1 fas fa-search"></i>PESQUISAR</button>
                      </div>
                    </div>
                     <ul id="relatorioPorCliente" class="list-group">
                      <li class="list-group-item list-group-item-action w-100">
                        PROGRESSIVA234
                      </li>
                    </ul>
                  </div>
                  <div class="tab-pane container" id="tabRelatorioPorData"> 
                    <div id="inputGroupPesquisaServicoParaRelatorio" class="input-group mt-1 mb-3">
                      <input type="text" id="inputPesquisaServicoParaRelatorio" class="form-control" placeholder="Digite Nome do Serviço" aria-label="Recipient's username" aria-describedby="">
                      <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="botaoPesquisaServicoParaExibirHorario" onclick="relatorio.exibeServicosPesquisados();$('#modalSelecionaServicoParaRelatorio').modal('show')"><i class="m-1 fas fa-search"></i>PESQUISAR</button>
                      </div>
                    </div>
                    <div class="input-group mt-1 mb-3">
                      <input type="date" id="inputDataInicialRelatorioPorData" class="form-control"  aria-label="Recipient's username" aria-describedby="">
                      <input type="date"  id="inputDataFinalRelatorioPorData" class="form-control"  aria-label="Recipient's username" aria-describedby="">
                      <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="botaoRelatorioPorData" onclick=""><i class="m-1 fas fa-search"></i>PESQUISAR</button>
                      </div>
                    </div>

                    <ul  id="relatorioPorData" class="list-group">
                      <li class="list-group-item list-group-item-action w-100">
                        PROGRESSIVAddd
                        <button class="btn btn-secondary float-right" data_id_servico="1" onclick="this.parentNode.remove()">
                          <i class="fas fa-check"></i>
                        </button>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>
<!-- ************************ FINAL MODAL modalRelatorios **************************************** -->


<!-- ************************ INICIO MODAL modalSelecionaClienteParaRelatorio **************************************** -->
        <div class="modal fade" id="modalSelecionaClienteParaRelatorio" tabindex="-1" aria-labelledby="modalSelecionaClienteParaRelatorioLabel" aria-hidden="true" data-backdrop="static">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalSelecionaClienteParaRelatorioLabel">SELECIONE O CLIENTE</h5>      
                <button type="button" class="close" data-dismiss="" aria-label="Close" onclick="$('#modalSelecionaClienteParaRelatorio').modal('hide')">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div id="listaDeClientesPesquisadosParaRelatorio" class="list-group">
                  <a href="#" class="list-group-item list-group-item-action">Item</a>
                </div>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>
<!-- ************************ FINAL MODAL modalSelecionaClienteParaRelatorio **************************************** -->


<!-- ************************ INICIO MODAL modalselecionaServicoParaRelatorio **************************************** -->
        <div class="modal fade" id="modalSelecionaServicoParaRelatorio" tabindex="-1" aria-labelledby="modalSelecionaServicoParaRelatorioLabel" aria-hidden="true" data-backdrop="static">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalSelecionaServicoParaRelatorioLabel">SELECIONE O SERVIÇO</h5>      
                <button type="button" class="close" data-dismiss="" aria-label="Close" onclick="$('#modalSelecionaServicoParaRelatorio').modal('hide')">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div id="listaDeServicosPesquisadosParaRelatorio" class="list-group">
                  <a href="#" class="list-group-item list-group-item-action">Item</a>
                </div>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>
<!-- ************************ FINAL MODAL modalselecionaServicoParaRelatorio **************************************** -->
        <footer></footer>
    </div>
    
    
</body>
</html>