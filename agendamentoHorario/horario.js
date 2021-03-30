class Horario{

    constructor(){        
    }

    geraModalSelecionarOuExcluirHorario = () =>{
      const modalSelecionarOuExcluirHorario = `<div class="modal fade" id="modalSelecionarOuExcluirHorario" tabindex="-1" role="dialog" aria-labelledby="tituloModalSelecaoExclusaoHorario" aria-hidden="true"  data-backdrop="static">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="tituloModalSelecionarOuExcluirHorario">PESQUISAR HORÁRIO PARA ALTERAÇÃO</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#horarioPorCliente">Sel. Horário Por Cliente</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#horarioPorData">Sel. Horário Por Data</a>
                </li>
              </ul>
              
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active container" id="horarioPorCliente">
                  <div class="input-group mt-1 mb-3">
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
                <div class="tab-pane container" id="horarioPorData">
                  <div class="input-group mt-1 mb-3">
                    <input type="date" class="form-control"  aria-label="Recipient's username" aria-describedby="">
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
              </div>

            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>

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
      </div>`
      if(!document.querySelector("#modalSelecionarOuExcluirHorario")){
        document.body.innerHTML += modalSelecionarOuExcluirHorario;
      }
    }

    ativaModoEdicaoHorario = (modoEdicaoHorario) =>{ 
      switch (modoEdicaoHorario) {
        case 1:
          document.querySelector("#tituloPaginaAgendamentoHorario").textContent = "AGENDAR HORÁRIO"
        break;
        
        case 2:
          this.geraModalSelecionarOuExcluirHorario();
          document.querySelector("#tituloPaginaAgendamentoHorario").textContent = "ALTERAR HORÁRIO"   
          document.querySelector("#tituloModalSelecionarOuExcluirHorario").textContent = "SELECIONAR HORÁRIO PARA ALTERAR";
          $('#modalSelecionarOuExcluirHorario').modal('show');
        break;

        case 3:
          this.geraModalSelecionarOuExcluirHorario();
          document.querySelector("#tituloModalSelecionarOuExcluirHorario").textContent = "EXCLUIR HORÁRIO";
          $('#modalSelecionarOuExcluirHorario').modal('show');
        break;
      
        default:
          break;
      } 
    }

    
}

const horario = new Horario();