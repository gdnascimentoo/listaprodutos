let user = document.getElementById('caduser');

user.addEventListener("click", usermodal);

function usermodal(){

    let modal = document.getElementById('modalcadastro');

    modal.style.display = "block";
    modal.style.position = "fixed";
    modal.style.top = "0";

}