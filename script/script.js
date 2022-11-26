const form = document.querySelector("#form");
const buttonSubmit = document.querySelector("#btn_enviar");
const nameInput = document.querySelector("#name");
const emailInput = document.querySelector("#email");
const passwordInput = document.querySelector("#password");
const cpasswordInput = document.querySelector("#cpassword");
const msgError = document.querySelector(".msg");
const regexNomeNum = '[0-9]';

form.addEventListener("submit", (e) => {
    e.preventDefault();

    validaCampos();
})

function validaCampos() {
    const nameValue = String(nameInput.value.trim());
    const emailValue = emailInput.value.trim();
    const passwordValue = passwordInput.value.trim();
    const cpasswordValue = cpasswordInput.value.trim();

    if (nameValue == '' || emailValue == '' || passwordValue == '' || cpasswordValue == '') {
        msgError.textContent = 'Preencha todos os campos corretamente.';
        msgError.classList.add("error");
        return false;
    } else {
        msgError.textContent = '';
        msgError.classList.remove("error");
    }


    if (nameValue.length < 5) {
        msgError.textContent = 'Preencha o campo nome corretamente.';
        msgError.classList.add("error");
    } else if (nameValue.match(regexNomeNum)) {
        msgError.textContent = 'Campo nome não pode conter caracteres numéricos.'
        msgError.classList.add("error");
    } else {
        msgError.textContent = '';
        msgError.classList.remove("error");
    }
}