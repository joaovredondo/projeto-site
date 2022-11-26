const form = document.querySelector("#form");
const buttonSubmit = document.querySelector("#btn_enviar");
const nameInput = document.querySelector("#name");
const emailInput = document.querySelector("#email");
const passwordInput = document.querySelector("#password");
const cpasswordInput = document.querySelector("#cpassword");
const msgError = document.querySelector(".msg");
const regexNomeNum = '[0-9]';
const regexNome = '[a-zA-Zà-úÀ-Ú\s]';
const regexEmail = '/^[a-z0-9.]+@[a-z0-9]+\.[a-z]+\.([a-z]+)?$/gi'

form.addEventListener("submit", (e) => {
    e.preventDefault();

    validaCampos();
})

function validaCampos() {
    const nameValue = String(nameInput.value.trim());
    const emailValue = String(emailInput.value.trim());
    const passwordValue = String(passwordInput.value.trim());
    const cpasswordValue = cpasswordInput.value.trim();

    if (nameValue == '' || emailValue == '' || passwordValue == '' || cpasswordValue == '') {
        msgError.textContent = 'Preencha todos os campos.';
        msgError.classList.add("error");
        return false;
    } else {
        msgError.textContent = '';
        msgError.classList.remove("error");
    }

    if (nameValue.length < 5) {
        msgError.textContent = 'Preencha o campo nome corretamente.';
        msgError.classList.add("error");
        return false;
    } else if (nameValue.match(regexNomeNum)) {
        msgError.textContent = 'Campo nome não pode conter caracteres numéricos.'
        msgError.classList.add("error");
        return false
    } else if (!nameValue.match(regexNome)) {
        msgError.textContent = 'Existe espaços indevidos, verifique o campo nome.'
        msgError.classList.add("error");
        return false;
    } else {
        msgError.textContent = '';
        msgError.classList.remove("error");
    }

    if (emailValue.length <= 11) {
        msgError.textContent = 'Preencha o campo e-mail corretamente.'
        msgError.classList.add("error");
    } else {
        msgError.textContent = '';
        msgError.classList.remove("error");
    }

    if (passwordValue.length < 12) {
        msgError.textContent = 'Senha: mínimo 12 caracteres.'
        msgError.classList.add("error");
    } else if (!passwordValue.match(regexNomeNum) < 2) {
        msgError.textContent = 'Senha: necessário 2 caracteres numéricos.'
        msgError.classList.add("error");
    } else {
        msgError.textContent = '';
        msgError.classList.remove("error");
    }
}