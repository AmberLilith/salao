class Relatorio{
    //tipo pode ser 1 = de atendimento; 2 = de pagamento a prazo e 3 = serviço por período
    ativaTipoRelatorio = (tipo) =>{
        switch (tipo) {
            case 1:
                document.querySelector("#tabRelatorioPorCliente").setAttribute("class","tab-pane container");
                document.querySelector("#tabRelatorioPorData").setAttribute("class","tab-pane container");
                document.querySelector("#opcaoRelatorioPorCliente").setAttribute("class","nav-item");
                document.querySelector("#opcaoRelatorioPorData").setAttribute("class","nav-item");                
                document.querySelector("#linkOpcaoRelatorioPorData").setAttribute("class","nav-link");   
                document.querySelector("#linkOpcaoRelatorioPorCliente").setAttribute("class","nav-link");
                document.querySelector("#tituloTipoRelatorio").textContent = "RELATÓRIO DE ATENDIMENTO";  
            break;
            case 2:
                document.querySelector("#tabRelatorioPorCliente").setAttribute("class","tab-pane container");
                document.querySelector("#tabRelatorioPorData").setAttribute("class","tab-pane container");
                document.querySelector("#opcaoRelatorioPorCliente").setAttribute("class","nav-item");
                document.querySelector("#opcaoRelatorioPorData").setAttribute("class","nav-item");                             
                document.querySelector("#linkOpcaoRelatorioPorData").setAttribute("class","nav-link");   
                document.querySelector("#linkOpcaoRelatorioPorCliente").setAttribute("class","nav-link");             
                document.querySelector("#tituloTipoRelatorio").textContent = "RELATÓRIO DE PAGAMENTO A PRAZO";
            break;
            case 3:
                document.querySelector("#tabRelatorioPorCliente").setAttribute("class","tab-pane container invisible");
                document.querySelector("#tabRelatorioPorData").setAttribute("class","tab-pane container active");
                document.querySelector("#opcaoRelatorioPorCliente").setAttribute("class","nav-item invisible");
                document.querySelector("#opcaoRelatorioPorData").setAttribute("class","nav-item"); 
                document.querySelector("#linkOpcaoRelatorioPorData").setAttribute("class","nav-link active");   
                document.querySelector("#tituloTipoRelatorio").textContent = "RELATÓRIO DE SERVIÇOS";
            break;
        
            default:
                break;
        }
    }

    exibePesquisaDeAtendimento = () =>{
        const resultados = [ {nome_cliente:"MARIA ORDONE",servicos:["ESCOVA","TITURA"],data_agendamento:"30/02/2021",valor_total:70.0},
                            {nome_cliente:"AMBER LILITH",servicos:["PÉS E MÃOS"],data_agendamento:"10/03/2021",valor_total:40.0},
                            {nome_cliente:"TADEU",servicos:["CORTE MASCULINO","SOBRANCELHAS"],data_agendamento:"15/03/2021",valor_total:45.0}
                        ]
        let stringResultado = "";
            for (const resultado of resultados) {  
                stringResultado = "";
                for (let [chave, valor] of Object.entries(resultado)) {  
                    if(chave == "servicos"){
                        stringResultado += "Servicos: ";
                        for (let indice = 0; indice < resultado[chave].length;indice++) {
                            if(indice < resultado[chave].length -1){
                                stringResultado += resultado[chave][indice] + ", ";
                            }else{
                                stringResultado += resultado[chave][indice] + " - ";
                            }
                        }                
                    }else{
                        if(chave == "valor_total"){
                            stringResultado += 'Valor Total' + ": R$ " + valor;
                        }else{
                            let chaveSeparada = chave.split("_")    
                            chaveSeparada = capitalize(chaveSeparada[0]) + " " + capitalize(chaveSeparada[1])
                            stringResultado += chaveSeparada + ": " + valor + " - ";
                        }
                        
                    }
                document.querySelector('#').innerHTML += `<div>${stringResultado}</div>`
                }  
        }

        console.log(stringResultado + "\n");

    }


    selecionaCliente = (elementoCliente) =>{
        document.querySelector("#inputPesquisaClienteParaRelatorio").setAttribute("value",elementoCliente.textContent);
        document.querySelector("#inputPesquisaClienteParaRelatorio").setAttribute("id_cliente",elementoCliente.getAttribute("id_cliente")); 
        $('#modalSelecionaClienteParaRelatorio').modal('hide');
    }

    exibeClientesPesquisados = () =>{
        const clientesPesquisados = [{nome_cliente:"AMBER LILITH",id_cliente:"1"},
                                    {nome_cliente:"LILITH RAINHA MAGNIFICA",id_cliente:"2"},
                                    {nome_cliente:"BELZEBUTH REI DA RIQUEZA",id_cliente:"3"}
                                    ];
        document.querySelector("#listaDeClientesPesquisadosParaRelatorio").innerHTML = "";
        for (const cliente of clientesPesquisados) {
            document.querySelector("#listaDeClientesPesquisadosParaRelatorio").innerHTML += `<a href="#" id_cliente="${cliente.id_cliente}" class="list-group-item list-group-item-action text-center" onclick="relatorio.selecionaCliente(this)">${cliente.nome_cliente}</a> `
        }
    }

    selecionaServico = (elementoServico) =>{
        document.querySelector("#inputPesquisaServicoParaRelatorio").setAttribute("value",elementoServico.textContent);
        document.querySelector("#inputPesquisaServicoParaRelatorio").setAttribute("id_servico",elementoServico.getAttribute("id_servico")); 
        $('#modalSelecionaServicoParaRelatorio').modal('hide');
    }

    exibeServicosPesquisados = () =>{
            const servicosPesquisados = [{nome_servico:"ESCOVA",id_servico:"1"},
                                        {nome_servico:"DEPILAÇÃO",id_servico:"2"},
                                        {nome_servico:"BARBA",id_servico:"3"}
                                        ];
            document.querySelector("#listaDeServicosPesquisadosParaRelatorio").innerHTML = "";
            for (const servico of servicosPesquisados) {
                document.querySelector("#listaDeServicosPesquisadosParaRelatorio").innerHTML += `<a href="#" id_servico="${servico.id_servico}" class="list-group-item list-group-item-action text-center" onclick="relatorio.selecionaServico(this)">${servico.nome_servico}</a> `
            }      
    }

    validaCamposPesquisaPorCliente = () =>{

    }

    validaCamposPesquisaPorServico = () =>{
        
    }
    
}

const relatorio = new Relatorio();
