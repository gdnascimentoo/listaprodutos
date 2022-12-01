let prod = document.getElementById('cadprod');

prod.addEventListener("click", prodmodal);

function prodmodal(){

    let modalp = document.getElementById('modalproduto');

    modalp.style.display = "block";
    modalp.style.position = "fixed";
    modalp.style.top = "0";

}
