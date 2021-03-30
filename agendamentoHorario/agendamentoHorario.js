
/*modo = 1 => CADASTRAR; 
modo = 2 => ALTERAR
modo = 3 => EXCLUIR
*/
const ativaModoTipoCadAltServico = (modo) =>{
    if(modo == 1){
        document.querySelector("#formPesquisaServico").setAttribute("style","display:none");
        document.querySelector("#modalCadastroAlteracaoServicoTitle").textContent = "CADASTRO DE SERVIÇO(S)";
    }else if (modo == 2){
        document.querySelector("#formPesquisaServico").setAttribute("style","display:block");
        document.querySelector("#modalCadastroAlteracaoServicoTitle").textContent = "ALTERAÇÃO DE SERVIÇO(S)";
    }else if (modo == 3){
        document.querySelector("#formPesquisaServico").setAttribute("style","display:block");
        document.querySelector("#modalCadastroAlteracaoServicoTitle").textContent = "EXCLUIR SERVIÇO(S)";
    }
}

const abreModalCadastroAlteracaoServico = (modo) =>{
    ativaModoTipoCadAltServico(modo);
    $('#modalCadastroAlteracaoServico').modal('show');
}

//Tipo de ser -1 para subtrair ou 1 para somar
const calculaValorServicosAdicionados = (idElementoComServicos, idElementoReceptor) =>{
    const elementoComServicos = document.querySelector(`#${idElementoComServicos}`).children;
    let somaValorServicosAdicionados = 0.0;  
    for (const servico of elementoComServicos) {
        //alert(servico.getAttribute("valor_servico"))
        somaValorServicosAdicionados += parseFloat(servico.getAttribute("valor_servico"));    
    }
    document.querySelector(`#${idElementoReceptor}`).innerHTML = "Valor Total Serviços: R$ " + somaValorServicosAdicionados.toFixed(2);
}

const adicionaServico = (elementoServicoEscolhido) =>{
    const servicoParaAdicionar = document.createElement("li");
    servicoParaAdicionar.setAttribute("class","list-group-item list-group-item-action w-100");
    servicoParaAdicionar.setAttribute("id_servico",elementoServicoEscolhido.getAttribute("id_servico"));
    servicoParaAdicionar.setAttribute("valor_servico",elementoServicoEscolhido.getAttribute("valor_servico"));
    servicoParaAdicionar.textContent = elementoServicoEscolhido.textContent;
    const botaoExcluir = document.createElement("button");
    botaoExcluir.setAttribute("class","btn btn-secondary float-right");
    botaoExcluir.setAttribute("onclick","this.parentNode.remove(),calculaValorServicosAdicionados('servicosAdicionados', 'somaDosServicosAdicionados')");
    const i = document.createElement("i");
    i.setAttribute("class","fas fa-trash");
    botaoExcluir.appendChild(i);
    servicoParaAdicionar.appendChild(botaoExcluir);
    document.querySelector("#servicosAdicionados").appendChild(servicoParaAdicionar);
    calculaValorServicosAdicionados('servicosAdicionados', 'somaDosServicosAdicionados');
}

const exibeServicosDoProfissional = (IdElementoReceptor) =>{
  const objetoComDadosServicos = [
                                    {id_servico:"1",nome_servico:'progressiva',valor_servico:"120.90", tempo_gasto_servico:"120"},
                                    {id_servico:"2",nome_servico:'corte Feminino',valor_servico:"35.97", tempo_gasto_servico:"60"},
                                    {id_servico:"3",nome_servico:'Tintura',valor_servico:"35.00", tempo_gasto_servico:"90"},
                                    {id_servico:"4",nome_servico:'Pé e mão',valor_servico:"40.00", tempo_gasto_servico:"90"},
                                    {id_servico:"5",nome_servico:'buço',valor_servico:"10.00", tempo_gasto_servico:"20"},
                                ] 
    document.querySelector(`#${IdElementoReceptor}`).innerHTML = "";
    let contador = 0;
    for (const servico of objetoComDadosServicos) {
        const liServico = document.createElement('li');
        for (let [key, value] of Object.entries(servico)) {
            contador ++;             
            liServico.setAttribute(key,value);
            liServico.setAttribute("class","list-group-item list-group-item-action w-100");
            liServico.setAttribute("id","servico_" + contador);            
            if(key.includes('nome')){
                liServico.textContent = value.toUpperCase();
            }
        }        
        const botaoAdicionar = document.createElement("button");
        botaoAdicionar.setAttribute("class","btn btn-secondary float-right");
        botaoAdicionar.setAttribute("onclick","adicionaServico(this.parentNode)");
        const i = document.createElement("i");
        i.setAttribute("class","fas fa-plus");
        botaoAdicionar.appendChild(i);
        liServico.appendChild(botaoAdicionar);
        document.querySelector(`#${IdElementoReceptor}`).appendChild(liServico); 
    } 
}



 


