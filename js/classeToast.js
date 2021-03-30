class Toast{
    criaToast = (nomeToast, criaConteudoBodyToast) =>{
        const toast = `<div id="toast${nomeToast}" aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center w-100">
         <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
            <div class="toast-header">
              <img src="..." class="rounded me-2" alt="...">
              <strong class="me-auto">Bootstrap</strong>
              <small>11 mins ago</small>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div id="bodyToast" class="toast-body">
              Hello, world! This is a toast message.
            </div>
          </div>
        </div>`
        if(!document.querySelector(`#toast${nomeToast}`)){
            document.querySelector(".container").innerHTML += toast;
            $(".toast").toast('show');
            //document.querySelector(``).setAttribute("class","d-flex justify-content-center align-items-center w-100");
        }else{
            $(document).ready(function(){
                $(`#toast${nomeToast}`).toast('show');
              });
        }
    }
}