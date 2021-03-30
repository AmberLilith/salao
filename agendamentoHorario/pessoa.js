class Pessoa {
    criaModalSelecionaPessoa = () =>{
        modalSelecionaPessoa = `<div class="modal fade" id="modalSelecionaPessoa" tabindex="-1" role="dialog" aria-labelledby="modalSelecionaPessoaTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalSelecionaPessoaTitle">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div id="modalSelecionaPessoaBody" class="modal-body">
              <ul id="listaDePessoasPesquisadas" class="list-group">
                <li class="list-group-item list-group-item-action liOpcao">Third item</li>
              </ul>
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>`
      if(!document.querySelector("#modalSelecionaPessoa")){
        document.querySelector(".container").innerHTML += modalSelecionaPessoa;
      }
      const obj = [{nome:"MARIA PARECIDA",id:"1"},{nome:"KELLY CRISTINA",id:"2"},{nome:"JOSÉ TADEU",id:"3"},{nome:"SOFIA SANTOS",id:"4"}]
      this.carregaPessoasPesquisadas(obj);
    }

    carregaPessoasPesquisadas = (arrayComObjetosPessoas) =>{
        for (const pessoa of arrayComObjetosPessoas) {
            const person = document.createElement("li");
            person.setAttribute("class","");
            person.setAttribute("id",pessoa.id);
            person.textContent = pessoa.nome;
            document.querySelector("#listaDePessoasPesquisadas").appendChild(person);
        }
    }
}

const pessoa = new Pessoa();