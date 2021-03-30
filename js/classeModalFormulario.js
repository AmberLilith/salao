// Defina a variável nomeModal sempre um nome que identifique o conteúdo que será mostrado. Sem palavras como modal, tela, etc
// Ex: Se for uma tela de cadastro de cliente, defina "cadastroCliente" e não modalCadastroCliente. Isso para facilitar a leitura
// Defina urlPaginaParaExibir já com a extenção da página: .html, .php, etc.
// A variável "size" aceitas os seguintes valores: "sm", "lg" e "lx"
//modo vai ter valor 1 se for cadastro, 2 se for alteração e outro valor acima de 0 para determinar o como a página será exibida
 class ModalFormulario {
criaModal = (nomeModal,urlPaginaParaExibir,size,modo,tipo) =>{
    const templateModal = `<button type="button" class="btn btn-primary btn-lg" style="display:none" id="botaoAbreModal_${nomeModal}" data-toggle="modal" data-target="#modalFade_${nomeModal}">
        Launch
    </button>
    <div class="modal fade" id="modalFade_${nomeModal}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-${size}" id="modal_${nomeModal}" role="document">
            <div class="modal-content" id="modalContent_${nomeModal}">
                <div style="width: 100%;background-color:lightblue">
                    <div type="button" class="float-right m-1 mr-2"  data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </div>
                </div>
                <div class="modal-body" id="modalBody_${nomeModal}">
                    <iframe id="modalIFrame_${nomeModal}" src="${urlPaginaParaExibir}"  style="width:100%;height:700px" frameborder="0"></iframe>
                </div>                
            </div>
        </div>
    </div>`;
    if(!document.querySelector(`#modalFade_${nomeModal}`)){
        document.body.innerHTML += templateModal;
        document.querySelector(`#botaoAbreModal_${nomeModal}`).click();
    }else{
        document.querySelector(`#botaoAbreModal_${nomeModal}`).click();
    }
    modoCadastroAlteracaoPessoa = modo; 
    }

    
}
