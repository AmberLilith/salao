
const ativaModoTipo = (modoCadastroAlteracaoPessoa, tipoCadastroAlteracaoPessoa) =>{
    alert(modoCadastroAlteracaoPessoa)
    if(modoCadastroAlteracaoPessoa == 1){
        document.querySelector("#formPesquisaPessoa").setAttribute("style","display:none");
        document.querySelector("#servicosPrestados").setAttribute("style","display:none")
    }else if(modoCadastroAlteracaoPessoa == 2){
        document.querySelector("#formPesquisaPessoa").setAttribute("style","display:block")
        document.querySelector("#servicosPrestados").setAttribute("style","display:block")
    }

    if(tipoCadastroAlteracaoPessoa == 1){
        document.querySelector("#servicosPrestados").setAttribute("style","display:none")
        document.querySelector("#h4TituloPagina").textContent = "Cadastro de Cliente";
        document.querySelector("#botaoSalvar").textContent = "CADASTRAR"
    }else if(tipoCadastroAlteracaoPessoa == 2){
        document.querySelector("#servicosPrestados").setAttribute("style","display:block")
        document.querySelector("#h4TituloPagina").textContent = "Cadastro de Profissional";
        document.querySelector("#botaoSalvar").textContent = "ALTERAR"
    }
}
