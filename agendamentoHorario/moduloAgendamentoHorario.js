import {ModalFormulario} from "../js/classeModalFormulario.js"
document.querySelector("#chamaFormulario").addEventListener('click',function(){
    alert("cu")   
    const modal = new ModalFormulario;
    modal.criaModal('cadastro','../cadastroAlteracaoPessoa/cadastroAlteracaoPessoa.php');
})