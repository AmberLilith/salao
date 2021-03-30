const exibeHorariosdoDia = (idElementoReceptor) =>{
    const horarios = [
        {nome_cliente:"AMBER LILITH",nome_servico:"TIiiTURA",horario_agendamento:"14:00"},
        {nome_cliente:"juliana torres",nome_servico:"corte feminino",horario_agendamento:"16:00"},
        {nome_cliente:"weverton castro",nome_servico:"sobrancelhas",horario_agendamento:"18:30"},
        {nome_cliente:"suzi souza",nome_servico:"pés e mãos",horario_agendamento:"21:00"}
    ];
    const data = new Date();
    const dia = data.getDate() < 10 ? "0".concat(data.getDate()): data.getDate();
    const mes = (data.getMonth()+1) < 10 ? "0".concat((data.getMonth()+1)): (data.getMonth()+1);
    document.querySelector(`#tituloHorariosDoDia`).innerHTML = `HORARIOS PARA HOJE - ${dia}/${mes}/${data.getFullYear()}`;
    document.querySelector(`#${idElementoReceptor}`).innerHTML = "";
    for (const horario of horarios) {
        const exibeHorario = `<div class="row border border-top-0 m-3">            
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <span class="m-1 align-middle"><span>CLIENTE: ${horario.nome_cliente}<span> - <span>SERVIÇO: ${horario.nome_servico}<span> - <span>HORÁRIO: ${horario.horario_agendamento}<span></span>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <button class="btn btn-secondary float-right mb-2 ml-2 mr-2"><i class="fas fa-trash"></i></button>
        <button class="btn btn-secondary float-right"><i class="fas fa-pencil-alt"></i></button>
        </div>            
      </div>`
      document.querySelector(`#${idElementoReceptor}`).innerHTML += exibeHorario;
    }
    
}

const abrePaginaAgendarAlterarHorario = (modo) =>{
  window.open('../agendamentoHorario/agendamentoHorario.php','_self'); 
  $(window).on("load", function(){
    horario.ativaModoEdicaoHorario(modo);
 });
     
}

