class ModalCadastroAlteracaoPessoa{
    constructor(tipoCadastroAlteracaoPessoa,modoCadastroAlteracaoPessoa){
        this.ModalCadastroAlteracaoPessoa = `<div class="modal fade" id="modalCadastroAlteracaoPessoa" tabindex="-1" role="dialog" aria-labelledby="modalCadastroAlteracaoPessoaLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl"  role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 id="modalCadastroAlteracaoPessoaTitle" class="modal-title" id="modalCadastroAlteracaoPessoaLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div id="modalCadastroAlteracaoPessoaBody" class="modal-body">
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
                    
                    <div class="w-100 text-center"><button id="botaoSalvarPessoa" class="btn btn-secondary">SALVAR</button></div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
        </div>
    </div>`
    this.tipoCadastroAlteracaoPessoa = tipoCadastroAlteracaoPessoa;
    this.modoCadastroAlteracaoPessoa = modoCadastroAlteracaoPessoa;
    }

    geraModalCadastroAlteracaoPessoa = () => {
        document.body.innerHTML += this.ModalCadastroAlteracaoPessoa;
    }

    ativaModalCadastroAlteracaoPessoa = () => {
        $('#modalCadastroAlteracaoPessoa').modal('show');
    }

    ativaModoTipoCadAltPessoa = () =>{
        document.querySelector("#modalCadastroAlteracaoPessoaTitle").textContent = "";
    
        if(this.modoCadastroAlteracaoPessoa == 1){
            document.querySelector("#formPesquisaPessoa").setAttribute("style","display:none");
            document.querySelector("#modalCadastroAlteracaoPessoaTitle").textContent += "Cadastro de "; 
            document.querySelector("#botaoSalvarPessoa").textContent = "CADASTRAR";
        }else if(this.modoCadastroAlteracaoPessoa == 2){
            document.querySelector("#formPesquisaPessoa").setAttribute("style","display:block");
            document.querySelector("#modalCadastroAlteracaoPessoaTitle").textContent += "Alteração de "; 
            document.querySelector("#botaoSalvarPessoa").textContent = "ALTERAR";
        }
    
        if(this.tipoCadastroAlteracaoPessoa == 1){
            document.querySelector("#servicosPrestados").setAttribute("style","display:none")
            document.querySelector("#modalCadastroAlteracaoPessoaTitle").textContent += "Cliente";        
        }else if(this.tipoCadastroAlteracaoPessoa == 2){
            document.querySelector("#servicosPrestados").setAttribute("style","display:block");
            document.querySelector("#modalCadastroAlteracaoPessoaTitle").textContent += "Profissional";        
        }
    }
}